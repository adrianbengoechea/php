<?php
require_once('config.php');

if(isset($_POST['submit'])){
  if(!trim($_POST['edit-note-title']) == '' or !trim($_POST['edit-note-content'] == '')){
    if(is_numeric($_POST["note-id"])){
      # If is all ok...
      $title = filter_var($_POST["edit-note-title"], FILTER_SANITIZE_STRING);
      $content = filter_var($_POST["edit-note-content"], FILTER_SANITIZE_STRING);
      $element_id = filter_var($_POST["note-id"], FILTER_SANITIZE_STRING);
      $userid = 1;

      db('UPDATE `notas` SET `title` = :title, `content` = :content WHERE `id` = :id', array(':title'=>$title, ':content'=>$content, ':id'=>$element_id));


      alert_message('Added successfully!', 'alert-success');
      redirect_to_home();
    }else{
      echo 'NO';
      exit;
    }

  }else{

    alert_message('One or more fields have an error.', 'alert-danger');
    header("Location: index.php");
  }
}else{

  alert_message('Nope!', 'alert-danger');
  redirect_to_home();
}


?>
