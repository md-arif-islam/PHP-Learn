<?php

$default_lat = 23.9;
$default_lon = 90.8;

$user_lat;
$user_lon = 90.5;

$lat = $user_lat ?? $default_lat;

echo $lat;
