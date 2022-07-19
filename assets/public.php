<?php

function ui_add_scripts(){
    // Add main CSS
    wp_enqueue_style( 'main-style', trailingslashit( MY_PLUGIN_URL ). 'assets/css/style.css');
    // bootstrap css
    wp_enqueue_style( 'minCSSbOOTSTRAP', trailingslashit( MY_PLUGIN_URL ). 'assets/vendor/bootstrap/css/bootstrap.min.css');
    // font awesome css
    wp_enqueue_style( 'minCSSfontawesome', trailingslashit( MY_PLUGIN_URL ). 'assets/vendor/fontawesome/css/font-awesome.min.css');
    // Add main JS
    wp_enqueue_script( 'main-script', trailingslashit( MY_PLUGIN_URL ). 'assets/js/main.js');
    // bootstrap js
    wp_enqueue_script( 'bubbleJSbOOTSTRAP', trailingslashit( MY_PLUGIN_URL ). 'assets/vendor/bootstrap/js/bootstrap.bundle.js');
}

add_action('wp_enqueue_scripts','ui_add_scripts'); 


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
    wp_enqueue_script( 'bubbleJSbOOTSTRAP', trailingslashit( MY_PLUGIN_URL ). 'assets/vendor/bootstrap/js/bootstrap.bundle.js');
}

add_action('admin_enqueue_scripts', 'admin_add_scripts');
// echo "ffffffffffffffffff";
