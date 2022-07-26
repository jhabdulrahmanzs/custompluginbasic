<?php

// if uninstall.php is not called by WordPress, die
if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}
  
  
global $wpdb;

$table_array=array(
    'employee_form',
        'register_form',
        'circket_score'
  );
 foreach($table_array as $table_name){
    $wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}$table_name");
 }