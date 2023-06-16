<?php 
//Example for Nested For Loop 
//Print Stars
for($k=0;$k<3;$k++){
for($i=0;$i<10;$i++){
	for($j=0;$j<=$i;$j++){?>
		<label id="popout" ><?php echo " * ";?></label>		
	<?php
	}
	echo "<br/>";
}
for($i=9;$i>0;$i--){
	for($j=0;$j<$i;$j++){
		echo " * ";
	}
	echo "<br/>";
}
}
?>
<style>
#popout{
	color:red;
}
#popout:hover{
	color:white;
	background-color:blue;	
	font-size:30px;
	
}
</style>