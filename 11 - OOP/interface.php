<?php

interface BaseAnimal {
    function isAlive();
    function canEat( $parem1, $parem2 );
    function breed();
}

class Animal implements BaseAnimal {
    function isAlive() {}
    function canEat( $parem1, $parem2 ) {}
    function breed() {}
}

interface BaseHuman extends BaseAnimal {
    function canTalk();
}

class Human implements BaseHuman {
    function isAlive() {}
    function canEat( $parem1, $parem2 ) {}
    function breed() {}
    function canTalk() {}
}