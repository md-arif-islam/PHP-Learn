<?php

class Car {
    function getName() {
        return "Car";
    }
}

class Truck {
    function getName() {
        return "Truck";
    }
}

abstract class VFactory {
    abstract function create();
}

class TruckFactory extends VFactory {
    function create() {
        return new Truck();
    }
}

class CarFactory extends VFactory {
    function create() {
        return new Car();
    }
}

class VehicleFactory {

    function getfactory( $type = "car" ) {
        if ( "car" == $type ) {
            return new CarFactory();
        } elseif ( "truck" ) {
            return new TruckFactory();
        }
    }

}

$vf = new VehicleFactory();
$tf = $vf->getfactory( "truck" );
$truck = $tf->create();
echo $truck->getName();