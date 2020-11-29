<?php

function displayKey( $key ) {
    printf( " value = %s", $key );
}

function scrambleData( $originalData, $key ) {
    $originalKey = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
    $data = '';
    $lenth = strlen( $originalData );

    for ( $i = 0; $i < $lenth; $i++ ) {
        $currenChar = $originalData[$i];
        $position = strpos( $originalKey, $currenChar );

        if ( $position !== false ) {
            $data .= $key[$position];
        } else {
            $data .= $currenChar;
        }
    }
    return $data;

}

function decodeData( $originalData, $key ) {
    $originalKey = "ABCDEFGHIJKLMNOPQRSTUFWXUZabcdefghijklmnopqrstuvwxyz1234567890";
    $data = '';
    $lenth = strlen( $originalData );

    for ( $i = 0; $i < $lenth; $i++ ) {
        $currenChar = $originalData[$i];
        $position = strpos( $key, $currenChar );

        if ( $position !== false ) {
            $data .= $originalKey[$position];
        } else {
            $data .= $currenChar;
        }
    }
    return $data;

}