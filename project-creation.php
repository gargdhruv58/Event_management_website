<?php

?>

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
	<title>Create New Project - Worth & Worth</title>

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
	
<script type="text/javascript">
function check()
{
if(!(/^[0-9]{1,3}$/.test(document.form1.duration.value)))
{
alert("Plese Enter Valid Duration");
document.form1.duration.focus();
return false;
}
return true;
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
                <a href="all-projects.php"><img src="res/images/logo.png" style="width: 15%; border: solid white 5px;"></a>
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
	                        <li><a href="all-projects.php">All Projects</a></li>
              				<li><a href="project-creation.php">New Project</a></li>
                			<li><a href="logout-org.php">Logout</a></li>
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
              		 <h1 class="wow fadeIn" data-wow-delay="0.6s">Create Project</h1>
              		 <h3 class="wow fadeInUp" data-wow-delay="0.9s">Let's Get Started!</h3>
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
			<h1>Fill these details</h1>
			<div class="contact-form">
				<form id="contact-form" name="form1" method="post" action="creation_redirect.php" onSubmit="return check();">
					<input name="name" type="text" class="form-control" placeholder="Project Name" required>
					<textarea name="desc" class="form-control" placeholder="Project Description" rows="4" required></textarea>
					<h5>Start Date</h5>
					<input name="date" type="date" class="form-control" required>
					<h5>Duration (Weeks)</h5>
					<input name="duration" type="text" class="form-control" required>
					<div class="contact-submit">
						<input type="submit" class="form-control submit" value="Create">
					</div>
				</form>
			</div>
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
				<p class="wow fadeInUp"  data-wow-delay="0.3s">Copyright © 2016 Work & Worth - Designed by Team5</p>
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