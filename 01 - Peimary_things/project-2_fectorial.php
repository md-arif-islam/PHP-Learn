<?php

$n = 23;

for ( $i = $n, $factorial = 1; $i > 0; $i-- ) {
    $factorial = $factorial * $i;
}

printf( "Factorial of %d is %d !", $n, $factorial );
