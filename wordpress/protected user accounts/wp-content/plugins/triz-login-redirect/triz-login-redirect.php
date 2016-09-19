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

	$check_posts = get_option('check_posts');
	$check_pages = get_option('check_pages');
	
	if ( ((is_single()) && (!is_user_logged_in()) && ($check_posts === '1')) || ((is_page()) && (!is_user_logged_in()) && ($check_pages === '1')) ) {
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



// setup settings page
add_action('admin_menu', 'my_plugin_menu');

// page title, menu title, user level, menu-slug, function that outputs content of page, icon url, position
function my_plugin_menu() {
	add_menu_page('My Plugin Settings', 'Triz\'s Settings', 'administrator', 'triz-plugin-settings', 'my_plugin_settings_page', 'dashicons-admin-generic');
}

function my_plugin_settings_page() {
?>	

<div class="wrap">
<h2>Which section to protect?</h2>

<form method="post" action="options.php">
    <?php settings_fields( 'my-plugin-settings-group' ); ?>
    <?php do_settings_sections( 'my-plugin-settings-group' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Pages</th>
        <td><input type="checkbox" name="check_pages" value="1" <?php checked(1, get_option('check_pages'), true); ?> /></td>
        </tr>
         
        <tr valign="top">
        <th scope="row">Posts</th>
        <td><input type="checkbox" name="check_posts" value="1" <?php checked(1, get_option('check_posts'), true); ?> /></td>
        </tr>
    </table>
    
    <?php submit_button(); ?>

</form>
</div>

<?php
}



// my plugin settings
add_action( 'admin_init', 'my_plugin_settings' );

function my_plugin_settings() {
	register_setting( 'my-plugin-settings-group', 'check_pages' );
	register_setting( 'my-plugin-settings-group', 'check_posts' );
}