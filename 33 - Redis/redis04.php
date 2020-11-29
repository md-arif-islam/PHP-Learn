<?php

require_once "C:/xampp/htdocs/phplrn/33 - Redis/vendor/autoload.php";
$client = new Predis\Client();

$client->rpush( 'chatroom', 'Jery : Hi' );
$lenth = $client->llen( 'chatroom' );

print_r( $client->lrange( 'chatroom', 0, $lenth ) );