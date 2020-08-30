<?php

$number1 = 12;
$number2 = 5;

$plus = $number1 + $number2;
$minus = $number1 - $number2;
$ento = $number1 * $number2;
$devition = $number1 / $number2;
$multi = $number1 % $number2;

echo $plus;
echo "\n";

echo $minus;
echo "\n";

echo $ento;
echo "\n";

echo $devition;
echo "\n";

echo $multi;
echo "\n";

$n = 7;
$m = $n++;

echo "$m\n$n";

/* documentation
$m = $n
$n = $m + 1
 */

$n = 7;
$m = ++$n;

echo "$m\n$n";

/* documentation
$n = $m +1
$m = $n
 */

printf( "The bianary equivalent of %d is %b \n", 12, 12 );
printf( "The hexa-desimal equivalent of %d is %x \n", 12, 12 );
printf( "The octal equivalent of %d is %o \n", 12, 12 );

$fname = "Afrina";
$mdlname = "Akter";
$lname = "Akhi";

printf( 'Her name is %2$s %1$s %3$s', $fname, $mdlname, $lname );

printf( 'The octal equivalent of %1$d is %1$o', 12 );

// Dosomiker pore dui ghor

$n = 45.7843;
printf( "%.2f", $n );

$m = 124; // I like to convert 00124
$p = 1244; // I like to convert 01244

printf( "%05d \n", $m );
printf( "%05d \n", $p );

$m = 124.12222; // I like to convert 00124.12
$p = 1244.6666; // I like to convert 01244.12

printf( "%07.2f \n", $m );
printf( "%07.2f \n", $p );
