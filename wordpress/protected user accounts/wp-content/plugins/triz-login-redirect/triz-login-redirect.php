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

// check if logged in
function my_login_redirect() {
	if ( (is_single()) && (!is_user_logged_in()) ) {
		$redirect = home_url() . '/wp-login.php?redirect_to=' . urlencode( $_SERVER['REQUEST_URI'] );
        wp_safe_redirect( $redirect );
        exit;
	}
}

add_action( 'wp', 'my_login_redirect' );



// hide admin bar
add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
		show_admin_bar(false);
	}
}