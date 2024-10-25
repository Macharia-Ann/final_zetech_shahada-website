<?php
session_start();
include_once 'database.php';
include_once 'header.php';


//check if form was submitted using post
if($_SERVER["REQUEST_METHOD"]=="POST"){

  //collect user data
  $admissionnumber=$_POST["admissionnumber"];
  $password=$_POST["password"];

  //check if admission number already exist
  $checkAdmissionQuery="SELECT * FROM login WHERE admissionnumber='$admissionnumber' ";
  $result=$conn->query($checkAdmissionQuery);
  if($result->num_rows >0){
    echo "admission already exists <br>";
  }
  $checkPasswordQuery="SELECT * FROM login WHERE password='$password'";
  $result=$conn->query($checkPasswordQuery);
  if($result->num_rows >0){
    echo "<p class="error">password already exists</p>";

  }
  else{
    //Hash password
    $hashedpassword=password_hash($password, PASSWORD_DEFAULT);

    //insert the data into the database
    $insertintoQuery="INSERT INTO login (admissionnumber, password) VALUES('$admissionnumber', '$hashedpassword')";
   if($conn->query($insertintoQuery)){
    echo "<p class="error">registration successful</p>";
   }
}
$conn->close();
}
?>

<div class="form">
      <form action="" method="post">
        <input type="text" name="admissionnumber" placeholder="Admission number" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
<button class="login" type="submit" name="submit">Register</button>



      </form>