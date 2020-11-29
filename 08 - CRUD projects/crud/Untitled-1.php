<?php if ( "edit" == $task ):

    $id = filter_input( INPUT_GET, "id", FILTER_SANITIZE_STRING );
    $student = getStudent( $id );

    if ( $student ):

    ?>
	                          <div class="row">
	                            <div class="column column-60 column-offset-20">
	                              <form action="index.php?task=edit" method="POST">
	                              <input type="hidden" name="id" value="<?php echo $id; ?>">
	                                <label for="fname">First Name</label>
	                                <input type="text" name="fname" id="fname" value="<?php echo $student["fname"]; ?>">
	                                <label for="lname">Last Name</label>
	                                <input type="text" name="lname" id="lname" value="<?php echo $student["lname"] ?>">
	                                <label for="roll">Roll</label>
	                                <input type="number" name="roll" id="roll" value="<?php echo $student["roll"] ?>">

	                                <button type="submit" name="submit" class="button-primary">Update</button>
	                              </form>
	                            </div>
	                          </div>
	                  <?php endif;
endif;?>
