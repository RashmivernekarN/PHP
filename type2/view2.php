<?php include"config2.php"?>
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
				$stmt=mysqli_query($con,$selectQuery);
				$count=mysqli_num_rows($stmt) ;				
				if($count > 0)
				{
					$no=1;
					while($row = mysqli_fetch_assoc($stmt)){
						?>
						<tr>
							<td><?=$no?></td>
							<td><?=$row['name']?></td>
							<td><?=$row['email']?></td>
							<td><?=$row['phone']?></td>
							<td><?=$row['username']?></td>
							<td><?=$row['password']?></td>
							<td><a href="update2.php?id=<?=$row['id']?>">Update</a></td>
							<td><a href="delete2.php?id=<?=$row['id']?>">Delete</a></td>
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
				mysqli_close($con);
			?>		
	</tbody>
</table>
</body>
</html>