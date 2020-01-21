<?php
include("database.php");
include("header.php");
include("logged.php");
$query = "SELECT P.name AS name, P.projid AS projid, J.skill AS skill FROM (SELECT name, projid FROM projects WHERE projid NOT IN (SELECT projid FROM works WHERE userid = $_SESSION[userid])) AS P INNER JOIN (jobs AS J INNER JOIN (SELECT skill, level FROM experties WHERE userid = $_SESSION[userid]) AS S ON J.skill = S.skill AND J.level <= S.level) ON J.projid = P.projid;";
#$query = "SELECT skill, level FROM experties WHERE userid = $_SESSION[userid]";
$result = $conn->query($query);
$projects = array();
if ($result->num_rows > 0) {
	$i = 0;
	while($row = $result->fetch_assoc()) {
		$projects[$i] = array();
		foreach ($row as $x => $x_value) {
			$projects[$i][(string)$x] = $x_value;
		}
		$i++;
	}
}
$query = "SELECT skill, level FROM experties WHERE userid = $_SESSION[userid] ORDER BY level DESC;";
$result = $conn->query($query);
$skills  =array();
if($result->num_rows > 0) {
	$i = 0;
	while($row = $result->fetch_assoc()) {
		$skills[$i] = array();
		$skills[$i]['skill'] = $row['skill'];
		$skills[$i]['level'] = $row['level'];
		$i++;
	}
}
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
	<title>Booking Recommendation- Shaadi Mubarak</title>

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
	                	<a href="index.php"><img src="res/images/logo.png" style="width: 15%; border: solid white 5px; "></a>
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
	                      				<li><a href="my-projects.php">My Bookings</a></li>
	                      				<li><a href="#">Booking Recommendations</a></li>
	                        			<li><a href="logout.php">Logout</a></li>
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
<section id="header" class="header-one">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
          		<div class="header-thumb">
              		<h1 class="wow fadeIn" data-wow-delay="1.6s">Booking Recommendations</h1>
              		<h3 class="wow fadeInUp" data-wow-delay="1.9s">Hand Picked options for you</h3>
          		</div>
			</div>
		</div>
	</div>		
</section>


<!-- Portfolio section
================================================== -->
<section id="portfolio">
   <div class="container">
      	<div class="row">
         	<div class="col-md-12 col-sm-12">            
               <!-- iso section -->
               <div class="iso-section wow fadeInUp" data-wow-delay="2.6s">

                  	<ul class="filter-wrapper clearfix">
                        <li><a href="#" data-filter="*" class="selected opc-main-bg">All</a></li>
                        <?php
                            for ($i = 0; $i < count($skills); $i++) {
                            	echo '<li><a href="#" class="opc-main-bg" data-filter=".' . clean((string)$skills[$i]['skill']) . '">' . (string)$skills[$i]['skill'] . '</a></li>';
                            }
                        ?>
                    </ul>
                    <!-- iso box section -->
                    <div class="iso-box-section wow fadeInUp" data-wow-delay="1s">
                        <div class="iso-box-wrapper col4-iso-box">
                            <?php
                            	for($i = 0; $i < count($projects); $i++)
                                {
                                	echo '<div class="iso-box ' . clean((string)$projects[$i]["skill"]) . ' col-md-4 col-sm-6">';
                                  	echo '<div class="portfolio-thumb">';
                                  	echo '<img src="res/images/projects/project' . $projects[$i]["projid"] . '.jpg" class="img-responsive" alt="Portfolio">';
                                  	echo '<div class="portfolio-overlay">';
                                  	echo '<div class="portfolio-item">';
                                  	echo '<a href="single-project.php?projid=' . (string)$projects[$i]["projid"] . '"><i class="fa fa-link"></i></a>';
                                  	echo '<h2>' . $projects[$i]["name"] . '</h2>';
                                  	echo '</div>';
                                  	echo '</div>';
                                  	echo '</div>';
                                  	echo '</div>';
                                }
                            ?>
                        </div>
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
<script src="res/js/isotope.js"></script>
<script src="res/js/imagesloaded.min.js"></script>
<script src="res/js/wow.min.js"></script>
<script src="res/js/custom.js"></script>

</body>
</html>