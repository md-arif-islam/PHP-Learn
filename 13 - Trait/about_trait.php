<?php

trait NumberOne {
    function NumberA() {
        echo "Nubmer A";
    }

    function NumberB() {
        echo "Nubmer B";
    }
}

trait NumberTwo {
    function NumberC() {
        echo "Nubmer C";
    }

    function NumberD() {
        echo "Nubmer D";
    }
}

class Number {
    use NumberOne, NumberTwo;
}

$ns = new Number;
$ns->NumberA();