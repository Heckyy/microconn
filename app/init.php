<?php

require_once('core/App.php');
require_once('core/Controller.php');
require_once('configuration/config.php');

/**
 * import php mailer, digunakan untuk mengirim email
 */
require_once('./vendor/PHPMailer/src/PHPMailer.php');
require_once('./vendor/PHPMailer/src/Exception.php');
require_once('./vendor/PHPMailer/src/SMTP.php');


// require_once('core/Database.php'); // -> aktifkan jika ada kebutuhan penggunaan database