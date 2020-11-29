
<?php
// MySQL prepared Statement

define( "DB_HOST", "localhost" );
define( "DB_USER", "wordpress" );
define( "DB_PASSWORD", "wordpress" );
define( "DB_NAME", "sql-test" );

$mysqli = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
$stmt = $mysqli->prepare( "SELECT * FROM newstudents WHERE name LIKE ?" );

$name = '%br%';
$stmt->bind_param( 's', $name );
$stmt->execute();

$result = $stmt->get_result()->fetch_all( MYSQLI_ASSOC );
print_r( $result );
