<?php include "config.php";?>
<!DOCTYPE html>
<html>
<head>
	<title>Display User Table</title>
</head>
<body>
<center>User Table</center>
<table style="width:100%;" border="1">
	<thead>
		<tr>
			<th>SL.No</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Dob</th>
			<th>Gender</th>
			<th>Reg.Date</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
		/*
			> SELECT * FROM user WHERE name LIKE '%e%' -- letter 'e' in the name
			>SELECT * FROM user WHERE name LIKE 'e%' --letter begin with 'e'
			>SELECT * FROM user WHERE name LIKE '%e' --letter end with 'e'
			>SELECT * FROM user WHERE gender='male' --Filter the table by gender is male

		*/
			$selectQuery="SELECT * FROM user ORDER BY uid DESC";
			$stmt=$con->query($selectQuery);
			$no=1;
			while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
		?>
			<tr>
				<td> <?=$no?> </td>
				<td> <?=$row['name']?> </td>
				<td> <?=$row['email']?> </td>
				<td> <?=$row['phone']?> </td>
				<td> <?=$row['dob']?> </td>
				<td> <?=$row['gender']?> </td>
				<td> <?=$row['reg_date']?></td>
				<td>
					<a href="update.php?uid=<?=$row['uid']?>"> Update</a>
					<a href="delete.php?uid=<?=$row['uid']?>">Delete</a>
				</td>
			</tr>
		<?php
			$no++;		
			}
		?>
	</tbody>
</table>
</body>
</html>