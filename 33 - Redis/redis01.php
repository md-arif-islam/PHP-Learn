<?php

require_once "C:/xampp/htdocs/phplrn/33 - Redis/vendor/autoload.php";
$client = new Predis\Client();

// $client->set( "key", 10, "EX", 10 );
// $client->expire( "key", 30 );
// $client->del( "key" );
echo $client->get( "key" );
