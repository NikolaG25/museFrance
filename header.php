<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header"> 
    <div class="nav-toggle" onclick='document.documentElement.classList.toggle("menu-open")'>
          <div class="nav-toggle-bar"></div>
    </div>
    <a class="logoHeader" href="<?php echo home_url( '/' ); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo_muse_france_noir.png" alt="Logo">
    </a> 
    <?php wp_nav_menu( array( 
        'theme_location' => 'main',
        'container' => 'ul',
        'menu_class' => 'header__nav',
        ) ); ?>
    </header>
    <?php wp_body_open(); ?>