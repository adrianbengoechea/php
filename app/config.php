<?php
define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/buh_notes/');

# SESSION
session_start();

# LOGIN VERIFICATION
$actual_login_page = false;
$excluded_pages = array(
	'/buh_notes/login.php', 
	'/buh_notes/register.php', 
	'/buh_notes/app/register-processor.php', 
	'/buh_notes/app/login-processor.php'
);
if(logged()){
	foreach($excluded_pages as $page){
		if($page == $_SERVER['REQUEST_URI']){
			redirect_to_home();
			exit;
		}
	}

	$login_account_id = db('SELECT `id` FROM `users` WHERE `email` = :mail', array(':mail'=>$_SESSION['account']));
	$account_id = $login_account_id['0']['id'];
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
  header('Location: http://localhost/buh_notes/index.php');
}
function redirect_to_register(){
  header('Location: http://localhost/buh_notes/register.php');
}
function redirect_to_login(){
  header('Location: http://localhost/buh_notes/login.php');
}




?>
