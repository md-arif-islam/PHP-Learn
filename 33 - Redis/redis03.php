<?php

require_once "C:/xampp/htdocs/phplrn/33 - Redis/vendor/autoload.php";
$client = new Predis\Client();

$car = [
    'name' => 'Sunny',
    'build' => '2004',
    'company' => 'Nissan',
];

$client->hmset( 'car', $car );

print_r( $client->hgetall( 'car' ) );