<?php
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

require_once(ROOTDIR . 'admin/employee-record-list.php');
require_once(ROOTDIR . 'admin/employee-record-create.php');
require_once(ROOTDIR . 'admin/employee-record-update.php');