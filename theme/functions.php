<?php
/**
 * wynim-website functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wynim-website
 */

require_once get_template_directory() . '/vendor/autoload.php';

if ( ! defined( 'WYNIM_WEBSITE_VERSION' ) ) {
	/*
	 * Set the theme’s version number.
	 *
	 * This is used primarily for cache busting. If you use `npm run bundle`
	 * to create your production build, the value below will be replaced in the
	 * generated zip file with a timestamp, converted to base 36.
	 */
	define( 'WYNIM_WEBSITE_VERSION', '0.1.0' );
}

if ( ! defined( 'WYNIM_WEBSITE_TYPOGRAPHY_CLASSES' ) ) {
	/*
	 * Set Tailwind Typography classes for the front end, block editor and
	 * classic editor using the constant below.
	 *
	 * For the front end, these classes are added by the `wynim_website_content_class`
	 * function. You will see that function used everywhere an `entry-content`
	 * or `page-content` class has been added to a wrapper element.
	 *
	 * For the block editor, these classes are converted to a JavaScript array
	 * and then used by the `./javascript/block-editor.js` file, which adds
	 * them to the appropriate elements in the block editor (and adds them
	 * again when they’re removed.)
	 *
	 * For the classic editor (and anything using TinyMCE, like Advanced Custom
	 * Fields), these classes are added to TinyMCE’s body class when it
	 * initializes.
	 */
	define(
		'WYNIM_WEBSITE_TYPOGRAPHY_CLASSES',
		'prose prose-neutral max-w-none prose-a:text-primary'
	);
}

if ( ! function_exists( 'wynim_website_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function wynim_website_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on wynim-website, use a find and replace
		 * to change 'wynim-website' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'wynim-website', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'header-menu' => __( 'Primary', 'wynim-website' ),
				'footer-menu' => __( 'Footer Menu', 'wynim-website' ),
			)
		);

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

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );
		add_editor_style( 'style-editor-extra.css' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Remove support for block templates.
		remove_theme_support( 'block-templates' );

		// Add support for custom logo
		add_theme_support( 'custom-logo' , [
			'height'      => 42,
			'width'       => 150,
			'flex-height' => true,
			'flex-width'  => true,
		]);
	}
endif;
add_action( 'after_setup_theme', 'wynim_website_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wynim_website_widgets_init() {
	// Footer widget area.
	register_sidebar(
		array(
			'name'          => __( 'Footer', 'wynim-website' ),
			'id'            => 'footer-sidebar',
			'description'   => __( 'Add widgets here to appear in your footer.', 'wynim-website' ),
			'before_widget' => '<section id="%1$s" class="w-full md:flex-1 widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title text-lg font-bold mb-4">',
			'after_title'   => '</h2>',
		)
	);

	// Sidebar for single posts.
	register_sidebar(
		array(
			'name'          => __( 'Single Post Sidebar', 'wynim-website' ),
			'id'            => 'single-post-sidebar',
			'description'   => __( 'Add widgets here to appear in the sidebar of single posts.', 'wynim-website' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title text-lg font-bold mb-4">',
			'after_title'   => '</h2>',
		)
	);

	// Sidebar for categories/tag archives.
	register_sidebar(
		array(
			'name'          => __( 'Category/Tag Archive Sidebar', 'wynim-website' ),
			'id'            => 'category-tag-archive-sidebar',
			'description'   => __( 'Add widgets here to appear in the sidebar of category and tag archives.', 'wynim-website' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s py-8">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title text-xl font-bold mb-4">',
			'after_title'   => '</h2>',
		)
	);

	// Sidebar for finder search results.
	register_sidebar(
		array(
			'name'          => __( 'Finder Search Results Sidebar', 'wynim-website' ),
			'id'            => 'finder-search-results-sidebar',
			'description'   => __( 'Add widgets here to appear in the sidebar of finder search results.', 'wynim-website' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s py-8">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title text-xl font-bold mb-4">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'wynim_website_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wynim_website_scripts() {
	wp_enqueue_style( 'wynim-website-style', get_stylesheet_uri(), array(), WYNIM_WEBSITE_VERSION );
	wp_enqueue_script( 'wynim-website-script', get_template_directory_uri() . '/js/script.min.js', array(), WYNIM_WEBSITE_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wynim_website_scripts' );

/**
 * Enqueue the block editor script.
 */
function wynim_website_enqueue_block_editor_script() {
	wp_enqueue_script(
		'wynim-website-editor',
		get_template_directory_uri() . '/js/block-editor.min.js',
		array(
			'wp-blocks',
			'wp-edit-post',
		),
		WYNIM_WEBSITE_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'wynim_website_enqueue_block_editor_script' );

/**
 * Enqueue the script necessary to support Tailwind Typography in the block
 * editor, using an inline script to create a JavaScript array containing the
 * Tailwind Typography classes from WYNIM_WEBSITE_TYPOGRAPHY_CLASSES.
 */
function wynim_website_enqueue_typography_script() {
	if ( is_admin() ) {
		wp_enqueue_script(
			'wynim-website-typography',
			get_template_directory_uri() . '/js/tailwind-typography-classes.min.js',
			array(
				'wp-blocks',
				'wp-edit-post',
			),
			WYNIM_WEBSITE_VERSION,
			true
		);
		wp_add_inline_script( 'wynim-website-typography', "tailwindTypographyClasses = '" . esc_attr( WYNIM_WEBSITE_TYPOGRAPHY_CLASSES ) . "'.split(' ');", 'before' );
	}
}
add_action( 'enqueue_block_assets', 'wynim_website_enqueue_typography_script' );

/**
 * Add the Tailwind Typography classes to TinyMCE.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function wynim_website_tinymce_add_class( $settings ) {
	$settings['body_class'] = WYNIM_WEBSITE_TYPOGRAPHY_CLASSES;
	return $settings;
}
add_filter( 'tiny_mce_before_init', 'wynim_website_tinymce_add_class' );

/**
 * Add custom query variables for the finder search form.
 * This allows us to use the `type` and `q` query variables in the search form.
 *
 * @param array $vars Array of query variables.
 * @return array
 */
function wynim_website_query_vars($vars) {
	$vars[] = 'q';
	$vars[] = 'type';
	return $vars;
}
add_filter('query_vars', 'wynim_website_query_vars');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Theme-specific shortcodes.
 */
require get_template_directory() . '/inc/shortcodes.php';

/**
 * Pods Framework-specific modifications.
 */
if ( class_exists( 'Pods' ) ) {
	require get_template_directory() . '/inc/pods-framework.php';
}
