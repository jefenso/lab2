<!DOCTYPE php>
<php>
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
<style>
 h1.a {
  font-family: "Audiowide", sans-serif;
  color: beige;
}
 h2.b {
  font-family: "Audiowide", sans-serif;
  color: rgb(48, 65, 224);
 }
 .glow {
  font-family: "Audiowide", sans-serif;
  font-size: 80px;
  color: #fff;
  text-align: center;
  animation: glow 1s ease-in-out infinite alternate;
}
.glow2 {
  font-family: "Audiowide", sans-serif;
  font-size: 20px;
  color: #fff;
  text-align: center;
  animation: glow 1s ease-in-out infinite alternate;
}
.glow3 {
  font-family: "Audiowide", sans-serif;
  font-size: 40px;
  color: #fff;
  text-align: center;
  animation: glow 1s ease-in-out infinite alternate;
}
@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}

</style>

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
  
      #image {
  display: none;
  }
</style>
  </div>
  <p id="demo"></p>
  <p id="demo2"></p>
  <p id="demo3"></p>
  <p id="demo4"></p>

  <script>
  class Car {
    constructor(name, year) {
      this.name = name;
      this.year = year;
    }
  }
  
  const myCar = new Car("Honda Civic", 2015);
  document.getElementById("demo").innerphp =
  myCar.name + " " + myCar.year;


  document.getElementById("demo2").innerphp =
"The temperature is " + toCelsius(77) + " Celsius";

function toCelsius(fahrenheit) {
  return (5/9) * (fahrenheit-32);
} 

const person = {firstName:"Motoaki", lastName:"Tanigo", age:49, eyeColor:"brown"};

// Display some data from the object:
document.getElementById("demo3").innerphp =
person.firstName + " is " + person.age + " years old.";



document.getElementById("demo4").innerphp = message();

  </script>
<p>Wait 3 seconds (3000 milliseconds) for this page to change.</p>

<h1 id="demo6" style="visibility: hidden;"> I AM THE STORM</h1>

<script>
setTimeout(myFunction, 3000);

function myFunction() {
  document.getElementById("demo6").style.visibility="visible";
}
</script>

</body>
</php>
