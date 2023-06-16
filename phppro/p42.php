<?php include 'header1.php';?>
<div class="container">
	<div class="table-responsive">
	<div class="alert alert-danger" style="display:none" >Error SignUp Please TryAgain Later. </div>
	<div class="alert alert-success" style="display:none" >Record Deleted Successfully</div>
		<form method="post" action="<?php $_PHP_SELF;?>">
		<table class="table">
			<thead>
				<tr>
					<th>Sl.No</th>
					<th>First Name</th>
					<th>Last Name </th>
					<th> Email </th>
					<th> Contact No</th>
					<th>Gender</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				 	$sql="select * from std_info";
				 	$stmt=$con->prepare($sql);
					$stmt->execute();
					$no=1;
					while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
							 echo "<tr><td>".$no."</td>";
							 echo "<td>".$row['fname']."</td>";
							 echo "<td>".$row['lname']."</td>";
							 echo "<td>".$row['email']."</td>";
							 echo "<td>".$row['phone']."</td>";
							 echo "<td>".$row['gender']."</td>";
							 echo "<td><a href=\"?delete_id={$row['id']}\" class='btn btn-danger'>Delete</a>
							 <a href=\"p43.php?delete_id={$row['id']}\" class='btn btn-danger'>Update</a></td>";
							 echo "</tr>";
							 $no++;
					}
				?>
			</tbody>
		</table>
		</form>
	</div>
</div>

<?php 
include'footer1.php';

if(isset($_GET['delete_id'])){
	$sql="delete from std_info where id=?";
	$stmt=$con->prepare($sql);
	$stmt->bindParam(1,$_GET['delete_id']);
	if($stmt->execute()){
		echo "<script>$('.alert-success').toggle('show');window.location='p42.php';</script>";
		
	}else{
		echo "<script>$('.alert-danger').toggle('show');</script>";
	}
}


?>