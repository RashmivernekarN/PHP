<?php
	if(isset($_GET['username'])){
		echo "Welcome ". $_GET['username'];
	}else{
		echo "Your not allowed. Click here to<a href='p25.php'>go Back</a>";
	}

?>