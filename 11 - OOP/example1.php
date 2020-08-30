<?php

class DistrictCollection implements IteratorAggregate {
    private $districts;

    function __construct() {
        $this->districts = array();
    }

    function add( $district ) {
        array_push( $this->districts, $district );
    }

    function getIterator() {
        return new ArrayIterator( $this->districts );
    }
}

$districts = new DistrictCollection();
$districts->add( "Dkaka" );
$districts->add( "Bogra" );
$districts->add( "Rajshahi" );
$districts->add( "Rangpur" );

foreach ( $districts as $district ) {
    echo "$district\n";
}
