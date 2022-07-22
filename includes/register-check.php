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
   
    $firstname = $_POST['firstname'];    
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $password = $_POST['password'];
       
require_once(ROOTDIR. './models/registerdata_model.php');
$register=new registeration();
$register->create_user($firstname,$password,$email);
$registerform=array(
    'firstname' => $firstname,
    'lastname' => $lastname,
    'email' => $email,
    'age' => $age,
    'contact' => $contact,
    'address' => $address,
    'password' => $password
);
$registerform_datatype=array(
    '%s',
    '%s',
    '%s',
    '%d',
    '%d',
    '%s',
    '%s'
);
$register->insert_data($registerform,$registerform_datatype);
//print_r($var);
   
} 
add_action( 'wp_ajax_ajax_registerform', 'ajax_registerform' );
// add_action('wp_ajax_nopriv_registerform', 'registerform');

?>

<?php echo admin_url('admin-ajax.php')?>