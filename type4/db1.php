<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydatabase";


/*Object Oriented*/
$con=new mysqli($servername,$username,$password,$dbname);
if($con->connect_error){
	echo "Connection Failed";
}else{
	echo "Connection Successful";
}

/*Procedural*/
$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con){
	echo "Connection Failed";
}else{
	echo "Connection Successful";
}

/*PDO*/
try{
$con=new PDO("mysql:host=$servername;database=$dbname",$username,$password);
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

echo "Connection Successful";
}catch(PDOException $ex){
	echo "Connection Failed".$ex->getMessage();
}

?>