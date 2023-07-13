<?php
/**
 * Plugin Name: It works
 * Description: ¯\_(ツ)_/¯
 * Plugin URI: https://github.com/themingisprose/itworks
 * Author: Theming is Prse
 * Author URI: https://themingisprose.com
 * Version: 1.0.0
 * License: GPL2
 * Text Domain: itworks
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) )
	die;

/**
 * Set text domain... If any
 *
 * @since It Works 1.0.0
 */
function itworks_textdomain(){
	load_plugin_textdomain( 'itworks', false, basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'itworks_textdomain' );

/**
 * Load the template
 *
 * @since it Works 1.0.0
 */
function itworks_load_template( $template ){
	/**
	 * Filters the loaded template
	 *
	 * @since It Works 1.0.0
	 */
	return apply_filters( 'itworks_template', plugin_dir_path( __FILE__ ) .'itworks-template.php' );
}
add_filter( 'index_template', 'itworks_load_template' );
add_filter( '404_template', 'itworks_load_template' );
add_filter( 'archive_template', 'itworks_load_template' );
add_filter( 'author_template', 'itworks_load_template' );
add_filter( 'category_template', 'itworks_load_template' );
add_filter( 'tag_template', 'itworks_load_template' );
add_filter( 'taxonomy_template', 'itworks_load_template' );
add_filter( 'date_template', 'itworks_load_template' );
add_filter( 'home_template', 'itworks_load_template' );
add_filter( 'front_page_template', 'itworks_load_template' ); /** $#@*8! */
add_filter( 'frontpage_template', 'itworks_load_template' );
add_filter( 'page_template', 'itworks_load_template' );
add_filter( 'paged_template', 'itworks_load_template' );
add_filter( 'search_template', 'itworks_load_template' );
add_filter( 'single_template', 'itworks_load_template' );
add_filter( 'text_template', 'itworks_load_template' );
add_filter( 'plain_template', 'itworks_load_template' );
add_filter( 'text_plain_template', 'itworks_load_template' );
add_filter( 'attachment_template', 'itworks_load_template' );
add_filter( 'comments_popup', 'itworks_load_template' );

/**
 * Remove all style sheets
 *
 * @since It Works 1.0.0
 */
function itworks_queue(){
	if ( is_user_logged_in() )
		return;

	global $wp_scripts, $wp_styles;

	foreach ( $wp_styles->queue as $style ) :
		if ( 'itworks-reset' == $wp_styles->registered[$style]->handle )
			continue;

		wp_dequeue_style( $wp_styles->registered[$style]->handle );
	endforeach;

	foreach ( $wp_scripts->queue as $script ) :
		wp_dequeue_script( $wp_scripts->registered[$script]->handle );
	endforeach;
}
add_action( 'wp_enqueue_scripts', 'itworks_queue' );

/**
 * Add CSS Reset
 *
 * @since it Works 1.0.0
 */
function itworks_css_reset(){
	wp_register_style( 'itworks-reset', plugin_dir_url( __FILE__ ) .'assets/reset.css' );
	wp_enqueue_style( 'itworks-reset' );
}
add_action( 'wp_enqueue_scripts', 'itworks_css_reset' );
