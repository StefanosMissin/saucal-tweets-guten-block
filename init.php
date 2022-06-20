<?php
/**
 * Blocks Initializer
 *
 * Enqueue CSS/JS of all the blocks.
 *
 * @since   1.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue Gutenberg block assets for both frontend + backend.
 *
 *
 * @uses {wp-blocks} for block type registration & related functions.
 * @uses {wp-element} for WP Element abstraction — structure of blocks.
 * @uses {wp-i18n} to internationalize the block's text.
 * @uses {wp-editor} for WP editor styles.
 * @since 0.1.0
 */
function saucal_custom_tweet_block_register() { // phpcs:ignore

	wp_register_script(
		'saucal-tweet-custom-block-js', // Handle.
		plugins_url( 'tweet-block.js', __FILE__  ), // Block.build.js: We register the block here. Built with Webpack.
		array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor' ), // Dependencies, defined above.
		null, // filemtime( plugin_dir_path( __DIR__ ) . 'dist/blocks.build.js' ), // Version: filemtime — Gets file modification time.
	);

	// Register block editor styles for backend.
	wp_register_style(
		'tweet-block-css', // Handle.
		plugins_url( 'style.css', __FILE__  ), // Block editor CSS.
		array( 'wp-edit-blocks' ), // Dependency to include the CSS after it.
		null // filemtime( plugin_dir_path( __DIR__ ) . 'dist/blocks.editor.build.css' ) // Version: File modification time.
	);

	// Register block styles for frontend.
	wp_register_style(
		'tweet-block-editor-css', // Handle.
		plugins_url( 'editor-style.css', __FILE__  ), // Block editor CSS.
		is_admin() ? array( 'wp-editor' ) : null, // Dependency to include the CSS after it.
		null // filemtime( plugin_dir_path( __DIR__ ) . 'dist/blocks.style.build.css' ) // Version: File modification time.
	);




	register_block_type(
		'saucal/saucal-custom-tweet-block', array(
			'editor_script' => 'saucal-tweet-custom-block-js',
			'editor_style'  => 'tweet-block-editor-css',
			'style'  => 'tweet-block-css',
			'render_callback' => 'saucal_render_posts_block',
		)
	);


}

add_action( 'init', 'saucal_custom_tweet_block_register' );



function saucal_render_posts_block($attributes) {




ob_start();


echo '<h1>hello from tweet block</h1>';

return ob_get_clean();
	
}

