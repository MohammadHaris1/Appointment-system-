<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['submit']))
{
	$elecspecialization=$_POST['electricianspecialization'];
$elecname=$_POST['elecname'];
$elecaddress=$_POST['address'];
$elecfees=$_POST['elecfees'];
$eleccontactno=$_POST['eleccontact'];
$elecemail=$_POST['elecemail'];
$password=md5($_POST['npass']);

$sql=mysqli_query($conn,"insert into electrician(specilization,electricianName,address,elecFees,contactno,elecEmail,password) values('$elecspecialization','$elecname','$elecaddress','$elecfees','$eleccontactno','$elecemail','$password')");
if($sql)
{
echo "<script>alert('Electrician info added Successfully');</script>";
echo "<script type='text/javascript'> document.location = 'location:Manage-electrician.php'; </script>";

}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin | Add Electrician</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<link rel="icon" href="../../static/image/favi.ico">
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="../vendor/themify-icons/themify-icons.min.css">

		<link rel="stylesheet" href="../assets/css/styles.css">
<script type="text/javascript">
function valid()
{
 if(document.addelec.npass.value!= document.addelec.cfpass.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.addelec.cfpass.focus();
return false;
}
return true;
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
									<h1 class="mainTitle">Admin | Add Electrician</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Add Electrician</span>
									</li>
								</ol>
							</div>
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
													<h5 class="panel-title">Add Electrician</h5>
												</div>
                                                <div class="panel-body">
                                                
									
                                    <form role="form" name="addelec" method="post" onSubmit="return valid();">
                                        						
												<div class="form-group">
															<label for="electricianspecialization">
															Electrician Specialization
															</label>
									<select name="electricianspecialization" class="form-control" required="required">
																<option value="">Select Specialization</option>
									<?php $ret=mysqli_query($conn,"select * from electricianspecilization");
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
															<label for="electricianname">
																 Electrician Name
															</label>
					<input type="text" name="elecname" class="form-control"  placeholder="Enter Electrician Name" required>
														</div>


														<div class="form-group">
															<label for="address">
                                                            Electrician  Address
															</label>
					<textarea name="address" class="form-control"  placeholder="Enter Electrician Address" required></textarea>
														</div>
														<div class="form-group">
															<label for="fess">
                                                            Electrician Fees
															</label>
					<input type="text" name="elecfees" class="form-control"  placeholder="Enter Electrician Fees" required>
														</div>
	
														<div class="form-group">
														<label for="fess">
														Electrician Contact no
															</label>
					<input required minlength="10" type="text" name="eleccontact" class="form-control"  placeholder="Enter Electrician Contact no" required>
														</div>

														<div class="form-group">
									<label for="fess">
                                    Electrician Email
															</label>
					<input type="email" name="elecemail" class="form-control"  placeholder="Enter Electrician Email id" required>
														</div>														
														<div class="form-group">
															<label for="exampleInputPassword1">
																 Password
															</label>
					<input required minlength="6" type="password" name="npass" class="form-control"  placeholder="New Password" required="required">
														</div>
														
														<div class="form-group">
															<label for="exampleInputPassword2">
																Confirm Password
															</label>
					<input required minlength="6" type="password" name="cfpass" class="form-control"  placeholder="Confirm Password" required="required">
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
									<div class="col-lg-12 col-md-12">
											<div class="panel panel-white">
												
												
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
		
	
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="../vendor/jquery/jquery.min.js"></script>
		<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
		
		<script src="../assets/js/main.js"></script>

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
