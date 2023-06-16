<?php
session_start();
if($_SESSION['counter']>5){
			header("location:p25.php?msg=Exceed the login limit.");
			exit();
}else{
	$_SESSION['counter']++;
	if((isset($_POST['username'])) && (isset($_POST['password']))){
		if(($_POST['username']==='admin') && ($_POST['password']==='123456')){
			header("location:welcome.php?username=".$_POST['username']);
		}else{
			header("location:p25.php?msg=invalid credentials");
		}
	}
}

	
?>