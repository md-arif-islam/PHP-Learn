<?php

define( "DB_HOST", "localhost" );
define( "DB_USER", "wordpress" );
define( "DB_PASSWORD", "wordpress" );
define( "DB_NAME", "sql-test" );

$mysqli = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
$stmt = $mysqli->prepare( "INSERT INTO newstudents(name,sex,class,session,roll) VALUES(?,?,?,?,?);" );

$name = "";
$sex = "";
$class = "";
$roll = "";
$session = "";

$stmt->bind_param( "ssisi", $name, $sex, $class, $session, $roll );

$csv_data = array_map( 'str_getcsv', file( 'C:\xampp\htdocs\phplrn\27 - MYSQL Extra\babynames-clean.csv' ) );
shuffle( $csv_data );
// echo $csv_data;

$_students = [];
$sessions = ['A', 'B', 'C', 'D'];

for ( $i = 0; $i < 1100; $i++ ) {
    $name = $csv_data[$i][0];
    $sex = $csv_data[$i][1] == 'boy' ? "M" : "F";
    $class = rand( 1, 10 );
    $session = $sessions[array_rand( $sessions )];
    $_students["{$class}{$session}"][] = 1;
    $roll = count( $_students["{$class}{$session}"] );
    $stmt->execute();
}