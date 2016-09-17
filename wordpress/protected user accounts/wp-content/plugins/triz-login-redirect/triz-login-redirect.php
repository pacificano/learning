<?php
/**
 * Plugin Name: Triz's Login Redirect
 * Plugin URI: http://pacificano.com
 * Description: This plugin checks if the user is logged in before displaying a single post.
 * Version: 1.0.0
 * Author: Pacificano
 * Author URI: http://pacificano.com
 * License: GPL2
 */

add_action( 'wp', 'my_login_redirect' );

function my_login_redirect() {
	if ( (is_single()) && (!is_user_logged_in()) ) {
		$myCurrentUrl = get_the_ID();
		// wp_safe_redirect( '/wp-login.php?from=' . $myCurrentUrl );
		wp_safe_redirect( plugin_dir_url( __FILE__ ) . 'triz-login.php?from=' . $myCurrentUrl );
	}
}