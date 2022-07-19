<?php
//echo"function outer";
function register_page()
{
    // $id = $_POST["id"];
    //insert
    if (isset($_POST['submit'])) {

        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $age = $_POST["age"];
        $contact = $_POST["contact"];
        $address = $_POST["address"];
        $error=[];
        
        if($firstname== '' && $lastname=='' && $age=='' && $contact== '' && $address=='')
        {
         plugin_errors()->add('Empty', _e('All fields are Empty'));
        }
        elseif ($firstname == '') {
            // empty username
            plugin_errors()->add('username_empty', _e('Please enter a username'));
        }
        elseif(!validate_username($firstname)) {
            // invalid username
            plugin_errors()->add('username_invalid', _e('Invalid username'));
        } 
        elseif (!is_numeric($age)) {
            plugin_errors()->add('number_required', _e('Please enter an number'));
        }
        elseif (!is_numeric($contact)) {
            plugin_errors()->add('contact_number_required', _e('Please enter an number'));
        }

        $errors = plugin_errors()->get_error_messages();
        if (empty($errors)) {
            global $wpdb;
            $table_name = $wpdb->prefix . "employeeform";

            $wpdb->insert(
                //table
                $table_name,
                //data to be input in the database 
                array(
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                    'age' => $age,
                    'contact' => $contact,
                    'address' => $address
                ),
                // data format 
                array(
                    '%s',
                    '%s',
                    '%d',
                    '%d',
                    '%s'
                )
            );
        }
    }	
?>
    <div>
        <form method="POST" action="<?php echo $_SERVER['REQUEST_URI']; ?>" name="form">
            <div>
                <label><?php _e('First Name'); ?></label>
                <input type="text" name="firstname" placeholder="Firstname" id="firstname">
                <span class="error"><?php  $errfild ?></span>

            </div>
            <div>
                <label><?php _e('Last Name'); ?></label>
                <input type="text" name="lastname" placeholder="Lastname" id="lastname">
            </div>
            <div>
                <label><?php _e('Age'); ?></label>
                <input type="number" name="age" placeholder="Age" id="age">
            </div>
            <div>
                <label><?php _e('Contact'); ?></label>
                <input type="tel" name="contact" placeholder="Contact No" id="contact">
            </div>
            <div>
                <label><?php _e('Address'); ?></label>
                <input type="text" name="address" placeholder="Address" id="address">
            </div>
            <div>
                <input type="submit" name="submit" id="submit" value="submit">
            </div>
        </form>
    </div>

<?php
}
$var = register_page();
function plugin_errors(){
    static $wp_error; // global variable handle
    return isset($wp_error) ? $wp_error : ($wp_error = new WP_Error(null, null, null));
}

// displays error messages from form submissions
function plugin_register_messages() {
    if($codes = plugin_errors()->get_error_codes()) {
        echo '<div class="plugin_errors">';
            // Loop error codes and display errors
           foreach($codes as $code){
                $message = plugin_errors()->get_error_message($code);
                echo '<span class="error"><strong>' . __('Error') . '</strong>: ' . $message . '</span><br/>';
            }
        echo '</div>';
    }
}
?>