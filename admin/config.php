<?php

define('ROUTE', 'http://localhost/udemyphp/Blog/');
define('URL', '/udemyphp/Blog/');

$blog_config = array(
    'posts_per_page' => 4,
    'folder_img' => 'assets/img'
);

$blog_admin = array(
    'user' => 'admin',
    'pass' => 'Welcome123#'
);

// FUNCTIONS
function db($sql, $values){

    # DB Connection
    $db = 'mysql:host=localhost;dbname=blog;';
    $dbuser = 'root';
    $dbpass = '';

    try{
        $db_connection = new PDO($db, $dbuser, $dbpass);
    }catch(PDOException $e){
        echo 'Error to connect to the database. ' . $e->getMessage(); 
        exit;
    }
  
    # Send Query to the DB
    $sql = $sql;
    $consult = $db_connection->prepare($sql);
    $consult->execute($values);
  
    # Return with all elements finded
    return $consult->fetchAll();
}





// $title = 'Article # ';
// $extract = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. # ';
// $date = date("m/d/Y");
// $text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. Sed risus dolor, vulputate porta sapien nec, facilisis finibus ante. Vivamus aliquet massa sit amet leo imperdiet hendrerit. Nulla ultricies ligula sed lobortis venenatis. Donec in tempor tellus. Mauris quis mattis leo, at eleifend odio. Morbi pellentesque lacus eget tortor dictum commodo. Fusce a tortor eu tellus ultricies viverra at at ante. Curabitur vitae dolor ut lacus volutpat viverra sit amet sed libero. Cras efficitur metus bibendum, faucibus est non, rutrum purus. Praesent sit amet mi a ex porttitor rhoncus. Cras ut quam volutpat, porttitor arcu ut, aliquam eros. Quisque eleifend efficitur ligula feugiat ultricies. # ';
// $thumbnail = 'photo-';
// for($i = 1; $i <= 8; $i++){
//     print_r(db('INSERT INTO `data` (`title`, `extract`, `date`, `text`, `thumbnail`) VALUES (:q1, :q2, :q3, :q4, :q5)', array(':q1'=>$title.$i, ':q2'=>$extract.$i, ':q3'=>$date, ':q4'=>$text.$i, ':q5'=>$thumbnail.$i.'.jpg')));
// } 
// echo $date;
                    
?>