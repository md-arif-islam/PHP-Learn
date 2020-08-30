<?php

// Leap Year Check ------ MD Arif Islam

/*
Conditions --
1 - divisible by 4,
2 - divisible by 100,
3 - divisible by 400
 */

$input_year = 2012;

if ( $input_year % 4 == 0 && $input_year % 100 == 0 && $input_year % 400 == 0 ) {
    echo "$input_year is a leap year !";
} elseif ( $input_year % 4 == 0 && $input_year % 100 == 0 ) {
    echo "$input_year is not a leap year !";
} elseif ( $input_year % 4 == 0 ) {
    echo "$input_year is a leap year !";
} else {
    echo "$input_year is not a leap year !";
}

echo "\n";

// Short System

if ( $input_year % 4 == 0 && ( $input_year % 100 != 0 || $input_year % 400 == 0 ) ) {
    echo "$input_year is a leap year !";
} else {
    echo "$input_year is not a leap year !";
}

/*  Inner -

true && (false || true)
true && true
true

true && (true || true)
true && false
false

true && (true || false)
true && true
true

true && (false || false)
true && false
false

 */