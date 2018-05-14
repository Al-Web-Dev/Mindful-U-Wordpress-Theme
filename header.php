<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="shortcut icon" href="resources/images/favicon.jpg">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="resources/css/style.css" href="resources/css/reset.css">

    <link rel="stylesheet" type="text/css" href="<?php bloginfo(template_directory); ?>/resources/css/main.css" href="<?php bloginfo(template_directory); ?>resources/css/reset.css">
  </head>

   <body <?php body_class(); ?>>
    <!-- Header -->
<header>  
       <nav class="navbar navbar-expand-md navbar-dark bg fixed-top logo">
    
      <a class="navbar-brand" href="http://localhost:8888/wordpress/"><img src="<?php bloginfo(template_directory); ?>/resources/images/Logo-blue-copy.png" ></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

<?php
      wp_nav_menu( array(
  'theme_location'  => 'primary',
  'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
  'container'       => 'div',
  'container_class' => 'navbar-collapse collapse',
  'container_id'    => 'navbarsExampleDefault',
  'menu_class'      => 'navbar-nav mr-auto',
  'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
  'walker'          => new WP_Bootstrap_Navwalker(),
) );


?> 

    </nav>
</header> 