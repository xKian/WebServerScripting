<!DOCTYPE HTML>
<html>
	<head>
		<title>Generic - Alpha by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
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

			<!-- Main -->
				<section id="main" class="container">
					<header>
						<h2>Generic</h2>
						<p>A generic page for every non-generic situation.</p>
					</header>
					<div class="box">
						<span class="image featured"><img src="images/pic01.jpg" alt="" /></span>
						<h1>Protected Webpage</h1>
                        <?php
                            session_start();
                            if($_SESSION['login'] != "OK")
                            {
                                header('Location: login.php');
                                exit();
                            }
                        ?>  
       
                         <?php
                            echo "<p>You have succesfully logged in!</p>";
                            echo "<p>Your username is: ";
                            echo $_SESSION['username'];
                            echo "<br/>";
                            echo "Your password is: ";
                            echo $_SESSION['password'];
                            echo "</p>";
                        
                            if($_SESSION['username'] == 'admin')
                            {
                                 echo "<p><a href='create_user.php'>Create a new user</a></p>";
                            }
                        ?>
				
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
    session_start();
    if($_SESSION['login'] !="OK")
    {
        header('Location: login.php');
        exit();
    }

?>
