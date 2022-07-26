<?php

if (!class_exists('customscript')) {
    class wp_customscript
    {

        function __construct()
        {
            // echo "asdfas";
            add_action('wp_enqueue_scripts',[$this,'wp_add_scripts']);
        }

        public function wp_add_scripts()
        {
            // bootstrap css
            wp_enqueue_style('minCSSbOOTSTRAP', trailingslashit(MY_PLUGIN_URL) . 'assets/vendor/bootstrap/css/bootstrap.min.css');
            // font awesome css
            wp_enqueue_style('minCSSfontawesome', trailingslashit(MY_PLUGIN_URL) . 'assets/vendor/fontawesome/css/font-awesome.min.css');
            // Add main CSS
            wp_enqueue_style('main-style', trailingslashit(MY_PLUGIN_URL) . 'assets/css/style.css');


            // jquery-1.7.1
            wp_enqueue_script('jquery-1.7.1', trailingslashit(MY_PLUGIN_URL) . 'assets/vendor/jquery/jquery.min.js', false, false, false);
            wp_enqueue_script('chartjs', trailingslashit(MY_PLUGIN_URL) . 'assets/vendor/chartjs/chart.js', false, false, true);
            // bootstrap js
            wp_enqueue_script('bubbleJSbOOTSTRAP', trailingslashit(MY_PLUGIN_URL) . 'assets/vendor/bootstrap/js/bootstrap.bundle.js', false, false, true);
            // ajax plugin link
            wp_enqueue_script('signup-ajax-script', trailingslashit(MY_PLUGIN_URL) . 'assets/js/my-ajax-signup.js', false, false, true);

            wp_enqueue_script('chart-ajax-script', trailingslashit(MY_PLUGIN_URL) . 'assets/js/barchart.js', false, false, true);
            // Add main JS

            wp_enqueue_script('main-script', trailingslashit(MY_PLUGIN_URL) . 'assets/js/main.js', false, false, true);
        }
    }
}



if (!class_exists('customscript')) {
    class admin_customscript
    {

        function __construct()
        {
            // echo "asdfas";
            add_action('admin_enqueue_scripts',[$this,'admin_add_scripts']);
        }

        function admin_add_scripts(){
            // Add main CSS
            wp_enqueue_style( 'main-style', trailingslashit( MY_PLUGIN_URL ). 'assets/css/admin/style.css');
            // bootstrap css
            wp_enqueue_style( 'minCSSbOOTSTRAP', trailingslashit( MY_PLUGIN_URL ). 'assets/vendor/bootstrap/css/bootstrap.min.css');
            // font awesome css
            wp_enqueue_style( 'minCSSfontawesome', trailingslashit( MY_PLUGIN_URL ). 'assets/vendor/fontawesome/css/font-awesome.min.css');
            // Add main JS
            wp_enqueue_script( 'main-script', trailingslashit( MY_PLUGIN_URL ). 'assets/js/admin/main.js');
            // bootstrap js
            wp_enqueue_script( 'bubbleJSbOOTSTRAP', trailingslashit( MY_PLUGIN_URL ). 'assets/vendor/bootstrap/js/bootstrap.bundle.js', false, false, true);
        }
    }
}




