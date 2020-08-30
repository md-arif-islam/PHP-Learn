<?php

class Fund {
    private $fund;

    function __construct( $initialFund = 0 ) {
        $this->fund = $initialFund;
    }

    function addFund( $money ) {
        $this->fund += $money;
    }
    function deductFund( $money ) {
        $this->fund -= $money;
    }
    function getTotal() {
        echo "Total find is $this->fund";
    }
}

$ourFund = new Fund();
$ourFund->getTotal();
echo "\n";
$ourFund->addFund( 100 );
$ourFund->deductFund( 20 );
$ourFund->getTotal();