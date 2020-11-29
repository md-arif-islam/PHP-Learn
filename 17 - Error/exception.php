<?php

$person = array(
    "name" => "xyz",
    "id" => "34445",
    "age" => "54",
    "sex" => "M",
);

function processMaternityleave( $person ) {

    if ( $person["age"] < 18 ) {
        throw new Exception( "Too Young" );
    } elseif ( "F" == $person["sex"] ) {
        echo "processed";
    } else {
        throw new CustomException( $person );
    }
}

class CustomException extends Exception {
    private $person;

    public function __construct( $person ) {
        $this->person = $person;
        parent::__construct( "Gender not Match" );
    }

    public function getDetailsMsg() {
        echo "Gender Mitch Match from {$this->person["id"]}";
    }
}

try {
    processMaternityleave( $person );
} catch ( CustomException $e ) {
    echo $e->getMessage();
    echo $e->getDetailsMsg();
} catch ( Exception $e ) {
    echo $e->getMessage();
}
