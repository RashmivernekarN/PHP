<?php
if(isset($_REQUEST['submit'])){
	if($_REQUEST['name'] || $_REQUEST['age']){
		if(preg_match("/[^A-Za-z'-]/",$_REQUEST['name'])){
			die("Invalid name and name should be alphabets");
		}
		echo "Welcome ".$_REQUEST['name']."<br/>";
		echo "Your Age ".$_REQUEST['age']."<br/>";
		exit();
	}
}
?>
<html>
<body>
	<form method="GET" action="<?php $_PHP_SELF ?>" >
		<input type="text" name="name" placeholder="Enter Name "/>
		<input type="text" name="age" placeholder="Enter Age "/>
		<input type="submit" name="submit"/>
	</form>
</body>
</html>
