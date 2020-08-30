<?php

class Shape {
    protected $name;
    protected $area;

    function __construct( $name ) {
        $this->name = $name;
        $this->calculateArea();
    }

    public function getArea() {
        echo "This {$this->name}'s area is {$this->area}";
    }
    function calculateArea() {}
}

class Square extends Shape {
    private $a;

    public function __construct( $a ) {
        $this->a = $a;
        parent::__construct( "Square" );
    }
    public function calculateArea() {
        $this->area = $this->a * $this->a;
    }
}

class Rectengle extends Shape {
    private $a, $b;

    public function __construct( $a, $b ) {
        $this->a = $a;
        $this->b = $b;
        parent::__construct( "Rectengle" );
    }

    public function calculateArea() {
        $this->area = $this->a * $this->b;
    }
}

$r = new Rectengle( 5, 10 );
$r->getArea();
echo "\n";

$s = new Square( 4 );
$s->getArea();