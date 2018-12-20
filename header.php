<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package generic
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?> /Assests/css/bootstrap.min.css" />
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?> /Assests/css/bootstrap-theme.min.css" />
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?> /Assests/css/custom.css" />
    
    <?php wp_head(); ?>
	<!--Connect Bootstrap Css file --->
    
    
    
    <!--- Bootstrap JS --->
    <script src="<?php bloginfo('stylesheet_directory'); ?>/Assests/js/bootstrap.js"></script>
    
	
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'generic' ); ?></a>
    
      <?php
	   wp_nav_menu (array(
	   'theme_location' => 'menu-2',
	   	'container' => 'nav',
		'container_class' => '',
		'container_id' => '',
		'menu' => 'ul',
		'menu_id' => '',
		'menu_class' => 'list-inline',
		'depth' => '5',
		
		 					));
							
							
									?>

	
    <nav class="navbar navbar-inverse">
  
  
  <div class="container-fluid">
    <div class="navbar-header"> 
    <button class="navbar-toggle" data-toggle="collapse" data-target="#mainmenu">
    <i class="icon-bar"></i>
    <i class="icon-bar"></i>
    <i class="icon-bar"></i>
    <i class="icon-bar"></i>
    </button>
    
      <a class="navbar-brand" href="#"><img class="img-fluid" itemprop="logo" width="30px" src="<?php bloginfo('stylesheet_directory'); ?>/Assests/img/grid4.jpg" /></a>
    </div>
    
    <?php
	   wp_nav_menu (array(
	   'theme_location' => 'menu-1',
	   	'container' => 'div',
		'container_class' =>  'collapse navbar-collapse',
		'container_id' => 'mainmanu',
		'menu' => 'ul',
		'menu_id' => '',
		'menu_class' => 'nav navbar-nav',
		'depth' => '5',
		
		 					));
							
							
									?>
    <div class="collapse navbar-collapse" id="mainmenu">
    
    </div>
    
    
  </div>
</nav>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

	<div id="content" class="site-content">
