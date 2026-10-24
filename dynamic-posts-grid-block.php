<?php
/**
 * Plugin Name:       Dynamic Posts Grid Block
 * Description:       A server-rendered posts grid block with category, layout and pagination controls.
 * Version:           1.0.0
 * Requires at least: 6.4
 * Requires PHP:      7.4
 * Author:            Your Name
 * License:           MIT
 * Text Domain:       dynamic-posts-grid-block
 *
 * @package DynamicPostsGridBlock
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the block from the compiled block.json in /build.
 */
function dpg_register_block() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'dpg_register_block' );
