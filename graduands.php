<?php
include 'header.php';


?>
<div>
<div class="graduands">
  <h3 class="graduands-header">Provisional List Of Graduands</h3><br><br>
  <div class="graduands-form">
<form action="" method="post">
<input type="text" name="fullname" placeholder="name, email, Adm No" required>
<select id="options" name="options">
<option value="school" name="program">--select school--</option>

  <option value="business">SCHOOL OF BUSINESS AND ECONOMICS</option>
  <option value="education">SCHOOL OF EDUCATION ARTS AND SOCIAL SCIENCES</option>

  <option value="ict-media">SCHOOL OF ICT, MEDIA AND ENGINEERING</option>

  <option value="zbti">ZBTI</option>

</select>
<select id="year" name="year">
  <option value="years">--select year--</option>
  <option value="years">2022</option>
  <option value="years">2023</option>
  <option value="years">2024</option>
</select>
<button class="graduands-bt" type="submit" name="search">Search</button><button class="graduands-bt" type="submit" name="list_all">List All</button><button class="clearance-bt"><a href="clearance.php">clearance process</a></button>
<?php

?>
</form>

</div>
</div>



<?php

 echo '<table width="100%">
       
 <tr><th>Fullname</th><th>Admission No</th><th>Program</th><th>Year</th></tr>';
 
//query to get items from the database
 $query =mysqli_query($conn, "select * from students order by id ");

   while($row = mysqli_fetch_object($query))
      {

   echo '<tr><td>'.$row->id. '. <a href="graduand.details.php?sid='.$row->id.'">'.$row->fullname.'</td><td></a>'.$row->admnum.'</td><td>'.$row->program.'</td><td>'.$row->year.'</td></tr>';
      }

 echo '</table>';
?>


</div>


<?php
include 'footer.php';
?>