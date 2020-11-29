<?php

$pdo = new PDO( "mysql:host=localhost;port=3306;dbname=sql-test;charset=UTF8;", 'wordpress', 'wordpress' );
$pdo->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC );

$stmp = $pdo->prepare( "SELECT * FROM newstudents WHERE class=? and session=?" );
$stmp->execute( [1, 'A'] );
print_r( $stmp->fetchAll() );

$stmp->execute( [2, 'B'] );
print_r( $stmp->fetchAll() );