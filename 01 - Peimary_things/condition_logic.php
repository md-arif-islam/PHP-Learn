<?php

// jor - bijor check
$n = 124;

if ( $n % 2 === 0 ) {
    echo "$n is an even number";
} else {
    echo "$n is an odd number";
}

echo "\n";

// age check

$age = 18;

if ( $age < 13 ) {
    echo "You are a baby !";
} elseif ( $age >= 13 && $age < 18 ) {
    echo "You are a teen";
} elseif ( $age >= 18 ) {
    echo "You are an adult person !";
}