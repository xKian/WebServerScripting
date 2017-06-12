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
					<div class="box">
						<span class="image featured"><img src="images/pic01.jpg" alt="" /></span>
						<h3>Login System</h3>
                        
                        
<?php
    $user = "";
    $pass = "";
    $validated = false;

    if ($_POST)
    {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        
    session_start();
    $_SESSION['login'] = "";
        if($user != "" && $pass != "")
        {
            $conn = @mysql_connect ("198.91.81.3", "maxwrigh_admin", "multiuser1") or die ("Sorry - unable to connect to MySQL database.");
            $rs = @mysql_select_db ("maxwrigh_admin", $conn) or die ("error");
            $sql = "SELECT * FROM user WHERE username = '$user' AND password =
            '$pass'";
            $rs = mysql_query($sql,$conn);
            $result = mysql_num_rows($rs);
            if ($result > 0) $validated = true;
                if($validated)
                {
                    $_SESSION['login'] = "OK";
                    $_SESSION['username'] = $user;
                    $_SESSION['password'] = $pass;
                    header('Location: protected.php');
                }
                else
                {
                    $_SESSION['login'] = "";
                    echo "Invalid username or password.";
                }
        }
    }
    else $_SESSION['login'] = "";
?>

            <h1></h1>
            <p>Please enter your details below</p>
                
                <form action="login.php" method="post">
                    <table>
                        <tr>
                            <td align="right">Username: </td>
                            <td><input type="text" size="20" maxlength="15" name="username"></td>
                        </tr>
                        <tr>
                            <td align="right">Password: </td>
                            <td><input type="password" size="20" maxlength="15" name="password"></td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td colspan="2" align="left"><input type="submit" value="Login"></td>
                        </tr>
                    </table>
                </form>
            
            
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