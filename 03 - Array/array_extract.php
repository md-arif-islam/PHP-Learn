<?php

// array_slice

$fruits = array( 'Banana', 'Orange', 'Apple', 'Mango', 'Plum' );

// $someFruits = array_slice( $fruits, 1, 3 );
// $someFruits = array_slice( $fruits, 1, -2 );
$someFruits = array_slice( $fruits, 1, -2, true );

print_r( $someFruits );
print_r( $fruits );

$random = array(
    'a' => 23,
    'b' => 54,
    'c' => 63,
    'd' => 21,
    12 => 13,
    'e' => 25,
);

$someRandom = array_slice( $random, 3, null, true );

print_r( $someRandom );

// array_splice

$fruits2 = array( 'Banana', 'Orange', 'Apple', 'Mango', 'Plum' );

$someFruits2 = array_splice( $fruits2, 2, 4 );
print_r( $someFruits2 );
print_r( $fruits2 );
