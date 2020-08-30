<?php

$name;

if ( isset( $name ) && ( is_numeric( $name ) || $name = '' ) ) {
    echo "Name is set or it's not empty";
} else {
    echo "Name isn't set or it's empty";
}