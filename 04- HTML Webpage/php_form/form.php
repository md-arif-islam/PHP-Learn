<?php
include_once "functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.0/milligram.css" />
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
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque
          cupiditate alias sed nihil. Veniam, nulla.
        </p>
        <p>

          <?php
$fname = '';
$lname = '';
$checkbox = '';

if ( isset( $_REQUEST['cb1'] ) && $_REQUEST['cb1'] == 1 ) {
    $checkbox = 'Checked';
}

if ( isset( $_REQUEST['fname'] ) && !empty( ['fname'] ) ) {
    $fname = htmlspecialchars( $_REQUEST['fname'] );
}

if ( isset( $_REQUEST['lname'] ) && !empty( ['lname'] ) ) {
    $lname = htmlspecialchars( $_REQUEST['lname'] );
}

?>
        </p>
        <p>
          First Name : <?php echo $fname; ?><br />
          Last Name : <?php echo $lname; ?>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="column column-60 column-offset-20">
        <form method="POST">
          <label for="fname">First Name</label>
          <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>" />

          <label for="lname">Last Name</label>
          <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>" />

          <div>
            <input type="checkbox" name="cb1" id="cb1" value="1" <?php echo $checkbox; ?>>
            <label for="cb1" class="label-inline">Some Checkbox</label>
          </div>
          <br>
          <input type="checkbox" name="fruits[]" value="orange" <?php isChecked( "fruits", "orange" );?>>
          <label class="label-inline">Orange</label><br>
          <input type="checkbox" name="fruits[]" value="mango" <?php isChecked( "fruits", "mango" );?>>
          <label class="label-inline">Mango</label><br>
          <input type="checkbox" name="fruits[]" value="banana" <?php isChecked( "fruits", "banana" );?>>
          <label class="label-inline">Banana</label><br>
          <input type="checkbox" name="fruits[]" value="lemon" <?php isChecked( "fruits", "lemon" );?>>
          <label class="label-inline">Lemon</label><br>

          <button type="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>