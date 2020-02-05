<?php
require_once('_init.php');
require_once( SITE_ROOT . 'connection.php');

if(isset($_GET)){
  if(!trim($_GET['eid']) == ''){
    #If is all ok...
    $id = $_GET['eid'];

    $query = 'DELETE FROM `notas` WHERE `ID` = ' . $_GET['eid'];
    $query_load = $connection->prepare($query);
    $query_load->execute();

    alert_message('Deleted successfully!', 'alert-success');
    redirect_to_home();
  }else{
    alert_message('Some error in the fields sent.', 'alert-danger');
    redirect_to_home();
  }
}else{
  alert_message('Nope!', 'alert-danger');
  redirect_to_home();
}


?>
