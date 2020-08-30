<?php

class MotorCycle {
    private $parameters;

    function __construct( $displasement, $capacity, $milage ) {
        $this->parameters = [];
        $this->parameters['displasement'] = $displasement;
        $this->parameters['capacity'] = $capacity;
        $this->parameters['milage'] = $milage;
    }

    function __isset( $name ) {
        if ( !isset( $this->parameters[$name] ) ) {
            echo "$name not found";
            return false;
        }
        return true;
    }

    function __unset( $name ) {
        print_r( $this->parameters );
        unset( $this->parameters[$name] );
        print_r( $this->parameters );

    }

    function __get( $name ) {
        return $this->parameters[$name];
    }

    function __set( $name, $value ) {
        $this->parameters[$name] = $value;
    }
}

$pulser = new MotorCycle( "150cc", "16 ltr", "40kmph" );

// echo $pulser->milage;

if ( isset( $pulser->milage ) ) {
    echo $pulser->milage;
}

unset( $pulser->milage );