<?php

$object=array(
	"product1"=>"Apple",
	"product2"=>"T-shirt",
	"product3"=>"Jeans",
	"product4"=>"Computers"
);
$search="Computers";
$status="";
foreach ($object as $key => $value) {
		
		if($value===$search){			
			$status="$search Found at the Position $key";			
			break;
		}else{
			$status= "Element Not Found";			
		}
}
echo "$status";
?>
