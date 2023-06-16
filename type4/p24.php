<!-- Example for GET Request -->
<!DOCTYPE html>
<html>
<head>
	<title>Request and Response</title>
</head>
<body>
	<form method="GET" action="p24.php">
		<label>Enter the Number</label>
		<input type="Number" name="num" placeholder="Enter number only">
		<br/>
		<input type="submit" name="submit" value="Display Table">
	</form>
	<?php
		if(isset($_GET["submit"])){
			$num=$_GET["num"];
			for($i=1;$i<=10;$i++){
				echo "$num * $i =".($num*$i)." <br/>";
			}
		}
	?>
</body>
</html>