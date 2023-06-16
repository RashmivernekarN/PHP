<?php

//implode
$arr = array('Hello','ToDay','is','Thursday');
echo implode("-",$arr);

echo "<br/>";
//explode
$string1 = "$1000 | $2000 | $500| $3000";
print_r(explode("|",$string1));



//join
$jin=array("Example","for","Join","Function");
echo join(" * ",$jin);


echo "<br/>";
//string reverse
$name='Vijay';
echo "Examp for Reverse String :";
echo strrev($name);

//First Character Lowercase
echo "<br/>";
echo lcfirst("Hello World!");

//Trim
$str = "Have a Good Day!";
echo $str . "<br>";
echo trim($str,"Hello");

?>