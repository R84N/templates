<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/style/font-awesome.min.css">

  
    <?php wp_head(); ?>
</head>
<body>
   
  <header class="header">
    <div class="container header__container">
        <a href="<?php echo home_url(); ?>">Home</a>
        <a href="<?php echo home_url(); ?>/about-us">About us</a>
        <a href="<?php echo home_url(); ?>/forms">Forms</a>
        <a href="<?php echo home_url(); ?>/benefits">Benefits</a>
        <a href="<?php echo home_url(); ?>/services">Services</a>
        <a href="<?php echo home_url(); ?>/gallery">Gallery</a>
        
    </div>
  </header>