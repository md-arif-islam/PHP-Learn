<?php

interface PasswordHashInterface {
    function hash( $data );
}

class MD5HashEngine implements PasswordHashInterface {
    function hash( $data ) {
        return md5( $data );
    }
}

class SHA1HashEngine implements PasswordHashInterface {
    function hash( $data ) {
        return sha1( $data );
    }
}

class NativeHashEngine implements PasswordHashInterface {
    function hash( $data ) {
        return password_hash( $data, PASSWORD_BCRYPT );
    }
}

class PasswordHasher {
    private $hashingEngine;

    function __construct( PasswordHashInterface $hashingEngine ) {
        if ( $hashingEngine ) {
            $this->hashingEngine = $hashingEngine;
        }
    }

    function gethash( $data ) {
        return $this->hashingEngine->hash( $data );
    }

    function setHashEngine( PasswordHashInterface $hashingEngine ) {
        $this->hashingEngine = $hashingEngine;
    }
}

$md5hesh = new MD5HashEngine();
$sha1hash = new SHA1HashEngine();
$nativehash = new NativeHashEngine();
$ph = new PasswordHasher( $md5hesh );
$ph2 = new PasswordHasher( $sha1hash );
$ph3 = new PasswordHasher( $nativehash );

echo $ph->gethash( "helloworld" );
echo "\n";
echo $ph2->gethash( "helloworld" );
echo "\n";
echo $ph3->gethash( "helloworld" );