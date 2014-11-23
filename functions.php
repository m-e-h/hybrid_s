<?php
/**
 * hybrid_s functions and definitions
 *
 * @package hybrid_s
 */

/**
 * Get the template directory and make sure it has a trailing slash.
 */
$hybrid_s_dir = trailingslashit( get_template_directory() );

/**
 * Load the Hybrid Core framework and theme files.
 */
require_once( $hybrid_s_dir . 'library/hybrid.php' );

/**
 * Launch the Hybrid Core framework.
 */
new Hybrid();

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'hybrid_s_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function hybrid_s_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on hybrid_s, use a find and replace
	 * to change 'hybrid_s' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'hybrid_s', get_template_directory() . '/languages' );

	/**
	 * Theme layouts.
	 */
	add_theme_support(
		'theme-layouts',
		array(
			'1c'        => __( '1 Column',                     'hybrid_s' ),
			'2c-l'      => __( '2 Columns: Content / Sidebar', 'hybrid_s' ),
			'2c-r'      => __( '2 Columns: Sidebar / Content', 'hybrid_s' )
		),
		array( 'default' => is_rtl() ? '2c-r' :'2c-l' )
	);

	/**
	 * Enable custom template hierarchy.
	 */
	add_theme_support( 'hybrid-core-template-hierarchy' );

	/**
	 * The best thumbnail/image script ever.
	 */
	add_theme_support( 'get-the-image' );

	/**
	 * Breadcrumbs. Yay!
	 */
	add_theme_support( 'breadcrumb-trail' );

	/**
	 * Pagination.
	 */
	add_theme_support( 'loop-pagination' );

	/**
	 * Nicer [gallery] shortcode implementation.
	 */
	add_theme_support( 'cleaner-gallery' );

	/**
	 * Better captions for themes to style.
	 */
	add_theme_support( 'cleaner-caption' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'hybrid_s' ),
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'hybrid_s_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // hybrid_s_setup
add_action( 'after_setup_theme', 'hybrid_s_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function hybrid_s_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'hybrid_s' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'hybrid_s_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hybrid_s_scripts() {
	wp_enqueue_style( 'hybrid_s-style', get_stylesheet_uri() );

	wp_enqueue_script( 'hybrid_s-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'hybrid_s-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hybrid_s_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * template tags Hybrid Core .
 */
require get_template_directory() . '/inc/hc-template-tags.php';

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
