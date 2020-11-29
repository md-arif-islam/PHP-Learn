<?php

$veryOld = 0;
$old = 1;
$new = 1;

for ( $i = 0; $i < 20; $i++ ) {
    echo "$veryOld ";
    $old = $new;
    $new = $old + $veryOld;
    $veryOld = $old;
}

echo "\n";
echo "\n";
/*
Initial
v = 0
o = 1
n = 1

1st loop
v = 1
o = 1
n = 1

2nd loop
v = 1
o = 1
n = 2

3rd loop
v = 2
o = 2
n = 3

4th loop
v = 3
o = 3
n = 5

5th loop
v = 5
o = 5
n = 8

 */

function febonancy( $old, $new, $end ) {

    static $start;
    $start = $start ?? 0;

    if ( $start > $end ) {
        return;
    }

    $start++;

    echo "$old ";

    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;

    febonancy( $old, $new, $end );

}

febonancy( 0, 1, 10 );