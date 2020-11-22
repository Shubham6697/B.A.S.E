<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: century gothic, Helvetica, sans-serif;background-image:url('../Base/asset/product%20image/back.jpg');
    background-repeat: no-repeat;
  background-attachment: fixed;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
    background: #f1f1f1
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


.container {
  padding-left:  50px;
  padding-right: 50px;
  padding-top: 25px;
  padding-bottom: 25px;
}

span.psw {
  float: right;
  padding-top: 16px;
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
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
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

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.8s;
  animation: animatezoom 0.8s
}

.info
{
  border-radius: 5px;
  margin-top: 10px;
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
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head> 
<body style="background-color: skyblue;">


 
  <form id="id01" class="modal-content animate" action="" method="POST">
    <div class="imgcontainer">
      <h2>Add Product</h2>
     
      <hr>
    </div>

    <div class="container">
      <label  for="product_name"><b>Product name</b><sup style="color: red;">*</sup></label>
      <input class="info" type="text" placeholder="Enter Product Name" name="product_name" required>

      <label for="category"><b>Choose Category</b><sup style="color: red;">*</sup></label><br>
  
  <select class="info" style="width:100%; padding:10px;" name="category" >
    <option value="Vehicle">Vehicle</option>
    <option value="Stationary">Stationary</option>
    <option value="Electronics and Appliances">Electronics and Appliances</option>
    <option value="Furniture">Furniture</option>
    <option value="Sports">Sports</option>
      <option value="Fashion">Fashion</option>
    <option value="Mobile and Accessories">Mobile and Accessories</option>
    <option value="Homes">Homes</option>
    <option value="Others">Others</option>
  </select>
  <br><br>
  


      <label for="brand_name"><b>Brand name</b></label>
      <input class="info" type="text" placeholder="Enter Brandname" name="brand_name" >

      <label  for="price"><b>Product price</b><sup style="color: red;">*</sup></label>
      <input class="info" type="text" placeholder="Enter price" name="price" required>

      <label for="description"><b>Product description</b></label><br>
      <textarea  class="info" id="subject" name="description" placeholder="Write something.." style="width:100%; height:50px;"></textarea>

      <label  for="address"><b>Seller Address</b><sup style="color: red;">*</sup></label>
      <input class="info" type="text" placeholder="Enter address" name="address" required><br>

      <label  for="mobile"><b>Mobile No.</b><sup style="color: red;">*</sup></label>
      <input class="info" type="text" placeholder="Enter Mobile Number" name="mobile" required><br>

      <label  for="product_image1"><b>Product Image 1</b><sup style="color: red;">*</sup></label><br>
      <input type="file" name="product_image1" accept="image/*" required>
      <br>

      <label  for="product_image2"><b>Product Image 2</b><sup style="color: red;">*</sup></label><br>
      <input type="file" name="product_image2" accept="image/*" required>
      <br>
        
      <label  for="product_image3"><b>Product Image 3</b></label><br>
      <input type="file" name="product_image3" accept="image/*" >
      <br>
        
      <label  for="product_image4"><b>Product Image 4</b></label><br>
      <input type="file" name="product_image4" accept="image/*" >
      <br>
      <br>
      <input type="checkbox" checked="checked" name="remember" required><b> Confirm</b><br><br>
      
<button type="submit" name="upload">Add product</button>
<button type="button" onclick="window.location.href='index.php'" class="cancelbtn">Cancel</button>
      
      

        
    </div>

    
  </form>


</body>
</html>

<?php
if(isset($_POST['upload']))
  {

    $product_price = $_POST['price'];
    $product_name = $_POST['product_name'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $brand_name = $_POST['brand_name'];
    $address = $_POST['address'];
    $mobile_no = $_POST['mobile'];
    $product_image1 = $_POST['product_image1'];
    $product_image2 = $_POST['product_image2'];
    $product_image3 = $_POST['product_image3'];
    $product_image4 = $_POST['product_image4']; 
    
    if(strlen($mobile_no) == 10)
          {
            $con =mysqli_connect('localhost','root','','base');  
                $query = "INSERT INTO `products`(`product_name`, `category`, `brand_name`, `price`, `description`, `address`, `mobile`, `product_image1`, `product_image2`, `product_image3`, `product_image4`) VALUES ('$product_name','$category','$brand_name','$product_price','$description','$address','$mobile_no','$product_image1','$product_image2','$product_image3','$product_image4')";

                $run = mysqli_query($con,$query);

                if($run == True)
                {
                  echo "<script>alert('You product is sucessfully updated');";
                  echo "window.location.href='index.php';</script>";
                }
                else
                  echo "<script>alert('Error !')</script>";
          }
    else
        echo "<script>alert('Invalid Mobile Number !')</script>";
}
?>
