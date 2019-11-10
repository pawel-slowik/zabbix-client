<?php

declare(strict_types=1);

namespace ZabbixApi;

class JsonRpcRequestCodec
{
    public function encode(array $request): string
    {
        $body = json_encode($request, JSON_PRETTY_PRINT);
        if (!is_string($body)) {
            throw new \RuntimeException("can't encode request: " . var_export($request, true));
        }
        return $body;
    }

    public function decode(string $body): array
    {
        $decoded = json_decode($body, true);
        if (!is_array($decoded)) {
            throw new \RuntimeException("can't decode request: {$body}");
        }
        return $decoded;
    }
}
