<?php

$strings = "Hello World, How are you?";
$parts = explode( " ", $strings );
print_r( $parts );
$original = join( " ", $parts );
echo $original;

echo "\n";
echo "\n";

// $parts2 = str_split( $strings );
// print_r( $parts2 );

$strings_new = "Blue is my fevourie color";
$part_new = strtok( $strings_new, " " );

while ( $part_new !== false ) {
    echo "$part_new\n";
    $part_new = strtok( " ," );
}

echo "\n";
echo "\n";

$part5 = preg_split( "/ |,/", $strings_new );
print_r( $part5 );
