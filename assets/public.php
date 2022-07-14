<?php
function dev_add_scripts(){
    // Add main CSS
    wp_enqueue_style( 'dev-main-style', plugins_url(). '/myplugin/assets/css/style.css');
    // Add main JS
    wp_enqueue_script( 'dev-main-scripts', plugins_url(). '/myplugin/assets/js/main.js');

}

add_action('wp_enqueue_scripts','dev_add_scripts');