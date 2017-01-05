<?php
/**
 * Twenty Seventeen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function future_setup() {

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );


	
}
add_action( 'after_setup_theme', 'future_setup' );

/**
 * Enqueue scripts and styles.
 */
function future_scripts() {
	// Theme stylesheet.
	wp_enqueue_style( 'future-style', get_stylesheet_uri());

	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_script( 'future-ie8-html', get_theme_file_uri('assets/js/ie/html5shiv.js'));
	wp_script_add_data( 'future-ie8-html', 'conditional', 'lte IE 8' );
	// conditional IE9 
	wp_enqueue_style( 'future-ie9', get_theme_file_uri('assets/css/ie9.css'));
	wp_style_add_data( 'future-ie9', 'conditional', 'lte IE 9' );
	// condition IE8
	wp_enqueue_style( 'future-ie8', get_theme_file_uri('assets/css/ie8.css'));
	wp_style_add_data( 'future-ie8', 'conditional', 'lte IE 8' );

	// skel
	wp_enqueue_script( 'skel', get_theme_file_uri('assets/js/skel.min.js'),array('jquery'), 4.7, true);
	// util
	wp_enqueue_script( 'util', get_theme_file_uri('assets/js/util.min.js'),array(), 4.7,true);
	// main
	wp_enqueue_script( 'main', get_theme_file_uri('assets/js/main.min.js'),array(), 4.7, true);
	// condition IE8
	wp_enqueue_script( 'future-responsive-ie8', get_theme_file_uri('assets/js/ie/respond.min.js'),array(), 4.7, true);
	wp_script_add_data( 'future-responsive-ie8', 'conditional', 'lte IE 8' );

	


}
add_action( 'wp_enqueue_scripts', 'future_scripts' );
?>