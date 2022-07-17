<?php


define( 'PLUGIN_FILE_PATH', __FILE__ );

register_activation_hook( 'PLUGIN_FILE_PATH', 'display_page_on_activation' );

function display_page_on_activation() {
     if ( ! current_user_can( 'activate_plugins' ) ) return;
}
// require_once(ROOTDIR . 'includes/employee-display-record.php');

$post_values= '

<table  id="empList" class="table table-striped table-bordered" style="width:100%">
<thead>
    <tr>
        <th>ID</th>
        <th>FIRST</th>
        <th>LAST</th>             
        <th>AGE</th>
        <th>CONTACT</th>
        <th>ADDRESS</th>
    </tr> 
</thead>
<tbody>
    <tr>
        <td>1</td>
        <td>sdf</td>
        <td>wdf</td>
        <td>22</td>
        <td>235423523</td>
        <td>wfwe</td>
      
    </tr>
</tbody>
</table>';
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

// if(isset($page_slug)) {
//     header ("Location: includes/employee-display-record.php");
// }
// else {
//     echo "dasfd";
// }




?>