<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="mapmymarker";

/*Object Oriented*/
$con=new mysqli($servername,$username,$password,$dbname);
if($con->connect_error){
	die("connetion failed: ".$con->connet_error);
}
?>