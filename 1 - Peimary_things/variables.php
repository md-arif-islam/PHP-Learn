<?php
/*
Strings
Bolean
Integer
Null
Doble / float
Array
Object
Resource
 */

$strings = "Arif Islam";
var_dump( $strings );

$fname = "Afrina";
$lname = "Akter";

echo "Her first name is " . $fname . " and last name is " . $lname;
echo "\n";
echo "Her first name is {$fname} and last name is {$lname}";
echo "\n";
echo "Her first name is $fname and last name is $lname";
echo "\n";
printf( "Her first name is %s and last name is %s", $fname, $lname );