<?php


define( 'PLUGIN_FILE_PATH', __FILE__ );

register_activation_hook( 'PLUGIN_FILE_PATH', 'display_page_on_activation' );

function display_page_on_activation() {
     if ( ! current_user_can( 'activate_plugins' ) ) return;
}

$post_values= 'Employee records';
// $PageGuid = site_url() . "/regsiterdata";
$page_slug = 'regsiterdata'; // Slug of the Post
$new_page = array(
    'post_type'     => 'page', 				// Post Type Slug eg: 'page', 'post'
    'post_title'    => 'Registered Data',	// Title of the CoFntent
    'post_content'  => $post_values,	// Content
    'post_status'   => 'publish',			// Post Status
    'post_author'   => 1,					// Post Author ID
    'post_name'     => $page_slug,		// Slug of the Post
    'menu_order'     => 0,
);

if (!get_page_by_path( $page_slug, OBJECT, 'page')) { // Check If Page Not Exits
    $new_page_id = wp_insert_post($new_page);
}



?>