<?php
/**
 * Riipen Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package riipen_Theme
 */

if ( ! function_exists( 'riipen_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function riipen_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // riipen_setup
add_action( 'after_setup_theme', 'riipen_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function riipen_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'riipen_content_width', 640 );
}
add_action( 'after_setup_theme', 'riipen_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

/**
 * Register our sidebars and widgetized areas.
 *
 */
function riipen_slider_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Carousel' ),
		'id'            => 'carousels',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'riipen_slider_widgets_init' );

function riipen_slider2_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Carousel of Educators' ),
		'id'            => 'carousels2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'riipen_slider2_widgets_init' );

function riipen_slider3_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Carousel of Courses' ),
		'id'            => 'carousels3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'riipen_slider3_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function riipen_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'riipen_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function riipen_scripts() {
	wp_enqueue_style( 'riipen-style', get_stylesheet_uri() );//Styles
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');//Font Awesome
	wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700', false);//Google Fonts
	wp_enqueue_script( 'riipen-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script('jquery-ui-core');
	wp_enqueue_script ( 'riipen-comments', get_template_directory_uri() . '/build/js/scripts.min.js', array ( 'jquery' ), false, true);
	wp_enqueue_script ( 'riipen-listview', get_template_directory_uri() . '/build/js/viewchange.min.js', array ( 'jquery' ), false, true);
	wp_enqueue_script ( 'riipen-tabs', get_template_directory_uri() . '/build/js/tabs.min.js', array ( 'jquery' ), false, true);
	wp_enqueue_script ( 'riipen-animations', get_template_directory_uri() . '/build/js/css3-animate-it.min.js', array ( 'jquery' ), false, true);


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'riipen_scripts' );

/**
 * Journeys Menu
 */
function register_my_menus() {
  register_nav_menus(
    array(
      'journey-menu' => __( 'Journey Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
