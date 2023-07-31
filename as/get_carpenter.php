<?php
include('include/config.php');
if(!empty($_POST["specilizationid"])) 
{

 $sql=mysqli_query($conn,"select carpenterName,id from carpenter where specilization='".$_POST['specilizationid']."'");?>
 <option selected="selected">Select Carpenter </option>
 <?php
 while($row=mysqli_fetch_array($sql))
 	{?>
  <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['carpenterName']); ?></option>
  <?php
}
}


if(!empty($_POST["carpenter"])) 
{

 $sql=mysqli_query($conn,"select carpFees from carpenter where id='".$_POST['carpenter']."'");
 while($row=mysqli_fetch_array($sql))
 	{?>
 <option value="<?php echo htmlentities($row['carpFees']); ?>"><?php echo htmlentities($row['carpFees']); ?></option>
  <?php
}
}

?>

