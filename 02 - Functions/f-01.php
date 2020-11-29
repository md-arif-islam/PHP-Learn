<?php

include_once "functions.php";

$x = 5;

echo "Factorial of $x is " . factorial( $x );

echo "\n";
echo "\n";

$f = "Coffee";
$n = "2 Cups";

serve( $f, $n );

echo "\n";
echo "\n";

// function sum( int $x, int $y, int $z ): int {
//     return $x + $y + $z;
// }

// echo sum( 1, 2, 3 );

echo "\n";
echo "\n";

// Unlimited argument assept

function sum( int...$numbers ): int {
    $result = 0;

    for ( $i = 0; $i < count( $numbers ); $i++ ) {
        $result = $result + $numbers[$i];
    }
    return $result;
}

echo sum( 1, 2, 3 );

echo "\n";
echo "\n";

// recursive function

function printNumber( $counter, $end, $stepping = 1 ) {
    if ( $counter > $end ) {
        return;
    }

    echo "$counter \n";
    $counter += $stepping;
    printNumber( $counter, $end, $stepping );
}

printNumber( 20, 30, 4 );
