<?php

// ASCII

echo ord( "A" );
echo "\n";
echo ord( "a" );

echo "\n";
echo chr( 98 );

for ( $i = 0; $i < 128; $i++ ) {
    echo "$i." . chr( $i ) . "\n";
}
