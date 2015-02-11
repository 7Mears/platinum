<?php
/**
 * platinum functions and definitions
 *
 * @package platinum
 */

if ( ! function_exists( 'platinum_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function platinum_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on platinum, use a find and replace
	 * to change 'platinum' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'platinum', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'platinum' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'platinum_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // platinum_setup
add_action( 'after_setup_theme', 'platinum_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function platinum_widgets_init() {
	//Sidebar
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'platinum' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	//Home Hero
	register_sidebar( array(
		'name'          => __( 'Home Hero', 'platinum' ),
		'id'            => 'home-hero',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	//Home Content
	register_sidebar( array(
		'name'          => __( 'Home Content', 'platinum' ),
		'id'            => 'home-content',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	//Footer
	register_sidebar( array(
		'name'          => __( 'Footer', 'platinum' ),
		'id'            => 'footer',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'platinum_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function platinum_scripts() {
	wp_enqueue_style( 'platinum-style', get_stylesheet_uri() );

	wp_enqueue_script( 'platinum-javascript', get_template_directory_uri() . '/js/script.min.js', array('jquery'), '20130115', true );

	wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Open+Sans|Fjalla+One');
	wp_enqueue_style( 'googleFonts');

}
add_action( 'wp_enqueue_scripts', 'platinum_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
// require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';




/**
* Clean up wp_nav_menu
*/
//Deletes all CSS classes and id's, except for those listed in the array below
function custom_wp_nav_menu($var) {
	return is_array($var) ? array_intersect($var, array(
		//List of allowed menu classes
		'current_page_item',
		'current_page_parent',
		'current_page_ancestor',
		'first',
		'last',
		'vertical',
		'horizontal',
		'menu-item-has-children'
	)
	) : '';
}
add_filter('nav_menu_css_class', 'custom_wp_nav_menu');
add_filter('nav_menu_item_id', 'custom_wp_nav_menu');
add_filter('page_css_class', 'custom_wp_nav_menu');
//Replaces "current-menu-item" with "active"
function current_to_active($text){
	$replace = array(
		//List of menu item classes that should be changed to "active"
		'current_page_item' => 'active',
		'current_page_parent' => 'active',
		'current_page_ancestor' => 'active',
	);
	$text = str_replace(array_keys($replace), $replace, $text);
	return $text;
}
add_filter ('wp_nav_menu','current_to_active');


add_action( 'after_setup_theme', 'platinum_setup' );

// Remove meta links at header
remove_action( 'wp_head', 'wp_generator' ) ;
remove_action( 'wp_head', 'wlwmanifest_link' ) ;
remove_action( 'wp_head', 'rsd_link' ) ;
// Remove RSS feeds
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'feed_links_extra', 3 );
