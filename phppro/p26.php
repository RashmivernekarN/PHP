<?php
//There are two ways the browser client can send information in 
//the web server
/*
1) GET
2) POST

http://localhost/phppro/p26.php?name=Vijay&age=28&submit=Submit




before the browser sends the information,it encodes it using a scheme 
called URL encoding.
In this scheme name/values paris are joined with equal signs and 
different paris are separated 
by the ampersand .

for Example :
http://localhost/phppro/p26_1.php?name1=value1&name2=value2&name3=value3

*/
if(isset($_GET['submit'])){
	if($_GET['name']||$_GET['age']){
		echo "Welcome ".$_GET['name'] ."</br>";
		echo "Your Age is ".$_GET['age'];
		exit();
	}
}
?>
<html>
<body>
<form method="GET" action="<?php $_PHP_SELF ?>">
	<input type="text" name="name" placeholder="Enter your Name "/>
	<input type="text" name="age" placeholder="Enter your Age"/>
	<input type="submit" name="submit"/>
</form>
</body>
</html>