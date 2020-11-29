<?php

require_once "Sunra/PhpSimple/HtmlDomParser.php";

use Sunra\PhpSimple\HtmlDomParser;

$word = "Morning";
$lower_word = strtolower($word);
$endpoint = "https://www.vocabulary.com/dictionary/{$lower_word}";
$ch = curl_init($endpoint);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
$dom = HtmlDomParser::str_get_html($result);
echo "<h1>Meaning of {$word}</h1>";

$short = $dom->getElementByTagName("p.short");
echo "<strong>Short Meaning : </strong> {$short}";
echo "<br/>";
$long = $dom->getElementByTagName("p.long");
echo "<strong>Long Meaning : </strong> {$long}";
