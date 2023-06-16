<!DOCTYPE html>
<html>
<head>
	<title>Update User INformation</title>
</head>
<body>
		<?php
			include "config.php";
			if(isset($_GET['uid'])){
			$selectQuery="SELECT * FROM user WHERE uid='".$_GET['uid']."'";
			$stmt=$con->query($selectQuery);
			$count=$stmt->rowCount();
			if($count>0){
				$row=$stmt->fetch(PDO::FETCH_ASSOC);
			?>
				<form method="POST" action="">			
					<label>Name :</label>
					<input type="text" name="user_name" placeholder="Enter User Name" value="<?=$row['name']?>">
					<br/><br/>
					<label>Email :</label>
					<input type="email" name="user_email" placeholder="Enter User EMail" value="<?=$row['email']?>">
					<br/><br/>
					<label>Phone :</label>
					<input type="text" name="user_phone" placeholder="Enter User Phone Number" maxlength="10" minlength="10" value="<?=$row['phone']?>">
					<br/><br/>
					<label>DOB :</label>
					<input type="date" name="user_dob" placeholder="Enter User Date of Birth" value="<?=$row['dob']?>">
					<br/><br/>
					<label>Gender :</label>
					<select name="gender">
						<option value="" selected="selected" disabled="disabled">Select Gender</option>
						<option value="male" <?=($row['gender']==='male')?'selected':''; ?>> Male</option>
						<option value="female" <?=($row['gender']==='female')?'selected':''; ?>> Female</option>
						<option value="others" <?=($row['gender']==='others')?'selected':''; ?>> Others</option>
					</select> 
					<br/><br/>
					<input type="hidden" name="uid" value="<?=$row['uid']?>">
					<input type="submit" name="submit" value="Update">
					<input type="reset" name="reset" value="Reset">
				</form>
			<?php	
				}else{
					echo " User Not Found. <a href='display.php'>Click here to go back</a>";
			}

		?>			
		<?php	
			}else{
			echo "Your not allowed to use this page. <a href='display.php'> Click here to go back</a>";
		}
		?>
		
</body>
</html>
<?php
	
	if(isset($_POST['submit'])){
		$updateQuery="UPDATE user SET name=?,email=?,phone=?,dob=?,gender=? WHERE uid=?";
		$stmt=$con->prepare($updateQuery);
		$stmt->bindParam(1,$_POST['user_name']);
		$stmt->bindParam(2,$_POST['user_email']);
		$stmt->bindParam(3,$_POST['user_phone']);
		$stmt->bindParam(4,$_POST['user_dob']);
		$stmt->bindParam(5,$_POST['gender']);
		$stmt->bindParam(6,$_POST['uid']);
		if($stmt->execute()){
			echo "User Data Updated. <a href='display.php'>Click here to view</a> ";
		}else{
			echo "Something Went Wrong.Please try after sometime";
		}
	}

?>