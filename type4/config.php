<?php
$server="localhost";
$username="root";
$password="";
$dbname="student";
try{
	$con=new PDO("mysql:host=$server;dbname=$dbname",$username,$password);
	$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $ex){
	echo "Connection Error :".$ex->getMessage();
}
?>