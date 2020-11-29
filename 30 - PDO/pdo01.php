<?php

$pdo = new PDO( "mysql:host=localhost;port=3306;dbname=sql-test;charset=UTF8;", 'wordpress', 'wordpress' );

if ( $pdo ) {
    $stmp = $pdo->query( "SELECT COUNT(*) as N FROM newstudents WHERE class=1 and session='A'" );
    $total = $stmp->fetchColumn();
    echo $total;
}
