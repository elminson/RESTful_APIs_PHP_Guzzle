<?php
require 'vendor/autoload.php';
use GuzzleHttp\Psr7;

$stream =  Psr7\stream_for('This is data');
echo $stream."\r\n";
echo $stream->getSize()."\r\n";
echo $stream->isReadable()."\r\n";
echo $stream->isWritable()."\r\n";
echo $stream->isSeekable()."\r\n";

$stream->write("task");
$stream->rewind();
//echo $stream."\r\n";
echo $stream->read(5)."\r\n";
echo $stream->getContents()."\r\n";
echo $stream->eof()."\r\n";

//$client = new Client();
//
//$response = $client->request(
//    'GET',
//    'http://jsonplaceholder.typicode.com/posts/1'
//);
//
//var_dump($response);
//echo $response->getBody();
