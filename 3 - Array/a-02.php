<?php

$food = [
    "vagetables" => "branjal , brocolli,carret",
    "fruits" => "orange, Banana, Apple",
    "drinks" => "Water, Milk",
];

// echo count( $food );

// echo $food["vagetables"];

foreach ( $food as $key => $value ) {
    echo "$key = $value \n";
}
