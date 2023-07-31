<?php
include('include/config.php');
if(!empty($_POST["specilizationid"])) 
{

 $sql=mysqli_query($conn,"select electricianName,id from electrician where specilization='".$_POST['specilizationid']."'");?>
 <option selected="selected">Select Electrician </option>
 <?php
 while($row=mysqli_fetch_array($sql))
 	{?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['electricianName']); ?></option>
  <?php
}
}


if(!empty($_POST["electrician"])) 
{

 $sql=mysqli_query($conn,"select elecFees from electrician where id='".$_POST['electrician']."'");
 while($row=mysqli_fetch_array($sql))
 	{?>
 <option value="<?php echo htmlentities($row['elecFees']); ?>"><?php echo htmlentities($row['elecFees']); ?></option>
  <?php
}
}

?>

