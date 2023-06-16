<?php

/* Function in PHP */
function demo(){
	echo ' This is an Example for calling Function without Parameters ';
}
demo();


function demo1($num1,$num2){
	echo "<br/> This is an Example for calling function with Parameters";
	echo "<br/> value Number 1 is :$num1 <br/> Value of Number 2 is :$num2";
}

demo1(20,30);


/* Function with Reference variable */
function demo2(&$num){
	$num+=20;
}
$original=100;
echo "<br/> value of Orginal variable is : $original";
demo2($original);
echo "<br/> Updated Value of Orginal varaible is : $original";

/* Function Returning Values */

function findlenghtofstring($name){
	return strlen($name);
}
$data="Vijay";
$length=findlenghtofstring($data);
echo "<br/>Length of $data is : $length";

/* Setting Default values to function Parameters */
function setdefault($num=10){
	return $num;
}
$number=100;
echo "<br/>The value of number variable is :".setdefault($number);
echo "<br/>The Default value of number variable is :".setdefault();;


/* Dynamic Function Calls */
function test(){
echo " <br/> testing Function .";
}
$x="test";
$x();
?>