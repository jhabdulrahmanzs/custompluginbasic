<?php
require(ROOTDIR .'././templates/registeration.php');


add_action( 'wp_ajax_ajax_registerforms', 'ajax_registerform' );
add_action ( 'wp_ajax_nopriv_ajax_registerforms', 'ajax_registerform' );
echo "function outer";
function ajax_registerform(){
    // ajax
  echo "pravin inner";
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
    die();

   
}
?>