<?php
require_once('config.php');

print_r($_POST);

if(isset($_POST['submit'])){
	if(!empty($_POST['register_email']) and !empty($_POST['register_password']) and !empty($_POST['register_confirm_password'])){
		$email = filter_var(strtolower($_POST['register_email']), FILTER_SANITIZE_EMAIL);
		$password = hash('sha512', $_POST['register_password']);
		$cpassword = hash('sha512', $_POST['register_confirm_password']);

		if(empty($email) or $password !== $cpassword){
			alert_message('Some error in the fields sent.', 'alert-danger');
			redirect_to_register();
		}else{

			$user_existence = db('SELECT * FROM `users` WHERE `email` = :email LIMIT 1', array(':email'=>$email ) );
			if(!empty($user_existence)){
				alert_message('Email already exist.', 'alert-danger');
				redirect_to_register();
			}else{
				db('INSERT INTO `users` (`email`, `password`) VALUES (:emailval, :passwordval)', array(':emailval'=>$email, ':passwordval'=>$password));
				alert_message('Account created successfully.', 'alert-success');
				redirect_to_home();
			}
		}
	}else{
		alert_message('Some error in the fields sent.', 'alert-danger');
  	redirect_to_register();
	}
}else{
	alert_message('Nope!', 'alert-danger');
  redirect_to_login();
}




?>