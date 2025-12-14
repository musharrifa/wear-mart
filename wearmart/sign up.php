
<html>
<head>
<title>sign up page</title>
<link rel="stylesheet" href="css/style3.css" type="text/css">

<script>
        function validate(){

    if(!document.getElementById("password").value==document.getElementById("conformPassword").value)alert("Passwords do no match");
    return document.getElementById("password").value==document.getElementById("conformPassword").value;
   return false;
    }
   </script>
<body >
	<div class="logininbox">
		<img src="images/photo_2022-10-29_20-34-07.jpg"class="avater">
        

<h1>sign up now</h1>
<form name="myform2"  method="POST" action="mainpage.php">
<p>username</p>
			<input type="email" name="email" placeholder="enter email address" required=""  >
			<p>password</p>
			<input type="password" name="password" placeholder="enter password" required="" id="password" ><br>
			<p>conform password</p>
			<input type="password" name="conformPassword" placeholder="enter conform password" required=""   id="password"><br>
<p><span><input type="checkbox"></span> I Agree to terms of services</P>
<input type="submit" name="submit" value="submit" onclick="return confirm('would you want register???')" onSubmit="return validate()" >
<hr>

<a href="login.php"><p>Do you have an account?</a></p>


</form>  
</div>
</body>

</html>