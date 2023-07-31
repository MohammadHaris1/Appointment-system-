<?php
session_start();
//error_reporting(0);
include('include/config.php');
if(!empty($_POST["email"])) {
	$email= $_POST["email"];
		
		$result =mysqli_query($conn,"SELECT email FROM users WHERE email='$email'");
		$count=mysqli_num_rows($result);
if($count>0)
{
echo "<span style='color:red'> Email already exists .</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> Email available for Registration .</span>";
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}

   	
if(isset($_POST['submit']))
{
	
	$specilization=$_POST['carpenterSpecialization'];
$carpenterid=$_POST['carpenter'];
$userid=$_SESSION['id'];
$fees=$_POST['fees'];
$appdate=$_POST['appdate'];
$time=$_POST['apptime'];
$userstatus=1;
$elecstatus=1;
	
	$query=mysqli_query($conn,"insert into appointment3( carpenterspecialization,carpenterId,userId, Fees,appointmentDate,
	appointmentTime,userStatus,carpenterStatus) values('$specilization','$carpenterid','$userid','$fees','$appdate','$time','$userstatus','$elecstatus')");
   	if($query)
	{
		echo "<script>alert('Your appointment successfully booked');</script>";
	}

}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User  | Book Appointment</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<link rel="icon" href="../static/image/favi.ico">
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
	
		<link rel="stylesheet" href="assets/css/styles.css">
		<script>
function getcarpenter(val) {
	$.ajax({
	type: "POST",
	url: "get_carpenter.php",
	data:'specilizationid='+val,
	success: function(data){
		$("#carpenter").html(data);
	}
	});
}
</script>	


<script>
function getfee(val) {
	$.ajax({
	type: "POST",
	url: "get_carpenter.php",
	data:'carpenter='+val,
	success: function(data){
		$("#fees").html(data);
	}
	});
}
</script>	




	</head>
	<body>
		<div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
			
						<?php include('include/header.php');?>
					
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">User | Book Appointment</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>User</span>
									</li>
									<li class="active">
										<span>Book Appointment</span>
									</li>
								</ol>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Book Appointment</h5>
												</div>
												<div class="panel-body">
													<p style="color:red;"><?php echo htmlentities($_SESSION['msg1']);?>
													<?php echo htmlentities($_SESSION['msg1']="");?></p>	
													<form role="form" name="book" method="post" >
													<div class="form-group">
															<label for="carpenterSpecialization">
																Carpenter Specialization
															</label>
															<select name="carpenterSpecialization" class="form-control" onChange="getcarpenter(this.value);" required="required">
																								<option value="">Select Specialization</option>
															<?php $ret=mysqli_query($conn,"select * from carpenterspecilization");
															while($row=mysqli_fetch_array($ret))
															{
															?>
																<option value="<?php echo htmlentities($row['specilization']);?>">
																	<?php echo htmlentities($row['specilization']);?>
																</option>
																<?php } ?>
																
															</select>
														</div>
														<div class="form-group">
															<label for="carpenter">
															Carpenter
															</label>
														<select name="carpenter" class="form-control" id="carpenter" onChange="getfee(this.value);" >
														<option value="">Select Carpenter</option>
														</select>
														</div>											
    													<div class="form-group">
															<label for="fees">
																 Fees
															</label>
															<select name="fees" class="form-control" id="fees"  readonly>
																
														</select>
														</div>
    													
														
														<div class="form-group">
															<label for="AppointmentDate">
																Date
															</label>
														<input class="appdate" name="appdate"  type="date" required="required">
														</div>
														
														<div class="form-group">
															<label for="Appointmenttime">
														
														Time
													
															</label>
														<input class="apptime" name="apptime" type="time" required="required">
														</div>														
														
														<button type="submit" name="submit" class="btn btn-o btn-primary">
															Submit
														</button>
													</form>
												</div>
											</div>
										</div>
											
											</div>
										</div>
									
									</div>
								</div>
							
						<!-- end: BASIC EXAMPLE -->
			
					
					
						
						
					
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
		
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	
		<script src="assets/js/main.js"></script>

		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->


	</body>
</html>
