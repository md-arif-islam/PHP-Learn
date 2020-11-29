<?php

$pdo = new PDO( "mysql:host=localhost;port=3306;dbname=sql-test;charset=UTF8;", 'wordpress', 'wordpress' );
$pdo->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC );

if ( $pdo ) {
    $stmp = $pdo->query( "SELECT * FROM newstudents WHERE class=1 and session='A'" );
    $total = $stmp->fetchAll();
    print_r( $total );
}
