$(document).ready(function() {
    $('#regformid').submit(function(e) {
        e.preventDefault();
        // alert('hi');
    if (!firstName() || !lastName() || !checkEmail() || !checkAge() || !checkContact() || !checkAddress() || !checkPass()) {
            console.log("er1");
            $("#message").html(`<div class="alert alert-warning">Please fill all required field</div>`);
        } else {
            var link = "http://localhost/wp_plugindev/wp-admin/admin-ajax.php";
            var firstname = $('#FirstName').val();
            var lastname = $('#LastName').val();
            var email = $('#Email').val();
            var age = $('#Age').val();
            var contact = $('#Contact').val();
            var address = $('#Address').val();
            var password = $('#Password').val();
            var data = {
                'action': 'ajax_registerform',
                'firstname': firstname,
                'lastname': lastname,
                'email': email,
                'age': age,
                'contact': contact,
                'address': address,
                'password': password
            };
          

            jQuery.ajax({

                type: 'POST',
                url: link,
                data: data,

                success: function(data) {
                    console.log(data);
                    $(".success_msg").css("display", "block");
                },
                // error: function(data) {
                //     console.log(data);
                //     $(".error_msg").css("display", "block");
                // }
            });
            $('.ajax')[0].reset();

        }
    });
});

function firstName() {
    console.log("firstname");
    var pattern = /^[A-Za-z]+$/;
    var user = $('#FirstName').val();
    //var user = "pravin";
    var validuser = pattern.test(user);
    // alert(user);
    // alert(user.length);
    if (user.length < 4) {
        $('#firstname_err').html('firstname length is too short');
        return false;
    } else if (!validuser) {
        $('#firstname_err').html('firstname should be a-z ,A-Z only');
        return false;
    } else {
        $('#firstname_err').html('');
        return true;
    }
}

function lastName() {
    console.log("lastname");
    var pattern = /^[A-Za-z]+$/;
    var user = $('#LastName').val();
    var validuser = pattern.test(user);
    if ($('#LastName').val().length <= 1) {
        $('#lastname_err').html('lastname length is too short');
        return false;
    } else if (!validuser) {
        $('#lastname_err').html('lastname should be a-z ,A-Z only');
        return false;
    } else {
        $('#lastname_err').html('');
        return true;
    }
}




function checkEmail() {
    console.log("email");
    var pattern1 = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
    var email = $('#Email').val();
    var validemail = pattern1.test(email);
    if (email == "") {
        $('#useremail_err').html('Email required');
        return false;
    } else if (!validemail) {
        $('#useremail_err').html('invalid email');
        return false;
    } else {
        $('#useremail_err').html('');
        return true;
    }
}

function checkAge() {
    var pattern3 =/^\S[0-9]{0,3}$/;
    var age = $('#Age').val();
    var validage = pattern3.test(age);
    if(!validage) {
        $('#age_err').html("enter right age !!");
        return true;
    }
    else {
        $('#age_err').html("");
        return true;
    }
}

function checkPass() {
    console.log("pass");
    var pattern2 = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    var pass = $('#Password').val();
    var validpass = pattern2.test(pass);

    if (pass == "") {
        $('#password_err').html('password can not be empty');
        return false;
    } else if (!validpass) {
        $('#password_err').html('Minimum 5 and upto 15 characters, at least one uppercase letter, one lowercase letter, one number and one special character:');
        return false;

    } else {
        $('#password_err').html("");
        return true;
    }
}

function checkAddress() {
    console.log("address");
    var address = $('#Address').val();
    if (address == "") {
        $('#useraddress_err').html('useraddress can not be empty');
        return false;
    } else {
        $('#useraddress_err').html("");
        return true;
    }
}



// function checkcpass() {
//     var pass = $('#password').val();
//     var cpass = $('#cpassword').val();
//     if (cpass == "") {
//         $('#cpassword_err').html('confirm password cannot be empty');
//         return false;
//     } else if (pass !== cpass) {
//         $('#cpassword_err').html('confirm password did not match');
//         return false;
//     } else {
//         $('#cpassword_err').html('');
//         return true;
//     }
// }

function checkContact() {
    if (!$.isNumeric($("#Contact").val())) {
        $("#contact_err").html("Enter your Phone Number");
        return false;
    } else if ($("#Contact").val().length != 10) {
        $("#contact_err").html("10 digit required");
        return false;
    } else {
        $("#contact_err").html("");
        return true;
    }
}