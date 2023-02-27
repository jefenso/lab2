<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
<link rel="stylesheet" href="style.css">
<link rel="icon" type="image/x-icon" href="https://static.wikia.nocookie.net/honkaiimpact3_gamepedia_en/images/0/05/Flame-Chasers%27_Triumph.png/revision/latest/scale-to-width-down/256?cb=20220916154731">
</head>

<body>
  
    <div class="w3-row w3-padding w3-black w3-opacity-min">
      <div class="w3-col s3">
        <a href="index.php" class="w3-button w3-block w3-black glow2 w3-hover-purple">HOME</a>
      </div>
      <div class="w3-col s3">
        <a href="INTERESTS.php" class="w3-button w3-block w3-black glow2 w3-hover-purple">INTERESTS</a>
      </div>
      <div class="w3-col s3">
        <a href="HOBBIES.php" class="w3-button w3-block w3-black glow2 w3-hover-purple">HOBBIES</a>
      </div>
      <div class="w3-col s3">
        <a href="GALLERY.php" class="w3-button w3-block w3-black glow2 w3-hover-purple">IMAGES</a>
      </div>
    </div>
  </div>
  <div style="text-align: center;">

<style>
    body {
      background-repeat: no-repeat;background-size: cover; background-image: url("guwa.gif");
      background-attachment: fixed;
      
        }
        p.third {
        background: rgba(255, 23, 104, 0.6);
      }
  

  * {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
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
  animation-name: fade;
  animation-duration: 1.5s;
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
<h1 class="glow">GALLERY</h1>
<div class="slideshow-container w3-round-large">

  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="img1 .jpg" style="width:100%"class = w3-round-large>
    <div class="text"></div>
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="img2.jpg" style="width:100%"class = w3-round-large>
    <div class="text"></div>
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="img3.jpg" style="width:100%"class = w3-round-large>
    <div class="text"></div>
  </div>
  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="img6.jpg" style="height: 40%"class = w3-round-large>
    <div class="text"></div>
  </div>
  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="img4.jpg" style="height: 40%"class = w3-round-large>
    <div class="text"></div>
  </div>
  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="img5.jpg" style="width: 100%;"class = w3-round-large>
    <div class="text"></div>
  </div>
  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="img 7.jpg" style="height: 40%;"class = w3-round-large>
    <div class="text"></div>
  </div>
  
  </div>
  <br>
  
  <div style="text-align:center">
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span>
    <span class="dot"></span> 
  </div>
  
  <script>
  let slideIndex = 0;
  showSlides();
  
  function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
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
    setTimeout(showSlides, 4000); // Change image every 2 seconds
  }
  </script>
  



</body>
</html>
