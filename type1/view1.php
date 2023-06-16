<?php include"config1.php"?>
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
			<th>Update</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		
			<?php
				$selectQuery="SELECT * FROM student";
				$stmt=$con->query($selectQuery);
				if($stmt->num_rows > 0){
					$no=1;
					while($row=$stmt->fetch_assoc()) {
						?>
						<tr>
							<td><?=$no?></td>
							<td><?=$row['name']?></td>
							<td><?=$row['email']?></td>
							<td><?=$row['phone']?></td>
							<td><?=$row['username']?></td>
							<td><?=$row['password']?></td>
							<td><a href="update1.php?id=<?=$row['id']?>">Update</a></td>
							<td><a href="delete1.php?id=<?=$row['id']?>">Delete</a></td>
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
				$con->close();
			?>
		
	</tbody>
</table>
</body>
</html>