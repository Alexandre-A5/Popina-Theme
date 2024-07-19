<!DOCTYPE html>

<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>./minireset.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&display=swap" rel="stylesheet">

    <?php wp_head(); ?>

</head>

<?php
        wp_nav_menu(
        array(
        'theme_location' => 'main-navigation',
        'container' => 'nav',
        'container_class' => 'nav-container',
        'menu_class' => 'nav-menu'
        ));
        ?>  


<body <?php body_class('body'); ?>>