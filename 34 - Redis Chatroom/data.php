<?php

require_once "C:/xampp/htdocs/phplrn/34 - Redis Chatroom/vendor/autoload.php";
$client = new Predis\Client();

// $client->del( 'chatroom-001' );

if ( isset( $_POST['message'] ) ) {
    $sender = $_POST['sender'];
    $message = $_POST['message'];

    $client->rpush( 'chatroom-001', $sender . ": " . $message );
    $message = $client->lrange( 'chatroom-001', 0, $client->llen( 'chatroom-001' ) );
    echo "<p>";
    foreach ( $message as $m ) {
        echo "<p style='color:red; padding: 5px;
        border-radius: 5px;
        background-color: rgb(212, 178, 185);margin:2px;float:right;'>$m<p/>" . "<br/>";
    }
    echo "<p/>";
}

if ( isset( $_POST['refresh'] ) ) {
    $message = $client->lrange( 'chatroom-001', 0, $client->llen( 'chatroom-001' ) );
    echo "<p style='color:red; padding: 5px;
    border-radius: 5px;
    background-color: rgb(212, 178, 185);margin:2px;float:left;'>";
    foreach ( $message as $m ) {
        echo $m . "<br/>";
    }
    echo "<p/>";
}
