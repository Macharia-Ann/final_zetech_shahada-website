<?php
include 'header.php';



$sid = $_REQUEST['sid'];


$sql="SELECT * FROM students WHERE id= ".$sid;

$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_object($res);

//print_r($row); return;

?>
<div class="graduand-details1">
<h3 class="graduand-details-header">Graduand Details </h3>
<div class="graduand-details">
   <div class="graduand-details-div1">
  <div class="graduand-details-div">
<p class="graduand-details-par"><b>Admission Number</b></p>
<p class="graduand-details-par"><?php echo $row->admnum; ?></p>

</div>
<div class="graduand-details-div">
<p class="graduand-details-par"><b>Program</b></p>
<p class="graduand-details-par"><?php echo $row->program; ?></p>

</div>
<button class="back-to-graduands" name="submit" type="submit"><a href="graduands.php">Back to Graduands Listing</a></button>
</div>

<div class="graduand-details-div">
<div class="graduand-details-div">
<p class="graduand-details-par"><b>Fullname</b></p>
<p class="graduand-details-par"><?php echo $row->fullname; ?></p>

</div>
<div class="graduand-details-div">
<p class="graduand-details-par"><b>Level</b></p>
<p class="graduand-details-par"><?php echo $row->level; ?></p>

</div>
</div>


  <div class="graduand-details-div">
<p class="graduand-details-par"><b>School</b></p>
<p class="graduand-details-par"><?php echo $row->faculty; ?></p>

</div>
<br>





</div>

</div>






<?php
include 'footer.php';
?>