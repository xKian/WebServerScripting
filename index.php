<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Alpha by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1><a href="index.php">Web Server Scripting</a> by Kian Winwood</h1>
					<nav id="nav">
						<ul>
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

			<!-- Banner -->
				<section id="banner">
					<h2>Web Server Scripting</h2>
					<ul class="actions">
						<li><a href="screen.html" class="button special">P2 System Checker</a></li>
						
					</ul>
				</section>

			<!-- Main -->
				<section id="main" class="container">

					<section class="box special">
						<header class="major">
							<h2>An introduction to
							<br />
							Web Server Scripting</h2>
							<p>Server-side scripting is a technique used in web development which involves employing<br />
							scripts on a web server which produce a response customized for each user's request to the website.</p>
						</header>
						<span class="image featured"><img src="images/pic01.jpg" alt="" /></span>
					</section>

					<section class="box special features">
						<div class="features-row">
							<section>
								  <h2>P5 Guest Book</h2>
                                    <p>Please enter your name and message:</p>
                                    <form action="guestbook.php" method="post">
                                        <table>
                                            <tr>
                                                <td align="right">Name: </td>
                                                <td><input type="text" size="20" maxlength="30" name="name"></td>
                                            </tr>
                                            <tr>
                                                <td align="right" valign="top">Message: </td>
                                                <td><textarea rows="6" cols="40" name="message"></textarea></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" align="right"><input type="submit" value="Leave message"></td>
                                            </tr>
                                        </table>
                                    </form>
                                    <p><a href="display_messages.php">Display messages</a>.</p>                              
                                
							</section>
							<section>
								<h2>M2 My Contact Details</h2>

<p>Please enter your contact details:</p>

<form action="save_contact_details.php" method="post">

<table>

<tr>

<td align="right">Last name: </td>

<td><input size=\"20\" type="text" size="20" maxlength="15"

name="lastname"></td>

</tr>

<tr>

<td align="right">First name: </td>

<td><input size=\"20\" type="text" size="20" maxlength="15"

name="firstname"></td>

</tr>

<tr>

<td align="right">Address line 1: </td>

<td><input size=\"30\" type="text" size="60" maxlength="50"

name="address01"></td>

</tr>

<tr>

<td align="right">Address line 2: </td>

<td><input size=\"30\" type="text" size="60" maxlength="50"

name="address02"></td>

</tr>

<tr>

<td align="right">Town / city: </td>

<td><input size=\"20\" type="text" size="25" maxlength="20" name="town"></td>

</tr>

<tr>

<td align="right">Post code: </td>

<td><input size=\"10\" type="text" size="12" maxlength="10"

name="postcode"></td>

</tr>

<tr>

<td align="right">Telephone: </td>

<td><input size=\"15\" type="text" size="20" maxlength="15"

name="telephone"></td>

</tr>

<tr>

<td align="right">E-mail: </td>

<td><input size=\"50\" type="text" size="60" maxlength="50"

name="email"></td>

</tr>

<tr>

<td> </td>

<td colspan="2" align="left"><input type="submit" value="Submit"></td>

</tr>

</table>

								
                                
							</section>
						</div>
						<div class="features-row">
							<section>
								<h3>D2 Web Stats</h3>
								
                                <p> <a class="criteria" href="stats.php">Click here for D2: Web Stats</a></p>
                                
							</section>
							<section>
								<h3>M4 Error Handling</h3>
								
                                <p> <a class="criteria" href="error_4.php">Error 512</a></p>
                                
                                <p> <a class="criteria" href="myerrors.log">Error Log</a></p>
                                
							</section>
						</div>
					</section>

					<div class="row">
						<div class="6u 12u(narrower)">

							<section class="box special">
								<span class="image featured"><img src="images/pic02.jpg" alt="" /></span>
								<h3>Dog 1</h3>
							</section>

						</div>
						<div class="6u 12u(narrower)">

							<section class="box special">
								<span class="image featured"><img src="images/pic03.jpg" alt="" /></span>
								<h3>Dog 2</h3>
							</section>

						</div>
					</div>

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
    
<?php

$browser = $_SERVER['HTTP_USER_AGENT'];
    $ip = $_SERVER['REMOTE_ADDR'];

$db = mysql_connect("198.91.81.3", "maxwrig2_webstat", "webstats1");

mysql_select_db("maxwrig2_webstat", $db);

$sql = "INSERT INTO stats(ip,browser,ondate)

VALUES('$ip', '$browser', now())";

$results = mysql_query($sql);

?>    