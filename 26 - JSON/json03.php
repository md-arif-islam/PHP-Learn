<?php

class Person
{
    public $firstName;
    public $lastName;
}

$p = new Person();
$p->firstName = "John";
$p->lastName = "John";

echo json_encode($p);
