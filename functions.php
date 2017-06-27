<?php

/**
 * Theme definition setup
 */
require get_template_directory() . '/app/boot.php';
/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/app/jetpack.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/app/customizer.php';
/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/app/extras.php';
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/app/custom-header.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/app/template-tags.php';
/**
 * Theme Widgets definition, add here your wp widgets places
 */
require get_template_directory() . '/app/widgets.php';
/**
 * For the ajax calls
 */
require get_template_directory() . '/app/ajax.php';
/**
 * Where your functions may be
 */
require get_template_directory() . '/app/functions.php';

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');



/**
 * Enqueue scripts and styles.
 */
function mysticeti_scripts() {	
	/**
	 * Checks if file exist or was modified and compiles the scss to css if needed
	 */
	$compilefile = [//this file contains boostrap scss
		'name'	=>	'app.scss',
		'from'	=>	get_stylesheet_directory().'/css/scss/app.scss',
		'to'	=>	get_stylesheet_directory().'/css/app.css',
	];
	autoCompileScss($compilefile['name'],$compilefile['from'], $compilefile['to']);

	/**
	 * For CSS 
	 */
	wp_enqueue_style( 'mysticeti-style', get_stylesheet_directory_uri().'/css/mysticeti.css' );
	//wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.min.css' );//boostrap css included
	wp_enqueue_style( 'app', get_stylesheet_directory_uri().'/css/app.css' );//boostrap css included

	/**
	 * For JS
	 */
	//wp_enqueue_script( 'mysticeti-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'mysticeti-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/js/jquery-3.1.1.min.js', array(), '20151215', true );
	wp_enqueue_script( 'tether', get_template_directory_uri() . '/js/tether.min.js', array(), '20151215', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151215', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mysticeti_scripts' );
