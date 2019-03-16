<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start(); 

include 'profile_code.php';

$profileObj = new Profile();
$profileData = $profileObj->get_profile($_SESSION['user_online']);
//echo $profileData['university'];
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/profile_styles.css">
		<!-- <script src="JS/main.js"></script> -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<!-- <script src="https://use.fontawesome.com/781a8c5bc8.js"></script> -->
		<style type="text/css">
			.nav:hover{
				cursor: pointer;
			}
		</style>
	</head>

	<body>
		<header>
		
		</header>
		<div id="Banner">
			<img id="BannerImage" src="Assets/BannerImage.jpg" alt="The University of Lincoln">
			<img align="left" id="ProfilePicture" src="Assets/ProfilePicExample.JPG" alt="Me">
			<div id="NameBar">
				<h1>Gabriella Di Gregorio</h1>
				<nav id="NavigationBar">
					<ul id="Navigation">
						<li class="NavigationList tablinks" onclick="openCity(event, 'AboutMe')"><a class="nav" >About Me</a></li>
						<li class="NavigationList tablinks" onclick="openCity(event, 'activity-feed')"><a class="nav">Activity Feed</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<section id="Profile">		
			<div id="Summary">
		
			</div>
			<div id="AboutMe" class="tabcontent">
				<h1 style="text-decoration: underline;">About Me</h1>
			</div>
			<div id="activity-feed" class="tabcontent">
				<h1 style="text-decoration: underline;">Activity</h1>
			</div>
		</section>
	</body>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#activity-feed").hide();
		});
		function openCity(evt, cityName) {
		  // Declare all variables
		  var i, tabcontent, tablinks;

		  // Get all elements with class="tabcontent" and hide them
		  tabcontent = document.getElementsByClassName("tabcontent");
		  for (i = 0; i < tabcontent.length; i++) {
		    tabcontent[i].style.display = "none";
		  }

		  // Get all elements with class="tablinks" and remove the class "Selected"
		  tablinks = document.getElementsByClassName("tablinks");
		  for (i = 0; i < tablinks.length; i++) {
		    tablinks[i].className = tablinks[i].className.replace(" Selected", "");
		  }

		  // Show the current tab, and add an "Selected" class to the button that opened the tab
		  document.getElementById(cityName).style.display = "block";
		  evt.currentTarget.className += " Selected";
		}
	</script>
</html>
