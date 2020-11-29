<?php

$msg = "This is a secret message";
$encode = base64_encode($msg);
echo $encode;
echo base64_decode($encode);
