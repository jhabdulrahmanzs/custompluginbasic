<?php

function wp_add_scripts(){
    // bootstrap css
    wp_enqueue_style( 'minCSSbOOTSTRAP', trailingslashit( MY_PLUGIN_URL ). 'assets/vendor/bootstrap/css/bootstrap.min.css');
    // font awesome css
    wp_enqueue_style( 'minCSSfontawesome', trailingslashit( MY_PLUGIN_URL ). 'assets/vendor/fontawesome/css/font-awesome.min.css');
    // Add main CSS
    wp_enqueue_style( 'main-style', trailingslashit( MY_PLUGIN_URL ). 'assets/css/style.css');
   

    // jquery-1.7.1
    wp_enqueue_script('jquery-1.7.1', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js', false, false, true);
    // bootstrap js
    wp_enqueue_script( 'bubbleJSbOOTSTRAP', trailingslashit( MY_PLUGIN_URL ). 'assets/vendor/bootstrap/js/bootstrap.bundle.js');

    // ajax plugin link
    wp_enqueue_script( 'signup-ajax-script', trailingslashit( MY_PLUGIN_URL ). 'assets/js/my-ajax-signup.js',false, false, true);
    // wp_localize_script( 'ajax-script', 'my_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
    // Add main JS
        
    wp_enqueue_script( 'main-script', trailingslashit( MY_PLUGIN_URL ). 'assets/js/main.js');
    // wp_enqueue_script( 'wp-register-script', trailingslashit( MY_PLUGIN_URL ). 'assets/js/wp-register.js');
  
         
         
        
    
}

add_action('wp_enqueue_scripts','wp_add_scripts'); 


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
