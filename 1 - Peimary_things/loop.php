<?php

for ( $i = 0; $i <= 10; $i++ ) {
    echo "$i \n";
}

// 20 er modhe bijor sonkha

for ( $i = 1; $i <= 20; $i += 2 ) {
    echo "$i \n";
}

for ( $i = 0; $i <= 10; $i++ ) {
    echo "\n";
    for ( $j = 0; $j < $i; $j++ ) {
        echo " *";
    }
}

echo "\n";
echo "\n";

// 10 theke 1

for ( $i = 10; $i > 0; $i-- ) {
    echo "$i \n";
}

echo "\n";
echo "\n";

// Multiple loop

for ( $i = 10, $j = 1; $i > 0; $i--, $j++ ) {
    echo "$i : $j \n";
}

echo "\n";
echo "\n";

// Multiple loop

for ( $i = 0, $j = 0; $i < 100; $i += 7, $j += 11 ) {
    echo "$i\n";
    echo $j < 100 ? "$j\n" : "";
}

echo "\n";
echo "\n";

// loop break

for ( $i = 0; $i <= 10; $i++ ) {
    echo "$i \n";
    if ( $i == 6 ) {
        break;
    }
}

echo "\n";
echo "\n";

// loop continue

for ( $i = 0; $i <= 0; $i++ ) {
    if ( $i < 27 ) {
        continue;
    }
    echo "$i\n";
}