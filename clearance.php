<?php
include 'header.php';
?>

  <div class="clearance">
    <div class="notes">
      <h3 class="notes-header">NOTES</h3>
      <p class="notes-par">1. This section is only for graduating students whose names are listed</p>
      <p class="notes-par">2. Please use your admission number and the provided password</p>
      <p class="notes-par">3. A password was sent to your email i.e. xxx@zetech.ac.ke</p>

      <p class="notes-par">4. If not in your inbox, please check in your spam/junk folder</p>

      <p class="notes-par">5. If you can't get the password, please click "Forgot Password" to generate a new one</p>

      <p class="notes-par">6. If you can't get the password, please click "Forgot Password" to generate a new one</p><br>

      <p class="notes-par"><b>itsupport@zetech.ac.ke</b></p>

    </div>
    
  
    <div class="form">
      <form action="" method="post">
      <?php
//check if form was submitted
if($_SERVER["REQUEST_METHOD"]=="POST"){

  //collect user's data
$admissionnumber=$_POST["admissionnumber"];
$password=$_POST["password"];

//check if data exists in the db

$sql="SELECT* FROM login WHERE admissionnumber=?";

//statements to prevent sql injection
if($stmt=$conn->prepare($sql)){ 

  //bind parameters
  $stmt->bind_param('s', $admissionnumber);

  //execute
  $stmt->execute();

  //store data
  $result=$stmt->get_result();

  //check if an account was found
  if($result->num_rows >0){

    //fetch user
    $user=$result->fetch_assoc();
$hashedpassword=password_hash($password, PASSWORD_DEFAULT);
    //verify password
    if(password_verify($hashedpassword, $user["password"])){
  //set session variables
  $_SESSION["user_id"]=$user["id"];

}
    //redirect or show success message
 header("Location: clearance.process.php"); 
 exit();     
  
  }
  else{
    echo "<p> wrong user details</p>";
   }
}
}

    ?>
        <input type="text" name="admissionnumber" placeholder="Admission number" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
<button class="login" type="submit" name="submit">Login</button><button class="cancel"><a href="home.php">Cancel</a></button>
<p class="form-par"><a href="">Did not receive password, or Forgot Password?</a></p>
        <p class="form-par">(NB: Only if your name is in the graduation list)</p>



      </form>
      
  </div>
</div>


  <?php
include 'footer.php';
?>