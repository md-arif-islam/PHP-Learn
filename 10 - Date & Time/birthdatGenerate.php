<?php

$birthDay = "20/09/2002";

$birthDay = explode( "/", $birthDay );

$age = ( date( "md", date( "U", mktime( 0, 0, 0, $birthDay[0], $birthDay[1], $birthDay[2] ) ) ) > date( "md" ) ? (  ( date( "Y" ) - $birthDay[2] ) - 1 ) : ( date( "Y" ) - $birthDay[2] ) );

echo "Age is : $age";
