<?php

$strings = "Blue is my fevourite color";
$strings = str_ireplace( "my", "MY", $strings );
echo $strings;

// Multiple replace
echo "\n";
echo "\n";

$strings2 = "Blue is my fevourite color";
$strings2 = str_ireplace( array( "blue", "my" ), array( "Red", "our" ), $strings2 );
echo $strings2;
