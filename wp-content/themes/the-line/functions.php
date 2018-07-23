<?php
/**
 * The Line functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package The_Line
 */

if ( ! function_exists( 'the_line_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function the_line_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on The Line, use a find and replace
		 * to change 'the-line' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'the-line', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'the-line' ),
		) );

		register_nav_menus( array(
			'menu-2' => esc_html__( 'Mobile', 'the-line' ),
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
		add_theme_support( 'custom-background', apply_filters( 'the_line_custom_background_args', array(
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
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'the_line_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function the_line_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'the_line_content_width', 640 );
}
add_action( 'after_setup_theme', 'the_line_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function the_line_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'the-line' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'the-line' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'the_line_widgets_init' );

function tutsplus_widgets_init()
{
    // First footer widget area, located in the footer. Empty by default.
    register_sidebar([
        'name' => __('Footer - Colonna 1', 'tutsplus'),
        'id' => 'first-footer-widget-area',
        'description' => __('La prima colonna del footer', 'tutsplus'),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ]);

    // Second Footer Widget Area, located in the footer. Empty by default.
    register_sidebar([
        'name' => __('Footer - Colonna 2', 'tutsplus'),
        'id' => 'second-footer-widget-area',
        'description' => __('La seconda colonna del footer', 'tutsplus'),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ]);

    // Third Footer Widget Area, located in the footer. Empty by default.
    register_sidebar([
        'name' => __('Footer - Colonna 3', 'tutsplus'),
        'id' => 'third-footer-widget-area',
        'description' => __('La terza colonna del footer', 'tutsplus'),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ]);
}
// Register sidebars by running tutsplus_widgets_init() on the widgets_init hook.
add_action('widgets_init', 'tutsplus_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function the_line_scripts() {
	wp_enqueue_style( 'the-line-style', get_stylesheet_uri() );

	wp_enqueue_script( 'the-line-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'the-line-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'the_line_scripts' );

/**
 * Remove Admin Bar
 */
show_admin_bar(false);

/**
 * Add Google Maps API KEY
 */
function my_acf_init() {
  acf_update_setting('google_api_key', 'AIzaSyD3UaVdW8UpKAqULko4-UrPBYwQkC0VW8Y');
}
add_action('acf/init', 'my_acf_init');

/**
 * Implement the Option Page.
 */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Opzioni Generali del Tema',
		'menu_title'	=> 'Opzioni Tema',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'icon_url' 		=> 'dashicons-admin-generic',
		'position'		=> 2
		));
}

/**
 * Automatic Info Photo
 */
add_action( 'add_attachment', 'ced_add_image_meta_data' );
function ced_add_image_meta_data( $attachment_ID ) {

 $filename   =   $_REQUEST['name']; // or get_post by ID
 $withoutExt =   preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
 $withoutExt =   str_replace(array('-'), ' ', $withoutExt);

 $my_post = array(
   'post_title' 	=> $withoutExt,  // title
   'ID'           => $attachment_ID,
   'post_excerpt' => $withoutExt,  // caption
   'post_content' => $withoutExt,  // description
 );
 wp_update_post( $my_post );
 // update alt text for post
 update_post_meta($attachment_ID, '_wp_attachment_image_alt', $withoutExt );
}

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

