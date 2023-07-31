<!-- Feedback recorded -->
<?php
include('include/config.php');
if(isset($_POST['submit']))
{
$usname=$_POST['usname'];
$usemail=$_POST['usemail'];
$uscontactno=$_POST['uscontact'];
$ussuggestion=$_POST['ussuggestion'];

$query=mysqli_query($conn,"insert into userfeedback(username,email,contactno,suggestion) values('$usname','$usemail','$uscontactno','$ussuggestion')");
if($query)
{
	echo "<script>alert('Feedback recorded');</script>";
}
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="static/image/favi.ico">
    <link rel="stylesheet" href="as/vendor/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="static/css/style2.css">
    <link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Appointment System</title>
</head>
<body>
  <!-- Navigation Bar -->
    <nav id="navbar">
        <div id="logo">
            <img src="static/image/logo.png">
        </div>
        <ul>
            <li class="item"><a href="#home">Home</a></li>
            <li class="item"><a href="#service container">Services</a></li>
            <li class="item"><a href="#emp">Feedback</a></li>
            <li class="item"><a href="#contact">Contact Us</a></li>
            <li class="item"><a href="as/admin">Admin login</a><li>
        </ul>
    </nav>
    <!-- Home section -->
    <section id="home">
        <h1 class="h-primary">Welcome to Apointment System</h1>   
        <p><b>In our daily life we face a lot of problems, if anybody is in search of handyman
            for his various daily problems, they don’t find anyone to solve their problem 
            in affordable rate and handyman also suffers, as they don’t get a job because of lack 
            of resources or if anybody is sick and wants to visit a doctor for checkup, he or 
            she needs to visit the hospital and waits until the doctor is available . The patient 
            also waits in a queue while getting appointment. If the doctor cancels the 
            appointment for some emergency reasons then the patient is unable to know about 
            the cancellation of the appointment unless or until he or she visits the hospital .As 
            the internet is now available for everyone therefore anyone can use the online 
            appointment system to overcome such problems and inconvenience for the 
            patients /customers.</b></p>
        <br>
        <br>
        <button ><a href="as/user-login.php" class="btn2">Book Now</a></button>
    </section>
    <!-- service provided -->
    <section id="service container">
        <h1 class="h-primary center">Appointments available</h1>   
        <div id="services">
            <div class="box">
                <img src="static/image/l1.png" alt="" class="src">
                <h2 class="h-secondary center">Doctor</h2>
                <p>Here you can book an appointment with the doctor and the new doctor can register themselves
                  either by submitting the feedback form or by sending an email to the admin in the contact us section. 
                </p>
                      <div class="btn1"><span><a href="as/doctor/">Doctor</a></span></div>
                      <p>Already register users can login from here.</p>
          
                      <div class="btn1"><span><a href="as/user-login.php">Click Here</a></span></div>
            </div>
            <div class="box">
                <img src="static/image/l2.jpg" alt="" class="src">
                <h2 class="h-secondary center">Electrician</h2>
                <p>Here you can book an appointment with the electrician and the new electrician can register themselves
                  either by submitting the feedback form or by sending an email to the admin in the contact us section.</p>
                      <div class="btn1"><span><a href="as/electrician/">Electrician</a></span></div>
                      <p>Already register users can login from here.</p>
                        <div class="btn1"><span><a href="as/user-login.php">Click Here</a></span></div>
            </div>
            <div class="box">
                <img src="static/image/l3.jpg" alt="" class="src">
                <h2 class="h-secondary center">Plumber</h2>
                <p>Here you can book an appointment with the plumber and the new plumber can register themselves
                  either by submitting the feedback form or by sending an email to the admin in the contact us section. 
                </p>
                      <div class="btn1"><span><a href="as/plumber/">Plumber</a></span></div>
                      <p>Already register users can login from here.</p>
                        <div class="btn1"><span><a href="as/user-login.php">Click Here</a></span></div>
            </div>
            <div class="box">
                <img src="static/image/l4.png" alt="" class="src">
                <h2 class="h-secondary center">Carpenter</h2>
                <p>Here you can book an appointment with the carpneter and the new carpenter can register themselves
                  either by submitting the feedback form or by sending an email to the admin in the contact us section. 
                </p>
                      <div class="btn1"><span><a href="as/carpenter/">Carpenter</a></span></div>
                      <p>Already register users can login from here.</p>
                        <div class="btn1"><span><a href="as/user-login.php">Click Here</a></span></div>
                        
            </div>
  
        </div>        
        
    </section>
    <!-- Feedback form -->
    <section id="emp">
    <h1 class="h-primary  ">Feedback Form</h1>  
    <div class="h-primary center">
      <form action="index.php#home" method="POST">
        <div class="input_box">
          <span><input name="usname" autofocus maxlength="30" type="text" placeholder="Name" required >
           </span>
          <div class="icon"><i class="fa fa-user"></i></div>
        </div>
        <div class="input_box">
          <span><input name="usemail" autofocus maxlength="30" type="email" placeholder="Email" required >
          
          </span>
          <div class="icon"><i class="fa fa-envelope"></i></div>
        </div>
        <div class="input_box">
          <span><input required minlength="10" name="uscontact" type="text" placeholder="Mobile No." required>
          </span>
          <div class="icon"><i class="fa fa-phone"></i></div>
        </div>
        <div class="input_box">
          <span><input name="ussuggestion" type="text" placeholder="Suggestion" required >
          </span>
          <div class="icon"><i class="fa fa-comments"></i></div>
        </div>
        
        <div class="input_box button">
          <input type="submit" name="submit">
        </div>
        <div class="sign_up">
          New user can register.<a href="as/registration.php">Signup now</a>
        </div>
      </form>
    
    </div>        
    </section>

<!-- Contact us -->

    <section id="contact">
    <h1 class="h-primary center">Contact Us</h1>  
		  
    <div class="con center">
        <h3>Email     : harismd905@gmail.com <br>
            Phone No. : 0595-2351670/9456421598 <br>
            Address   : HNo.134 , Civil Lines ,Rampur (Uttar Pradesh)
        </h3>
    </div>
    <!-- copyright -->
    <footer>
        <div class="center">
            Copyright &copy; www.appointmentsystem.com  All rights reserved!
        </div>
    </footer>        
    </section>    
    
    </body>
</html>