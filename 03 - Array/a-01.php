<?php

$n = 1;

$students = array(
    "Rahim",
    "Karim",
    123,
    "Jobbwer",

);

$p = count( $students );

for ( $i = 0; $i < $p; $i++ ) {
    echo $students[$i] . "\n";
}

echo "\n";

for ( $i = $p - 1; $i >= 0; $i-- ) {
    echo $students[$i] . "\n";
}

// array_shift(); > remove first of array
// array_pop(); > remove last element of array
// array_push(); > add data at last
// array_unshift(); > add data at first