 <?php

const FileName = "c:/xampp/htdocs/phplrn/14 - FileSystem/recursivelyDelect.php";

print_r( pathinfo( FileName ) );

echo pathinfo( FileName, PATHINFO_EXTENSION );