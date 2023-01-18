<?php
/**
 * Plugin Name: KaalChakra
 * Plugin URI: https://kaalchakra.com
 * Description: This plugin calculate time i left.
 * Version: 1.0.0
 * Author: Imran Sayed
 * Author URI: https://profiles.wordpress.org/1naveengiri
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: kaalchakra-app
 * Domain Path: /languages
 *
 * @package KaalChakra App
 */

define( 'KAAL_PLUGIN_URL', plugins_url( 'kaalchakra-app' ) );
define( 'KAAL_PLUGIN_DIR_PATH', plugin_dir_path( __FILE__ ) );

function gutenberg_custom_blocks() {

	// Block front end styles.
	wp_register_style(
		'kaal-block-front-end-styles',
		KAAL_PLUGIN_URL . '/style.css',
		array( 'wp-edit-blocks' ),
		filemtime( KAAL_PLUGIN_DIR_PATH . 'style.css' )
	);
	// Block editor styles.
	wp_register_style(
		'kaal-block-editor-styles',
		KAAL_PLUGIN_URL . '/editor.css',
		array( 'wp-edit-blocks' ),
		filemtime( KAAL_PLUGIN_DIR_PATH . 'editor.css' )
	);

	// Block Editor Script.
	wp_register_script(
		'kaal-block-editor-js',
		KAAL_PLUGIN_URL . '/kaalchakra.js',
		array( 'wp-blocks', 'wp-element', 'wp-editor', 'wp-components', 'wp-i18n' ),
		filemtime( KAAL_PLUGIN_DIR_PATH . 'kaalchakra.js' ),
		true
	);
	register_block_type(
		'kaalchakra/time-calculator',
		array(
			'style'         => 'kaal-block-front-end-styles',
			'editor_style'  => 'kaal-block-editor-styles',
			'editor_script' => 'kaal-block-editor-js',
		)
	);
}

add_action( 'init', 'gutenberg_custom_blocks' );
