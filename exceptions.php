<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

try {
    $response = $client->request(
        'GET',
        //'http://jsonplaceholder.typicode.com/posts/bar'
        'https://httpbin.org/status/503'
    );

    //var_dump($response);
    echo $response->getBody();
} catch (\GuzzleHttp\Exception\ClientException $exception) {
    echo $exception->getCode() . "\r\n";
    echo $exception->getMessage() . "\r\n";
} catch (\GuzzleHttp\Exception\ServerException $exception) {
    echo $exception->getCode() . "\r\n";
    echo $exception->getMessage() . "\r\n";
}
