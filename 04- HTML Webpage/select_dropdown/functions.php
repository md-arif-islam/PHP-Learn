<?php

function displayOptions( $options ) {
    foreach ( $options as $option ) {
        printf( "<option value='%s'>%s</option> \n", strtolower( $option ), ucwords( $option ) );
    }
}