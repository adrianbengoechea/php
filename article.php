<?php require_once 'admin/config.php';

    if(isset($_GET['id']) && !empty($_GET['id'])){
        $post_id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
        $post_data = db("SELECT * FROM data WHERE id = $post_id", array());
    }else{
        return_home();
    }
    
    $settings = array(
        'page-title' => $post_data[0]['title'] . ' - ' . SITE_TITLE,
        'page-banner-title' => $post_data[0]['title'],
        'banner-background' => IMG_URI . 'wallpaper.jpg'
    );

    require_once 'views/article.view.php';

?>