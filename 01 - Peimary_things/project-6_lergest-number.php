<?php

$number1 = 0;
$number2 = 7;

if ( $number1 > $number2 ) {
    echo "The largest number is $number1";
} elseif ( $number1 < $number2 ) {
    echo "The largest number is $number2";
} elseif ( $number1 = $number2 ) {
    echo "Both is same !";
} else {
    echo "undefined !";
}