<?php
require_once('_init.php');
require_once(SITE_ROOT . 'connection.php');

$_SESSION['alert_message'] = 'Deleted successfully!';

if(isset($_GET)){
  if(!trim($_GET['eid']) == ''){
    $id = $_GET['eid'];
    $query = 'DELETE FROM `notas` WHERE `ID` = ' . $_GET['eid'];
    $query_load = $connection->prepare($query);
    $query_load->execute();

    redirect_to_home();


  }else{
    redirect_to_home();
  }
}else{
  redirect_to_home();
}


?>
