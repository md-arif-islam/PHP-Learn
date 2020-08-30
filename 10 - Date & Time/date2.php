<?php

echo time() . "\n";

echo mktime( 0, 0, 0, 12, 1, 2020 ) . "\n";
date_default_timezone_set( "Asia/Dhaka" );
echo mktime( 0, 0, 0, 12, 1, 2020 ) . "\n";