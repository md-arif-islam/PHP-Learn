<?php

// $di = new DirectoryIterator( "./11 - OOP" );

// foreach ( $di as $file ) {
//     if ( $file->isDot() ) {
//         continue;
//     }
//     if ( is_dir( $file ) ) {
//         echo $file->getPathname() . "\n";
//     } else {
//         echo $file->getPathname() . ":" . $file->getSize() . "byte\n";

//     }
// }

$size = 0;

$rdi = new RecursiveDirectoryIterator( "./", RecursiveDirectoryIterator::SKIP_DOTS );
$files = new RecursiveIteratorIterator( $rdi );

foreach ( $files as $file ) {
    if ( $file->isFile() ) {
        $size += $file->getSize();
    }

    if ( $file->getFileName() == "index.php" ) {
        echo $file->getPath() . DIRECTORY_SEPARATOR . $file->getFileName() . "\n";
    }
}

echo "Directory size $size bytes";