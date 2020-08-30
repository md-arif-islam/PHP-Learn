<?php

$input = "Arif Islam 0170430597";

$result = sscanf( $input, " %s %s %s", $fname, $lname, $mobile );
// print_r( $result );
echo $fname;