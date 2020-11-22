<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.mySlides {display: none;}


/* Slideshow container */
.slideshow-container {
  max-width: 60%;
  
  margin: auto;
}



/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
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
</head>
<body>

<aside>
<div class="slideshow-container">

<div class="mySlides fade">
  
  <img src="asset/img3.jpg" style="height:350px; width:98%">
  
</div>

<div class="mySlides fade">
  
  <img src="asset/img2.jpg" style="height:350px; width:98%">

</div>

<div class="mySlides fade">

  <img src="asset/img1.jpg" style="height:350px; width:98%">
  
</div>

</div>
<br>

<div style="text-align:center;">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var j;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for(j=0;j<50;j++)
  {
  for (i = 0; i <=2; i++) {
    slides[i].style.display = "none";  
  }
}
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 6000); // Change image every 2 seconds
}
</script>
</aside>

</body>
</html> 



<?php




?>