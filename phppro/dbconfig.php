<?php
/* DB Configuration */

$servername="localhost";
$username="root";
$password="";
$database="Vijay";
try{
$con=new PDO("mysql:host=$servername;dbname=$database",$username,$password);
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $ex){
	echo "Connection Failed $ex";
}
?>