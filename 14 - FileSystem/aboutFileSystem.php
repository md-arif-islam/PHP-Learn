<?php

// echo getcwd();
// // CurrentWorking Derectory

// $entries = scandir( getcwd() );

// foreach ( $entries as $entriy ) {
//     if ( "." != $entriy && ".." != $entriy ) {
//         if ( is_dir( $entriy ) ) {
//             echo "[d] $entriy\n";
//         } else {
//             echo "$entriy\n";
//         }
//     }
// }

// --------------------------

$entries = opendir( getcwd() );

while ( false != ( $entriy = readdir( $entries ) ) ) {
    echo "$entriy\n";
}