<?php require_once 'admin/config.php';

    if(!search_exist()){
        return_home();
    }

    $settings = array(
        'page-title' => 'Search - ' . SITE_TITLE,
        'page-banner-title' => 'Search Results',
        'banner-background' => IMG_URI . 'wallpaper.jpg'
    );

    require_once 'views/search.view.php';

?>