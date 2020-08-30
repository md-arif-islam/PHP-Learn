<?php

interface BaseStorage {
    function setFileName( $fn );
    function writeData( $data );
}

class Storage implements BaseStorage {
    private $fn;
    function __construct( $fn ) {
        $this->setFileName( $fn );
    }

    function setFileName( $fn ) {
        $this->fn = $fn;
    }

    function writeData( $data ) {
        file_put_contents( $this->fn, $data );
    }

    function appendData( $data ) {
        file_put_contents( $this->fn, $data, FILE_APPEND );
    }
}

class DataManager {
    function saveData( $filename, $data ) {
        $storage = new Storage( $filename );
        $storage->writeData( $data );
    }
}

$dm = new DataManager();
$dm->saveData( "./tmp/abcd.txt", "My data" );