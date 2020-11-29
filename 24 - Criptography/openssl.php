<?php

// print_r(openssl_get_cipher_methods());
// AES-128-CBC
// AES-128-


$method_name = "AES-128-CBC";
$iv_length = openssl_cipher_iv_length($method_name);
$iv = openssl_random_pseudo_bytes($iv_length);

$message = "This is a secret message";
$password = "Secret Password";
$encrypted_message = openssl_encrypt($message, $method_name, $password, 0, $iv);
echo $encrypted_message;

echo "\n";

echo openssl_decrypt($encrypted_message, $method_name, $password, 0, $iv);
