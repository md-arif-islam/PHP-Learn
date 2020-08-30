<?php

abstract class OurClass {
    function sayHi() {
        echo "Hi";
    }

    abstract function eat();
}

class MyClass extends OurClass {
    function eat() {
        echo "Hello";
    }
}

$mc = new MyClass();
$mc->sayHi();