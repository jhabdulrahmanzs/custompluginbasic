<?php


define('PLUGIN_FILE_PATH', __FILE__);
if (!class_exists('employeepage')) {
    class employeepage
    {

        function __construct()
        {
            register_activation_hook(__FILE__,  [$this, 'display_page_on_activation']);
            // add_action('wp_head', [$this, 'create_plugin_database_table']);
            add_filter('the_content', [$this, 'pagecreate_employee']);
        }

        function display_page_on_activation()
        {
            if (!current_user_can('activate_plugins')) return;
        }
        public function pagecreate_employee()
        {
            $post_values = '';
            // $PageGuid = site_url() . "/regsiterdata";
            $page_slug = 'regsiterdata'; // Slug of the Post
            $new_page = array(
                'post_type'     => 'page',                 // Post Type Slug eg: 'page', 'post'
                'post_title'    => 'Registered Data',    // Title of the CoFntent
                'post_content'  => $post_values,    // Content
                'post_status'   => 'publish',            // Post Status
                'post_author'   => 1,                    // Post Author ID
                'post_name'     => $page_slug,        // Slug of the Post
                'menu_order'     => 0,
            );

            if (!get_page_by_path($page_slug, OBJECT, 'page')) { // Check If Page Not Exits
                $new_page_id = wp_insert_post($new_page);
            }
        }
    }
}
?>