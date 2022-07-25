<?php
    $gethomeurl =get_home_url();

    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $getslugname = str_replace($gethomeurl,'',$actual_link);
    $rmslash = preg_replace('|/|', '',$getslugname);
    
    if($rmslash == 'charts') {
      
        add_filter('the_content', 'chart_create_page');
    }      
        
      
    function chart_create_page($content)
    {      
        // include_once(ROOTDIR . 'includes/controller/controller_charts.php');
        include_once(ROOTDIR . 'templates/chartview.php');
        
        return $content;
    }

    function charts_ajax(){
           
    require_once(ROOTDIR. 'models/charts_model.php');

    $query=new mychart();
    $data=$query->chart_view();

    echo $data = wp_json_encode($data);

    // echo $data;

    // return $data;
    wp_die();
    
 
    } 
    add_action( 'wp_ajax_charts_ajax', 'charts_ajax' );
    
?>

