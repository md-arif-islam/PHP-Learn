<?php

$n = 12;

if ( $n % 2 == 0 ) {
    echo "Even Number";
} else {
    echo "Odd Number";
}

echo "\n";

$result = ( $n % 2 == 0 ) ? "Even Number" : "Odd Number";
echo $result;