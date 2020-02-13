<?php
require_once('_init.php');

if(isset($_POST)){
  if(!trim($_POST['login_email']) == '' and !trim($_POST['login_password']) == ''){
      #If is all ok...
      $email = filter_var($_POST['login_email'], FILTER_SANITIZE_EMAIL);
      $password = md5($_POST['login_password']);
      $user_data = db("SELECT * FROM `users` WHERE `EMAIL` = :email AND `PASSWORD` = :pass", array(':email'=>$email, ':pass'=>$password), $connection);

      if(empty($user_data)){
        alert_message('Incorrect email or password.', 'alert-danger');
        redirect_to_login();
      }

      if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        alert_message('Incorrect email or password.', 'alert-danger');
        redirect_to_login();
      }


      if($password == $user_data['0']['PASSWORD'] and $email == $user_data['0']['EMAIL']){
        $rand = rand(1000, 100000);
        $session_key = md5(time() . $rand . $email);

        $query = "INSERT INTO `sessions` (`name`, `key`) VALUES (:name, :key)";

        $query_load = $connection->prepare($query);
        $query_load->execute(array(':name'=>md5($email . time()), ':key'=>$session_key));

        $_SESSION['login_actual_session'] = 'open-session';
        $_SESSION['login_actual_session_mail'] = md5($email . time());
        $_SESSION['login_actual_session_key'] = $session_key;


        alert_message('Login successfully completed: ' . $_SESSION['login_actual_session_key'], 'alert-success');
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
