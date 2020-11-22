

    <style>
        .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: brown;
   color: white;
   text-align: center;
            
}
.abc{
	margin-top: 50px;
	margin-left: 40px;
}
  .block{
  	border :1px solid black;
  	padding: 15px;

  	margin:15px;
  	margin-top:50px;
  	float: left;
  }
        
.abc        a.hover{
            background-color: azure;
		text-decoration: none;
        }
        
        
.abc        ul.a {
  list-style-type: none;

            padding : 5px;
}
        

        
        
 .abc       .list{
            border : 1px solid grey;
            width:375px;
            margin-left: 30px;
            font-size: 22px;
        }

 /*--------------------------------------------------------------------------------*/       
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
	border: 1px solid black;
	margin-left: 150px; 
	  max-width: 700px;
  position: relative;

}

/* Next & previous buttons */
.prev, .next {
	background-color: #ff3333;
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */

/* Number text (1/3 etc) */
.numbertext {
	background-color: #ff3333;
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
 </style>


	<title>Base</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"  href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
   
<body >
	<header>
		<div class="main">
			<div class="logo">
				<a href="index.php"><img src="asset/logo1.png" ></a>
			</div>
			<ul>
				<li> <a href="index.php"><i class="fa fa-home"></i> Home</a> </li>
			<?php
			error_reporting(1);	
			session_start();
			if($_SESSION['first_name']!=''){
				echo '<li> <a href="#" ><i class="fa fa-group" ></i>'.$_SESSION['first_name'].'</a> </li>';
				echo '<li> <a href="logout.php"><i class="fa fa-user"  ></i>  Log Out</a> </li>';
			}
			else{
			echo '<li> <a href="signup.php"><i class="fa fa-user-plus" ></i> Sign Up</a> </li>';
				echo '<li> <a href="login.php"><i class="fa fa-user"  ></i>  Log In</a> </li>';
				}

				
				echo '<li> <a href="#"><i class="fa fa-group"></i> About Us</a> </li>';
			
				if($_SESSION['first_name']!='')
					echo '<li > <a href="sell.php"><i class="fa fa-shopping-cart"></i> Sell</a> </li>';
				else
					echo '<li > <a href="login.php"><i class="fa fa-shopping-cart" ></i> Sell</a> </li>';

				?>
			</ul>
		</div>

		
      	<form method="GET" action="Search.php">  
   <div class="search">
        <input type="text" class="searchTerm" placeholder="What are you looking for ?" name="input" style="height: 36px;" >
        <button type="submit" class="searchButton" name="search">
          <i class="fa fa-search" style="background-color: white;"></i>
      </button>
      </div>
   </form>
   
	</div>
	<br><br><hr><br><br><br>
	<?php
	$var=$_GET['x'];

	$con = mysqli_connect('localhost','root','','base');
	$result = mysqli_query($con,"SELECT * FROM `products` WHERE product_id='$var'");
	$data=mysqli_fetch_assoc($result);
	
	echo "
  <table>
  <tr>
  <th><th>
  <th><th>
  </tr>
  <tr>
  <td>
  <div style='border: 1px  ; border-width: 400px;'>
		<div class='slideshow-container'>
<div class='mySlides fade'>
  <div class='numbertext'>1 / 2</div>
  <img src='asset/product image/".$data['product_image1']."' alt='Not Present' width='700px' height='600px' >
</div>

<div class='mySlides fade'>
  <div class='numbertext'>2 / 2</div>
  <img src='asset/product image/".$data['product_image2']."' alt='Not Present' width='700px' height='600px' >
</div>


<a class='prev' onclick='plusSlides(-1)'>&#10094;</a>
<a class='next' onclick='plusSlides(1)'>&#10095;</a>

</div>




<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName('mySlides');
  var dots = document.getElementsByClassName('dot');
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = 'none';  
  }
  
  slides[slideIndex-1].style.display = 'block';  
}
</script>
</td>
<td>

<div style='float:right; margin-top: -10px;margin-left: 100px;'>
	<h1 style='color:#fff;'>".$data['product_name']."</h1>
	<hr>
	<br>
	<br><br>
	<h1 style='color:#fff;'><i class='fa fa-rupee'></i>".' '.$data['price']."</h1><hr><br>
	<br><br>
	<h2 style='color:#ff8080;'>Seller Contact</h2><br>
  
	
	<h3 style='color:#fff;'>".$data['mobile']."</h3>
  <hr>
	<br>
  <br>
  <br>
  <h2 style='color:#ff8080;'>Address</h2>
  <br>

	<h3 style='color:#fff;'>".$data['address']."</h3>
  <hr>

</div>
<div style='margin-left:100px;margin-top:540px;'>
<h3 style='color:#ff8080 ; '>Product Details</h3>
</div>
</td>
</tr>
<tr style='height:100px'>
<td>
<br>
<h4 style='color:#ff8080 ;margin-left:150px '><u>Product Description</u></h4>
<br>
<div style='border : 1px white solid; border-height : 100px; margin-left:150px'>
<p style='color:#fff;'>".$data['description']."</p>

</div>
</td>
<td  >
<pre style='margin-left:100px; color:#fff;'><b>Brand                    :</b>  ".$data['brand_name']."</pre>
<br>
<pre style='margin-left:100px; color:#fff;'><b>Purchasing Year  :</b> ".$data['YEAR']."</pre>
<br>
<pre style='margin-left:100px; color:#fff;'><b>Posted On             :</b> ".$data['date']."</pre> 
</td>
</tr>
</table>

	</div>";
	?>