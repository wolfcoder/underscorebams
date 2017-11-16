<?php
/**
 * underscorebams functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package underscorebams
 */

if ( ! function_exists( 'underscorebams_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function underscorebams_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on underscorebams, use a find and replace
		 * to change 'underscorebams' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'underscorebams', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'underscorebams' ),
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
		add_theme_support( 'custom-background', apply_filters( 'underscorebams_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 150,
			'flex-width'  => true,
			'flex-height' => true,
			'header-text' => array( 'site-title', 'site-description' ),
		) );

		/**
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support( 'post-thumbnails' );

		add_image_size( 'underscorebams-featured', 750, 410, true );
		add_image_size( 'underscorebams-featured-fullwidth', 1140, 624, true );
		add_image_size( 'tab-small', 60, 60 , true ); // Small Thumbnail

	}
endif;
add_action( 'after_setup_theme', 'underscorebams_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function underscorebams_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'underscorebams_content_width', 640 );
}
add_action( 'after_setup_theme', 'underscorebams_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function underscorebams_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Main Navigation', 'underscorebams' ),
		'id'            => 'widget-main-nav',
		'description'   => esc_html__( 'Widget for main menu in header', 'underscorebams' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Second Navigation', 'underscorebams' ),
		'id'            => 'widget-second-nav',
		'description'   => esc_html__( 'Widget for second navigation can be add cart in eccomoerce website or search in blog website', 'underscorebams' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'underscorebams' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'underscorebams' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Widget Footer 1', 'underscorebams' ),
		'id'            => 'widget-footer-1',
		'description'   => esc_html__( 'Footer side bar.', 'underscorebams' ),
		'before_widget' => '<section id="%1$s" class=" %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'underscorebams_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function underscorebams_scripts() {
	wp_enqueue_style( 'underscorebams-style', get_template_directory_uri(). '/style.min.css' , array(), '1.0.0' ,'all' );
//	wp_enqueue_style( 'underscorebams-woocommerce', get_template_directory_uri(). '/woocommerce.css' , array(), '1.0.0' ,'all' );
	wp_enqueue_style('font-awesome', get_template_directory_uri().'/lib/font-awesome/scss/font-awesome.min.css', array(),'4.7.0', 'all');
//	wp_enqueue_script( 'underscorebams-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

//	wp_deregister_script('jquery');
//	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);

	wp_register_script( 'underscorebams-js', get_template_directory_uri() . '/lib/bams/js/bams-script.min.js', array('jquery'), '1.0.0', true );

//	wp_enqueue_script( 'underscorebams-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script ('underscorebams-js');
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'underscorebams_scripts', 10 );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * bams optimization wordpress based on https://developers.google.com/speed/pagespeed/insights/
 *
 * remove wp version param from any enqueued scripts
 * https://www.virendrachandak.com/techtalk/how-to-remove-wordpress-version-parameter-from-js-and-css-files/
 *
 * remove wp generator
 * remove emoji function for emoticon
 */
//
function bams_remove_wp_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}
// Remove WP Version From Styles
add_filter( 'style_loader_src', 'bams_remove_wp_ver_css_js', 90 );
// Remove WP Version From Scripts
add_filter( 'script_loader_src', 'bams_remove_wp_ver_css_js', 90);

//remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7 );
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

/*function to add async to all scripts*/
//function js_async_attr($tag){
//
//# Add async to all remaining scripts
//	return str_replace( ' src', ' async="defer" src', $tag );
//}
//add_filter( 'script_loader_tag', 'js_async_attr', 10 );

// Woocommerce theme support
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}