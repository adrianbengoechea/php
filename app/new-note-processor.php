<?php
require_once('config.php');

if(isset($_POST['submit'])){
  if(!trim($_POST['new-note-title']) == '' or !trim($_POST['new-note-content'] == '')){

    # If is all ok...
    $title = filter_var($_POST["new-note-title"], FILTER_SANITIZE_STRING);
    $content = filter_var($_POST["new-note-content"], FILTER_SANITIZE_STRING);
    $userid = 1;
    
    db('INSERT INTO `notas` (`TITLE`, `CONTENT`, `USERID`) VALUES (:title, :content, :userid)', array(':title'=>$title, ':content'=>$content, ':userid'=>$userid));


    alert_message('Added successfully!', 'alert-success');
    redirect_to_home();

  }else{

    alert_message('One or more fields have an error.', 'alert-danger');
    header("Location: http://localhost/udemyphp/mishis_notes/new-note.php");
  }
}else{

  alert_message('Nope!', 'alert-danger');
  redirect_to_home();
}


?>
