
    <div>
      
         <form id="regformid" style="width:50%; margin: auto;" >
         <div class="success_msg" style="display: none">User registered Successfully!</div>
            <div class="error_msg" style="display: none">Message Not Sent, There is some error.</div>
                    <table class="table table-striped table-bordered" style="width:90%">
                        <tr>
                            <th>First name:</th>
                            <td><input type="text" name="firstname"  class="form-control" id="FirstName"  placeholder="Firstname"/></td>
                            <span class="error" id="firstname_err"></span>
                        </tr>
                        <tr>    
                            <th>Last name:</th>
                            <td><input type="text" name="lastname"  class="form-control" id="LastName" placeholder="Lastname"/></td>
                            <span class="error" id="lastname_err"></span>
                        </tr>
                        <tr>    
                            <th>Email:</th>
                            <td><input type="email" name="email"  class="form-control" id="Email"  placeholder="email"/></td>
                            <span class="error" id="useremail_err"></span>
                        </tr>
                        <tr>    
                            <th>Age:</th>
                            <td><input type="number" name="age"  class="form-control" id="Age"  placeholder="Age"/></td>
                            <span class="error" id="age_err"></span>
                        </tr>
                        <tr>    
                            <th>Contact No.:</th>
                            <td><input type="text" name="contact"  class="form-control"  id="Contact" placeholder="Contact No."/></td>
                            <span class="error" id="contact_err"></span>
                        </tr>
                        <tr>    
                            <th>Address:</th>
                            <td><input type="text" name="address"  class="form-control" id="Address" placeholder="Address"/></td>
                            <span class="error" id="useraddress_err"></span>
                        </tr>
                        <tr>    
                            <th>Password:</th>
                            <td><input type="password" name="password"  class="form-control" id="Password"  placeholder="Password"/></td>
                            <span class="error" id="password_err"></span>
                        </tr>
                    </table>
                    <button name="signup" type="submit" id="reg-btn" class="btn btn-outline-primary">Signup</button>
                 
            </form>   
    </div>

  




