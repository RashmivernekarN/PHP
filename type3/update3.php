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
			$stmt=$con->query($selectQuery);
			$count=$stmt->rowCount();
			if($count>0){
				$row=$stmt->fetch(PDO::FETCH_ASSOC);
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
		try{
		$selectQuery="SELECT * FROM student WHERE username='".$_POST['username']."' and id!='".$_POST['student_id']."'";
		$stmt=$con->query($selectQuery);
		$count=$stmt->rowCount();
		if($count>0){
				echo "Username Already In Use.<br/>";
		}else{
				$updateQuery="UPDATE student SET name=?, email=?, phone=?, username=?, password=? WHERE id=?";
				$stmt=$con->prepare($updateQuery);
				$stmt->bindParam(1,$_POST['name']);
				$stmt->bindParam(2,$_POST['email']);
				$stmt->bindParam(3,$_POST['phone']);
				$stmt->bindParam(4,$_POST['username']);
				$stmt->bindParam(5,$_POST['password']);
				$stmt->bindParam(6,$_POST['student_id']);
				$stmt->execute();
				echo "Record Update Successfully <br/>";
			}	
		}catch(PDOException $ex){
				echo "Something Went Wrong".$ex->getMessage();
		}
	$con=null;
}
?>
<a href="view3.php">Click here View all Students</a>
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