<?php

// Unix epoch
// Unix timestamp

// echo time();
// echo "\n";
// echo date("d/m/y");

// echo microtime(true);
// echo microtime(false);

// $mt = microtime(true);

// printf("%10.18f", $mt);

$startTime = microtime( true );
factorial( 10000 );
sleep( 2 );
$endTime = microtime( true );
$executionTime = $endTime - $startTime;
printf( "%10.18f", $executionTime );

function factorial( $n ) {
    $result = 1;
    for ( $i = 1; $i <= $n; $i++ ) {
        $result *= $i;
    }
    return $result;
}
