<?php

// string to array

// $fruits = explode( ", ", "Apple, Banana, Orange, Mango" );
$fruits = preg_split( "/(, |,)/", "Apple, Banana, Orange,Mango" );

var_dump( $fruits );
echo $fruits[0];

echo "\n";
echo "\n";

// array to string

$drinks = array(
    "Water",
    "Milk",
    "Pani",
);

var_dump( $drinks );

$drinksArrayToStrings = join( ", ", $drinks );

echo $drinksArrayToStrings;