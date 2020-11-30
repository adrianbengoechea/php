<?php

/* CONSTANTS */
define("PATH", "/git/db_connection");

/* DB CREDENTIALS */
$host = 'localhost';
$dbname = 'test_db_connection';
$user = 'root';
$pass = '';

/** TRY TO CONNECT */
try{
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
}catch (PDOException $e){
  $error = $e->getMessage();
  print_r('<h2>Something Wrong...</h2>');
  print_r("<p>Cannot connect to the database. $error</p>");
  die();
}