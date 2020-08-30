<?php

class RGB {
    public $color;
    public $red;
    public $green;
    public $blue;

    function __construct( $colorCode = "" ) {
        $this->color = ltrim( $colorCode, "#" );
        $this->parseColor();
        $this->readRGBColor();
    }

    function readRGBColor() {
        echo "Red = $this->red\nGreen = $this->green\nBlue = $this->blue";
    }

    private function parseColor() {
        if ( $this->color ) {
            list( $this->red, $this->green, $this->blue ) = sscanf( $this->color, "%02x%02x%02x" );
        } else {
            list( $this->red, $this->green, $this->blue ) = array( 0, 0, 0 );
        }
    }
}

$myColor = new RGB( "#ff2e3e" );
// $myColor->readRGBColor();