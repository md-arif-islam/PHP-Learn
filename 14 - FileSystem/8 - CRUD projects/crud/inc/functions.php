<?php

define( 'DB_NAME', 'C:/xampp/htdocs/phplrn/8 - CRUD projects/crud/data/db.txt' );

function seed() {
    $data = array(
        array(
            "id" => 1,
            "fname" => "Kamal",
            "lname" => "Ahmed",
            "roll" => "7",
        ),
        array(
            "id" => 2,
            "fname" => "Jamal",
            "lname" => "Ahmed",
            "roll" => "12",
        ),
        array(
            "id" => 3,
            "fname" => "Ripon",
            "lname" => "Ahmed",
            "roll" => "9",
        ),
        array(
            "id" => 4,
            "fname" => "Nikhil",
            "lname" => "Chandra",
            "roll" => "8",
        ),
        array(
            "id" => 5,
            "fname" => "John",
            "lname" => "Doe",
            "roll" => "10",
        ),
    );

    $serialize = serialize( $data );
    file_put_contents( DB_NAME, $serialize, LOCK_EX );
}

function generateReport() {
    $data = file_get_contents( DB_NAME );
    $students = unserialize( $data );
    ?>
<table>
    <tr>
        <th>Name</th>
        <th>Roll</th>
        <th width="25%">Action</th>
    </tr>

    <?php
foreach ( $students as $student ) {
        ?>
        <tr>

        <td><?php printf( "%s %s", $student["fname"], $student["lname"] );?></td>
        <td><?php printf( "%s", $student["roll"] );?></td>
        <td><?php printf( "<a href='crud/index.php?task=edit&id=%s'>Edit</a> | <a href='crud/index.php?task=edit&id=%s'>Delete</a>", $student["id"], $student["id"] );?></td>

    </tr>
    <?php
}

    ?>
</table>


<?php
}

function addStudents( $fname, $lname, $roll ) {
    $found = false;

    $data = file_get_contents( DB_NAME );
    $students = unserialize( $data );

    foreach ( $students as $_student ) {
        if ( $_student['roll'] == $roll ) {
            $found = true;
            break;
        }
    }

    if ( !$found ) {

        $addStuId = count( $data ) + 1;
        $student = array(
            "id" => $addStuId,
            "fname" => $fname,
            "lname" => $lname,
            "roll" => $roll,
        );

        array_push( $students, $student );

        $serialize = serialize( $students );
        file_put_contents( DB_NAME, $serialize, LOCK_EX );

        return true;

    }

    return false;
}

function getStudent( $id ) {
    $data = file_get_contents( DB_NAME );
    $students = unserialize( $data );

    foreach ( $students as $student ) {
        if ( $student['id'] == $id ) {
            return $student;
        }
        return false;
    }

}