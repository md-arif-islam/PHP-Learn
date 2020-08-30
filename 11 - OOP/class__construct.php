<?php

class Human {
    public $name;
    public $age;

    function __construct( $name, $age = 0 ) {
        $this->name = $name;
        $this->age = $age;
    }
    function sayName() {
        if ( $this->age ) {
            echo "My name is $this->name & I am $this->age years old";
        } else {
            echo "My name is $this->name & I don't know about my age !";
        }
    }
}

$h1 = new Human( "Arif", 18 );
$h2 = new Human( "Hasin", 22 );
$h3 = new Human( "rakhi" );

$h1->sayName();
echo "\n";
$h2->sayName();
echo "\n";
$h3->sayName();