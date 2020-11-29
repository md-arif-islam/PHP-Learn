<?php

$strings = "Hello World";

$lenth = strlen( $strings ) - 1;

for ( $i = $lenth; $i >= 0; $i-- ) {
    echo $strings[$i];
}

echo "\n";

echo strrev( $strings );