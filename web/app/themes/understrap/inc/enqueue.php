<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
		wp_enqueue_style('style-header', get_template_directory_uri() . '/css/header.css', array(), $css_version);
		wp_enqueue_style( 'understrap-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version );
		wp_enqueue_style('style-footer', get_template_directory_uri() . '/css/footer.css', array(), $css_version);
		wp_enqueue_style('style-form', get_template_directory_uri() . '/css/form.css', array(), $css_version);

		wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
		/**
		 * this next line 33 include the file who contains our ajax function for nos-enseigne page 
		 */
		wp_enqueue_script('nos-enseignes', get_template_directory_uri() . '/js/nos-enseignes.js', array(), $js_version, true);

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );
