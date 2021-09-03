<?php
  include "connection.php";
  include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>

  <title>Student Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

  <style type="text/css">
    section
    {
      margin-top: -20px;
      height: 645px;
      width: 1515px;
      background-image: url("bookback.jpg");

    }
    .box{
        height: 490px;
        width: 460px;
        background-color: #191179;
        margin: 0px auto;
        opacity: 0.7;
        color: white;
        padding: 20px;
        padding-top: 150px;
    }
    label{
      font-size: 18px;
	    font-weight: 600;
    }
  </style>   
</head>
<body>

<section><br><br><br><br>
  <div class="box">
      <form name="signup" action="" method="post">
					<b><p style="padding-left:50px;font-size: 18px; font-weight: 700; font-color: black;">Sign Up as:</p></b>

					<input style="margin-left: 50px; width: 18px;" type="radio" name="user" id="librarian" value="librarian">
					<label for="librarian">Librarian</label>
					<input style="margin-left: 50px; width: 18px;" type="radio" name="user" id="student" value="student">
					<label for="student">Student</label>&nbsp&nbsp&nbsp&nbsp&nbsp

          <button class="btn btn-default" type="submit" name="submit1" style="color: black; font-weight: 700; height: 30px; width: 70px;">Ok</button>
      </form>
  </div>
  <?php
		
    if(isset($_POST['submit1'])){

      if($_POST['user']=='librarian'){
        ?>
				<script type="text/javascript">
					window.location="librarian/registration.php";
				</script>
				<?php
      }
      else{
        ?>
				<script type="text/javascript">
					window.location="student/registration.php";
				</script>
				<?php
      }
    }
    ?>
</section>
</body>
</html>