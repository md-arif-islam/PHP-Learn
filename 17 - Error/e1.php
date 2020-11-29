<?php

echo $book;
// PHP Notice:  Undefined variable: book in ....

error_reporting( 0 );
// Off all error report
error_reporting( E_ALL );
// show all
error_reporting( E_WARNING );
// show only warning

echo ini_get( "display_errors" );