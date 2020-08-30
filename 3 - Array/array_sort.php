<?php

$numbers = array( 1, 34, 54, 3, 21, 5, 7, 8, 45 );

sort( $numbers );
print_r( $numbers );

for ( $i = 0; $i < count( $numbers ); $i++ ) {
    echo "$numbers[$i]\n";
}

echo "\n";

$numbers = array( 1, 34, 54, 3, 21, 5, 7, 8, 45 );

asort( $numbers );
print_r( $numbers );

// for ( $i = 0; $i < count( $numbers ); $i++ ) {
//     echo "$numbers[$i]\n";
// }

// Fix this pblm

foreach ( $numbers as $number ) {
    echo "$number\n";
}

echo "\n";

// sort()
// rsort()

// asort()
// arsort()

// ksort()
// krsort()