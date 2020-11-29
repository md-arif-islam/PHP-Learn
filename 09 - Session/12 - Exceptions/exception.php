<?php

class Student {
    function __construct( $name, $age ) {
        $this->name = $name;
        if ( $age < 4 ) {
            throw new Exception( "Too Young", 101 );
        } elseif ( $age > 35 ) {
            throw new Exception( "Too Old", 102 );
        }
        $this->age = $age;
    }
}

try {
    $s = new Student( "Rahim", 40 );
    echo "It will never Display ";
} catch ( Exception $th ) {
    echo $th->getCode() . ":" . $th->getMessage();
}
