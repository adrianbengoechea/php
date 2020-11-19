<?php

define('PROTOCOL', '//');
define('HOST', $_SERVER['HTTP_HOST']);

define('DIRNAME', '/git-check/buh-notes');

// define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . DIRNAME);
// print_r(DIRNAME);
// exit;

// print_r(DIRNAME);

// exit;

# SESSION
session_start();

# LOGIN VERIFICATION
$actual_login_page = false;
$excluded_pages = array(
	DIRNAME . '/login.php', 
	DIRNAME . '/register.php', 
	DIRNAME . '/app/register-processor.php', 
	DIRNAME . '/app/login-processor.php'
);
if(logged()){
	foreach($excluded_pages as $page){
		if($page == $_SERVER['REQUEST_URI']){
			redirect_to_home();
			exit;
		}
	}

	$login_account_info = db('SELECT * FROM `users` WHERE `email` = :mail', array(':mail'=>$_SESSION['account']));
	$account_id = $login_account_info['0']['id'];
	$account_email = $login_account_info['0']['email'];
}else{
	foreach($excluded_pages as $page){
		if($page == $_SERVER['REQUEST_URI']){
			$actual_login_page = true;
		}
	}
	if(!$actual_login_page){
		redirect_to_login();
		exit;
	}
}

# FUNCTIONS
function db($sql, $values){
  # DB Connection
  $db = 'mysql:host=localhost;dbname=mishis_notes;';
  $dbuser = 'root';
  $dbpass = '';
  try{
      $db_connection = new PDO($db, $dbuser, $dbpass);
  }catch(PDOException $e){
			echo 'Error to connect to the database. ' . $e->getMessage(); 
			exit;
  }

  # Send Query to the DB
  $sql = $sql;
  $consult = $db_connection->prepare($sql);
  $consult->execute($values);

	# Return with all elements finded
  return $consult->fetchAll();
}
function logged(){
	
	if(!isset($_SESSION['account'])){
		return false;
	}else{
		return true;
	}
		
}
function alert_message($message, $class){
  $_SESSION['alert_message'] = $message;
  $_SESSION['alert_message_class'] = $class;
}
function redirect_to_home(){
	$redirect_home_uri = PROTOCOL . HOST . DIRNAME . '/index.php';
  header('Location: ' . $redirect_home_uri);
}
function redirect_to_register(){
	$redirect_register_uri = PROTOCOL . HOST . DIRNAME . '/register.php';
  header('Location: ' . $redirect_register_uri);
}
function redirect_to_login(){
	$redirect_login_uri = PROTOCOL . HOST . DIRNAME . '/login.php';
  header('Location: ' . $redirect_login_uri);
}




?>
