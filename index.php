<?php 
// php script ke saath mySQL ka connection
$insert = false;

if(isset($_POST['name'])) {
$server = "localhost";
$username = "root";
$password = "";


$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("ERROR DUE TO: " . mysqli_connect_error());
}
// echo "success connecting to the db"
$name = $_POST['name'];
$age = $_POST['age'];
$number = $_POST['number'];
$gender = $_POST['gender'];
$batch = $_POST['batch'];
$otherinfo = $_POST['otherinfo'];

// Create the SQL query
$sql = "INSERT INTO `trip`. `trip` (`Name`, `Age`, `Mobile Number`, `Gender`, `Batch`, `Other Info.`)
 VALUES ('$name', '$age', '$number', '$gender', '$batch', '$otherinfo')";

// echo $sql . "<br>";

if($con->query($sql) === TRUE){
    // echo "<p>" . "\n successfully inserted" . "</p>";
    
}
else{
    echo $sql . " faced an error " . $con->error;
}

$con->close();

}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to Travel Form for RSVP</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <img class="bg" src="bg.jpg" alt="jiit" />
    <div class="container">
      <h1>Welcome to JIIT Travel Trip Form</h1>
      <br />
      <p style="font-size: 21px">
        Enter Your details to confirm your participation
      </p>
      <br />
      <?php
      if($insert == true){
      echo"<p id='greet'>
        Thanks for filling the form, We are happy to see you joining us for the
        trip
      </p>";
      }
      ?>
      <br />

      <form action="index.php" method="post">
        <label for="name">NAME: </label>
        <input
          type="text"
          name="name"
          id="name"
          placeholder="Enter Your Name"
        />
        <br /><br />

        <label for="age">AGE: </label>
        <input type="number" name="age" id="age" placeholder="Enter Your Age" />
        <br />
        <br />
        <label for="number">
          Mobile Number:
          <input name="number"
            type="number"
            id="number"
            
            placeholder="Enter Your Mobile Number"
          />
        </label>
        <br />
        <br />
        <div id="genderdiv">
          <label for="gender">GENDER: </label>
          <br />
          <br />
          <label for="">
            MALE
            <input type="radio" name="gender" value="male" />
          </label>
          <br />
          <br />
          <label for="">
            FEMALE
            <input type="radio" name="gender" value="female" />
          </label>
          <br /><br />
          <label for="">
            OTHERS
            <input type="radio" name="gender" value="others" />
          </label>
        </div>
        <br /><br />
        <label for="batch">Enter Your Batch: </label>
        <input name = "batch"
          type="text"
          
          id="batch"
          placeholder="Enter Your batch"
        />
        <br />
        <br />
        <label for="otherinfo">Other information: </label> <br />

        <br />
        <textarea
          name="otherinfo"
          id="otherinfo"
          cols="30"
          rows="10"
          placeholder="Enter any other relevant information..."
        ></textarea>
        <br />
        <br />
        <button class="btn">SUBMIT</button>
        <button class="reset">RESET</button>
      </form>
    </div>
    <script src="app.js"></script>
  </body>
</html>
