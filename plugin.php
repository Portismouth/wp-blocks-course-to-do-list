<?php
/**
 * Plugin Name:       To Do List
 * Description:       Info about the to do list in the data store.
 * Requires at least: 5.9
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Ozzy Gonzalez
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       to-do-list
 *
 * @package           to-do-list
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function create_block_boilerplate_block_init() {
	register_block_type( __DIR__ . '/build/to-do-list' );
	register_block_type( __DIR__ . '/build/to-do-list-info' );
}
add_action( 'init', 'create_block_boilerplate_block_init' );
