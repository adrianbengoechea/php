<?php
require_once('_init.php');
require_once( SITE_ROOT . 'connection.php');


if(isset($_POST)){
  if(!trim($_POST['login_email']) == '' and !trim($_POST['login_password']) == ''){
      #If is all ok...
      $email = filter_var($_POST['login_email'], FILTER_SANITIZE_EMAIL);
      $password = md5($_POST['login_password']);

      if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        alert_message('Incorrect email or password.', 'alert-danger');
        redirect_to_login();
      }

      $query = "SELECT * FROM `users` WHERE `EMAIL` = :email AND `PASSWORD` = :pass";
      $query_load = $connection->prepare($query);
      $query_load->execute(array(':email'=>$email, ':pass'=>$password));
      $user_data = $query_load->fetchAll();

      if(empty($user_data)){
        alert_message('Incorrect email or password.', 'alert-danger');
        redirect_to_login();
      }
      if($password == $user_data['0']['PASSWORD'] and $email == $user_data['0']['EMAIL']){
        $rand = rand(1000, 100000);
        $cookie_value = md5(time() . $rand . $email . time() * 4);
        $cookie_name = 'login_session_' . md5(time() * $rand);

        $query = "INSERT INTO `sessions` (`name`, `key`) VALUES (:name, :key)";
        $query_load = $connection->prepare($query);
        $query_load->execute(array(':name'=>$cookie_name, ':key'=>$cookie_value));

        $_COOKIE['actual_session'] = $cookie_value;


        alert_message('Login successfully completed.' . $_COOKIE['actual_session'], 'alert-success');
        redirect_to_home();
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
