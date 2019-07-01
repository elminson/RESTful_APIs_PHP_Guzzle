<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;
$client = new Client();

$response = $client->request(
    'GET',
    'http://jsonplaceholder.typicode.com/posts/1'
);

$body = $response->getBody();
$string = $body->getContents();

$json = json_decode($string);

$response = $client->request(
    'GET',
    'http://jsonplaceholder.typicode.com/users/1'.$json->userId
);

print_r(json_decode($response->getBody()));

echo $response->getStatusCode();

echo $response->getReasonPhrase();

if($response->getStatusCode() !== 200){
    echo "Failed";
}
