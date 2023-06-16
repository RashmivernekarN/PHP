<?php
//Demonstration of Switch Case
//$month=date('m');

$month='5';

switch($month){
	case '1':echo "Jan"; 			
			break;
	case '2': echo "Feb"; 
			break;			
	case '3': echo "Mar"; 
			break;
	case '4': echo "Apr"; 
			break;		
	case '5': echo "May"; 
			break;	
	case '7': echo "Jul"; 
			break;				
	default:echo "Dec"; 
}

?>