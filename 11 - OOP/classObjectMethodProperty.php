<?php

class Human {
    public $name;
    function sayHi() {
        echo "Salam\n";
        $this->sayName();
    }

    function sayName() {
        echo "My name is $this->name \n";
    }
}

class Cat {
    public $fruits;
    function sayHi() {
        echo "Mew\n";
        $this->sayFruits();
    }
    function sayFruits() {
        echo "This is $this->fruits \n";
    }
}

class Dog {
    function sayHi() {
        echo "Woof\n";
    }
}

$h1 = new Human();
$h2 = new Human();
$h1->name = "Rubel";
$h2->name = "Hasin";

$h1->sayHi();
$h2->sayHi();
// $c1->sayHi();
// $d1->sayHi();

$c1 = new Cat();
$c2 = new Cat();

$c1->fruits = "Apple";
$c2->fruits = "Banana";

$c1->sayHi();
$c2->sayHi();

// $d1 = new Dog();
