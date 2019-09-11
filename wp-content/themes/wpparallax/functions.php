<?php
/**
 * wpparallax functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wpparallax
 */

if ( ! function_exists( 'wp_parallax_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function wp_parallax_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on wpparallax, use a find and replace
		 * to change 'wpparallax' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'wpparallax', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		// Enable theme support for Gutenberg wide images.
		add_theme_support( 'gutenberg', array(
			'wide-images' => true,
		) );
		
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
	    add_image_size('wpparallax-slider-image', 1920, 800, true);
	    add_image_size('wpparallax-about-img', 520, 305, true);
	    add_image_size('wpparallax-service-thumb', 80, 80, true);
        add_image_size('wpparallax-port-thumb2', 300, 300, true);
        add_image_size('wpparallax-blog-image', 390, 250, true);
        add_image_size('wpparallax-single-blog-image', 1170, 650, true);


		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'wpparallax' ),
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
		add_theme_support( 'custom-background', apply_filters( 'wpparallax_custom_background_args', array(
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
add_action( 'after_setup_theme', 'wp_parallax_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_parallax_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp_parallax_content_width', 640 );
}
add_action( 'after_setup_theme', 'wp_parallax_content_width', 0 );

/**
 * Implement the Enqueue Functions.
 */
require get_template_directory() . '/inc/wpparallax-enqueue.php';

/**
 * Editor style
 */
if( ! function_exists( 'wp_parallax_add_editor_style' ) ) {
	function wp_parallax_add_editor_style() {
		add_editor_style( 'editor-style.css' );
	}
	add_action( 'admin_init', 'wp_parallax_add_editor_style' );
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
 * include theme hooks.
 */
require get_template_directory() . '/inc/wpparallax-hooks.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/customizer/customizer.php';
require get_template_directory() . '/customizer/wpparallax-customizer.php';
require get_template_directory() . '/inc/wpparallax-functions.php';
require get_template_directory() . '/inc/wpparallax-meta.php';
require get_template_directory() . '/customizer/wpparallax-custom-controls.php';
require get_template_directory() . '/customizer/wpparallax-sanitize.php';
require get_template_directory() . '/assets/css/dynamic-styles.php';
require get_template_directory() . '/inc/config/plugins-config.php';
require get_template_directory() . '/inc/config/tgm-plugin-activation.php';

/**
 * Widgets additions.
 */
require get_template_directory() . '/inc/widgets/widget-functions.php';



/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}


/**
 * Load welcome section to admin.
 */
if ( is_admin() ) {
    require get_template_directory().'/inc/welcome/class.info.php';
    require get_template_directory().'/inc/welcome/info.php';
}

