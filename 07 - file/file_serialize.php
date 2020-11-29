<?php

$fileName = "C:/xampp/htdocs/phplrn/7 - file/file/f4.txt";

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

// $data = serialize( $students );

// file_put_contents( $fileName, $data );

$dataFromFile = file_get_contents( $fileName );
$allStudents = unserialize( $dataFromFile );

// unset( $allStudents[1] );
print_r( $allStudents );