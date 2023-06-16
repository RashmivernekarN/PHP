<?php
//Demonstrastion for Multi Dimensional Array
$games =array(
	"indoor"=>array("chess","tt","lodo"),
	"outdoor"=>array("football","tennis","hockey")
);
print_r($games);
echo "<br/>";
print_r($games["indoor"]);
echo "<br/>";
print_r($games["outdoor"]);
echo "<br/>";
print_r($games["indoor"][1]);
echo "<br/>";
print_r($games["outdoor"][2]);
echo "<br/>";
print_r($games["indoor"][0]);
?>