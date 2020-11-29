<?php
include_once "functions.php";

$fruits = array( "apple", "banana", "orange", "lemon", "graps" );

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.0/milligram.css">
    <title>Document</title>
    <style>
      body{
        margin-top: 30px;
      }
    </style>
</head>
<body>

<div class="container">
  <div class="row">
        <div class="column column-60 column-offset-20">
            <h2>Select/Dropdown</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque cupiditate alias sed nihil. Veniam, nulla.</p>
        <p>
        	<a href="scrambler.php">ppp</a>

        <?php

// if ( isset( $_REQUEST['fruits'] ) && $_REQUEST['fruits'] != '' ) {
//     printf( "You have selected : %s", $_REQUEST['fruits'] );
// }

// $sfruits = $_REQUEST['fruits'] ?? array();  //not filter

$sfruits = filter_input( INPUT_POST, 'fruits', FILTER_SANITIZE_STRING, FILTER_REQUIRE_ARRAY );

if ( count( $sfruits ) > 0 ) {
    echo "You have selected : " . join( ", ", $sfruits );
}

?>

        </p>

        </div>
  </div>

  <div class="row">
  <div class="column column-60 column-offset-20">
      <form method="POST" >
          <label for="fruits">Selects some fruits</label>
          <select style="height: 200px;" name="fruits[]" id="fruits" multiple>
              <option value="" disabled selected>Select some fruits</option>

              <?php displayOptions( $fruits );?>
          </select>

          <button type="submit">Submit</button>
      </form>
  </div>
  </div>

</div>

</body>
</html>