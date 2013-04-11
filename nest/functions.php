<?php

load_theme_textdomain( 'nest', get_stylesheet_directory() . '/languages' );

/* ========== Theme widgets ========== */

include( get_stylesheet_directory() . '/includes/nest.widgets.php' );

/* ========== Theme options ========== */

include( get_stylesheet_directory() . '/includes/nest.options.php' );

/* ========== Theme parts ========== */

include( get_stylesheet_directory() . '/includes/nest.themeparts.php' );

/* ========== Theme setup ========== */

function nest_theme_setup() {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );
}
add_action( 'after_setup_theme', 'nest_theme_setup' );

function nest_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Primary Widget Area', 'nest' ),
		'id' => 'primary-widget-area',
		'description' => __( 'The primary widget area', 'nest' ),
		'before_widget' => '<aside id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'init', 'nest_widgets_init' );

function nest_nav_menus_init() {
	register_nav_menus( array( 'primary' => __( 'Primary Navigation', 'nest' ) ) );
}
add_action( 'init', 'nest_nav_menus_init' );

// set variable $content_width ( WP required )
$content_width = 630;

/* ========== Shortcodes ========== */

include( get_stylesheet_directory() . '/includes/nest.shortcodes.php' );

/* ========== Scripts and styles ========== */

function nest_init_scripts_and_styles() {
	global $nest_options;
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'nest-menu-arrow', get_stylesheet_directory_uri() . '/scripts/nest-menu-arrow.js', array( 'jquery' ) );
	switch( $nest_options['menu_effect'] ) {
		case 'fade':
			wp_enqueue_script( 'nest-menu-effect-fade', get_stylesheet_directory_uri() . '/scripts/nest-menu-effect-fade.js', array( 'jquery' ) );
			break;
		case 'slide':
			wp_enqueue_script( 'nest-menu-effect-slide', get_stylesheet_directory_uri() . '/scripts/nest-menu-effect-slide.js', array( 'jquery' ) );
			break;
		case 'flexible':
			wp_enqueue_script( 'nest-menu-effect-flexible', get_stylesheet_directory_uri() . '/scripts/nest-menu-effect-flexible.js', array( 'jquery' ) );
			break;
		default:
			wp_enqueue_script( 'nest-menu-effect-none', get_stylesheet_directory_uri() . '/scripts/nest-menu-effect-none.js', array( 'jquery' ) );
			break;
	}
}
add_action( 'wp_enqueue_scripts', 'nest_init_scripts_and_styles' );

/* ========== Miscellaneous ========== */

function nest_wp_title_filter( $title ) {
	global $page, $paged;
	if ( is_feed() ) return $title;
	if ( $paged >= 2 || $page >= 2 ) $title .= sprintf( __( 'Page %s', 'nest' ), max( $paged, $page ) ) . ' &laquo; ';
	$title .= get_bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) $title .= ' &#124; ' . $site_description;
	return $title;
}
add_filter( 'wp_title', 'nest_wp_title_filter' );

// make page menu show home link automatically
if( $nest_options['is_display_homepage_menuitem'] ) :
function nest_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'nest_page_menu_args' );
endif;

add_filter( 'use_default_gallery_style', '__return_false' );

function nest_html5_iehack() {
	echo '<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->';
}
add_action( 'wp_head', 'nest_html5_iehack' );

