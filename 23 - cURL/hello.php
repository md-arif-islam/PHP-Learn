<?php

echo "Welcome to the beautiful world of curl and php :)";
if (isset($_POST['secret']) && 'noodles' == $_POST['secret']) {
    echo "</br>Please have some noodles :)";
}
