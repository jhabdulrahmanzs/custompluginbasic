

<!-- //echo"function outer";
    // global $wpdb;
    // $table_name = $wpdb->prefix . "employeeform";

    // if(isset($_POST('submit')))
    // {
    //     $firstname=$_POST['firstname'];
    //     $lastname=$_POST['lastname'];
    //     $age=$_POST['age'];
    //     $contact=$_POST['contact'];
    //     $address=$_POST['address'];
    //     $wpdb->query("INSERT INTO $table_name(firstname,lastname,age,contact,address)values('$firstname','$lastname','$age','$contact','$address')");
    // } -->

    <div>
        <form id="regformid">
            <div>
                <label>First Name:</label>
                <input type="text" name="firstname" placeholder="Firstname" id="firstname" required>
            </div>
            <div>
                <label>Last Name:</label>
                <input type="text" name="lastname" placeholder="Lastname" id="lastname" required>
            </div>
            <div>
                <label>Age:</label>
                <input type="number" name="age" placeholder="Age" id="age" required>
            </div>
            <div>
                <label>Contact No:</label>
                <input type="tel" name="contact" placeholder="Contact No" id="contact" required>
            </div>
            <div>
                <label>Address:</label>
                <input type="text" name="address" placeholder="Address" id="address" required>
            </div>
            <div>
                <label>Password:</label>
                <input type="password" name="password" placeholder="Password" id="pwd" required>
            </div>
            <div>
                <input type="submit" name="submit" id="regsubmit" value="submit">
            </div>
        </form>
    </div>

<?php



add_action('wp_ajax_registerdata','ajax_registerdata');

function ajax_registerdata(){
    echo "asdfasf";
    $arr=[];
    wp_parse_str($_POST('registerdata'),$arr);
    // echo "<pre>";
    // print_r($arr);
    global $wpdb;
    global $table_prefix;
    $table=$table_prefix.'registerdata';
    $result =$wpdb->insert($table,[
        "firstname"=>$arr['firstname'],
        "lastname"=>$arr['lastname'],
        "age"=>$arr['age'],
        "contact"=>$arr['contact'],
        "address"=>$arr['address'],
        "password"=>$arr['password'],

    ]);
    if($result){
        wp_send_json_success("Data is inserted!");
    }
    else{
        wp_send_json_success("Please try again!");
    }
} 
?>

<script>
    jQuery('#regformid').submit(function(e){
        e.preventDefault();
        var link="<?php echo admin_url('admin-ajax.php')?>";
        // alert(link);
        var form = jQuery('#regformid').serialize();
        var formData= new FormData;
        formData.append('action','registerdata');
        formData.append('registerdata',form);
        jQuery.ajax({
            url:link,
            data:formData,
            processData:false,
            contentType:false,
            type:'post',
            success:function(result){
                alert(result);
            }
        });

    });
</script>
