<?php

// Examples on 	Operators
/*
Category		Operator	Associativity
Unary	    	! ++ --	    Right to left
Multiplicative	* / %		Left to right
Additive		+ -			Left to right
Relational		< <= > >=	Left to right
Equality		== !=		Left to right
Logical AND		&&			Left to right
Logical OR		||			Left to right
Conditional		?:			Right to left
Assignment		= += -= *= /= %=	Right to left */


$a=10;
echo $a++.'<br/>';
echo ++$a.'<br/>';

$b=23;
echo --$b.'<br/>';
echo $b--.'<br/>';
echo $b.'<br/>';	

$c=10;
echo ($c*12).'<br/>';

$d=21;
echo $d/$c .'<br/>';

$e=100;
echo $d%$e;
?>