<?php
/**
 * Plugin Name: My Database Explorer
 * Plugin URI: google.com
 * Description: This plugin adds a little CRUD application that can be plugged into any web page
 * Version: 1.0.0
 * Author: Thomas Rea
 * Author URI: google.com
 * License: GPL2
 */
 
include 'my-db-explorer-shortcode.php';

build_shortcode();
register_admin_hooks();
#register_hooks();
#register_data();

function build_shortcode() {
    add_shortcode( 'my-db-explorer', 'my_db_explorer_shortcode' );
}

function my_db_explorer_shortcode( $atts ) {
    $atts = shortcode_atts( array(
        'theme' => 'default_theme',
        'compact' => 'no',
    ), $atts, 'my-db-explorer');
    
    return output_html($atts);
}

function register_admin_hooks() {
     add_action('admin_menu', 'my_plugin_menu');
}

function my_plugin_menu() {
    add_options_page( 'My Database Explorer', 'MyDB Exp. Settings', 'manage_options', 'My Database Explorer', 'my_plugin_settings_page');
}

function my_plugin_settings_page() {
    include 'my-db-explorer-admin.php';
}

function register_hooks() {
    //stub
}

function register_data() {
    //stub
}

add_action( 'wp_ajax_my_action', 'my_action' );

function my_action() {
	global $wpdb; // this is how you get access to the database

	$whatever = intval( $_POST['whatever'] );

	$whatever += 10;

        echo $whatever;

	wp_die(); // this is required to terminate immediately and return a proper response
}

add_action( 'admin_footer', 'my_action_javascript' ); // Write our JS below here

function my_action_javascript() { ?>
	<script type="text/javascript" >
	jQuery(document).ready(function($) {

		var data = {
			'action': 'my_action',
			'whatever': 1234
		};

		// since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
		jQuery.post(ajaxurl, data, function(response) {
			alert('Got this from the server: ' + response);
		});
	});
	</script> <?php
}