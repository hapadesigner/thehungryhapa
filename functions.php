<?php
/**
 * The Hungry Hapa functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package The_Hungry_Hapa
 */

if ( ! function_exists( 'the_hungry_hapa_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function the_hungry_hapa_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on The Hungry Hapa, use a find and replace
		 * to change 'the-hungry-hapa' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'the-hungry-hapa', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'the-hungry-hapa' ),
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
		add_theme_support( 'custom-background', apply_filters( 'the_hungry_hapa_custom_background_args', array(
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
add_action( 'after_setup_theme', 'the_hungry_hapa_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function the_hungry_hapa_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'the_hungry_hapa_content_width', 640 );
}
add_action( 'after_setup_theme', 'the_hungry_hapa_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function the_hungry_hapa_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'the-hungry-hapa' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'the-hungry-hapa' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'the_hungry_hapa_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function the_hungry_hapa_scripts() {
	wp_enqueue_style('the-hungry-hapa-style', get_stylesheet_uri() );

	wp_enqueue_script( 'the-hungry-hapa-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20151215', true );

	wp_enqueue_script( 'the-hungry-hapa-skip-link-focus-fix', get_template_directory_uri() . '/js/customizer.js', array('jquery'), '20151215', true );

	wp_enqueue_script( 'the-hungry-hapa-fade', get_template_directory_uri() . '/js/fade.js', array('jquery'), '20151215', true );

	wp_enqueue_script( 'the-hungry-hapa-instafeed', get_template_directory_uri() . '/js/instafeed.js', array('jquery'), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'the_hungry_hapa_scripts' );

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







add_action( 'init', 'register_cocktail_recipes' );

function cptui_register_my_cpts_cocktail_recipes() {

	/**
	 * Post Type: Cocktail Recipes.
	 */

	$labels = array(
		"name" => __( "Cocktail Recipes", "the-hungry-hapa" ),
		"singular_name" => __( "Cocktail Recipe", "the-hungry-hapa" ),
	);

	$args = array(
		"label" => __( "Cocktail Recipes", "the-hungry-hapa" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "cocktail_recipes", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "custom-fields", "comments", "revisions", "page-attributes" ),
	);

	register_post_type( "cocktail_recipes", $args );
}

add_action( 'init', 'cptui_register_my_cpts_cocktail_recipes' );




function cptui_register_my_cpts_dessert_recipes() {

	/**
	 * Post Type: Dessert Recipes.
	 */

	$labels = array(
		"name" => __( "Dessert Recipes", "the-hungry-hapa" ),
		"singular_name" => __( "Dessert Recipe", "the-hungry-hapa" ),
	);

	$args = array(
		"label" => __( "Dessert Recipes", "the-hungry-hapa" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "dessert_recipes", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "dessert_recipes", $args );
}

add_action( 'init', 'cptui_register_my_cpts_dessert_recipes' );




function cptui_register_my_cpts_snack_recipes() {

	/**
	 * Post Type: Snack Recipes.
	 */

	$labels = array(
		"name" => __( "Snack Recipes", "the-hungry-hapa" ),
		"singular_name" => __( "Snack Recipe", "the-hungry-hapa" ),
	);

	$args = array(
		"label" => __( "Snack Recipes", "the-hungry-hapa" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "snack_recipes", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "snack_recipes", $args );
}

add_action( 'init', 'cptui_register_my_cpts_snack_recipes' );






function cptui_register_my_cpts_reviews() {

	/**
	 * Post Type: Reviews.
	 */

	$labels = array(
		"name" => __( "Reviews", "the-hungry-hapa" ),
		"singular_name" => __( "Review", "the-hungry-hapa" ),
	);

	$args = array(
		"label" => __( "Reviews", "the-hungry-hapa" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "reviews", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "reviews", $args );
}

add_action( 'init', 'cptui_register_my_cpts_reviews' );








function cptui_register_my_cpts_blog_posts() {

	/**
	 * Post Type: Blog Posts.
	 */

	$labels = array(
		"name" => __( "Blog Posts", "the-hungry-hapa" ),
		"singular_name" => __( "Blog Post", "the-hungry-hapa" ),
	);

	$args = array(
		"label" => __( "Blog Posts", "the-hungry-hapa" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "blog_posts", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "blog_posts", $args );
}

add_action( 'init', 'cptui_register_my_cpts_blog_posts' );
