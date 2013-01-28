<?php
/**
 * stratus functions and definitions
 *
 * @package stratus
 * @since stratus 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'stratus_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since stratus 1.0
 */
function stratus_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	require( get_template_directory() . '/inc/extras.php' );

	/**
	 * Customizer additions
	 */
	require( get_template_directory() . '/inc/customizer.php' );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on stratus, use a find and replace
	 * to change 'stratus' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'stratus', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	// register_nav_menus( array(
	// 	'primary' => __( 'Primary Menu', 'stratus' ),
	// ) );
	register_nav_menu( 'primary', __( 'Primary Menu', 'stratus' ) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
}
endif; // stratus_setup
add_action( 'after_setup_theme', 'stratus_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since stratus 1.0
 */
function stratus_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar', 'stratus' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );
}
add_action( 'widgets_init', 'stratus_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function stratus_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_script( 'small-menu', get_template_directory_uri() . '/js/small-menu.js', array( 'jquery' ), '20120206', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'stratus_scripts' );

/**
 * Implement the Custom Header feature
 */
//require( get_template_directory() . '/inc/custom-header.php' );

/**
 * Set which posts types appear on home page
 * Important: You must check both if is_home() and if this is the main query.
 * If you don't include is_main_query(), this will run for other items like
 * sidebars, menus, admin functions, which will break menus and other things on the home page.
 * http://codex.wordpress.org/Plugin_API/Action_Reference/pre_get_posts
 */

function set_home_post_types( $query ) {
	if ( is_home() && $query->is_main_query() ) {
		$query->set( 'post_type', array( 'portfolio') ); // array of all acceptable post types
	}
}

add_filter( 'pre_get_posts', 'set_home_post_types' );