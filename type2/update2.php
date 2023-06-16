<?php include "config2.php" ?>
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
		input[type=checkbox]{
			display: inline-block;
    		width: auto;
		}
	</style>
</head>
<body>
<center>
	<form method="post" action="">
	<h1>Student Information Update </h1>
	<?php
		if(isset($_GET['id'])){
			$selectQuery="SELECT * FROM student WHERE id='".$_GET['id']."'";
			$stmt=mysqli_query($con,$selectQuery);
			$count=mysqli_num_rows($stmt);
			if($count>0){
				$row=mysqli_fetch_assoc($stmt);
				?>
				<input type="text" name="name" value="<?=$row['name']?>" placeholder="Enter Your Name">
				<input type="email" name="email" value="<?=$row['email']?>" placeholder="Enter Email Id" required="required">
				<input type="text" name="phone" value="<?=$row['phone']?>" maxlength="10" placeholder="Enter 10 Digit Phone Number" required="required">
				<input type="text" name="username" value="<?=$row['username']?>" placeholder="Enter User Name">
				<input type="password" name="password" value="<?=$row['password']?>" placeholder="Enter Password" id="password">
				<input type="checkbox" id="show_pwd" onclick="show_password()">Show Password
				<input type="hidden" name="student_id" value="<?=$row['id']?>">
				<input type="submit" name="submit" value="submit">

				<?php	
			}
		}
	?>
	
</form>
<?php
	if(isset($_POST['submit'])){
		$selectQuery="SELECT * FROM student WHERE username='".$_POST['username']."' and id!='".$_POST['student_id']."'";
		$stmt=mysqli_query($con,$selectQuery);
		$count=mysqli_num_rows($stmt);
		if($count>0){
			echo "Username Already In Use.<br/>";
		}else{
			$updateQuery="UPDATE student SET name='".$_POST['name']."', email='".$_POST['email']."', phone='".$_POST['phone']."', username='".$_POST['username']."', password='".$_POST['password']."' WHERE id='".$_POST['student_id']."'";
			if(mysqli_query($con,$updateQuery)){
				echo "Record Updated Successfully<br/>";
			}else{
				echo mysqli_error($con);
			}
		}
		
	}
	mysqli_close($con);
?>
<a href="view2.php">Click here View all Students</a>
</center>
</body>
</html>
 <script type="text/javascript">
  	function show_password() {
 	 var x = document.getElementById("password");
 	 
  		if (x.type === "password") {
    		x.type = "text";    	
  		} else {
    		x.type = "password";
  		}
	}
  	
  </script>