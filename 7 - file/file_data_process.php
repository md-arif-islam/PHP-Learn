<?php

$fileName = "C:/xampp/htdocs/phplrn/7 - file/file/f3.txt";

$students = array(
    array(
        "fname" => "Arif",
        "lname" => "Islam",
        "class" => 7,
        "roll" => 2,
    ),
    array(
        "fname" => "Mahfuj",
        "lname" => "Alam",
        "class" => 5,
        "roll" => 3,
    ),
    array(
        "fname" => "Hasan",
        "lname" => "Ali",
        "class" => 6,
        "roll" => 8,
    ),

);

$fp = fopen( $fileName, "w" );

foreach ( $students as $student ) {
    $data = sprintf( "%s,%s,%s,%s\n", $student["fname"], $student["lname"], $student["class"], $student["roll"] );
    fwrite( $fp, $data );
}

fclose( $fp );

$fp = fopen( $fileName, "r" );

while ( $data = fgets( $fp ) ) {
    $student = explode( ",", $data );
    printf( "Name = %s %s\nClass = %s\nRoll = %s\n\n", $student[0], $student[1], $student[2], $student[3] );
}
fclose( $fp );