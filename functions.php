<?php
/**
 * tangyjon functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tangyjon
 */
require_once('wp_bootstrap_navwalker.php');

if ( ! function_exists( 'tangyjon_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function tangyjon_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on tangyjon, use a find and replace
	 * to change 'tangyjon' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'tangyjon', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'Primary', 'tangyjon' ),
	) );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'tangyjon' ),
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
	add_theme_support( 'custom-background', apply_filters( 'tangyjon_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'tangyjon_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tangyjon_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tangyjon_content_width', 640 );
}
add_action( 'after_setup_theme', 'tangyjon_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function scout33_sidebar_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'tangyjon' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'tangyjon' ),
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'scout33_sidebar_init' );

/**
 * Enqueue scripts and styles.
 */

function scout33_scripts_styles(){
    wp_enqueue_style('scout33', get_template_directory_uri() . '/stylesheets/scout33.css');

    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), null, true);
    wp_enqueue_style('bootstrap4', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css');
    wp_enqueue_script( 'popper','https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'bootjs','https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js', array( 'jquery' ),'',true );
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');



//    if( is_front_page() ){
//        wp_enqueue_style( 'scout33-style', get_stylesheet_uri() );
//    }
//    else {
//        wp_enqueue_style( 'twentyseventeen-block-style', get_theme_file_uri( '/assets/css/blocks.css' ), array( 'twentyseventeen-style' ), '20190105' );

//        wp_enqueue_style( 'blog-style', get_template_directory_uri()  . '/stylesheets/blog-style.css');
//    }
}
add_action( 'wp_enqueue_scripts', 'scout33_scripts_styles' );


function add_menu_link_class( $atts, $item, $args ) {
    if (property_exists($args, 'link_class')) {
        $atts['class'] = $args->link_class;
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


// LOAD JAVA SCRIPT
function wpbootstrap_scripts_with_jquery()
{

        wp_enqueue_script( 'bootstrap-script', get_stylesheet_directory_uri() . 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js', array(), '' , true );

        wp_enqueue_script('js-plugin', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js', array(), null, true);

        wp_enqueue_script( 'freelancer-script', get_stylesheet_directory_uri() . '/js/freelancer.js', array(), '' , true );

        wp_enqueue_script( 'parallax-nav-script', get_stylesheet_directory_uri() . '/js/parallax-nav.js', array(), '' , true );

        wp_enqueue_script( 'jqBootstrapValidation-script', get_stylesheet_directory_uri() . '/js/jqBootstrapValidation.js', array(), '' , true );

//        wp_enqueue_script( 'contact-me-script', get_stylesheet_directory_uri() . '/js/contact_me.js', array(), '' , true );
}

//add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

// LOAD FONTS
function load_fonts() {
    wp_register_style('monsterrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,700');
    wp_enqueue_style( 'monsterrat');

    wp_register_style('lato', 'https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic');
    wp_enqueue_style( 'lato');
}

add_action('wp_print_styles', 'load_fonts');

add_filter('pull_content_filter', 'pull_content');
function pull_content($content) {

}

function the_featured_image_gallery( $atts = array() ) {
    $setting_id = 'gallery-section-settings';
    $ids_array = get_theme_mod( $setting_id );
    if ( is_array( $ids_array ) && ! empty( $ids_array ) ) {
        return $ids_array;
    }
}
add_action('the_featured_image_gallery', 'the_featured_image_gallery');
/**
 * Implement the Custom Header feature.
 */
// require get_template_directory() . '/inc/custom-header.php';

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
