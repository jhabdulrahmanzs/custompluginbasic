<?php

/**
 * Plugin Name:       My Basic custom Plugin
 * Description:       Handle the basics with this plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Abdul Rahman
 */



defined( 'ABSPATH' ) || exit;


function employeeDB_options_install() {

    global $wpdb;

    $table_name = $wpdb->prefix . "employeeform";
    $charset_collate = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE $table_name (
            `id` int(10) NOT NULL AUTO_INCREMENT,
            `firstname` varchar(100) NOT NULL,
            `lastname` varchar(100) NOT NULL,
            `age` int(10) NOT NULL,
            `contact` int(15) NOT NULL,
            `address` varchar(100) NOT NULL,
            PRIMARY KEY (`id`)
          ) $charset_collate; ";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta($sql);


    $table_name = $wpdb->prefix . "registerform";
    $charset_collate = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE $table_name (
            `id` int(10) NOT NULL AUTO_INCREMENT,
            `firstname` varchar(100) NOT NULL,
            `lastname` varchar(100) NOT NULL,
            `age` int(10) NOT NULL,
            `contact` int(15) NOT NULL,
            `address` varchar(100) NOT NULL,
            `password` varchar(100) NOT NULL,

            PRIMARY KEY (`id`)
          ) $charset_collate; ";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta($sql);

    
}

// will run the install scripts upon plugin activation
register_activation_hook(__FILE__, 'employeeDB_options_install');

// Delete-table
function employeeDB_options_delete() {
    global $wpdb;
    $table_name = $wpdb->prefix.'employeeform';
    $sql = "DROP TABLE IF EXISTS $table_name";
    $wpdb->query($sql);

    $table_name = $wpdb->prefix.'registerform';
    $sql = "DROP TABLE IF EXISTS $table_name";
    $wpdb->query($sql);
    delete_option("devnote_plugin_db_version");
}
register_deactivation_hook( __FILE__, 'employeeDB_options_delete' );




define('MY_PLUGIN_URL',plugin_dir_url(__FILE__));
define('ROOTDIR', plugin_dir_path(__FILE__));



// include css and js files
require_once(ROOTDIR . 'admin/init.php');


require_once(ROOTDIR . 'assets/public.php');
// class controller
require_once(ROOTDIR . 'includes/employee-display-record.php');
require_once(ROOTDIR . 'includes/register-check.php');


//  views
require_once(ROOTDIR . 'templates/employee-page-create.php');
require_once(ROOTDIR . 'templates/register-page-create.php');

