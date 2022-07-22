<?php
class registeration
{

    public function insert_data($registerform,$registerform_datatype)
    {
        // print_r($firstname);
        global $wpdb;
        global $table;
        $table = $wpdb->prefix . "registerform";


        if ($wpdb->insert(
            $table,$registerform,$registerform_datatype
        ) === false) {

           $this->create_user();
            echo wp_send_json_success("Please try again!");
            echo "Error";
        } else {
            echo "Customer '" . $firstname . "' successfully added, row ID is " . $wpdb->insert_id;
        }
        die();
    }
    public function create_user($firstname,$password,$email)
    {
        $result = wp_create_user($firstname,$password,$email);
        if(!is_wp_error($result)){
            echo "User created in admin".$result;
        } else{
            echo $result->get_error_message();
        }
    }
}
