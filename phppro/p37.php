<?php
/* PHP With Database
With PHP we can connect to and manipulate databases.
MYSQL is the most popular database system used with PHP 

PHP Version 5 or more works with MYSQL Database using 
1) Mysqli (i -> improved)
2) PDO(PHP Data Objects)

PDO will work on 12 different Database systems
Mysqli will work only with MYSQL Database


In project if you want to switch project from one DB to another Database : 
In PDO only Connection 
String is need to modify with few queries . With MYSQLi need to rewrite entire code
*/


/* Connecting Database */

/* Using Mysqli */
$servername="localhost";
$username="root";
$password="";

$con=new mysqli($servername,$username,$password);
if($con->connect_error){
	die("Connection Error");
}else{
	echo " Connection Successful";
}


/* PDO */
try
{
$database="mydb";
$connection=new PDO("mysql:host=$servername;dbname=$database",$username,$password);
$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
echo "Connection Successful";
}
catch(PDOException $e){
	echo "Connection Failed : $e";
}
?>
