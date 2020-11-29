<?php

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase {
    function testSomething() {
        $result = 2 + 2;
        $this->assertEquals( 4, $result );
    }

    function testAnotherSomething() {
        $result = 1;
        $this->assertEquals( true, $result );
    }
}