<?php
	if (isset($_POST['login']))
		{
			$username = mysqli_real_escape_string($con, $_POST['email']);
			$password = mysqli_real_escape_string($con, $_POST['password']);
			
			$query 		= mysqli_query($con, "SELECT * FROM register WHERE  password='$password' and email='$email'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{	 if($username)		
					$_SESSION['email']=$row['password'];
					header('location:mainpage.php');
					
				}
			else
				{
					echo 'Invalid Username and Password Combination';
					header('location:login.php');
				}
		}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>login form </title>
	<link rel="stylesheet" type="text/css" href="css/style3.css">

<body >
	<div class="logininbox">
		<img src="images/photo_2022-10-29_20-34-07.jpg"class="avater">
		<h1>login here</h1>
		<form action="mainpage.php" method="POST"  name="myform">

			
			<p>username</p>
			<input type="email" name="email" placeholder="enter email address" required="" >
			<p>password</p>
			<input type="password" name="password" placeholder="enter password" required="" ><br>
			<input type="submit" name="submit" value="login" onclick="return confirm('would you want to login???')">
			<p><a href="sign up.php" >Dont have an account?</a></p>
			<p><a href="adminLogin.php">admin page</a></p>
		</form> 
</div>


</body>
</html>