<?php

$link = 'mysql:host=localhost;dbname=example_database';
$user = 'root';
$pass = '';

try{
  $pdo = new PDO($link, $user, $pass);


}catch (PDOException $e){
  print '¡ERROR!: ' . $e->getMessage() . '<br>';
  die();
}

?>
