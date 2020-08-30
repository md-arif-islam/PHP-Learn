<?php

$fileName = "C:/xampp/htdocs/phplrn/7 - file/file/f5.txt";

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

// $encodedData = json_encode( $students );
// file_put_contents( $fileName, $encodedData, LOCK_EX );

$allStudents = file_get_contents($fileName);
$decodeData = json_decode($allStudents,true);
print_r($decodeData);