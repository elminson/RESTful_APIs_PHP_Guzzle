<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\ClientException;

$body = [
    'id' => 10,
    'name' => 'sample'
];

$mock = new MockHandler([
    new Response(200, ['Header' => 'yes'], json_encode($body))
]);

$handler = HandlerStack::create($mock);

$client = new Client(['handler' => $handler]);
$response = $client->request('GET', '/');
echo $response->getStatusCode() . "\r\n";
var_dump($response->getHeaders());
echo $response->getBody();

