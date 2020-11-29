<?php

$fileName = "C:/xampp/htdocs/phplrn/7 - file/file/f2.txt";

$fp = fopen( $fileName, "a" );

// r = read
// w = write
// a = append

fwrite( $fp, "Marcury" );
fwrite( $fp, "Venus" );
fwrite( $fp, "Earth" );
fwrite( $fp, "Earth" );
fclose( $fp );