<?php
define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/udemyphp/mishis_notes/');

# COOKIES
setcookie('actual_session', '', time() + 60 * 60 * 24 * 7);


# SESSION
session_start();
if(empty($_SESSION['alert_message']) or empty($_SESSION['alert_message_class'])){
  $_SESSION['alert_message'] = '';
  $_SESSION['alert_message_class'] = '';
}

# LOGIN FUNCTION
print_r($_COOKIE['actual_session']);

# FUNCTIONS
function alert_message($message, $class){
  $_SESSION['alert_message'] = $message;
  $_SESSION['alert_message_class'] = $class;
}
function redirect_to_home(){
  header('Location: http://localhost/udemyphp/mishis_notes/index.php');
}
function redirect_to_login(){
  header('Location: http://localhost/udemyphp/mishis_notes/login.php');
}
function not_logged(){
    if($_SERVER['REQUEST_URI'] != '/udemyphp/mishis_notes/login.php' and $_SERVER['REQUEST_URI'] != '/udemyphp/mishis_notes/register.php' and $_SERVER['REQUEST_URI'] != '/udemyphp/mishis_notes/assets/register-processor.php' and $_SERVER['REQUEST_URI'] != '/udemyphp/mishis_notes/assets/login-processor.php'){
      alert_message("You're not logged in!", 'alert-danger');
      header('Location: http://localhost/udemyphp/mishis_notes/login.php');
    }
}
function in_content_page(){
  if($_SESSION['content-page'] == true){
    return true;
  }
}




?>
