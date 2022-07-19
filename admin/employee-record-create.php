<?php
error_reporting(0);
//function to create a new record 
// require_once ROOTDIR .'assets/public.php';
function record_employee_create() {
    $id = $_POST["id"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $age = $_POST["age"];
    $contact = $_POST["contact"];
    $address = $_POST["address"];
    //insert
    if (isset($_POST['insert'])) {
        global $wpdb;
        $table_name = $wpdb->prefix . "employeeform";

        $wpdb->insert(
                //table
                $table_name,
                //data to be input in the database 
                array('firstname' => $firstname,
                  'lastname' => $lastname,
                  'age' => $age,    
                  'contact' => $contact,
                  'address' => $address),
                // data format 
                array('%s' , 
                      '%s' , 
                      '%d' , 
                      '%d' , 
                      '%s')
        );
        $message = '';
        $message.="New Employee Added!";
    }
?>

    
    <div class="wrap">
        <h2>Add New Employee</h2>
        <div class="metabox-holder">
            <div class="postbox">
                <?php if (isset($message)): ?><div class="updated"><p><?php echo $message; ?></p></div><?php endif; ?>
                <br>
                <form style="width:50%; margin: auto;" method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
                    <table class="table table-striped table-bordered" style="width:90%">
                        <tr>
                            <th>First name:</th>
                            <td><input type="text" name="firstname"  class="form-control" value="<?php echo $firstname; ?>" placeholder="Firstname"/></td>
                        </tr>
                        <tr>    
                            <th>Last name:</th>
                            <td><input type="text" name="lastname"  class="form-control" value="<?php echo $lastname; ?>" placeholder="Lastname"/></td>
                        </tr>
                        <tr>    
                            <th>Age:</th>
                            <td><input type="text" name="age"  class="form-control" value="<?php echo $age; ?>" placeholder="Age"/></td>
                        </tr>
                        <tr>    
                            <th>Contact No.:</th>
                            <td><input type="text" name="contact"  class="form-control" value="<?php echo $contact; ?>" placeholder="Contact No."/></td>
                        </tr>
                        <tr>    
                            <th>Address:</th>
                            <td><input type="text" name="address"  class="form-control" value="<?php echo $address; ?>" placeholder="Address"/></td>
                        </tr>
                    </table>
                    <button name="insert" type="submit" class="btn btn-outline-success" value="Save"><i class="fa fa-save"></i> SAVE</button>
                    <button name="back" type="submit" class="btn btn-outline-primary"><i class="fa fa-chevron-circle-left"></i>
                     <a href="<?php echo admin_url('admin.php?page=record_employee_list') ?>">
                     BACK  </a></button>
                </form>   
                <br>   
            </div>
        </div>
    </div>



    <?php
}