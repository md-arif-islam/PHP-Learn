<?php

interface PaymentGatway {
    function sendPayment( $payment );
}

class PaymentProcessor {
    private $getway;
    function __construct( PaymentGatway $pg ) {
        $this->gatway = $pg;
    }

    function purchaseProduct( $ammount ) {
        $this->gatway->sendPayment( $ammount );
    }
}

class Paypal implements PaymentGatway {
    function sendPayment( $payment ) {
        echo "$payment process by Paypal";
    }
}

class Stripe {
    function makePayment( $ammount, $curency = null ) {
        echo "$ammount process by Stripe";
    }
}

class StripeAdapter implements PaymentGatway {
    private $stripe;
    function __construct( Stripe $stripe ) {
        $this->stripe = $stripe;
    }
    function sendPayment( $payment ) {
        $this->stripe->makePayment( $payment );
    }
}

$paypal = new Paypal();
$stripe = new Stripe();
$sa = new StripeAdapter( $stripe );
$pp = new PaymentProcessor( $sa );
$pp->purchaseProduct( 45 );