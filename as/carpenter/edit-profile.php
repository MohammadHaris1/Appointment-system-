<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
if(isset($_POST['submit']))
{
	$carpname=$_POST['carpname'];
    $carpaddress=$_POST['address'];
    $carpfees=$_POST['carpfees'];
    $carpcontactno=$_POST['carpcontact'];
    $carpemail=$_POST['carpemail'];

$sql=mysqli_query($conn,"Update carpenter set carpenterName='$carpname',address='$carpaddress',carpFees='$carpfees',contactno='$carpcontactno',carpEmail='$carpemail' where carpEmail='".$_SESSION['dlogin']."'");
if($sql)
{
echo "<script>alert('Carpenter Details updated Successfully');</script>";

}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Carpenter | Edit Carpenter Details</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="icon" href="../../static/image/favi.ico">
		<link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="../vendor/themify-icons/themify-icons.min.css">
		<link rel="stylesheet" href="../assets/css/styles.css">


	</head>
	<body>
		<div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
				<?php include('include/header.php');?>
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Carpenter | Edit Carpenter Details</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Carpenter</span>
									</li>
									<li class="active">
										<span>Edit Carpenter Details</span>
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
													<h5 class="panel-title">Edit Carpenter</h5>
												</div>
												<div class="panel-body">
									<?php $sql=mysqli_query($conn,"select * from carpenter where carpEmail='".$_SESSION['dlogin']."'");
													while($data=mysqli_fetch_array($sql))
													{
													?>
													<form role="form" name="addcarp" method="post" onSubmit="return valid();">
														<div class="form-group">
															<label for="carpentername">
															Carpenter Name
															</label>
															<input type="text" name="carpname" class="form-control" value="<?php echo htmlentities($data['carpenterName']);?>" >
														</div>


														<div class="form-group">
															<label for="address">
															Carpenter Address
															</label>
															<textarea name="address" class="form-control"><?php echo htmlentities($data['address']);?></textarea>
														</div>
														<div class="form-group">
															<label for="fess">
															Carpenter Fees
															</label>
															<input type="text" name="carpfees" class="form-control" required="required"  value="<?php echo htmlentities($data['carpFees']);?>" >
														</div>
	
														<div class="form-group">
															<label for="fess">
															Carpenter Contact no
															</label>
															<input required minlength="10" type="text" name="carpcontact" class="form-control" required="required"  value="<?php echo htmlentities($data['contactno']);?>">
														</div>

														<div class="form-group">
															<label for="fess">
															Carpenter Email
															</label>
															<input type="email" name="carpemail" class="form-control"  readonly="readonly"  value="<?php echo htmlentities($data['carpEmail']);?>">
														</div>



														
														<?php } ?>
														
														
														<button type="submit" name="submit" class="btn btn-o btn-primary">
															Update
														</button>
													</form>
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
		<!-- start: JavaScript Event Handlers for this page -->
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
