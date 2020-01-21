<!DOCTYPE html>
<html lang="en">
<head>
<!--

Template 2082 Pure Mix

http://www.tooplate.com/view/2082-pure-mix

-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- Site title
   ================================================== -->
	<title>Sign Up</title>

	<!-- Bootstrap CSS
   ================================================== -->
	<link rel="stylesheet" href="res/css/bootstrap.min.css">

	<!-- Animate CSS
   ================================================== -->
	<link rel="stylesheet" href="res/css/animate.min.css">

	<!-- Font Icons CSS
   ================================================== -->
	<link rel="stylesheet" href="res/css/font-awesome.min.css">
	<link rel="stylesheet" href="res/css/ionicons.min.css">

	<!-- Main CSS
   ================================================== -->
	<link rel="stylesheet" href="res/css/style.css">

	<!-- Google web font 
   ================================================== -->	
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>

  <script language="javascript">
function check()
{
if(document.form1.fname.value=="")
{
alert("Plese Enter First Name");
document.form1.fname.focus();
return false;
}
if(document.form1.fname.value.length<3)
{
alert("First Name too short!");
document.form1.fname.focus();
return false;
}
if(document.form1.lname.value=="")
{
alert("Plese Enter Last Name");
document.form1.fname.focus();
return false;
}
if(document.form1.lname.value.length<3)
{
alert("Larst Name too short!");
document.form1.lname.focus();
return false;
}
if(document.form1.email.value=="")
{
alert("Plese Enter Email");
document.form1.email.focus();
return false;
}
if(document.form1.pass.value=="")
{
alert("Plese Enter Your Password");
document.form1.pass.focus();
return false;
}
if(document.form1.pass.value.length<8)
{
alert("Password too short!");
document.form1.pass.focus();
return false;
}
if(document.form1.cpass.value=="")
{
alert("Plese Confirm Password");
document.form1.cpass.focus();
return false;
}
if(document.form1.pass.value!=document.form1.cpass.value)
{
alert("Confirm Password does not match");
document.form1.cpass.focus();
return false;
}
if(document.form1.phone.value=="")
{
alert("Plese Enter Phone Number");
document.form1.phone.focus();
return false;
}
if(!(/^(\d){10}$/.test(document.form1.phone.value)))
{
alert("Enter valid Phone Number");
document.form1.cpass.focus();
return false;
}
if(document.form1.dob.value=="")
{
alert("Plese Enter Date Of Birth");
document.form1.dob.focus();
return false;
}
var inputdate = new Date(document.form1.dob.value);
var today = new Date();
today.setFullYear(today.getFullYear() - 16);
var today2 = new Date();
today.setFullYear(today.getFullYear() - 72);
if(input < today2 || input > today)
{
alert("Plese Enter Valid Date Of Birth");
document.form1.dob.focus();
return false;
}

return false;
}
</script>
	
</head>
<body>


<!-- Preloader section
================================================== -->
<div class="preloader">

	<div class="sk-spinner sk-spinner-pulse"></div>

</div>


<!-- Navigation section
================================================== -->
<div class="nav-container">
   <nav class="nav-inner transparent">

      <div class="navbar">
         <div class="container">
            <div class="row">

              <div class="brand">
                <a href="index.html"><img src="res/images/logo.png" style="width: 15%; border: solid white 5px;"></a>
              </div>

              <div class="navicon">
                <div class="menu-container">

                  <div class="circle dark inline">
                    <i class="icon ion-navicon"></i>
                  </div>

                  <div class="list-menu">
                    <i class="icon ion-close-round close-iframe"></i>
                    <div class="intro-inner">
                     	<ul id="nav-menu">
                         <li><a href="index.php">Home</a></li>
                       	 <li><a href="about.html">About</a></li>
                       	 <li><a href="blog.html">Blog</a></li>
                       	 <li><a href="login.php">Login</a></li>
                      </ul>
                    </div>
                  </div>

                </div>
              </div>

            </div>
         </div>
      </div>

   </nav>
</div>


<!-- Header section
================================================== -->
<section id="header" class="header-four">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
            	<div class="header-thumb">
              		 <h1 class="wow fadeIn" data-wow-delay="0.6s">Sign Up</h1>
              		 <h3 class="wow fadeInUp" data-wow-delay="0.9s">Join a Community of your people</h3>
           		</div>
			</div>

		</div>
	</div>		
</section>


<!-- Contact section
================================================== -->
<section id="contact">
   <div class="container">
      <div class="row">

         <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="1.3s">
         	<img src="res/images/login.jpg" alt="image not found">
		</div>

		<div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="1.6s">
			<h1>Let's work together!</h1>
			<div class="contact-form">
				<form name="form1" id="contact-form" method="post" action="signupuser.php" onSubmit="ereturn check();">
					<input name="fname" type="text" class="form-control" placeholder="First Name" required>
					<input name="lname" type="text" class="form-control" placeholder="Last Name" required>
					<input name="email" type="email" class="form-control" placeholder="Your Email" required>
					<input name="pass" type="password" class="form-control" placeholder="Password" required>
					<input name="cpass" type="password" class="form-control" placeholder="Confirm" required>
					<input name="phone" type="text" class="form-control" placeholder="Phone" required>
					<input name="dob" type="date" class="form-control" required>
					<select id="city" name="city" class="form-control" required="">
						<option value="Gwalior">Noida</option>
						<option value="Bhopal">Bhopal</option>
						<option value="New Delhi">Indore</option>
						<option value="Noida">Gwalior</option>
					</select>
					<label for="gender" class="">Gender</label>
					<input name="gender" type="radio" class="" value="female" required> Female
					<input name="gender" type="radio" class="" placeholder="Gender" value="male" required> Male
					<input name="gender" type="radio" class="" placeholder="Gender" value="other" required> Other
					<div class="contact-submit">
						<input type="submit" class="form-control submit" value="Sign Up">
					</div>
				</form>
			</div>
			<p>Already Registered? <a href="login.php">Login here</a></p>

		</div>

		<div class="clearfix"></div>

			<div class="col-md-4 col-sm-4">
				<div class="wow fadeInUp media" data-wow-delay="0.3s">
					<div class="media-object pull-left">
						<i class="fa fa-tablet"></i>
					</div>
					<div class="media-body">
						<h3 class="media-heading">Phone</h3>
						<p><br>+99 00 8877 6655</p>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-4">
				<div class="wow fadeInUp media" data-wow-delay="0.6s">
					<div class="media-object pull-left">
						<i class="fa fa-envelope"></i>
					</div>
					<div class="media-body">
						<h3 class="media-heading">Email</h3>
						<p><br>worknworth@company.com</p>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-sm-4">
				<div class="wow fadeInUp media" data-wow-delay="0.9s">
					<div class="media-object pull-left">
						<i class="fa fa-globe"></i>
					</div>
					<div class="media-body">
						<h3 class="media-heading">Address</h3>
						<p>123 New Street, Old Town<br>
                        Another Village, 11220</p>
					</div>
				</div>
			</div>

      </div>
   </div>
</section>


<!-- Footer section
================================================== -->
<footer>
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				<p class="wow fadeInUp"  data-wow-delay="0.3s">Copyright © 2016 Work & Worth  - Designed by Team5</p>
				<ul class="social-icon wow fadeInUp"  data-wow-delay="0.6s">
					<li><a href="#" class="fa fa-facebook"></a></li>
					<li><a href="#" class="fa fa-twitter"></a></li>
					<li><a href="#" class="fa fa-dribbble"></a></li>
					<li><a href="#" class="fa fa-behance"></a></li>
					<li><a href="#" class="fa fa-google-plus"></a></li>
				</ul>
			</div>
			
		</div>
	</div>
</footer>

<!-- Javascript 
================================================== -->
<script src="res/js/jquery.js"></script>
<script src="res/js/bootstrap.min.js"></script>
<script src="res/js/wow.min.js"></script>
<script src="res/js/custom.js"></script>

</body>
</html>