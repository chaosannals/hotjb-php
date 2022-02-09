<?php

namespace hotjb;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class HotJbClient
{
    private $host;
    private $port;
    private $client;

    public function __construct($host = '127.0.0.1', $port = 30000)
    {
        $this->host = $host;
        $this->port = $port;
        $this->client = new Client([
            'base_uri' => "{$this->host}:{$this->port}",
            'timeout' => 30.0,
        ]);
    }

    public function login()
    {
    }

    public function tokenize($text)
    {
        $url = "/tokenize";
        $request = new Request('POST', $url);
        $this->client->send($request, [
            'timeout' => 30,
        ]);
    }
}
