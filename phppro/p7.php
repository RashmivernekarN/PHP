<!doctype html>
<head></head>
<body>
<form method="post" action="">
<input type="text" placeholder="Enter your age " name="age"/>
<input type="submit" name="submit" value="Submit"/>
</form>
</body>
<?php
/* Decision Making */
if(isset($_POST['age'])){
	$age='';
	$age=$_POST['age'];
	if($age>18)
	{
		echo "<h3>Eligible for Vote</h3>";
	}
	else{
		echo "<h3>Not Eligible for Vote</h3>";
	}
}
?>