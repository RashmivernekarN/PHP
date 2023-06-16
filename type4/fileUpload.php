<!DOCTYPE html>
<html>
<head>
	<title>File Upload</title>
</head>
<body>
<center>
		<h1>File Upload</h1>
</center>
<form method="POST" action="" enctype="multipart/form-data">
	<label>Select Profile Pic</label>
	<input type="file" name="profile">

	<br/><br/>
	<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
<?php
	include "config.php";
	if(isset($_POST['submit'])){
		
		if(isset($_FILES['profile'])){
			$file_name=$_FILES['profile']['name'];
			
			$file_tmp=$_FILES['profile']['tmp_name'];
			$tmp=explode(".",$file_name);			
			$ext=strtolower(end($tmp));
			$valid_extensions=array('jpeg','jpg','png','gif');
			if(in_array($ext,$valid_extensions)){
				$rand=rand(1000,99999);
				$path="images/".date('d-m-y').$rand.$file_name;
				
				move_uploaded_file($file_tmp, $path);
				$insertQuery="INSERT INTO fileup SET file_location=?";
				$stmt=$con->prepare($insertQuery);
				$stmt->bindParam(1,$path);
				$stmt->execute();
				echo "File is Uploaded";
			}else{
				echo "Invalid File Format";
			}
		}else{
			echo "File Not Selected";
		}
	}
?>