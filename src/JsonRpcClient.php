<?php

declare(strict_types=1);

namespace ZabbixApi;

use GuzzleHttp\ClientInterface as HttpClientInterface;

class JsonRpcClient
{
    protected $httpClient;

    protected $url;

    protected $codec;

    protected $requestId;

    protected $token;

    public function __construct(
        HttpClientInterface $httpClient,
        string $url
    ) {
        $this->httpClient = $httpClient;
        $this->url = $url;
        $this->codec = new JsonRpcRequestCodec();
        $this->token = null;
        $this->requestId = 0;
    }

    public function request(string $methodName, ?array $parameters = null)
    {
        $request = $this->buildRequest($methodName, $parameters, ++$this->requestId);
        return $this->send($request);
    }

    public function login(string $user, string $password): void
    {
        $response = $this->request(
            "user.login",
            [
                "user" => $user,
                "password" => $password,
            ]
        );
        $this->token = $response;
    }

    public function logout(): void
    {
        $this->request("user.logout");
        $this->token = null;
    }

    protected function buildRequest(string $methodName, ?array $parameters, int $requestId): array
    {
        $request = [
            "jsonrpc" => "2.0",
            "method" => $methodName,
            "id" => $requestId,
        ];
        // the JSON-RPC spec says "params" is optional, Zabbix says it is required (even if empty)
        $request["params"] = is_null($parameters) ? [] : $parameters;
        if (!is_null($this->token)) {
            $request["auth"] = $this->token;
        }
        return $request;
    }

    protected function send(array $request)
    {
        $response = $this->httpClient->post(
            $this->url,
            [
                "headers" => [
                    "Content-Type" => "application/json",
                ],
                "body" => $this->codec->encode($request),
            ]
        );
        $responseBody = $response->getBody();
        $responseBody->rewind();
        $decoded = $this->codec->decode($responseBody->getContents());
        if (array_key_exists("error", $decoded)) {
            throw new \RuntimeException($this->jsonRpcErrorMessage($decoded["error"]));
        }
        return $decoded["result"];
    }

    protected function jsonRpcErrorMessage(array $error): string
    {
        $message = "JSON-RPC error";
        foreach (["code", "message", "data"] as $key) {
            if (array_key_exists($key, $error)) {
                $value = is_scalar($error[$key]) ? $error[$key] : var_export($error[$key], true);
                $message .= ", {$key}: {$value}";
            }
        }
        return $message;
    }
}
