<?php

$fruits = array( 'Banana', 'Orange', 'Apple', 'Mango', 'Plum' );

$number = array( 1, 11, 2, 56, 23, 4, 54, 6 );

if ( in_array/*key_exists*/( 56, $number ) ) {
    echo "56 is find";
} else {
    echo "not";
}

echo "\n";

$offect = array_search( 56, $number, true );
echo "$offect";