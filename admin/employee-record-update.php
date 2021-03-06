<?php
  error_reporting(0);
function record_employee_update() {
    global $wpdb;
    $table_name = $wpdb->prefix . "employeeform";
    $id = $_GET["id"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $age = $_POST["age"];
    $contact = $_POST["contact"];
    $address = $_POST["address"];
    //update data
    if (isset($_POST['update'])) {
        $wpdb->update(
            // database table name
            $table_name,
            // data input
            array('firstname' => $firstname,
                  'lastname' => $lastname,
                  'age' => $age,
                  'contact' => $contact,
                  'address' => $address),
            // where 
            array('ID' => $id),
            // data format 
            array('%s' ,
                  '%s' , 
                  '%d' , 
                  '%d' , 
                  '%s'),
            // where format 
            array('%d') 
        );
    }
    // delete data
    else if (isset($_POST['delete'])) {
        $wpdb->query($wpdb->prepare("DELETE FROM $table_name WHERE id = %d", $id));
    }
    // selecting value to update data
    else {	
        $empRecord = $wpdb->get_results($wpdb->prepare("SELECT * from $table_name where id=%d", $id));
        foreach ($empRecord as $e) {
            $fname = $e->firstname;
            $lname = $e->lastname;
            $edad = $e->age;
            $cnum = $e->contact;
            $tirahan = $e->address;
        }
    }

?>


    <?php if ($_POST['delete']) { ?>

    <div class="updated"><p>Delete Employee Record</p>
        <a href="<?php echo admin_url('admin.php?page=record_employee_list') ?>">
            &laquo; Back to Employee Record List
        </a>
    </div>

    <?php } else if ($_POST['update']) { ?>

    <div class="updated"><p>Update Employee Record</p>
        <a href="<?php echo admin_url('admin.php?page=record_employee_list') ?>">
            &laquo; Back to Employee Record List
        </a>
    </div>

    <?php } else { ?>

    <div class="wrap">
    <h2>Employee Record</h2>
        <div class="metabox-holder">
            <div class="postbox">
            <form style="width:50%; margin: auto;" method="post" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
                <br>
                <h3>Update or Delete Employee Record Details</h3>
                <table class="table table-striped table-bordered" style="width:100%">
                    <tr>
                        <th>ID: </th>
                        <td><?php echo $_GET['id']; ?></td>
                    </tr>
                    <tr>
                        <th>Firstname: </th>
                        <td><input type="text" name="firstname" class="form-control" value="<?php echo $fname; ?>"/></td>
                    </tr>
                    <tr>
                        <th>Lastname: </th>
                        <td><input type="text" name="lastname" class="form-control" value="<?php echo $lname; ?>"/></td>
                    </tr>
                    <tr>
                        <th>Age: </th>
                        <td><input type="text" name="age" class="form-control" value="<?php echo $edad; ?>"/></td>
                    </tr>
                    <tr>
                        <th>Contact No.: </th>
                        <td><input type="text" name="contact" class="form-control" value="<?php echo $cnum; ?>"/></td>
                    </tr>
                    <tr>
                        <th>Address: </th>
                        <td><input type="text" name="address" class="form-control" value="<?php echo $tirahan; ?>"/></td>
                    </tr>
                </table>
                    <button type='submit' name="update" value='Save' class='btn btn-sm btn-outline-success float-left mr-3'>
                    <i class="fa fa-check"></i> Update
                    </button>

                    <button type='submit' name="delete" value='Delete' class='btn btn-sm float-none btn-outline-danger' onclick="return confirm('Are you sure want to delete?')">
                        <i class="fa fa-trash"></i> Delete
                    </button>
                    <button name="back" type="submit" class="btn btn-sm btn-outline-primary float-right">
                        <i class="fa fa-chevron-circle-left"></i>
                    <a href="<?php echo admin_url('admin.php?page=record_employee_list') ?>">BACK</a></button>
                    <br><br>
            </form>
        <?php } ?>  
            </div>
        </div>
    </div>    

    <!-- Flatpickr option -->
    <script>
        $('#datePick').datepicker({
            uiLibrary: 'bootstrap4',
            dateFormat: "Y-m-d"
        });
    </script>

<?php } ?>