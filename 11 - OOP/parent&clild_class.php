<?php

class ParentClass {
    protected $name;

    function __construct( $name ) {
        $this->name = $name;
        $this->sayHi();
    }

    function sayHi() {
        echo "Hi from $this->name";
    }
}

class ClildClass extends ParentClass {
    function sayHi() {
        parent::sayHi();
    }
}

$cc = new ClildClass( "ABCD" );