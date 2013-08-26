<?php
/**
 * Plugin Name: Plugin Safe Mode
 * Plugin URI: http://core.trac.wordpress.org/ticket/25137
 * Description: Enables safe mode by preventing plugins from loading if WP_DISABLE_PLUGINS is defined true and ?safe_mode=true appended to url
 * Author: Chris Olbekson <chris@x-team.com>
 * Version: 1.0
 * Author URI: http://x-team.com
 */
 

if ( defined( 'WP_DISABLE_PLUGINS' ) && WP_DISABLE_PLUGINS && isset( $_GET['safe_mode'] ) ) {
	add_filter( 'option_active_plugins', '__return_empty_array' );
}
