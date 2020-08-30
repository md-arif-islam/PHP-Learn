<?php

class DistrictCollection implements IteratorAggregate, Countable {
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
    function count() {
        return count( $this->districts );
    }
}

$districts = new DistrictCollection();
$districts->add( "Dkaka" );
$districts->add( "Bogra" );
$districts->add( "Rajshahi" );
$districts->add( "Rangpur" );

echo count( $districts );