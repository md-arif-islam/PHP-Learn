<?php

$totalCount = count( $_FILES['photo']['name'] );

for ( $i = 0; $i < $totalCount; $i++ ) {

    $count = $_FILES['photo']['type'][$i];

    if ( $count == 'image/jpeg' || $count == 'image/jpg' || $count == 'image/png' ) {
        move_uploaded_file( $_FILES['photo']['tmp_name'][$i], "img/" . $_FILES['photo']['name'][$i] );
    }
}

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
    body {
      margin-top: 30px;
    }
  </style>
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="column column-60 column-offset-20">
        <h2>Our First Form</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque cupiditate alias sed nihil. Veniam, nulla.</p>

        <pre>
        <p>
          <?php
print_r( $_POST );
print_r( $_FILES );
?>
        </p>
      </pre>
      </div>
    </div>

    <div class="row">
      <div class="column column-60 column-offset-20">
        <form method="POST" enctype="multipart/form-data">

          <label for="fname">First Name</label>
          <input type="text" name="fname" id="fname">

          <label for="lname">last Name</label>
          <input type="text" name="lname" id="lname">

          <label for="photo">Photo</label>
          <input type="file" name="photo[]" id="photo"> <br>
          <input type="file" name="photo[]" id="photo"> <br>
          <input type="file" name="photo[]" id="photo"> <br>

          <button type="submit">Submit</button>

        </form>

      </div>
    </div>
  </div>

</body>

</html>