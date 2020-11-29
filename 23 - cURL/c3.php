<?php

$word = "Morning";
$lower_word = strtolower($word);
$endpoint = "https://www.vocabulary.com/dictionary/{$lower_word}";
$ch = curl_init($endpoint);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);

echo "<h1>Meaning of {$word}</h1>";

$short_start = strpos($result, '<p class="short">') + 17;
$short_end = strpos($result, '</p>', $short_start);
$short = substr($result, $short_start, ($short_end - $short_start));
echo "<strong>Short Meaning : </strong> {$short}";

echo "<br/>";

$long_start = strpos($result, '<p class="long">') + 16;
$long_end = strpos($result, '</p>', $long_start);
$long = substr($result, $long_start, ($long_end - $long_start));
echo "<strong>Long Meaning : </strong> {$long}";
