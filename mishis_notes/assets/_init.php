<?php
define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/udemyphp/mishis_notes/');


# SESSION
session_start();
$_SESSION['alert_message'] = '';

# FUNCTIONS
function redirect_to_home(){
  header('Location: http://localhost/udemyphp/mishis_notes/index.php');
}



?>
