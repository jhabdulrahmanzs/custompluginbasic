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
}

// will run the install scripts upon plugin activation
register_activation_hook(__FILE__, 'employeeDB_options_install');

// Delete-table
function employeeDB_options_delete() {
    global $wpdb;
    $table_name = $wpdb->prefix.'employeeform';
    $sql = "DROP TABLE IF EXISTS $table_name";
    $wpdb->query($sql);
    delete_option("devnote_plugin_db_version");
}
register_deactivation_hook( __FILE__, 'employeeDB_options_delete' );




add_action('admin_menu','employee_record_modifymenu');

// function to add menu items detail
function employee_record_modifymenu() {
	
	//this is the main item for the menu
	add_menu_page('Employee List', //page title
	'Employee List', //menu title
	'manage_options', //capabilities
	'record_employee_list', //menu slug
	'record_employee_list' //function
	);
	
	//this submenu is hidden, however, we need to add it anyways
	//the parent slug of submenu page is the menu slug of the main item of the menu
	add_submenu_page(null, //parent slug
	'Add New Employee', //page title
	'Add New Employee', //menu title
	'manage_options', //capabilities
	'record_employee_create', //menu slug
	'record_employee_create'); //function
	
	//this submenu is hidden, however, we need to add it anyways
	//the parent slug of submenu page is the menu slug of the main item of the menu
	add_submenu_page(null, //parent slug
	'Update Employee Record', //page title
	'Update Employee Record', //menu title
	'manage_options', //capabilities
	'record_employee_update', //menu slug
	'record_employee_update'); //function
}

define('ROOTDIR', plugin_dir_path(__FILE__));
require_once(ROOTDIR . 'admin/employee-record-list.php');
require_once(ROOTDIR . 'admin/employee-record-create.php');
require_once(ROOTDIR . 'admin/employee-record-update.php');