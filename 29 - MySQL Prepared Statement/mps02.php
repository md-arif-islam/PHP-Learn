<?php
// MySQL prepared Statement

define( "DB_HOST", "localhost" );
define( "DB_USER", "wordpress" );
define( "DB_PASSWORD", "wordpress" );
define( "DB_NAME", "sql-test" );

$mysqli = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
$stmt = $mysqli->prepare( "SELECT * FROM newstudents WHERE class=? AND session=?;" );

$class = 1;
$session = 'A';

$stmt->bind_param( 'is', $class, $session );
$stmt->execute();

$result = $stmt->get_result();

$data = $result->fetch_all( MYSQLI_ASSOC );
print_r( $data );

while ( $data = $result->fetch_assoc() ) {
    print_r( $data );
}
