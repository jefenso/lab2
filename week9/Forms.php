<!DOCTYPE HTML>
<html>
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
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { 


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Forms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyForms (name, email, website, comment, gender)
VALUES ('$name', '$email', '$website', '$comment', '$gender' )";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?> 
</body>
</html>
