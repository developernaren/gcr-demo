<?php

require __DIR__ . '/../vendor/autoload.php';

$loop = \React\EventLoop\Factory::create();

$server = new \React\Http\Server(function (){

	return new \React\Http\Response(200, ['Content-Type' => 'application/json'], json_encode(['name' => 'Naren']));
});

$socket = new \React\Socket\Server('0.0.0.0:8080', $loop);

$server->listen($socket);

echo "Server running at 127.0.0.1:8080";

$loop->run();
