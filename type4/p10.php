<?php
	$today_day=date('D');
	if($today_day==='Mon'){
		echo "Today is Monday. Boring";	
	}else if($today_day==='Tue'){
			echo "Today is Tuesday. Work Load ";
	}else if($today_day==='Wed'){
		echo "Today is Wednesday. Colorfull..";
	}else if($today_day==='Thu'){
		echo "Today is Thursday. Waiting for Weekend";
	}else if($today_day==='Fri'){
		echo "Today is Friday. Lets do Party";
	}else if($today_day==='Sat'){
		echo "Today is Saturday. No Work ";
	}else{
		echo "Today is Sunday. Outing..";
	}
?>