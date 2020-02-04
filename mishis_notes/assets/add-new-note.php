<?php
define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/udemyphp/mishis_notes/');
require_once( SITE_ROOT . 'connection.php');


if(isset($_POST['submit'])){
  if(trim($_POST['new-note-title']) == '' or trim($_POST['new-note-content'] == '')){
    header("Location: http://localhost/udemyphp/mishis_notes/new-note.php");
  }else{
    # If is all ok...
    // $new-note-title
    // $new-note-content
    $title = filter_var($_POST["new-note-title"], FILTER_SANITIZE_STRING);
    $content = filter_var($_POST["new-note-content"], FILTER_SANITIZE_STRING);
    $userid = 1;

    $query = "INSERT INTO `notas` (`TITLE`, `CONTENT`, `USERID`) VALUES (:title, :content, :userid)";
    $query_load = $connection->prepare($query);
    $query_load->execute(array(':title'=>$title, ':content'=>$content, ':userid'=>$userid));

    header('Location: http://localhost/udemyphp/mishis_notes/index.php');
  }
}


?>
