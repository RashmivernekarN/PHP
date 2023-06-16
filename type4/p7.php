<?php
$percentage=75;
/*if(){

}else{

	if(){

	}else{

		if(){

		}else{

		}
	}
}*/

if($percentage>60){
	echo "Scored First Class";
}else{
	if($percentage>50){
	echo "Scored Second Class";
	}else{
		if($percentage>35){
			echo "Scored Pass Class";
		}else{
			echo "Failed";
		}
	}
}

?>