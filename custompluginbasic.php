<?php

/**
 * Plugin Name:       My Basic custom Plugin
 * Description:       Handle the basics with this plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Abdul & Pravin 
 */



defined('ABSPATH') || exit;

if (!class_exists('customplugin')) {
  class customplugin
  {

    function __construct()
    {
      register_activation_hook(__FILE__,  [$this, 'create_plugin_database_table']);
      // add_action('wp_head', [$this, 'create_plugin_database_table']);
    }

    public function create_plugin_database_table() {
      global $wpdb;

      $table_array = array(
        'employee_form',
        'register_form',
        'circket_score'

      );

      $table_obj = new database_table();

      require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
      foreach ($table_array as $tablename) {

        $sql = $table_obj->$tablename();

        dbDelta($sql);
      }
    }

  
  }
}

$custom = new customplugin();

define('MY_PLUGIN_URL',plugin_dir_url(__FILE__));
define('ROOTDIR', plugin_dir_path(__FILE__));


// create tables
require_once(ROOTDIR . 'data/define_tables.php');

// include css and js files
require_once(ROOTDIR . 'admin/init.php');
$adminscript = new admin_customscript();


require_once(ROOTDIR . 'assets/public.php');
$wpscript = new wp_customscript();

// class controller
require_once(ROOTDIR . 'includes/slug_check/employee-check.php');
require_once(ROOTDIR . 'includes/slug_check/register-check.php');
require_once(ROOTDIR . 'includes/slug_check/charts-check.php');



//  views
require_once(ROOTDIR . 'templates/page_creation/employee-page-create.php');
require_once(ROOTDIR . 'templates/page_creation/register-page-create.php');
require_once(ROOTDIR . 'templates/page_creation/charts-page-create.php');

