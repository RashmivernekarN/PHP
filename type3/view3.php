<?php include"config3.php"?>
<!DOCTYPE html>
<html>
<head>
	<title>View Students</title>
</head>
<body>
<table>
	<thead>
		<tr>
			<th>Sl.No</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Username</th>
			<th>Password</th>
			<th>Update </th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>		
			<?php
				$selectQuery="SELECT * FROM student";			
				$stmt=$con->query($selectQuery);
				$count=$stmt->rowCount();
				if($count > 0)
				{
					$no=1;
					while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
						?>
						<tr>
							<!--<td><?php echo $no; ?></td>-->
							<td><?=$no?></td>
							<td><?=$row['name']?></td>
							<td><?=$row['email']?></td>
							<td><?=$row['phone']?></td>
							<td><?=$row['username']?></td>
							<td><?=$row['password']?></td>
							<td><a href="update3.php?id=<?=$row['id']?>">Update</a></td>
							<td><a href="delete3.php?id=<?=$row['id']?>">Delete</a></td>
						</tr>
						<?php
					$no++;
					}
									
				}else{
					?>
					<tr>
						<td colspan="7"> No Record Found</td>
					</tr>
					<?php
				}
				$con=null;
			?>		
	</tbody>
</table>
</body>
</html>