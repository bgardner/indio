<?php
/**
 * Functions for the Indio theme for WordPress.
 *
 * @package	Indio
 * @author	Brian Gardner
 * @license	GNU General Public License v3
 * @link	https://briangardner.com/indio/
 */

if ( ! function_exists( 'indio_setup' ) ) {

	/**
	 * Initialize theme defaults and add support for WordPress features.
	 */
	function indio_setup() {

		// Enqueue editor stylesheet.
		add_editor_style( get_template_directory_uri() . '/style.css' );

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );

	}
}
add_action( 'after_setup_theme', 'indio_setup' );

/**
 * Enqueue theme stylesheet and script.
 */
function indio_enqueue_stylesheet_script() {

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'indio', get_template_directory_uri() . '/style.css', array(), wp_get_theme( 'indio' )->get( 'Version' ) );

}
add_action( 'wp_enqueue_scripts', 'indio_enqueue_stylesheet_script' );

/**
 * Register block styles.
 */
function indio_register_block_styles() {

	$block_styles = array(
		'core/post-content' => array(
			'indent' => __( 'Indent', 'indio' ),
		),
		'core/social-links' => array(
			'outline' => __( 'Outline', 'indio' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}

}
add_action( 'init', 'indio_register_block_styles' );
