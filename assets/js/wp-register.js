// $(document).ready(function() {

//     $('#reg-btn').click(function(event) {
//         event.preventDefault();

//         if (!firstname() || !lastname() || !checkemail() || !checkmobile() || !useraddress() || !checkpass()) {
//             console.log("er1");
//             $("#message").html(`<div class="alert alert-warning">Please fill all required field</div>`);
//         } else {
//             //alert("hi")
//             console.log("ok");
//             $("#message").html("");
//             var form = $('#form')[0];
//             var data = new FormData(form);
//             console.log("ajax start");
//             $.ajax({
//                 type: "POST",
//                 url: "./includes/register-check.php",
//                 // dataType: "json",
//                 data: data,
//                 beforeSend: function() {
//                     $('#reg-btn').html('<i class="fa-solid fa-spinner fa-spin"></i>');
//                     $('#reg-btn').attr("disabled", true);
//                     // $('#reg-btn').css({
//                     //     "border-radius": "50%"
//                     // });
//                 },

//                 success: function(data) {
//                     //console.log(data);
//                     // $('#formerr').html(data);
//                     console.log(data);
//                     // data['status']=='invalid'
//                     if (data['status'] == "success") {
//                         window.location('home.php');
//                     }
//                 },
//                 // complete: function() {
//                 //     console.log("ajax compelte")
//                 //     $('#form').trigger("reset");
//                 //     $('#reg-btn').html('Submit');
//                 //     $('#reg-btn').attr("disabled", false);
//                 // $('#reg-btn').css({
//                 //     "border-radius": "4px"
//                 // });
//                 // }
//             });
//         }
//     });
// });

// function firstname() {
//     console.log("firstname");
//     var pattern = /^[A-Za-z]+$/;
//     var user = $('#Firstname').val();
//     var validuser = pattern.test(user);
//     if ($('#Firstname').val().length < 4) {
//         $('#firstname_err').html('firstname length is too short');
//         return false;
//     } else if (!validuser) {
//         $('#firstname_err').html('firstname should be a-z ,A-Z only');
//         return false;
//     } else {
//         $('#firstname_err').html('');
//         return true;
//     }
// }

// function lastname() {
//     console.log("lastname");
//     var pattern = /^[A-Za-z]+$/;
//     var user = $('#Lastname').val();
//     var validuser = pattern.test(user);
//     if ($('#Lastname').val().length <= 1) {
//         $('#lastname_err').html('lastname length is too short');
//         return false;
//     } else if (!validuser) {
//         $('#lastname_err').html('lastname should be a-z ,A-Z only');
//         return false;
//     } else {
//         $('#lastname_err').html('');
//         return true;
//     }
// }




// function checkemail() {
//     console.log("email");
//     var pattern1 = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
//     var email = $('#Email').val();
//     var validemail = pattern1.test(email);
//     if (email == "") {
//         $('#useremail_err').html('required field');
//         return false;
//     } else if (!validemail) {
//         $('#useremail_err').html('invalid email');
//         return false;
//     } else {
//         $('#useremail_err').html('');
//         return true;
//     }
// }

// function checkpass() {
//     console.log("pass");
//     var pattern2 = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
//     var pass = $('#Password').val();
//     var validpass = pattern2.test(pass);

//     if (pass == "") {
//         $('#password_err').html('password can not be empty');
//         return false;
//     } else if (!validpass) {
//         $('#password_err').html('Minimum 5 and upto 15 characters, at least one uppercase letter, one lowercase letter, one number and one special character:');
//         return false;

//     } else {
//         $('#password_err').html("");
//         return true;
//     }
// }

// function useraddress() {
//     console.log("address");
//     var address = $('#Address').val();
//     if (address == "") {
//         $('#useraddress_err').html('useraddress can not be empty');
//         return false;
//     } else {
//         $('#useraddress_err').html("");
//         return true;
//     }
// }



// // function checkcpass() {
// //     var pass = $('#password').val();
// //     var cpass = $('#cpassword').val();
// //     if (cpass == "") {
// //         $('#cpassword_err').html('confirm password cannot be empty');
// //         return false;
// //     } else if (pass !== cpass) {
// //         $('#cpassword_err').html('confirm password did not match');
// //         return false;
// //     } else {
// //         $('#cpassword_err').html('');
// //         return true;
// //     }
// // }

// function contact() {
//     if (!$.isNumeric($("#Contact").val())) {
//         $("#contact_err").html("only number is allowed");
//         return false;
//     } else if ($("#Contact").val().length != 10) {
//         $("#contact_err").html("10 digit required");
//         return false;
//     } else {
//         $("#contact_err").html("");
//         return true;
//     }
// }