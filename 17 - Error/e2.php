<?php

function custom_error_hendler( $severity, $msg, $file, $line ) {
    echo "Error [$severity]: $msg in $file on line number $line\n\n";
}
set_error_handler( "custom_error_hendler" );

echo $book;
erro;