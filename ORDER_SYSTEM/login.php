<?php 
session_start();

if(isset($_SESSION['welcomeMessage']) && !isset($_SESSION['username'])) {
	echo $_SESSION['welcomeMessage'];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
	<title>LOGIN</title>
</head>
<body>
    <div class="fields">
	    <p>Login here</p>
	    <form action="handleForm.php" method="POST">		
			<p><input type="text" placeholder="username here" class="fields" name="username"></p>
			<p><input type="password" placeholder="password here" class="fields" name="password"></p>
			<p><input type="submit" value="login" id="loginBtn" name="loginBtn"></p>

	</form>
	<a href="register.php">Register</a>
    </div>
</body>
</html>