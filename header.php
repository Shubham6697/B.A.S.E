<!DOCTYPE html>
<html>
<head>
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
  .block{
  	border :0px solid gray;
  	padding: 15px;
  	margin:15px;
      margin-top: 50px;
  	float: left;
  }
        .block:hover{background-color: gray;}   
        
.abc        a.hover{
            background-color: azure;
		text-decoration: none;
        }
        
        .abc{margin-top: 50px;
        margin-left: 70px;}
.abc        ul.a {
  list-style-type: none;

            padding : 5px;
}
        


.header{
	background-color: #424242;

}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}
        
        
 .abc       .list{
            border : 1px solid grey;
            width:375px;
            margin-left: 30px;
            font-size: 22px;
        }

    </style>
    
	<title>Base</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"  href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    
</head>
<body >
	<div class="header" id="myHeader">
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
				echo '<li> <a href="profile.php" ><i class="fa fa-group" ></i>'.$_SESSION['first_name'].'</a> </li>';
				echo '<li> <a href="logout.php"><i class="fa fa-user"  ></i>  Log Out</a> </li>';
			}
			else{
			echo '<li> <a href="signup.php"><i class="fa fa-user-plus" ></i> Sign Up</a> </li>';
				echo '<li> <a href="login.php"><i class="fa fa-user"  ></i>  Log In</a> </li>';
				}

				
				echo '<li> <a href="aboutus.php"><i class="fa fa-group"></i> About Us</a> </li>';
				/*echo '<li> <a href="#"><i class="fa fa-phone-square fa-rotate-90"></i> Contact Us</a> </li>';*/
				if($_SESSION['first_name']!='')
					echo '<li > <a href="sell.php"><i class="fa fa-shopping-cart"></i> Sell</a> </li>';
				else
					echo '<li > <a href="login.php"><i class="fa fa-shopping-cart" ></i> Sell</a> </li>';

				?>
			</ul>
		</div>

	<form method="GET" action="Search.php">	
   <div class="search">
      	<input type="text" class="searchTerm" placeholder="What are you looking for ?" name="input" >
      	<button type="submit" class="searchButton" name="search">
        	<i class="fa fa-search" style="background-color: white;"></i>
     	</button>
     	</div>
   </form>
	<br>

        
        

        <div>
	
</div>
</div>      

 	
<br><br>

 	<div>
	<?php 
	include('animation.php');
	?>
</div>

	
	<div>
	<?php 
	include('category.php');
	include('block.php');
        ?></div>


	<div class="footer">
		Developed By MCA 3rd Semester
	</div>

	


	<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>

    

</body>
</html>

