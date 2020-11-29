<?php
// MySQL prepared Statement

define( "DB_HOST", "localhost" );
define( "DB_USER", "wordpress" );
define( "DB_PASSWORD", "wordpress" );
define( "DB_NAME", "sql-test" );

$mysqli = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
$stmt = $mysqli->prepare( "SELECT * FROM newstudents WHERE class=? AND session IN (?,?)" );

$class = 1;
$session1 = 'A';
$session2 = 'B';
$stmt->bind_param( 'iss', $class, $session1, $session2 );
$stmt->execute();

$result = $stmt->get_result()->num_rows;
print_r( $result );
