<?php
include 'smarthome.html';
?>
	<link rel="stylesheet" type="text/css" href="smarthome.css">
<div id="mainhome">
<div>
    <div id="welcome"><h3 style="color: blue">Welcome to smarthome systems</h3>
  <p id="conte">Welcome to smarthome .Through this portal one can manage his/her premises by:<br>first registering then manage them<br>
    uploading all your details online<br>
    allow your customers to access service over an android app<br>
    <strong>thank you!!!!</strong> </p>
  </div>
    </div>
</div>
<div id="main"><meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
 width: 120%;
  margin-top: 30px;
  position: relative;
  max-height: 100%;
  max-width: 100%;
  margin-left: -30%;
  margin: auto;
  height: 40%;
   float: left;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
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

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/home5.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/home13.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/home9.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
document.getElementById("mainhome").style.display="none";
	document.getElementById("ground").innerHTML=document.getElementById("mainhome").innerHTML;
</script>
<style type="text/css">
    #main{
    background-color: transparent;
    float: left;
    height: 30px;
    width: 45%;
    margin-left: 30%;
    position: absolute;
    margin-top: -27%;
  
  }
    #icon{
    display: block;
    width: 5%;
    height: 5%;
  }
  #welcome{
    float: left;
    margin-left: 0px;
    width: 30%;
    font-size: 20px;
    margin-top: 5px;

  }
</style>



	