<?php
require_once "inc/functions.php";

$info = "";

$task = $_GET['task'] ?? "report";
$error = $_GET['error'] ?? "0";

if ( "seed" == $task ) {
    seed();
    $info = "Seeding Is complete";
}

$fname = "";
$lname = "";
$roll = "";

if ( isset( $_POST['submit'] ) ) {

    $fname = filter_input( INPUT_POST, "fname", FILTER_SANITIZE_STRING );
    $lname = filter_input( INPUT_POST, "lname", FILTER_SANITIZE_STRING );
    $roll = filter_input( INPUT_POST, "roll", FILTER_SANITIZE_STRING );

    if ( $fname != "" && $lname != "" && $roll != "" ) {
        $result = addStudents( $fname, $lname, $roll );

        if ( $result ) {
            header( "location:index.php?task=report" );
        } else {
            $error = 1;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic" />
  <link rel="stylesheet" href="milligram/dist/milligram.css" />
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
        <h2>Project 2 -CRUD</h2>
        <p>A simple projects</p>
        <?php include_once "inc/templates/nav.php"?>

        <?php
if ( $info != "" ) {
    echo "<p>$info</p>";
}
?>
      </div>
    </div>


    <?php if ( "1" == $error ): ?>
      <div class="row">
        <div class="column column-60 column-offset-20">
          <blockquote>
            Duploicate Roll
          </blockquote>
        </div>
      </div>
    <?php endif;?>

    <?php if ( "report" == $task ): ?>
      <div class="row">
        <div class="column column-60 column-offset-20">
          <?php generateReport();?>
        </div>
      </div>
    <?php endif;?>

    <?php if ( "add" == $task ): ?>
      <div class="row">
        <div class="column column-60 column-offset-20">
          <form action="index.php?task=add" method="POST">
            <label for="fname">First Name</label>
            <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>">
            <label for="lname">Last Name</label>
            <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>">
            <label for="roll">Roll</label>
            <input type="number" name="roll" id="roll" value="<?php echo $roll; ?>">

            <button type="submit" name="submit" class="button-primary">Save</button>
          </form>
        </div>
      </div>
    <?php endif;?>

    <?php if ( "edit" == $task ):

    $id = filter_input( INPUT_GET, "id", FILTER_SANITIZE_STRING );
    $student = getStudent( $id );
    if ( $student ):

    ?>
							      <div class="row">
							        <div class="column column-60 column-offset-20">
							          <form action="index.php?task=edit" method="POST">
						              <input type="hidden" value="<?php $id;?>" name="id">
							            <label for="fname">First Name</label>
							            <input type="text" name="fname" id="fname" value="<?php echo $student['fname']; ?>">
							            <label for="lname">Last Name</label>
							            <input type="text" name="lname" id="lname" value="<?php echo $student['lname']; ?>">
							            <label for="roll">Roll</label>
							            <input type="number" name="roll" id="roll" value="<?php echo $student['roll']; ?>">

							            <button type="submit" name="submit" class="button-primary">Update</button>
							          </form>
							        </div>
							      </div>
							    <?php endif;endif;?>





  </div>
</body>

</html>