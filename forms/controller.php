<?php

  # VERIFICATION
  if(isset($_POST['submit'])){
    print_r($_POST);
    $ok = false;
    $first_name = filter_var($_POST['first_name'], FILTER_SANITIZE_STRING);
    $last_name = filter_var($_POST['last_name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $state = filter_var($_POST['state'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    if(!name_verification($first_name)){
      $ok = false;
      validation_error('the first name is invalid.');
    }else{
      $ok = true;
    }

    if(!name_verification($last_name)){
      $ok = false;
      validation_error('The last name is invalid.');
    }else{
      $ok = true;
    }

    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
      $ok = false;
      validation_error('The email is invalid.');
    }else{
      $ok = true;
    }

    if(){

    }

    // if(!preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $phone)){
    //   $ok = false;
    //   validation_error('The phone number is invalid.');
    // }




  }


  # FUNCTIONS
  function name_verification($text){
    if(empty($text) or trim($text) == ''){
      return false;
    }else{
      return true;
    }
  }

  function validation_error($error_message){
    header('Location: index.php?error=' . $error_message);
  }

















?>
