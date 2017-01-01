<?php

/**
 * Mysticeti Vendor Dependencies
 */
require 'vendor/autoload.php';


/**
 * Mysticeti functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Mysticeti
 */

if ( ! function_exists( 'mysticeti_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mysticeti_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Mysticeti, use a find and replace
	 * to change 'mysticeti' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'mysticeti', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'mysticeti' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'mysticeti_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'mysticeti_setup' );


function autoCompileScss($filename,$inputFile, $outputFile)
{
	$cachefile 		= get_stylesheet_directory()."/css/.sass-cache/{$filename}.cache";
	$scssfiletime	= filemtime($inputFile);
	$compile 		= true;

	if(file_exists($cachefile))
	{
 		$cachetime 	= unserialize(file_get_contents($cachefile));
		$compile 	= ($cachetime < $scssfiletime)? true : false;	
	}

	if($compile)
	{
		try {
			$scss = new Leafo\ScssPhp\Compiler();
			// $scss = new scssc();
			// $scss->setFormatter('scss_formatter'); // scss_formatter | scss_formatter_nested | scss_formatter_compressed
			$scss->addImportPath(get_stylesheet_directory().'/css/scss/');

			$out = $scss->compile(file_get_contents($inputFile));
			// file_put_contents not working out of disk space
			file_put_contents($outputFile, $out);
			file_put_contents($cachefile, serialize($scssfiletime));
		}catch(Exception $e){
			echo '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>'.$e->getMessage().' in '.$e->getFile().'</div>';
		}
	}
}
