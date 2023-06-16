<!-- Example for Post Request -->
<!DOCTYPE html>
<html>
<head>
	<title>Request and Response</title>
</head>
<body>
	<form method="POST" action="p23.php">
		<label>Enter the Number</label>
		<input type="Number" name="num" placeholder="Enter number only" required="required">
		<br/>
		<input type="submit" name="submit" value="Display Table">
	</form>
	<?php
		if(isset($_POST["submit"])){
			$num=$_POST["num"];
			for($i=1;$i<=10;$i++){
				echo "$num * $i =".($num*$i)." <br/>";
			}
		}
	?>
</body>
</html>