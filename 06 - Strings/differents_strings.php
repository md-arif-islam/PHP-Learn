<?php

$name = "Arif";

$strings = "My Name is $name";
echo $strings;
echo "\n";
echo "\n";
echo "\n";
$strings1 = 'My Name is $name';
echo $strings1;
echo "\n";
echo "\n";
echo "\n";

$heredoc = <<<EOD
My Name
is
$name
Islam
EOD;

echo $heredoc;
echo "\n";
echo "\n";
echo "\n";
$nulldoc = <<<'EOD'
My Name
is
$name
Islam
EOD;

echo $nulldoc;