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