<?php

require "vendor/autoload.php";

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Exception\RequestException;

$client = new Client();

$response = $client->request(
    'POST',
    'https://jsonplaceholder.typicode.com/posts',
    [
        'json' => [
            'title' => 'Elminson',
            'body' => 'Text Body',
            'userId' => 2
            ]
    ]);


echo $response->getBody();
echo $response->getStatusCode();

