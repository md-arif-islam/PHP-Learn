<?php
$password  = "Secret Password";
$hash = password_hash($password, PASSWORD_BCRYPT/*,['cost'=>15]*/);

// echo "$hash\n";

$userInput = "Secret Password";

if (password_verify($userInput, $hash)) {
    echo "Correct";
} else {
    echo "Incorrect";
}
