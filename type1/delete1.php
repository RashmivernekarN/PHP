<?php include "config1.php"?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Information</title>
</head>
<body>
<form method="post" action="">
	<input type="hidden" name="student_id" value="<?=$_GET['id']?>">
	<label>Are you Sure ?</label>
	<input type="submit" name="submit" value="Ok">
	<a href="view1.php">Cancel</a>
</form>
<?php
if(isset($_POST['submit'])){
	$deleteQuery="DELETE FROM student WHERE id='".$_POST['student_id']."'";
	if($con->query($deleteQuery)){
		echo "Record Deleted Successfully";
		header( "refresh:3;url=view1.php" );
	}else{
		echo "Error Deleting Record : ".$con->error;
	}
}
?>

</body>
</html>



