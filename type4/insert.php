<!DOCTYPE html>
<html>
<head>
	<title>Insert User INformation</title>
</head>
<body>
		<form method="POST" action="">
			<label>Name :</label>
			<input type="text" name="user_name" placeholder="Enter User Name">
			<br/><br/>
			<label>Email :</label>
			<input type="email" name="user_email" placeholder="Enter User EMail">
			<br/><br/>
			<label>Phone :</label>
			<input type="text" name="user_phone" placeholder="Enter User Phone Number" maxlength="10" minlength="10">
			<br/><br/>
			<label>DOB :</label>
			<input type="date" name="user_dob" placeholder="Enter User Date of Birth">
			<br/><br/>
			<input type="submit" name="submit" value="Register">
			<input type="reset" name="reset" value="Reset">
		</form>
</body>
</html>
<?php
	include "config.php";
	if(isset($_POST['submit'])){
		$selectQuery="SELECT * FROM user WHERE email = '".$_POST['user_email']."' and phone='".$_POST['user_phone']."'";
		$stmt=$con->query($selectQuery);
		$count=$stmt->rowCount();		
		if($count>0){
			echo " User is already used email and phone number";
		}else{
			$insertQuery="INSERT INTO user SET name=?,email=?,phone=?,dob=?";
			$stmt1=$con->prepare($insertQuery);
			$stmt1->bindParam(1,$_POST['user_name']);
			$stmt1->bindParam(2,$_POST['user_email']);
			$stmt1->bindParam(3,$_POST['user_phone']);
			$stmt1->bindParam(4,$_POST['user_dob']);
			$stmt1->execute();
			echo "User Registered Successful.!";
		}
	}

?>