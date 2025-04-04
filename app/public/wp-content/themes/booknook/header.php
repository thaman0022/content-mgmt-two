<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="logo"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></div>
    <nav><?php wp_nav_menu(array('theme_location' => 'main-menu')); ?></nav>
</header>