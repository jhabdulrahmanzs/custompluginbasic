<?php

/**
 * Plugin Name:       My Basics Custome Plugin
 * Description:       Handle the basics with this plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Abdul Rahman
 */



defined( 'ABSPATH' ) || exit;
//  add_action('add_menu','addMenu');
//  function addMenu(){

//  }

// Remove the admin bar from the front end
// add_filter( 'show_admin_bar', '__return_false' );


/**
 * Define plugin constants
 */
// define( 'MYPLUGIN_PATH', trailingslashit( plugin_dir_path(__FILE__) ) );
// define( 'MYPLUGIN_URL', trailingslashit( plugins_url('/', __FILE__) ) );


// // Load Scripts
// require_once(plugin_dir_path(__FILE__).'/assets/public.php');




// add_action('wp_body_open','tb_head');

// function tb_head(){
//     echo '<h3> Welcome to my website</h3>';
// }