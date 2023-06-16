<?php
$names=array('Vijay','Deepa','Ujwal','Anil','Priyanka','Sahana',
'Divya','Ashiwarya','Siddharath','nikhil');
$no=1;
foreach($names as $key){
	/*if($key=='Priyanka'){
		break;
	}*/
	if($key=='Priyanka'){
		continue;
	}
	echo $no.' '.$key.'<br/>';
	$no++;
}
?>