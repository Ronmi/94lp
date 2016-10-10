<?php

require(__DIR__ . '/../vendor/autoload.php');

$mux = new Fruit\RouteKit\Mux;
(new Fruit\Injector)->setup($mux);

$mux->get('/api/test', [new P94LP\TestHandler, 'qq']);
$mux->post('/api/test', [new P94LP\TestHandler, 'qq']);

file_put_contents(__DIR__ . '/compiled.php', $mux->compile('P94LPRouter'));
