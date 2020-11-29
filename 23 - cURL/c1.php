<?php

$ch = curl_init("http://localhost/phplrn/23%20-%20cURL/hello.php");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, "secret=noodles");
curl_exec($ch);
