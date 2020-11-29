<?php

$color = "blue";

switch ( $color ) {
case 'red':
    echo "This is red";
    break;
case 'green':
    echo "This is green";
    break;
case 'blue':
    echo "This is blue";
    break;

default:
    echo "Undefined";
    break;
}

echo "\n";

$n = 12;
$r = $n % 2;

switch ( true ) {
case ( $r == 0 && $n > 0 ):
    echo "$n is a possitive Even Number";
    break;
case ( $r == 1 && $n > 0 ):
    echo "$n is a possitive Odd Number";
    break;
case ( $r == 0 && $n < 0 ):
    echo "$n is a negative Even Number";
    break;
case ( $r == -1 && $n < 0 ):
    echo "$n is a negative Odd Number";
    break;
default:
    echo "Undefined";
}