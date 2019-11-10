<?php

declare(strict_types=1);

require_once __DIR__ . "/vendor/autoload.php";

$url = "http://127.0.0.1/zabbix/api_jsonrpc.php";
$user = "Admin";
$password = "zabbix";

$client = new ZabbixApi\JsonRpcClient(new GuzzleHttp\Client(), $url);

$response = $client->request("apiinfo.version");
var_dump($response);

$client->login($user, $password);

$response = $client->request("host.get", ["selectGroups" => "extend"]);
var_dump($response);

$client->logout();
