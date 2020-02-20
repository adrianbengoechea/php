<?php
require_once('config.php');

if(isset($_POST['login-submit'])){
  if(!empty($_POST['login_email']) and !empty($_POST['login_password'])){
      #If is all ok...
      $email = filter_var(strtolower($_POST['login_email']), FILTER_SANITIZE_EMAIL);
      $password = hash('sha512', $_POST['login_password']);
      $user_data = db('SELECT * FROM `users` WHERE `email` = :email AND `password` = :pass LIMIT 1', array(':email'=>$email, ':pass'=>$password));

			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        alert_message('Incorrect email or password.', 'alert-danger');
        redirect_to_login();
			}
			
      if(empty($user_data)){
        alert_message('Incorrect email or password.', 'alert-danger');
        redirect_to_login();
      }

      


      if($password == $user_data['0']['password'] and $email == $user_data['0']['email']){
        

				$_SESSION['account'] = $email;
        alert_message('Login successfully!', 'alert-success');
        redirect_to_home();
      }else{

				alert_message('Incorrect email or password. 3', 'alert-danger');
        redirect_to_login();
			}
  }else{
    alert_message('Some error in the fields sent.', 'alert-danger');
    redirect_to_login();
  }
}else{
  alert_message('Nope!', 'alert-danger');
  redirect_to_login();
}


?>
