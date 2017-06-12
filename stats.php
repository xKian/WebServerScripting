<!DOCTYPE HTML>
<html>
	<head>
		<title>Generic - Alpha by Kian Winwood</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1><a href="index.php">Web Server Scripting</a> by Kian Winwood</h1>
					<nav id="nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>
								<a href="#" class="icon fa-angle-down">Criteria</a>
								<ul>
                                    <li><a href="screen.html">P2 System Checker</a></li>
                                    <li><a href="generic.php">P3 Image Uploader</a></li>
                                    <li><a href="login.php">P4 Login</a></li>
								</ul>
							</li>
							<li><a href="login.php" class="button">Sign Up</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<section id="main" class="container">
					<header>
						<h2>D2 Web Stats</h2>
						<p></p>
					</header>
					<div class="box">
						<span class="image featured"><img src="images/pic01.jpg" alt="" /></span>
						<h3></h3>
<?php

$now = date("d-m-Y");

$dbsql = "stats";

$db = mysql_connect( "198.91.81.3", "maxwrigh_admin",

"multiuser1");

mysql_select_db( "maxwrigh_admin", $db);

echo "<center><h1>Web Statistics</h1></center>";

echo "<center><table border=1 width=80%><tr><td colspan=3><b>Web statistics

from:</b> ";

$sql = "SELECT ondate FROM $dbsql ORDER BY id LIMIT 1";

$results = mysql_query($sql);

while($myrow = mysql_fetch_array($results))

{

$temp_date = $myrow["ondate"];

$date = substr($temp_date, 8, 4)."-".substr($temp_date, 5, 2)."-

".substr($temp_date, 0, 4);

echo $date;

}

echo " <b>To:</b> $now</td></tr>";

$sql = "SELECT COUNT(*) AS Count FROM $dbsql" ;

$results = mysql_query ($sql);

while ($myrow = mysql_fetch_array($results))

{

$overall_total = $myrow ["Count"];

}

echo "<tr><td colspan=3><b>Total number of hits:

</b>$overall_total</td></tr>";

echo "<tr><td><b>Date</b></td><td><b>IP Address</b></td><td><b>Browser and

Operating

system</b></td></tr>";

$sql = "SELECT * FROM $dbsql";

$results = mysql_query($sql);

while ($myrow = mysql_fetch_array($results))

{

$ip = $myrow["ip"];

$browser = $myrow["browser"];

$ondate = $myrow["ondate"];

echo "<tr><td>$ondate</td><td>$ip</td><td>$browser</td></tr>";

}

$sql = "SELECT COUNT(*) AS Count FROM $dbsql" ;

$results = mysql_query ($sql);

while ($myrow = mysql_fetch_array($results))

{

$overall_total = $myrow ["Count"];

}

echo "</table></center>";

?>
                        
                        
                        
				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: Kian Winwood</li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>