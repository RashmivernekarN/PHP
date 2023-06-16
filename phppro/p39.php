<?php require'dbconfig.php'; ?>
<?php include'header1.php';?>
<div class="container">
	<div class="col-md-12">
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th>Employee ID</th>
						<th>Employee Name </th>
						<th>Employee Salary</th>
						
					</tr>
					</thead>
					<tbody>
						<?php
						 /* PDO */
						 $sql="select * from employee";
						 $stmt=$con->prepare($sql);
						 $stmt->execute();
						 while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
							 echo "<tr><td>".$row['id']."</td>";
							 echo "<td>".$row['name']."</td>";
							 echo "<td>".$row['salary']."</td>";
							 echo "</tr>";
							 
						 }
						?>
					</tbody>
				</thead>
			</table>
		</div>
	</div>
</div>