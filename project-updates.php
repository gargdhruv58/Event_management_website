<?php
include("database.php");
include("header.php");
include("logged.php");
if (isset($_GET['projid']))
{
	$projid = $_GET['projid'];
	$_SESSION['projid'] = $projid;
}
else
{
	Redirect("my-projects.php");
}
$userid = $_SESSION['userid'];
$query = "SELECT * FROM works WHERE userid = $userid AND projid = $projid;";
$result = $conn->query($query);
if ($result->num_rows < 1) {
	Redirect('single-project.php?projid=' . (string)$projid, false);
}
$query = "SELECT name, description, DATE_FORMAT(DATE(startdate), '%D %M %Y') AS dt FROM projects WHERE projid = $projid;";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$projname = $row['name'];
$projdesc = $row['description'];
$projdate = $row['dt'];
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
	<title><?php echo (string)$projname . " - Updates" ?></title>

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
<section id="header" class="header-five">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
          <div class="header-thumb">
              <h1 class="wow fadeIn" data-wow-delay="0.6s"><?php echo $projname ?></h1>
              <!--<h3 class="wow fadeInUp" data-wow-delay="0.9s">Vestibulum at aliquam lorem</h3>-->
          </div>
			</div>

		</div>
	</div>		
</section>


<!-- Single Post section
================================================== -->
<section id="single-post">
   <div class="container">
      <div class="row">

         <div class="wow fadeInUp col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10" data-wow-delay="2.3s">
         	  <div class="blog-thumb">
         		   
         		   <!--<h1>Lorem ipsum dolor sit amet</h1>-->
         			    <div class="post-format">
						        <!--<span>By <a href="#">Elon Musk</a></span>-->
						        <span><i class="fa fa-date"></i> <?php echo $projdate ?></span>
					       </div>
         		   <p> <?php echo $projdesc ?> </p>
               
               <?php echo '<img src= "res/images/projects/project' . $projid . '.jpg" class="img-responsive post-image" alt="Blog">'; ?>

               <div class="blog-comment">
                 <h3>Updates</h3>
                 <?php
                 $query = "SELECT Us.fname AS fname, Us.lname AS lname, Us.userid AS id, DATE_FORMAT(DATE(Up.time), '%D %M %Y') AS dt, Up.description AS des FROM users AS Us INNER JOIN (SELECT * FROM updates WHERE projid = $projid) AS Up ON Us.userid = Up.userid;";
                 $result = $conn->query($query);
                 while ($row = $result->fetch_assoc()) {
                 	echo '<div class="media">';
                 	echo '<div class="media-object pull-left">';
                 	echo '<img src="res/images/users/user' . (string)$row['id'] . '.jpg" class="img-responsive" alt="blog" style="width:100px;  border-radius:50%;">';
                 	echo '</div>';
                 	echo '<div class="media-body">';
                 	echo '<h4 class="media-heading">' . $row['fname'] . ' ' . $row['lname'] . '</h4>';
                 	echo '<h5>' . $row['dt'] . '</h5>';
                 	echo '<p>' . $row['des'] . '</p>';
                 	echo '</div>';
                 	echo '</div>';
                 }
                 ?>
               </div>

               <div class="blog-comment-form">
                  <h3>Leave a comment</h3>
                    <form action="project-updates-redirect.php" method="post" >
                      <textarea class="form-control" placeholder="Enter a short description of your update" rows="5" name="update" required id="update"></textarea>
                      <div class="contact-submit">
                      	<input name="submit" type="submit" class="form-control" id="submit" value="Submit">
                      </div>
                   </form>
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