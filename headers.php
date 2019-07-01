<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;
$client = new Client();

$response = $client->request(
    'GET',
    'http://jsonplaceholder.typicode.com/posts/1'
);

var_dump($response);
$header = $response->getHeaders();
foreach ($header as $name => $value) {
    $value = implode(', ', $value);
    echo "{$name} => {$value} \n";
}

$type = $response->getHeader('Content-Type');

if(in_array('application/json; charset=utf-8', $type)){
    $body = json_decode($response->getBody());
} else {
    $body = $response->getBody();
}

print_r($body);
