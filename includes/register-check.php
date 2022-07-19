<?php
    $gethomeurl =get_home_url();

    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $getslugname = str_replace($gethomeurl,'',$actual_link);
    $rmslash = preg_replace('|/|', '',$getslugname);
    
    if($rmslash == 'newregistration') {
       
        add_filter('the_content', 'register_create_page');
    }      
        
      
    function register_create_page($content)
    {      
        include_once(ROOTDIR . './templates/registeration.php');
        return $content;
    }
?>