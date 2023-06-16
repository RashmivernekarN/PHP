<?php

//Declare Associate Array
$object=array(
	"product1"=>"Apple",
	"product2"=>"T-shirt",
	"product3"=>"Jeans",
	"product4"=>"Computers"
);
foreach ($object as  $key=>$values) {
	echo "Position $key and its value is :  $values <br/>";
}
//Array Functions
/*
	1. Count
	2. implode
	3. asort
	4. shuffle
*/
echo count($object);

$result=implode( "<br/>", $object);
echo "<br/> $result";

asort($object);
$output=implode("<br/>", $object);
 echo "<br/>Example of Asort Function <br/> $output";

shuffle($object);
$output=implode("<br/> ", $object);
echo "<br/>Example of Shuffle Function <br/> $output";

?>