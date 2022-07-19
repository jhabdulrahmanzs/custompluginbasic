<?php
//echo"function outer";
function register_page() {
    $id = $_POST["id"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $age = $_POST["age"];
    $contact = $_POST["contact"];
    $address = $_POST["address"];
    //insert
    if (isset($_POST['submit'])) {
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
    }
?>
    <div>
        <form method="POST" action="<?php echo $_SERVER['REQUEST_URI']; ?>" name="form">
            <div>
                <label>First Name:</label>
                <input type="text" name="firstname" placeholder="Firstname" id="firstname">
            </div>
            <div>
                <label>Last Name:</label>
                <input type="text" name="lastname" placeholder="Lastname" id="lastname">
            </div>
            <div>
                <label>Age:</label>
                <input type="number" name="age" placeholder="Age" id="age">
            </div>
            <div>
                <label>Contact No:</label>
                <input type="tel" name="contact" placeholder="Contact No" id="contact">
            </div>
            <div>
                <label>Address:</label>
                <input type="text" name="address" placeholder="Address" id="address">
            </div>
            <div>
                <input type="submit" name="submit" id="submit" value="submit">
            </div>
        </form>
    </div>

<?php
}
$var=register_page();
?>