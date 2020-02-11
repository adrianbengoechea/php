<?php
define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/udemyphp/mishis_notes/');

# DB Connection
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'mishis_notes';
try{
    $connection = new PDO("mysql:host=$dbhost;dbname=$dbname;", $dbuser, $dbpass);
}catch(PDOException $e){
    echo 'Error to connect to the database. ' . $e->getMessage();
    exit;
}

# SESSION
session_start();
if(empty($_SESSION['alert_message']) or empty($_SESSION['alert_message_class'])){
  $_SESSION['alert_message'] = '';
  $_SESSION['alert_message_class'] = '';
}
if(empty($_SESSION['login_actual_session'])){
  $_SESSION['login_actual_session'] = 'no-session';
  $_SESSION['login_actual_session_key'] = 'no-key';
  $_SESSION['login_actual_session_mail'] = 'no-mail';
}

# LOGIN FUNCTION
if(!login($connection)){
  force_redirect_to(1);
}else{
  force_redirect_to(2);
}

# FUNCTIONS
function db($query, $values, $conn){
  $main_query = $query;
  $query_load = $conn->prepare($main_query);
  $query_load->execute($values);
  return $query_load->fetchAll();
}

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

function force_redirect_to($situation){
  if($situation == 1){
    if($_SERVER['REQUEST_URI'] != '/udemyphp/mishis_notes/login.php' and $_SERVER['REQUEST_URI'] != '/udemyphp/mishis_notes/register.php' and $_SERVER['REQUEST_URI'] != '/udemyphp/mishis_notes/assets/register-processor.php' and $_SERVER['REQUEST_URI'] != '/udemyphp/mishis_notes/assets/login-processor.php'){
      alert_message("You're not logged in!", 'alert-danger');
      header('Location: http://localhost/udemyphp/mishis_notes/login.php');
    }
  }else if($situation == 2){
    if($_SERVER['REQUEST_URI'] == '/udemyphp/mishis_notes/login.php' or $_SERVER['REQUEST_URI'] == '/udemyphp/mishis_notes/register.php' or $_SERVER['REQUEST_URI'] == '/udemyphp/mishis_notes/assets/register-processor.php' or $_SERVER['REQUEST_URI'] == '/udemyphp/mishis_notes/assets/login-processor.php'){
      header('Location: http://localhost/udemyphp/mishis_notes/index.php');
    }
  }
}

function login($connection){
  if($_SESSION['login_actual_session'] === 'no-session'){
    return false;
  }else if($_SESSION['login_actual_session'] === 'open-session'){
    if(!trim($_SESSION['login_actual_session_mail']) == '' or !trim($_SESSION['login_actual_session_key']) == ''){

      $key = $_SESSION['login_actual_session_key'];
      $mail = $_SESSION['login_actual_session_mail'];

      $session_data = db('SELECT * FROM `sessions` WHERE `EMAIL` = :mail', array(':mail'=>$_SESSION['login_actual_session_mail']), $connection);

      print_r($session_data);
      print_r($mail . ' - ' . $key);

      if(true){
        return true;
      }else{
        return false;
      }
    }
  }else{
    return false;
  }
}

function in_content_page(){
  if($_SESSION['content-page'] == true){
    return true;
  }
}




?>
