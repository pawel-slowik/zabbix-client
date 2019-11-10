A quick and dirty [Zabbix](https://www.zabbix.com/) API client in 128 lines of
code.

## Purpose

The Zabbix API uses the JSON-RPC 2.0 protocol, so you might be able to just use
a standard JSON-RPC client. However, the Zabbix API has some quirks:

- it requires the `params` request member to be set, even if it is empty, while
  the JSON-RPC spec declares this element as optional;
- it uses a non standard `auth` request member for storing authentication
  tokens.

Therefore, depending on your use cases, you might run into some issues when
using a standards compliant JSON-RPC client to interact with the Zabbix API. In
such a case you might find this simple script usefull.

## Installation

	composer install

## Usage

Take a look at `example.php`.

## Docs

- [JSON-RPC specification](https://www.jsonrpc.org/specification)
- [Zabbix API documentation](https://www.zabbix.com/documentation/4.0/manual/api)
