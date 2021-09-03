<?php
	include "connection.php";
	include "navbar.php";
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<style type="text/css">
    section{
      margin-top: -20px;
    }
	.box1{
	
	height: 490px;
	width: 460px;
	background-color: lightgreen;
	margin: 0px auto;
	opacity: 0.75;
	color: deepblue;
	padding: 30px;
}
label{
	font-size: 18px;
	font-weight: 600;
}
	</style>

</head>
<body>
<!--	
	<nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand active">LIBRARY MANAGEMENT SYSTEM</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="project.php">HOME</a></li>
            <li><a href="books.php">BOOKS</a></li>
            <li><a href="feedback.php">FEEDBACK</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">

            <li><a href="student_login.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>
            <li><a href="student_login.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
            <li><a href="registration.php"><span class="glyphicon glyphicon-user"> SIGNUP</span></a></li>
          </ul>

      </div>
    </nav>
	-->
	
	<section>
		<div class="log_img">
			<br><br><br>
			<div class="box1">
			
				<h1 style="text-align: center; font-size: 35px;font-family: Futura;">Library Management System</h1><br>
				<h1 style="text-align: center; font-size: 25px;font-family: Roboto;">User Login Form</h1><br>
				<form name="login" action="" method="post">
					<b><p style="padding-left:50px;font-size: 18px; font-weight: 700;">Login as:</p></b>

					<input style="margin-left: 50px; width: 18px;" type="radio" name="user" id="librarian" value="librarian">
					<label for="librarian">Librarian</label>
					<input style="margin-left: 50px; width: 18px;" type="radio" name="user" id="student" value="student">
					<label for="student">Student</label>
					
					<div class="login">
					  <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
					  <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
					  <input class="btn btn-default" type="submit" name="submit" value="Login" style="color: black; width: 70px; height: 30px"> 
					</div>
				<p style="color: black; padding-left: 15px;">
					<br>
					<a style="color:black; text-decoration: none;" href="update_password.php">&nbsp &nbsp &nbsp &nbsp Forgot password?</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<a style="color: black;" href="registration.html"></a>
				  </p>
				  </form>
			</div>
		</div>
	</section>
	
	<?php
		
    if(isset($_POST['submit']))
		{
		  if($_POST['user']=='librarian'){

			$count=0;
			$res=mysqli_query($db,"SELECT * FROM `librarian` WHERE username='$_POST[username]' && password='$_POST[password]';");
			
			$row=mysqli_fetch_assoc($res);
			$count=mysqli_num_rows($res);
			
			if($count==0)
			{
				?>
					<br>
					<div class="alert alert-danger" style="width: 500px; margin-Left: 500px;">
						<strong>The username and password does not match</strong>
					</div>
				<?php
			}
			else{
				/*if password & username matches*/
				$_SESSION['login_user'] = $_POST['username'];
				$_SESSION['pic'] = $row['pic'];
				?>
				<script type="text/javascript">
					window.location="librarian/profile.php";
				</script>
				<?php
			}

		  }
		  else{

		  
		  $count=0;
		  $res=mysqli_query($db,"SELECT * FROM `student` WHERE username='$_POST[username]' && password='$_POST[password]';");
		  
		  $row=mysqli_fetch_assoc($res);
		  $count=mysqli_num_rows($res);
			
			if($count==0)
			{
				?>
				    <!--
					<script type="text/javascript">
					  alert("The username and password does not match.");
					</script>
					-->
					<br>
					<div class="alert alert-danger" style="width: 500px; margin-Left: 500px; background color: #de1313; color: white;">
						<strong>The username and password does not match</strong>
					</div>
				<?php
			}
			else{
				
				$_SESSION['login_user'] = $_POST['username'];
				$_SESSION['pic'] = $row['pic'];
				?>
				<script type="text/javascript">
					window.location="student/profile.php";
				</script>
				<?php
			}
			}	
		}
	
	?>
	
</body>
</html>