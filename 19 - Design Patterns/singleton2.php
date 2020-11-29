<?php

class FileWriter {
    private $filename;
    static $instance = [];

    function __construct( $filename ) {
        $this->filename = $filename;
    }

    static function getInstance( $filename ) {
        if ( !isset( self::$instance[$filename] ) ) {
            self::$instance[$filename] = new FileWriter( $filename );
        }
        return self::$instance[$filename];
    }

    function writeData( $data ) {
        echo "Writing to $this->filename\n";
    }
}

$fw1 = FileWriter::getInstance( "/tmp/abcd.txt" );
$fw2 = FileWriter::getInstance( "/tmp/abc.txt" );
$fw3 = FileWriter::getInstance( "/tmp/ab.txt" );

$fw1->writeData( "Some Data" );
$fw2->writeData( "Some Data" );
$fw3->writeData( "Some Data" );