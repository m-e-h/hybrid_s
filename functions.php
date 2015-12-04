<?php
/**
 * hybrid_s functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hybrid_s
 */

// Get the template directory and make sure it has a trailing slash.
$hybrid_s_dir = trailingslashit( get_template_directory() );

// Load the Hybrid Core framework.
require_once( $hybrid_s_dir . 'library/hybrid.php'        );

// Launch the Hybrid Core framework.
new Hybrid();

if ( ! function_exists( 'hybrid_s_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function hybrid_s_setup() {

	// Theme layouts.
	add_theme_support( 'theme-layouts', array( 'default' => is_rtl() ? '2c-r' :'2c-l' ) );

	// Enable custom template hierarchy.
	add_theme_support( 'hybrid-core-template-hierarchy' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Breadcrumbs. Yay!
	add_theme_support( 'breadcrumb-trail' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'get-the-image' );

	// Nav menu locations.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'hybrid_s' ),
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'hybrid_s_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	hybrid_set_content_width( 640 );
}
endif; // hybrid_s_setup
add_action( 'after_setup_theme', 'hybrid_s_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hybrid_s_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Primary', 'hybrid_s' ),
		'id'            => 'primary',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Subsidiary', 'hybrid_s' ),
		'id'            => 'subsidiary',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'hybrid_s_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hybrid_s_scripts() {

	wp_enqueue_script( 'hybrid_s-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'hybrid_s-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	// Load parent theme stylesheet if child theme is active.
	if ( is_child_theme() )
		wp_enqueue_style( 'hybrid-parent' );

	// Load active theme stylesheet.
	wp_enqueue_style( 'hybrid-style' );
}
add_action( 'wp_enqueue_scripts', 'hybrid_s_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
