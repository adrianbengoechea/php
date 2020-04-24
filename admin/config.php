<?php

define('ROUTE', 'http://localhost/udemyphp/Blog/');
define('URL', '/udemyphp/Blog/');

$blog_config = array(
    'posts_per_page' => 3,
    'folder_img' => 'assets/img/'
);

$blog_admin = array(
    'user' => 'admin',
    'pass' => 'Welcome123#'
);

$posts_per_page = $blog_config['posts_per_page'];
$folder_img = $blog_config['folder_img'];

// FUNCTIONS
function admin_loggedin(){
    $login_page = get_page('admin/login');
    $actual_page = get_actual_page();

    if($login_page != $actual_page){
         return false;
    }else{
        return true;
    }
    
}

if(!admin_loggedin()){
    return_login_admin();
}

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

function get_page($slug) {
    $the_page = ROUTE . $slug . '.php';
    return $the_page; 
}

function get_actual_page() {
    return 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
}

function return_home(){
    header('Location: http://localhost/udemyphp/Blog/');
}

function return_login_admin(){
    header('Location: http://localhost/udemyphp/Blog/admin/login.php');
}

function search_exist(){
    if(isset($_GET['s']) && trim($_GET['s']) != ''){
        return true;
    }else{
        return false;
    }
}

function search_results(){
    if(isset($_GET['s']) && trim($_GET['s']) != ''){
        $the_search = filter_var(trim($_GET['s']), FILTER_SANITIZE_STRING);

        return db('SELECT * FROM data WHERE `title` LIKE :search OR `extract` LIKE :search', array(':search'=>"%$the_search%"));
    }
}

function actual_page(){
    return (isset($_GET['p'])) ? (int)$_GET['p'] : 1;
}

function get_posts($config){
    $posts_per_page = $config['posts_per_page'];
    $start = (actual_page() > 1) ? actual_page() * $posts_per_page - $posts_per_page : 0;
    $sentences = db("SELECT SQL_CALC_FOUND_ROWS * FROM data LIMIT $start, $posts_per_page", array()); 

    return $sentences;
}

function date_to_string($the_date){
    $date_transformed = DateTime::createFromFormat('m/d/Y', $the_date);
    return $date_transformed->format('l jS F Y');
}

function number_of_pages($posts_per_page) {
    $total_posts =  count(db('SELECT * FROM data', array())) / $posts_per_page;

    if( is_numeric( $total_posts) && floor($total_posts) != $total_posts ){
        return floor($total_posts) + 1;
    }else{
        return $total_posts;
    }
    
}





// $title = 'Article # ';
// $extract = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. # ';
// $date = date("m/d/Y");
// $text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc accumsan est nec ligula condimentum elementum. Aenean dictum arcu vel mollis rutrum. Aliquam libero augue, egestas nec nisl ut, facilisis auctor erat. Sed risus dolor, vulputate porta sapien nec, facilisis finibus ante. Vivamus aliquet massa sit amet leo imperdiet hendrerit. Nulla ultricies ligula sed lobortis venenatis. Donec in tempor tellus. Mauris quis mattis leo, at eleifend odio. Morbi pellentesque lacus eget tortor dictum commodo. Fusce a tortor eu tellus ultricies viverra at at ante. Curabitur vitae dolor ut lacus volutpat viverra sit amet sed libero. Cras efficitur metus bibendum, faucibus est non, rutrum purus. Praesent sit amet mi a ex porttitor rhoncus. Cras ut quam volutpat, porttitor arcu ut, aliquam eros. Quisque eleifend efficitur ligula feugiat ultricies. # ';
// $thumbnail = 'photo-';
// for($i = 9; $i <= 18; $i++){
//     print_r(db('INSERT INTO `data` (`title`, `extract`, `date`, `text`, `thumbnail`, `author`) VALUES (:q1, :q2, :q3, :q4, :q5, :q6)', array(':q1'=>$title.$i, ':q2'=>$extract.$i, ':q3'=>$date, ':q4'=>$text.$i, ':q5'=>$thumbnail.$i.'.jpg', ':q6'=>'admin')));
// } 
// echo $date;
                    
?>