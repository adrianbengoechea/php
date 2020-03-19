<?php

Class App{

    function __construct(){
        return true;
    }

    function DBConnection($main_sql, $array = NULL){

        /* DB INFO */
        $dbname = 'host=localhost;dbname=pagination'; 
        $dbusername = 'root'; 
        $dbpassword = '';
        try{
            $db = new PDO('mysql:' . $dbname, $dbusername, $dbpassword);
        }catch(PDOException $e){
            echo 'Connection Failed: ' . $e->getMessage(); exit;
        }

        $sql = $main_sql;
        $sqlexec = $db->prepare($sql);
        $sqlexec->execute($array);

        // echo "DONE! - $main_sql - "; print_r($array);
        return $sqlexec->fetchAll();

    }


}
$app = new App;


