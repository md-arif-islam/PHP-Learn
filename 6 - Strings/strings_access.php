<?php

$strings = "Hello World";

echo $strings[0];
echo $strings[1];
echo "\n";

$strLenth = strlen( $strings );

echo substr( $strings, $strLenth - 3 );
echo "\n";
echo substr( $strings, -3 );

//
