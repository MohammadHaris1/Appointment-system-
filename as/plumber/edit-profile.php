<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
if(isset($_POST['submit']))
{
	$plumname=$_POST['plumname'];
    $plumaddress=$_POST['address'];
    $plumfees=$_POST['plumfees'];
    $plumcontactno=$_POST['plumcontact'];
    $plumemail=$_POST['plumemail'];

$sql=mysqli_query($conn,"Update plumber set plumberName='$plumname',address='$plumaddress',plumFees='$plumfees',contactno='$plumcontactno',plumEmail='$plumemail' where plumEmail='".$_SESSION['dlogin']."'");
if($sql)
{
echo "<script>alert('Plumber Details updated Successfully');</script>";

}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Plumber | Edit Plumber Details</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<link rel="icon" href="../../static/image/favi.ico">
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
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
									<h1 class="mainTitle">Plumber | Edit Plumber Details</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Plumber</span>
									</li>
									<li class="active">
										<span>Edit Plumber Details</span>
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
													<h5 class="panel-title">Edit Plumber</h5>
												</div>
												<div class="panel-body">
													<?php $sql=mysqli_query($conn,"select * from plumber where plumEmail='".$_SESSION['dlogin']."'");
													while($data=mysqli_fetch_array($sql))
													{
													?>
													<form role="form" name="addplum" method="post" onSubmit="return valid();">
														<div class="form-group">
															<label for="plumbername">
															Plumber Name
															</label>
														<input type="text" name="plumname" class="form-control" value="<?php echo htmlentities($data['plumberName']);?>" >
														</div>


														<div class="form-group">
															<label for="address">
															Plumber Address
															</label>
														<textarea name="address" class="form-control"><?php echo htmlentities($data['address']);?></textarea>
														</div>
														<div class="form-group">
															<label for="fess">
															Plumber Fees
															</label>
														<input type="text" name="plumfees" class="form-control" required="required"  value="<?php echo htmlentities($data['plumFees']);?>" >
														</div>
	
														<div class="form-group">
															<label for="fess">
															Plumber Contact no
															</label>
														<input required minlength="10" type="text" name="plumcontact" class="form-control" required="required"  value="<?php echo htmlentities($data['contactno']);?>">
														</div>

														<div class="form-group">
															<label for="fess">
															Plumber Email
															</label>
														<input type="email" name="plumemail" class="form-control"  readonly="readonly"  value="<?php echo htmlentities($data['plumEmail']);?>">
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
