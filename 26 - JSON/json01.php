<?php

$data = array(
    "first-name" => "John",
    "last-name" => "Doe",
    "email" => "john@doe.me"
);

echo json_encode($data, JSON_PRETTY_PRINT);
