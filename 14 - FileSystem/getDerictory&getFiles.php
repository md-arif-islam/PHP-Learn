<?php

class Dir {
    private $directories = [];
    private $files = [];
    private $path;
    private $directoryObject = [];

    function __construct( $path ) {
        if ( is_readable( $path ) ) {
            $this->path = $path;
            $eantries = scandir( $path );
            foreach ( $eantries as $eantry ) {
                if ( "." != $eantry && ".." != $eantry ) {
                    if ( is_dir( $path . "/" . $eantry ) ) {
                        array_push( $this->directories, $eantry );
                    } else {
                        array_push( $this->files, $eantry );
                    }
                }
            }
        }
    }

    function getDirectory( $index ) {
        if ( isset( $this->directories[$index] ) ) {
            if ( !isset( $this->directoryObject[$index] ) ) {
                $this->directoryObject[$index] = new dir( $this->path . "/" . $this->directories[$index] );
            }
            return $this->directoryObject[$index];
        } else {
            throw new Exception( "Directory doesn't exit" );
        }
        return false;
    }

    function getDictories() {
        return $this->directories;
    }
    function getFiles() {
        return $this->files;
    }
};

$directories = new Dir( getcwd() );
print_r( $directories->getDictories() );
// print_r( $directories->getFiles() );

$oop = $directories->getDirectory( 2 );
print_r( $oop->getDictories() );
// print_r( $oop->getFiles() );

$autoload = $oop->getDirectory( 1 );
print_r( $autoload->getDictories() );