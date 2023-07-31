<?php
include('include/config.php');
if(!empty($_POST["specilizationid"])) 
{

 $sql=mysqli_query($conn,"select plumberName,id from plumber where specilization='".$_POST['specilizationid']."'");?>
 <option selected="selected">Select Plumber </option>
 <?php
 while($row=mysqli_fetch_array($sql))
 	{?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['plumberName']); ?></option>
  <?php
}
}



if(!empty($_POST["plumber"])) 
{

 $sql=mysqli_query($conn,"select plumFees from plumber where id='".$_POST['plumber']."'");
 while($row=mysqli_fetch_array($sql))
 	{?>
 <option value="<?php echo htmlentities($row['plumFees']); ?>"><?php echo htmlentities($row['plumFees']); ?></option>
  <?php
}
}

?>

