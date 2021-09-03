<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Library Management System
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		nav{
			float: right;
			word-spacing: 20px;
			padding: 30px;
		}
		nav li{
			
			display: inline-block;
			line-height: 100px;
		}
</style>
</head>
<body>
	<div class="wrapper">
		
		<header>
			<div class="logo">
				<img src="logo.jpg">
				<h1 style="color: yellow;">LIBRARY MANAGEMENT SYSTEM</h1>
			</div>
			
			<?php
				if(isset($_SESSION['login_user']))
				{?>
					<nav>
						<ul>
							<li><a href="project.php">HOME</a></li>
							<li><a href="books.php">BOOKS</a></li>
							<li><a href="logout.php">LOGOUT</a></li>
							<li><a href="feedback.php">FEEDBACK</a></li>
						</ul>
					</nav>
					<?php
				}
				else{
					?>
						<nav>
							<ul>
								<li><a href="project.php">HOME</a></li>
								<li><a href="books.php">BOOKS</a></li>
								<li><a href="student_login.php">STUDENT-LOGIN</a></li>
								<li><a href="feedback.php">FEEDBACK</a></li>
							</ul>
						</nav>
					<?php
					
				}
			
			?>
			
				

		</header>
		<section>
			<div class="sec_img">
				<br><br>
				<div class="box"> 
					<br><br><br>
					<h1 style="text-align: center; font-size: 50px;">Welcome to Library</h1><br><br>
				</div>
			</div>
		</section>

		<footer>
			<p style="color:white;text-align: left;">
				<br><br><br><br>
				 © LMS · Privacy · Terms
			</p>

		</footer>
	</div>
	<?php
		include "footer.php";
	?>
	
</body>
</html>