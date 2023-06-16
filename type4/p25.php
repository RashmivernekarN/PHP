<?php
	session_start();

	if(!isset($_SESSION['counter'])){
		$_SESSION['counter']=1;
	}else{
		$_SESSION['counter']++;
	}
	var_dump($_SESSION['counter']);
	/*session_destroy();*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<center>
		<h1>Login Page</h1>
	</center>
	<form method="POST" action="login_process.php">
		<label>Username</label>
		<input type="text" name="username" placeholder="Enter Username" required="required">
		<br/>
		<br/>
		<label>Password</label>
		<input type="Password" name="password" placeholder="Enter Password" required="required">
		<br/><br/>
		<input type="submit" name="submit" value="Login">
		<input type="reset" name="reset" value="Reset">
	</form>
	<?php
		if(isset($_GET['msg'])){			
			echo $_GET['msg'];
		}
	?>
</body>
</html>