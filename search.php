<?php require_once 'admin/config.php';

    if(!search_exist()){
        return_home();
    }

    require_once 'views/search.view.php';

?>