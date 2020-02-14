<?php
require_once('config.php');

$eid = intval($_GET['eid']);

if(isset($_GET)){
  if(!trim($eid) == ''){
    if(!$eid == 0){
      #If is all ok...

      db('DELETE FROM `notas` WHERE `ID` = :eid', array(':eid'=>$eid));

      alert_message('Deleted successfully!', 'alert-success');
      redirect_to_home();
    }else{
      alert_message('Some error in the fields sent. 3', 'alert-danger');
      redirect_to_home();
    }
  }else{
    alert_message('Some error in the fields sent. 2', 'alert-danger');
    redirect_to_home();
  }
}else{
  alert_message('Nope! 1', 'alert-danger');
  redirect_to_home();
}


?>
