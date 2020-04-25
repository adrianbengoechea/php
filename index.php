<?php require_once 'admin/config.php';

    $settings = array(
        'page-title' => 'Homepage - ' . SITE_TITLE,
        'page-banner-title' => 'Home',
        'banner-background' => IMG_URI . 'wallpaper.jpg'
    );

    require_once 'views/home.view.php';

?>