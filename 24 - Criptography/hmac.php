<?php

// HMAC

$message = "This is a secret password";
$key = "MySecretPassword";

echo hash_hmac("md5", $message, $key);
