<?php
    include "connection.php";
    include "navbar.php";

?>
<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
    <style type="text/css">
    body{
        
        height: 600px;
        margin: 0 auto;
        background-color: skyblue;
        background-image: url("password.jpg");
        //background-repeat: no-repeat;
        opacity: 0.7;
        color: black;
        
    }
    .wrapper{
        width: 400px;
        height: 400px;
        margin: 0 auto;
        background-color: skyblue;
        //opacity: 0.7;
        color: black;
        padding: 27px 15px;
    }
    .form-control{
       width: 300px;
    }
	</style>
</head> 
<body>
    <br><br>
    <div class="wrapper">
        <div style="text-align: center;">
            
            <h1 style="text-align: center; font-size: 35px;font-family: Futura;">Change your password</h1><br>
        </div>
        <div style="padding-left:35px">
        <form action="" method="post">
            <input type="text" name="username" class="form-control" placeholder="Username" required=""><br>
            <input type="text" name="email" class="form-control" placeholder="Email" required=""><br>
            <input type="text" name="password" class="form-control" placeholder="New Password" required=""><br>
            <button class="btn btn-default" type="submit" name="submit" >Update</button>
        
        </form>  
        </div> 
    </div>
    <?php
        if(isset($_POST['submit']))
		{
		  //$count=0;
		  if(mysqli_query($db,"UPDATE student SET password='$_POST[password]' WHERE username='$_POST[username]' AND email='$_POST[email]';"))
          {
              ?>
					<script type="text/javascript">
					  alert("The Password Updated Successfully.");
					</script>
					
              <?php
          }
        } 
    ?>
</body>
</html>