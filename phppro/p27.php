<?php
if(isset($_POST['submit'])){
	if($_POST['name'] || $_POST['age']){
		if(preg_match("/[^A-Za-z'-]/",$_POST['name'])){
			die("Invalid name and name should be alphabets");
		}
		echo "Welcome ".$_POST['name']."<br/>";
		echo "Your Age ".$_POST['age']."<br/>";
		exit();
	}
}
?>
<html>
<body>
	<form method="POST" action="<?php $_PHP_SELF ?>" >
		<input type="text" name="name" placeholder="Enter Name "/>
		<input type="text" name="age" placeholder="Enter Age "/>
		<input type="submit" name="submit"/>
	</form>
</body>
</html>
