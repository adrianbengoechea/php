<?php require_once 'config.php';
    
    check_loggedin();

    if( isset($_GET) && !empty($_GET) && !empty(trim($_GET['id'])) ){
        $id = (int) $_GET['id'];

        db("DELETE FROM `data` WHERE id = $id", array());
        return_admin();
    }else{
        return_admin();
    }

?>