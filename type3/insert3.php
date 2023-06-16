<?php include "config3.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Information</title>
	<style type="text/css">
		input{
			display: block;
			margin:10px;
			width:350px;
			padding:20px;
			font-size: 1.5em;
		}
	</style>
</head>
<body>
<center>
	<form method="post" action="">
	<h1>Student Registration</h1>
	<input type="text" name="name" placeholder="Enter Your Name">
	<input type="email" name="email" placeholder="Enter Email Id" required="required">
	<input type="text" name="phone" maxlength="10" placeholder="Enter 10 Digit Phone Number" required="re">
	<input type="text" name="username" placeholder="Enter User Name">
	<input type="password" name="password" placeholder="Enter Password">
	<input type="submit" name="submit" value="Register">
</form>
<?php
	if(isset($_POST['submit'])){
		$selectQuery="SELECT * FROM student WHERE username='".$_POST['username']."'";
		$stmt=$con->query($selectQuery);
		$count=$stmt->rowCount();
		if($count>0){
			echo "Username Already In Use.";
		}else{
			try{
				$insertQuery="INSERT INTO student SET name='".$_POST['name']."', email='".$_POST['email']."', phone='".$_POST['phone']."', username='".$_POST['username']."', password='".$_POST['password']."'";
				$con->exec($insertQuery);
				echo "Record Inserted Successfully";
			}catch(PDOException $ex){
				echo "$insertQuery <br/>".$ex->getMessage();				
			}
		}
	}
?>
</center>
</body>
</html>
