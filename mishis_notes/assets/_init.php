<?php
define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/udemyphp/mishis_notes/');


# SESSION
session_start();
$_SESSION['alert_message'];
$_SESSION['alert_message_class'];

# FUNCTIONS
function redirect_to_home(){
  header('Location: http://localhost/udemyphp/mishis_notes/index.php');
}

function alert_message($message, $class){
  $_SESSION['alert_message'] = $message;
  $_SESSION['alert_message_class'] = $class;
}



?>
