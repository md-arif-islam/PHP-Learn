<?php

define( "DB_HOST", "localhost" );
define( "DB_USER", "wordpress" );
define( "DB_PASSWORD", "wordpress" );
define( "DB_NAME", "sql-test" );
$connection = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );

$quiries = [];
for ( $class = 1; $class <= 10; $class++ ) {
    foreach ( ['A', 'B', 'C', 'D'] as $session ) {
        $quiries[] = "SET @roll=0; UPDATE sqltest SET roll=@roll:=@roll+1 WHERE class={$class} AND session='{$session}';";
    }
}

// print_r( $quiries );
$result = mysqli_multi_query( $connection, join( '', $quiries ) );

if ( mysqli_error( $connection ) ) {
    echo mysqli_error( $connection );
}