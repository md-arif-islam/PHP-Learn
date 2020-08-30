<?php

$number1 = array( 4, 44, 23, 55, 65, 76, 2 );
$number2 = array( 5, 64, 23, 55, 35, 86, 2 );

$fruits1 = array( 'a' => 'banana', 'b' => 'apple', 'c' => 'orange' );
$fruits2 = array( 'd' => 'painapple', 'e' => 'apple', 'f' => 'lemon' );

// $common = array_intersect( $number1, $number2 );
$common = array_intersect( $fruits1, $fruits2 );
print_r( $common );

$diff = array_diff( $fruits1, $fruits2 );
print_r( $diff );