
<!DOCTYPE html>
<html>
<head>
	<title>Record Delete</title>
</head>
<body>
	<?php
	if(isset($_GET['uid'])){
		echo "Are you Sure to Delete the Record ?";		
	?>
		<form method="POST" action="">
		<input type="hidden" name="uid" value="<?=$_GET['uid']?>">
		<input type="submit" name="submit" value="Delete">
		<a href="display.php"> Cancel</a>
	</form>
	<?php	
	}else{
			echo "Your not allowed to use this page. <a href='display.php'> Click here to go back</a>";
		}
?>
	
</body>
</html>
<?php
	include "config.php";
	if(isset($_POST['submit'])){
		$deleteQuery="DELETE FROM user WHERE uid='".$_POST['uid']."'";
		$stmt=$con->query($deleteQuery);
		echo "Record is Deleted. <a href='display.php'>Click here to go</a>";
	}

?>