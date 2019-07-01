<?php

require "vendor/autoload.php";

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Exception\RequestException;

$client = new Client();

$response = $client->request(
    'GET',
    'https://jsonplaceholder.typicode.com/posts?userId=1',
    [
        'query' => ['userId' => 2]
    ]);

var_dump($response);
echo $response->getBody();
