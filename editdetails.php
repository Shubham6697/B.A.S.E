<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;background-color:  skyblue;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
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
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: 40%;
  padding: 8px 8px;
  background-color: #f44336;
  margin-left: 40px;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
  margin-right: 25px;
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
  padding-bottom:  50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 30%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}



/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
  padding-bottom:  30px;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 40%;
  }
}



</style>
</head>
<body>




  <form id="id01" class="modal-content animate" action="" method="POST">



    <div class="imgcontainer">
    	<h1>Edit Details</h1>
    	<hr>
					<img src="avatar.png" alt="avatar" style="display: block;margin-left: auto;margin-right: auto;width:180px;"></img>
					<label for="photo" style="display: block;margin-left: auto;margin-right: auto;width:180px;font-family:'roboto',sans-serif; padding-top: 20px;">Your profile photo</label>
					<input type="file" name="photo" id="photo" style="display: block;margin-left: auto;margin-right: auto;font-family:'roboto',sans-serif;padding-left: 70px;padding-top: 20px;"/>
				</div>




    <div class="container">
      <label for="firstname"><b>First Name</b> </label>
      <input type="text" placeholder="Enter First Name" name="firstname" required>

      <label for="lastname"><b>Last Name</b> </label>
      <input type="password" placeholder="Enter Last name" name="lastname" required>
        
        <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
		
      <label for="mobile_no"><b>Mobile Number</b></label>
      <input type="text" placeholder="Mobile Number" name="mobile_no" required>

      <label for="mobile_no"><b>Add address</b></label>
      <input type="text" placeholder="Address line 1" name="address1" required>
      <input type="text" placeholder="Address line 2" name="address1" required>
      <input type="text" placeholder="pincode" name="address1" required>
    </div>
   

    
      
    

    <div class="clearfix">
      <button type="submit" class="signupbtn" name="upload">Login</button>
        <button type="button" onclick="window.location.href='header.php'" class="cancelbtn">Cancel</button>
        <span class="psw"> <a href="#">Forgot password?</a></span>

</div>



  </form>




</body>
</html>