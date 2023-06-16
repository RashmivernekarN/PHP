<?php
$servername="localhost";
$username="root";
$password="";
$dbname="student_info";

/*PDO */
try{
	$con=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
}catch(PDOException $ex){
	echo "Connection Failed : ".$ex->getMessage();
}
?>