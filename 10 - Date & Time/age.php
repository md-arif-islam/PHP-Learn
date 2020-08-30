<?php

date_default_timezone_set( "Asia/Dhaka" );

$birthday = new DateTime( "20.09.2002" );
$today = new DateTime( date( "m.d.y" ) );

$diff = $today->diff( $birthday );

printf( "Your age is %d years, %d month, %d days", $diff->y, $diff->m, $diff->d );