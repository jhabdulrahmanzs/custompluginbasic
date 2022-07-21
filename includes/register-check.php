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



function ajax_registerform(){
    // ajax
  
    global $wpdb;
    global $table_prefix;
    $table=$table_prefix.'registerform';
    $firstname = $_POST['firstname'];    
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $password = $_POST['password'];
       

    if ( $wpdb->insert( $table, array(
        'firstname' => $firstname,
        'lastname' => $lastname,
        'email' => $email,
        'age' => $age,    
        'contact' => $contact,
        'address' => $address,
        'password' => $password),
    // data format 
    array( '%s' , 
            '%s' , 
            '%s' , 
            '%d' , 
            '%d' , 
            '%s',
            '%s' )) === false ) {
        echo wp_send_json_success("Please try again!");
        echo "Error";
    } else {
       
    
        echo "Customer '".$firstname. "' successfully added, row ID is ".$wpdb->insert_id;
    }

    $result = wp_create_user($firstname,$password,$email);
    if(!is_wp_error($result)){
        echo "User created in admin".$result;
    } else{
        echo $result->get_error_message();
    }
    die();

   
} 
add_action( 'wp_ajax_ajax_registerform', 'ajax_registerform' );
// add_action('wp_ajax_nopriv_registerform', 'registerform');

?>

<?php echo admin_url('admin-ajax.php')?>