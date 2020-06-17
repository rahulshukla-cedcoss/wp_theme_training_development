<?php
/**
 * Plugin Name: myplugin
 * Plugin URI: https://github.com/rahulshukla-cedcoss/wp_theme_training_development
 * Description: This is my 1st plugin
 * Version: 1.2
 * Author: Mr. Rahul
 * Author URI: https://github.com/rahulshukla-cedcoss/wp_theme_training_development
 * License: GPL2
 *
 * @package WordPress
 */

/*
Myplugin is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Myplugin is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with myplugin. If not, see {URI to Plugin License}.
*/
/** Main Plugin File.
 */

/** Main Plugin File */
function myplugin() {
	$time = date( 'h:i:sa');
	add_option( 'myplugin', $time );

	/* activation code here */
}
register_activation_hook( __FILE__, 'myplugin' );
/** Main Plugin File */
function dlt_plugin() {
	if ( is_admin() && get_option( 'myplugin' ) ) {
		delete_option( 'myplugin' );
		/** Do stuff once right after activation */
		/** Example: add_action( 'init', 'my_init_function' );*/
	}
}
register_deactivation_hook( __FILE__, 'dlt_plugin' );


add_filter( 'the_content', 'filter_content' );
/**
 * Filter_content
 *
 * @param [string] $content is a string.
 */
function filter_content( $content ) {
	if ( is_singular() ) {
		?>
		<a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>" target="_blank"> Click here to tweet </a>
		<?php
		return $content;
	} else {
		return $content;
	}
}

/**
 * Undocumented function
 *
 * @param [string] $content is a string.
 */
function word_count( $content ) {
	global $post;
	if ( is_singular() ) {
		$char_count = strlen( wp_strip_all_tags( strip_shortcodes( html_entity_decode( $post->post_content ) ) ) );
	}
	return $content . '<br>' . $char_count . ' ' . 'Characters';
}

add_filter( 'the_content', 'word_count' );
