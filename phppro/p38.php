<?php require'dbconfig.php'; ?>
<?php include'header1.php';?>
<div class="container">
	<div class="col-md-12">
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>SL.No</th>
						<th>Name </th>
						<th>Email</th>
						<th>Phone No </th>
					</tr>
					</thead>
					<tbody>
						<?php
						 /* PDO */
						 $sql="select * from student";
						 $stmt=$con->prepare($sql);
						 $stmt->execute();
						 while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
							 echo "<tr><td>".$row['id']."</td>";
							 echo "<td>".$row['name']."</td>";
							 echo "<td>".$row['email']."</td>";
							 echo "<td>".$row['phone']."</td></tr>";
						 }
						?>
					</tbody>
				</thead>
			</table>
		</div>
	</div>
</div>