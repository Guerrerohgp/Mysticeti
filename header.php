<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mysticeti
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mysticeti' ); ?></a>

	<header id="masthead" class="site-header" role="banner" style="border-bottom: 1px solid #e2e2e2;">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand site-title"><?php bloginfo( 'name' ); ?></a>
                <!--<a class="" href="#">Project name</a>-->
            </div>

            <div id="navbar" class="navbar-collapse collapse">
	            <?php 
                    wp_nav_menu( [ 
                        'menu'=>'primary',//this needs to be created from the backedn to work
                        'theme_location' => 'primary', 
                        'menu_id' => 'primary-menu', 
                        'menu_class'=>'nav navbar-nav' 
                    ]); 
                ?>
            </div>
        </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">