<?php
include("database.php");
include("header.php");
include("logged.php");
if (isset($_GET['projid']))
	$projid = $_GET['projid'];
else
	Redirect("my-projects.php");
$userid = $_SESSION['userid'];
$query = "SELECT * FROM works WHERE userid = $userid AND projid = $projid;";
$result = $conn->query($query);
if ($result->num_rows > 0) {
	Redirect('res/single-post.html', false);
}
$_SESSION['projid'] = $projid;
$query =  "SELECT name, description FROM projects WHERE projid = $projid;";
$result = $conn->query($query);
if ($result->num_rows > 0) {
	$row = $result->fetch_assoc();
	$projectname = $row['name'];
	$projectdescription = $row['description'];
}
else {
	$projectname = 'Lorem Ipsum';
	$projectdescription = "<p>Ut urna turpis, tempor sit amet massa vitae, pulvinar porttitor magna. Pellentesque dolor lorem, blandit ac congue non, mattis a mi. Vestibulum id accumsan neque. Aenean turpis dui, consectetur in ornare quis, sollicitudin vel mauris. Aliquam eros elit, blandit et tortor non, ornare tincidunt ante.</p><p>Sed quis quam ullamcorper, tincidunt eros vel, malesuada purus. Mauris risus erat, faucibus in aliquam ut, posuere posuere metus. Phasellus eget sem tempus, egestas nisl dapibus, aliquet elit.</p>";
}
$query = "SELECT E.skill, E.level FROM (SELECT skill, level FROM experties WHERE userid = $_SESSION[userid]) AS E INNER JOIN (SELECT skill, level FROM jobs WHERE projid = $projid) AS P ON (E.skill = P.skill AND E.level >= P.level);";
$result = $conn->query($query);
if($result->num_rows > 0)
{
	$array = array();
	$i = 0;
	while($row = $result->fetch_assoc())
	{
		$array[$i] = $row['skill'];
		$i++;
	}
}
else
{
	Redirect("my-projects.php", false);
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
	<title><?php echo $projectname ?> - Work & Worth</title>

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
                <a href="my-projects.php">Work & Worth</a>
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
                        	<li><a href="my-projects.php">My Projects</a></li>
	                      	<li><a href="project-recommendation.php">Projects Recommendations</a></li>
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
<section id="header" class="header-two">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
           		 <div class="header-thumb">
              		 <h1 class="wow fadeIn" data-wow-delay="1.6s"><?php echo $projectname ?></h1>
              		 <!--<h3 class="wow fadeInUp" data-wow-delay="1.9s">Nulla scelerisque lectus urna</h3>-->
           		 </div>
			</div>

		</div>
	</div>		
</section>


<!-- Single Project section
================================================== -->
<section id="single-project">
   <div class="container">
      <div class="row">

         <div class="wow fadeInUp col-md-offset-1 col-md-3 col-sm-offset-1 col-sm-4" data-wow-delay="2.3s">
			<div class="project-info">
				<?php 
					$query = "SELECT name FROM organisations WHERE orgid in (SELECT orgid FROM projects WHERE projid = $projid);";
					$result = $conn->query($query);
					$row = $result->fetch_assoc();
					echo '<h4> Organisation </h4>';
					echo '<p>' . $row['name'] . '</p>';
				?>
			</div>
			<div class="project-info">
				<?php 
					$query = "SELECT DATE_FORMAT(DATE(startdate), '%D %M %Y') AS dt FROM projects WHERE projid = $projid;";
					$result = $conn->query($query);
					$row = $result->fetch_assoc();
					echo '<h4> Start Date </h4>';
					echo '<p>' . $row['dt'] . '</p>';
				?>
			</div>
			<div class="project-info">
				<?php 
					$query = "SELECT skill FROM jobs WHERE projid = $projid;";
					$result = $conn->query($query);
					echo '<h4> Skills </h4>';
					while($row = $result->fetch_assoc())
					{
						echo '<p>' . $row['skill'] . '</p>';
					}					
				?>
			</div>
		</div>

		<div class="wow fadeInUp col-md-7 col-sm-7" data-wow-delay="2.6s">
			<p><?php echo $projectdescription ?></p>
			<?php echo '<img src="res/images/projects/project' . $projid . '.jpg" class="img-responsive" alt="Single Project">'; ?>
			<section id="contact">
				<div class="contact-form">
					<form name="submission" id="contact-form" action="join-project.php">
						<h3>Select Role</h3>
						<select class="form-control" name="role">
							<?php
							for($i = 0; $i < count($array); $i++)
							{
								echo '<option value="' . $array[$i] . '">' . $array[$i] . '</option>';
							}
							?>
						</select>
						<div class="contact-submit">
							<input type="submit" class="form-control submit" value="Join Project">
						</div>
					</form>
				</div>
			</section>
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
				<p class="wow fadeInUp"  data-wow-delay="0.3s">Copyright © 2016 Work and Worth - Designed by Team5</p>
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