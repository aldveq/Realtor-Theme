<?php
/**
 * Olly Olly Realtor Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Olly_Olly_Realtor_Theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'olly_olly_realtor_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function olly_olly_realtor_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Olly Olly Realtor Theme, use a find and replace
		 * to change 'olly-olly-realtor-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'olly-olly-realtor-theme', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'main-menu' => esc_html__( 'Main Menu', 'olly-olly-realtor-theme' ),
				'footer-primary-menu' => esc_html__( 'Footer Primary Menu', 'olly-olly-realtor-theme' ),
				'footer-secondary-menu' => esc_html__( 'Footer Secondary Menu', 'olly-olly-realtor-theme' )
			)
		);

		add_theme_support( 'align-wide' );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'olly_olly_realtor_theme_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

	}
endif;
add_action( 'after_setup_theme', 'olly_olly_realtor_theme_setup' );

//Adds theme customization page on admin
add_action('admin_menu','add_single_menu_page');
function add_single_menu_page()
{
	add_menu_page("Realtor customization","Realtor Theme",'edit_posts','contact-form-content','','dashicons-building',21);
}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function olly_olly_realtor_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'olly_olly_realtor_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'olly_olly_realtor_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function olly_olly_realtor_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'olly-olly-realtor-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'olly-olly-realtor-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'olly_olly_realtor_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function olly_olly_realtor_theme_scripts() {
	
	if ( is_page('all-areas-we-serve') || is_page('contact') ) {
		wp_enqueue_style( 'leaflet-map-style', get_template_directory_uri() . '/styles/leaflet.min.css', array(), _S_VERSION);
		wp_enqueue_script( 'leaflet-map-script', get_template_directory_uri() . '/js/leaflet.min.js', array(), _S_VERSION, true);
	}

	wp_enqueue_style( 'olly-olly-realtor-theme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'olly-olly-realtor-theme-style', 'rtl', 'replace' );

	wp_enqueue_script( 'olly-olly-realtor-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'olly-olly-realtor-theme-main', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );

	$geoapify_Key_group = get_field('geoapify_key_group', 'option');
	$geoapify_Key = $geoapify_Key_group['geoapify_key_group_key'];

	wp_add_inline_script( 'olly-olly-realtor-theme-main', 'const main = ' . json_encode(array(
		'siteurl' => get_option('siteurl'),
		'contact_page_map_location' => get_field('location_settings_contact_page_office_location_group', 'option'),
		'areas_location' => get_field('location_settings_areas_location_group_areas_repeater', 'option'),
		'geoapify_Key' => $geoapify_Key,
		'accent_color' => get_field('color_palette_settings_accent_color', 'option')
	)), 'before'); 

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'olly_olly_realtor_theme_scripts' );

function olly_olly_realtor_theme_cms_block_styles() {
	wp_enqueue_style( 'block-styles', get_stylesheet_uri(), array(), _S_VERSION  );
	wp_enqueue_style( 'block-editor-styles', get_template_directory_uri() . '/styles/editor.css', array(), _S_VERSION  );
	wp_enqueue_script( 'block-javascript', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );
}
add_action( 'enqueue_block_editor_assets', 'olly_olly_realtor_theme_cms_block_styles' );

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
 * Register ACF Custom Blocks
 */

require get_template_directory() . '/inc/acf-registration/acf-blocks-registration.php';

/**
 * IDX Broker API Requests
 */

require get_template_directory() . '/inc/idx-broker-api-registration/idx-broker-api-registration.php';

/**
 * Options Page
 */
require get_template_directory() . '/inc/options-page/options-page.php';

/**
 * Utilities
 */
require get_template_directory() . '/inc/utilities/utilities.php';

/**
 * Plugins import
 */
require get_template_directory() . '/inc/utilities/plugins-import.php';

/**
 * Assets import
 */
require get_template_directory() . '/inc/utilities/assets-importer.php';

/**
 * ACF Json Registration
 */
require get_template_directory() . '/inc/utilities/acf-json-registration.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

