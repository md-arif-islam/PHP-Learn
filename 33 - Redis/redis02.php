<?php

require_once "C:/xampp/htdocs/phplrn/33 - Redis/vendor/autoload.php";
$client = new Predis\Client();

// $client->set( "product", 10 );
// echo $client->get( "product" );

// $client->incr( "product" );
// $client->incrby( "product", 5 );

$client->decr( "product" );
// $client->decrby( "product", 5 );
echo $client->get( "product" );
