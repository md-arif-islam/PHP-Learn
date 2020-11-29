<?php

function isEven( $n ) {
    if ( $n % 2 == 0 ) {
        return true;
    }
    return false;
}

function factorial( $n ) { //int is only php7
    if ( gettype( $n ) != "integer" ) {
        return "Invailed";
    }

    $result = 1;
    for ( $i = $n; $i > 1; $i-- ) {
        $result = $result * $i;
    }
    return $result;
}

function serve( $food = "Coffee", $items = "1 Cups" ) {
    echo "$items of $food are served !";
}