<?php
    $gethomeurl =get_home_url();

    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $getslugname = str_replace($gethomeurl,'',$actual_link);
    $rmslash = preg_replace('|/|', '',$getslugname);
    
    if($rmslash == 'regsiterdata') {
       
        add_filter('the_content', 'employee_displayrecord');
    }      
        
      
    function employee_displayrecord($content)
    {      
        include_once(ROOTDIR . 'includes/include_plugin.php');
        return $content;
    }
?>