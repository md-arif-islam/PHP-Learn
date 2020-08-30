<?php

interface BaseStudent {
    function displayName();
}

class ImproveStudent implements BaseStudent {
    private $name;
    function __construct( $name, $title ) {
        $this->name = $name;
        $this->title = $title;
    }

    function displayName() {
        echo "Hello from {$this->title}. {$this->name}";
    }
}

class Student implements BaseStudent {
    private $name;
    function __construct( $name ) {
        $this->name = $name;
    }

    function displayName() {
        echo "Hello from {$this->name}";
    }
}

// class StudentManager {
//     function introduceStudent( $name ) {
//         $st = new Student( $name );
//         $st->displayStudent();
//     }
// }

class StudentManager {
    function introduceStudent( BaseStudent $student ) {
        $student->displayName();
    }
}

$st = new Student( "John Doe" );
$ist = new ImproveStudent( "John Doe", "Mr" );
$sm = new StudentManager();
$sm->introduceStudent( $ist );