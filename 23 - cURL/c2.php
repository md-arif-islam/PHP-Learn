<?php

$ch = curl_init("https://simplenote.com");
$result = curl_exec($ch);
$error = curl_error($ch);

if ($error) {
    echo $error;
}
