<?php

class MyException extends Exception {};
class NetworkException extends Exception {};

function testException() {
    throw new MyException();
}

try {
    testException();
} catch ( MyException $th ) {
    echo "MyException Caught";
} catch ( NetworkException $th ) {
    echo "NetworkException Caught";
} catch ( Exception $th ) {
    echo "Exception Caught";
} finally {
    echo "\nClean";
}