
<?php
	if (isset($_POST['submit']))
		{
			$username = mysqli_real_escape_string($con, $_POST['email']);
			$password = mysqli_real_escape_string($con, $_POST['password']);
			
			$query 		= mysqli_query($con, "SELECT * FROM loginform WHERE  password='$password' and email='$username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
			if($password==admin && $username==admin ){
				{			
					$_SESSION['user_id']=$row['user_id'];
					header('location:admin.php');
					
				}
			}
			else
				{echo 'Invalid Username and Password Combination';
					header('adminLogin.php');
				}
		}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminloggin page</title>
</head>
<body>
<title>login form </title>
	<link rel="stylesheet" type="text/css" href="css/style3.css">
	
<body>
	<div class="logininbox">
		<img src="images/photo_2022-10-29_20-34-07.jpg"class="avater">
		<h1>admin login here</h1>
		<form action="admin.php" method="POST"  name="myform">

			
			<p>username</p>
			<input type="email" name="email" placeholder="enter email address" required="" >
			<p>password</p>
			<input type="password" name="password" placeholder="enter password" required="" ><br>
			<input type="submit" name="submit" value="login" onclick="return confirm('are  you wannt to loggin addmin page??????')">
			<a href="sign up.php" >Dont have an account?</a>
		</form> 
</div>


</body>
</html>
</body>
</html>