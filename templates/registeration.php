<?php
{
//echo"function outer";
    global $wpdb;
    $table_name = $wpdb->prefix . "employeeform";

    // if(isset($_POST('submit')))
    // {
    //     $firstname=$_POST['firstname'];
    //     $lastname=$_POST['lastname'];
    //     $age=$_POST['age'];
    //     $contact=$_POST['contact'];
    //     $address=$_POST['address'];
    //     $wpdb->query("INSERT INTO $table_name(firstname,lastname,age,contact,address)values('$firstname','$lastname','$age','$contact','$address')");
    // }
?>
    <div>
        <form method="POST" action="" name="form">
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
?>