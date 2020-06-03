<?php
/**
 * Twenty Nineteen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 */

/**
 * Implements hook_help().
 */
function themeslug_enqueue_style() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '1.1', 'all' );
	wp_enqueue_style( 'blog-home', get_template_directory_uri() . '/css/blog-home.css', array(), '1.1', 'all' );
}

/**
 * Themeslug script function
 *
 * @return void
 */
function themeslug_enqueue_script() {
	wp_enqueue_script( 'jquery', '', array(), '1.0', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . 'vendor/bootstrap/js/bootstrap.bundle.min.js', array( 'jquery' ), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );


/**
 * Activating menus
 */
function wpb_custom_new_menu() {
	register_nav_menu( 'my-custom-menu', ( 'My Custom Menu' ) );
}
add_action( 'init', 'wpb_custom_new_menu' );

// Post thumbnail.
add_theme_support( 'post-thumbnails' );

/**
 * Custom header
 */
function themename_custom_header_setup() {
	$args = array(
		'default-image'      => get_template_directory_uri() . 'img/default-image.jpg',
		'default-text-color' => '000',
		'width'              => 1000,
		'height'             => 250,
		'flex-width'         => true,
		'flex-height'        => true,
	);
	add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'themename_custom_header_setup' );



/**
 * Custom sidebar and widgets
 */
function my_register_sidebars() {
	/* Register the 'primary' sidebar. */
	register_sidebar(
		array(
			'id'            => 'primary',
			'name'          => __( 'Primary Sidebar' ),
			'description'   => __( 'A short description of the sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	/* Repeat register_sidebar() code for additional sidebars. */
	register_sidebar(
		array(
			'id'            => 'secondary',
			'name'          => __( 'secondary Sidebar' ),
			'description'   => __( 'A short description of the sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'my_register_sidebars' );

/**
 * Custom post format
 *
 * @return void
 */
function themename_post_formats_setup() {
	add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
}
add_action( 'after_setup_theme', 'themename_post_formats_setup' );

/**
 * Custom logo
 */
function themename_custom_logo_setup() {
	$defaults = array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

// This code is responsible for to enable  Custom background color.
$args = array(
	'default-color' => '000',
	'default-image' => get_template_directory_uri() . '/images/wapuu.jpg',
);
add_theme_support( 'custom-background', $args );

if ( ! isset( $content_width ) ) {
	$content_width = 800;
}

