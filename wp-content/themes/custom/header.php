<!DOCTYPE html>
<html class="no-js">
<head>
  <title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- slick slider CDNs -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/slick.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/slick-theme.css"/>


  <link rel="stylesheet" href="https://developers.google.com/maps/documentation/javascript/demos/demos.css">

  <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Merriweather:400,400i,900" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
  
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--[if lt IE 8]>
<div class="alert alert-warning">
  You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->

<nav class="navbar">
  <div class="navbar__content">
    <a class="navbar__brand" href="/"><?php echo get_option('blogname'); ?></a>
        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'menu_class'        => 'navbar__nav',
                )
            );
        ?>

  </div>
  <a id="menu_toggle" class="navbar__icon" href="#">
    <div class="navbar__hamburger"></div>
  </a>
</nav>
