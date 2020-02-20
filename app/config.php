<?php
define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/buh_notes/');

# SESSION
session_start();

# LOGIN FUNCTION
if(logged()){

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
      echo 'Error to connect to the database. ' . $e->getMessage(); exit;
  }

  # Send Query to the DB
  $sql = $sql;
  $consult = $db_connection->prepare($sql);
  $consult->execute($values);

	# Return with all elements finded
  return $consult->fetchAll();
}
function logged(){
		$excluded_pages = array(
			'/buh_notes/login.php', 
			'/buh_notes/register.php', 
			'/buh_notes/assets/register-processor.php', 
			'/buh_notes/assets/login-processor.php'
		);

		if(true){
			foreach($excluded_pages as $page){
				if($_SERVER['REQUEST_URI'] == $page){
					return 1;
					break;
				} 
			}
		}else{
			return 0;
		}
		
}
function alert_message($message, $class){
  $_SESSION['alert_message'] = $message;
  $_SESSION['alert_message_class'] = $class;
}
function redirect_to_home(){
  header('Location: http://localhost/buh_notes/index.php');
}
function redirect_to_login(){
  header('Location: http://localhost/buh_notes/login.php');
}




?>
