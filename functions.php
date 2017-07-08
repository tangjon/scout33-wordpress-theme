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
function tangyjon_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'tangyjon' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'tangyjon' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'tangyjon_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tangyjon_scripts() {

	wp_enqueue_script( 'tangyjon-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'tangyjon-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );


    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tangyjon_scripts' );

function tangyjon_styles(){



    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/stylesheets/bootstrap.min.css');

    wp_enqueue_style('freelancer', get_template_directory_uri() . '/stylesheets/freelancer.min.css');

    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/stylesheets/font-awesome.min.css');

    wp_enqueue_style('scout33', get_template_directory_uri() . '/stylesheets/scout33.css');

    if( is_front_page() ){

        wp_enqueue_style( 'tangyjon-style', get_stylesheet_uri() );
    }
    else {
        wp_enqueue_style( 'blog-style', get_template_directory_uri()  . '/stylesheets/blog-style.css');
    }
}
add_action( 'wp_enqueue_scripts', 'tangyjon_styles' );


function load_jquery(){
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery',  get_stylesheet_directory_uri() . '/vendor/jquery/jquery.min.js', array(), null, true);
}
add_action( 'wp_enqueue_scripts', 'load_jquery' );

// STYLE AND SCRIPTS
function wpbootstrap_scripts_with_jquery()
{

        wp_enqueue_script( 'bootstrap-script', get_stylesheet_directory_uri() . '/vendor/bootstrap/bootstrap.min.js', array(), '' , true );

        wp_enqueue_script('js-plugin', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js', array(), null, true);

//        wp_enqueue_script( 'freelancer-min-script', get_stylesheet_directory_uri() . '/js/freelancer.min.js', array(), '' , true );
        wp_enqueue_script( 'freelancer-script', get_stylesheet_directory_uri() . '/js/freelancer.js', array(), '' , true );

        wp_enqueue_script( 'parallax-nav-script', get_stylesheet_directory_uri() . '/js/parallax-nav.js', array(), '' , true );

//    wp_enqueue_script( 'jqBootstrapValidation-script', get_stylesheet_directory_uri() . '/js/jqBootstrapValidation.js', array(), '' , true );

//    wp_enqueue_script( 'contact-me-script', get_stylesheet_directory_uri() . '/js/contact_me.js', array(), '' , true );
}

add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

function load_fonts() {
    wp_register_style('monsterrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,700');
    wp_enqueue_style( 'monsterrat');

    wp_register_style('lato', 'https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic');
    wp_enqueue_style( 'lato');
}

add_action('wp_print_styles', 'load_fonts');

/**
 * CUSTOM FUNCTIONS
 */
add_filter('pull_content_filter', 'pull_content');
function pull_content($content) {
    
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
