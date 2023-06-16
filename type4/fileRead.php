<!DOCTYPE html>
<html>
<head>
	<title>
		Reading Image file from Database
	</title>
</head>
<body>
	<table border="1">
		<thead>
			<tr>
				<td>Sl.No</td>
				<td>File Location</td>
				<td>Reg.Date</td>
			</tr>
		</thead>
		<tbody>
			<?php
				include "config.php";
				$selectQuery="SELECT * FROM fileup";
				$stmt=$con->query($selectQuery);
				$no=1;
				while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
			?>
				<tr>
					<td><?=$no?></td>
					<td>
						<img src="<?=$row['file_location']?>" alt="<?=$row['file_location']?>" style="width:200px;height:200px;object-fit: scale-down;">
					</td>
					<td><?=$row['reg_date']?></td>
				</tr>
			<?php		
				$no++;	
				}
			?>
		</tbody>
	</table>
	
</body>
</html>