<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif; background-image:url('../Base/asset/product%20image/back.jpg');
    background-repeat: no-repeat;
  background-attachment: fixed;}
    
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password] ,select {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}


/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 8px 8px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  border-radius: 10px;
  width: 40%;
  margin-left: 25px;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: 40%;
  padding: 8px 8px;
  background-color: #f44336;
  margin-left: 40px;
}




/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 40%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
  
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}




/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.8s;
  animation: animatezoom 0.8s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  
}
</style>
<body>




  <form id="id01" class="modal-content animate" action="" method="POST">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="first_name"><b>First Name</b><sup style="color: red">*</sup></label>
      <input type="text" placeholder="Enter First Name" name="first_name" required>

      <label for="last_name"><b>Last Name</b><sup style="color: red">*</sup></label>
      <input type="text" placeholder="Enter Last Name" name="last_name" required>

      <label for="email"><b>Email</b><sup style="color: red">*</sup></label>
      <input type="text" placeholder="Enter Email" name="email" required>
		
      <label for="mobile_no"><b>Mobile Number</b><sup style="color: red">*</sup></label>
      <input type="text" placeholder="Mobile Number" name="mobile_no" required>
    
      <label for="psw"><b>Password</b><sup style="color: red">*</sup><pre style="display: inline;">    (Atleast 6 characters)</pre></label>
      <input type="password" placeholder="Enter Password" name="psw" required>


      <label for="psw-repeat"><b>Repeat Password</b><sup style="color: red">*</sup></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
        
      <label for="s_question"><b>Security Question</b><sup style="color: red">*</sup></label><br>
        <select style="width:50%; padding:10px;">
            <option value="category"><b>What is your pet name?</b></option>
    <option value="category"><b>What is your favourite colour?</b></option>
    <option value="category"><b>What is your nickname?</b></option>
    <option value="category"><b>Which is your favourite movie?</b></option>
    <option value="category"><b>Which is your favourite city?</b></option>
        
        
        </select>
      <input type="text" placeholder="Security Question" name="s_question" required>
        
        
        

      
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px" required> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="submit" class="signupbtn" name="upload">Sign Up</button>
        <button type="button" onclick="window.location.href='index.php'" class="cancelbtn" name="cancel">Cancel</button>
        
        
      </div>
    </div>
  </form>



</body>
</html>



<?php
  if(isset($_POST['upload']))
  {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['psw'];
    $r_password = $_POST['psw-repeat'];
    $mobile_no = $_POST['mobile_no'];
    $s_question = $_POST['s_question'];



    function email_validation($str) { 
    return (!preg_match( "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $str)) ? FALSE : TRUE; 
    
    } 
      if(!email_validation($email)) { 
        echo "<script>alert('Invalid email address.')</script>"; 
        } 
      else 
      {

      if(strlen($password)>=6)
      {
        if(strlen($mobile_no) == 10)
          {
          if($password == $r_password)
            {
            $con =mysqli_connect('localhost','root','','base');

            $query1 = "SELECT * FROM `user` WHERE email=$email";

            if(mysqli_query($con,$query1) == True)
                echo "<script>alert('You are already registered !')</script>";
            else
                {  
                  $query = "INSERT INTO `user`( `email`, `password`, `first_name`,`last_name`,`contact_no`,`s_question`) VALUES ('$email','$password','$first_name','$last_name','$mobile_no','$s_question')";

                  $run = mysqli_query($con,$query);

                  if($run == True)
                    {
                      echo "<script>alert('You are sucessfully registered');";
                      echo "window.location.href='login.php';</script>";
                    }
                    else
                      echo "<script>alert('Error !')</script>";
                }
            }
            else
              echo "<script>alert('Password should be same. ')</script>";
          }
          else
            echo "<script>alert('Invalid Mobile Number !')</script>";
      }
      else
        echo "<script>alert('Password is too short.')</script>";

    
  }
  }



?>
