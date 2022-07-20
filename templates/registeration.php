

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
    <form style="width:50%; margin: auto;" method="post" action="" enctype="multipart/form-data">
                    <table class="table table-striped table-bordered" style="width:90%">
                        <tr>
                            <th>First name:</th>
                            <td><input type="text" name="firstname"  class="form-control" id="firstName"  placeholder="Firstname"/></td>
                        </tr>
                        <tr>    
                            <th>Last name:</th>
                            <td><input type="text" name="lastname"  class="form-control" id="lastName" placeholder="Lastname"/></td>
                        </tr>
                        <tr>    
                            <th>Email:</th>
                            <td><input type="email" name="email"  class="form-control" id="Email"  placeholder="email"/></td>
                        </tr>
                        <tr>    
                            <th>Age:</th>
                            <td><input type="text" name="age"  class="form-control" id="Age"  placeholder="Age"/></td>
                        </tr>
                        <tr>    
                            <th>Contact No.:</th>
                            <td><input type="text" name="contact"  class="form-control"  id="Contact" placeholder="Contact No."/></td>
                        </tr>
                        <tr>    
                            <th>Address:</th>
                            <td><input type="text" name="address"  class="form-control" id="Address" placeholder="Address"/></td>
                        </tr>
                        <tr>    
                            <th>Password:</th>
                            <td><input type="password" name="address"  class="form-control" id="Password"  placeholder="Password"/></td>
                        </tr>
                    </table>
                    <button name="insert" type="submit" class="btn btn-outline-primary" value="signup">Signup</button>
                    
                </form>   
    </div>

    <?php
add_action( 'admin_enqueue_scripts', 'my_enqueue' );
function my_enqueue($hook) {
    if( 'index.php' != $hook ) {
	// Only applies to dashboard panel
	return;
    }
        
	wp_enqueue_script( 'ajax-script', plugins_url( '/js/my_query.js', __FILE__ ), array('jquery') );

	// in JavaScript, object properties are accessed as ajax_object.ajax_url, ajax_object.we_value
	wp_localize_script( 'ajax-script', 'ajax_object',
            array( 'ajax_url' => admin_url( 'admin-ajax.php' ), 'we_value' => 1234 ) );
}

// Same handler function...
add_action( 'wp_ajax_my_action', 'my_action' );
function my_action() {
	global $wpdb;
	$whatever = intval( $_POST['whatever'] );
	$whatever += 10;
        echo $whatever;
	wp_die();
}

?>

<!-- <script>
    jQuery('#regformid').submit(function(e){
        e.preventDefault();
        var link="<?php echo admin_url('admin-ajax.php')?>";
        // alert(link);
        var form = jQuery('#regformid').serialize();
        var formData= new FormData;
        formData.append('action','registerform');
        formData.append('registerform',form);
        console.log(form);
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

-->
<?php




// function ajax_registerform(){
//     echo "asdfasf";
//     $arr=[];
//     echo wp_parse_str($_POST('registerform'),$arr);
    // echo "<pre>";
    // print_r($arr);
//     global $wpdb;
//     global $table_prefix;
//     $table=$table_prefix.'registerform';
//     $result =$wpdb->insert($table,[
//         "firstname"=>$arr['firstname'],
//         "lastname"=>$arr['lastname'],
//         "age"=>$arr['age'],
//         "contact"=>$arr['contact'],
//         "address"=>$arr['address'],
//         "password"=>$arr['password'],

//     ]);
//     if($result>0){
//         wp_send_json_success("Data is inserted!");
//     }
//     else{
//         wp_send_json_success("Please try again!");
//     }
// } 

// add_action('wp_ajax_registerform','ajax_registerform');

// ?> 