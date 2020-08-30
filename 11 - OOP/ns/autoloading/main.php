<?php

namespace CloudStorage;
include_once "autoloader.php";

use \CloudStorage\FileSystem\Files\Contacts\Contact;
use \CloudStorage\FileSystem\Scanner;
use \CloudStorage\Mail\Mailer;

class Main {
    function __construct() {
        $mailer = new Mailer();
        $mailer->sendMail();

        echo "\n";

        $scanner = new Scanner();
        $scanner->scan();

        echo "\n";

        $contct = new Contact();
        $contct->con();
    }
}

new Main();
