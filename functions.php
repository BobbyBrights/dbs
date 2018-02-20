<?php
/**
 * dbs functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package dbs
 */

if ( ! function_exists( 'dbs_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function dbs_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on dbs, use a find and replace
		 * to change 'dbs' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'dbs', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'dbs' ),
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
		add_theme_support( 'custom-background', apply_filters( 'dbs_custom_background_args', array(
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
add_action( 'after_setup_theme', 'dbs_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dbs_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dbs_content_width', 640 );
}
add_action( 'after_setup_theme', 'dbs_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dbs_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'dbs' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'dbs' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'dbs_widgets_init' );

// Custom post type : Projects
function create_posttype() {

	register_post_type( 'projects' ,
	array(
		'labels' => array(
		'name' => __( 'Projects' ),
		'singular_name' => __( 'Project' )
		),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'projects'),
		)
	);
}
add_action('init', 'create_posttype');

/**
 * Enqueue scripts and styles.
 */
function dbs_scripts() {

  // font
	wp_enqueue_style( 'dbs-font-drukwideweb', get_template_directory_uri() . '/fonts/commercial-type-1801-RRAJAU-web/1801-RRAJAU.css' );
	wp_enqueue_style( 'dbs-font-typotheque-neutral', 'https://fonts.typotheque.com/WF-030785-010208.css' );	
  
	// scroll reveal
	wp_enqueue_script( 'dbs__scroll-reveal', get_template_directory_uri() . '/js/scrollreveal/dist/scrollreveal.min.js', array(), true );

	wp_enqueue_style( 'dbs-style', get_stylesheet_uri() );


	// front page
	wp_enqueue_style( 'dbs__front-page-style', get_template_directory_uri() . '/css/front-page.css' );
	wp_enqueue_script( 'dbs__front-page-script', get_template_directory_uri() . '/js/front-page.js', array(), true );


	// projects page
	wp_enqueue_style( 'dbs__projects-page-style', get_template_directory_uri() . '/css/projects.css' );
	wp_enqueue_script( 'dbs__projects-page-script', get_template_directory_uri() . '/js/projects.js', array(), true );

	// single project
	wp_enqueue_style( 'dbs__project-page-style', get_template_directory_uri() . '/css/project.css' );
	wp_enqueue_script( 'dbs__project-page-script', get_template_directory_uri() . '/js/project.js', array(), true );

	// font
	wp_enqueue_style( 'dbs__front-page-font', get_template_directory_uri() . '/fonts/commercial-type-1801-RRAJAU-web/1801-RRAJAU.css' );

	wp_enqueue_script( 'dbs-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	// About Page
	wp_enqueue_style( 'dbs-about-style', get_template_directory_uri() . '/css/about.css' );
	wp_enqueue_script( 'dbs-about-js', get_template_directory_uri() . '/js/about.js', array(), true );


	wp_enqueue_script( 'dbs-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	// Header
	wp_enqueue_style( 'dbs-header-style', get_template_directory_uri() . '/css/header.css' );	
	wp_enqueue_script( 'dbs-header-js', get_template_directory_uri() . '/js/header.js', array(), true );
	
	// Footer
	wp_enqueue_style( 'dbs-footer-style', get_template_directory_uri() . '/css/footer.css' );	
	// wp_enqueue_script( 'dbs-footer-js', get_template_directory_uri() . '/js/footer.js', array(), true );	

	// Slick
	wp_enqueue_style( 'dbs__slick-css', get_template_directory_uri() . '/slick/slick/slick.css');
	wp_enqueue_style( 'dbs__slick-css-theme', get_template_directory_uri() . '/slick/slick/slick-theme.css');
	wp_enqueue_script( 'dbs__slick-js', get_template_directory_uri() . '/slick/slick/slick.min.js', '2017', true );
	
	wp_enqueue_script( 'dbs-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
}
add_action( 'wp_enqueue_scripts', 'dbs_scripts' );

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

