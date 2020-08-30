<?php

$a = 1;
$b = 3;
$c = -4;

$d = ( $b * $b ) - 4 * $a * $c; //d= b^2-4ac

echo "\n";

if ( $d < 0 ) {
    echo "The equetions has no right solutions";
} elseif ( $d = 0 ) {
    echo "x = {-$b/(2*$a)}";
} else {
    echo "x1 = ";
    echo ( -$b + sqrt(  ( $b * $b ) - 4 * $a * $c ) ) / 2 * 1;
    echo "\n";
    echo "x2 = ";
    echo ( -$b - sqrt(  ( $b * $b ) - 4 * $a * $c ) ) / 2 * 1;
    echo "\n";
}