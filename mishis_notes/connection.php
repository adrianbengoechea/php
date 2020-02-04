<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'mishis_notes';

try{
    $connection = new PDO("mysql:host=$dbhost;dbname=$dbname;", $dbuser, $dbpass);
}catch(PDOException $e){
    echo 'Error to connect to the database. ' . $e->getMessage();
    exit;
}












 ?>
