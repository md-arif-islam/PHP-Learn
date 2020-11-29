<?php

$fileName = "C:/xampp/htdocs/phplrn/7 - file/file/f1.txt";

if ( is_readable( $fileName ) ) {

    $fp = fopen( $fileName, "r" );
// $line = fgets( $fp );

    while ( $line = fgets( $fp ) ) {
        echo $line;
    }

// rewind( $fp );
    fseek( $fp, 4 );

    echo "\n";

    while ( $line = fgets( $fp ) ) {
        echo $line;
    }

    fclose( $fp );

    $data = file( $fileName );
    print_r( $data );
    echo $data[1];

// ///////////////////////////////////

    $data = file_get_contents( $fileName );
    echo $data;
}
