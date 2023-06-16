<?php include'header1.php';
if(isset($_GET['delete_id']))
$sql="select * from std_info where id=".$_GET['delete_id'];
$stmt=$con->prepare($sql);
$stmt->execute();
$num=$stmt->rowCount();

if($num>0){
$row=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<div class="container">
	<div class="alert alert-danger" style="display:none" >Error SignUp Please TryAgain Later. </div>
	<div class="alert alert-success" style="display:none" >Record Updated Successfully</div>
<form method="POST" action="<?php $_PHP_SELF; ?>" >
	<div class="col-md-6">
		<div class="form-group">
			<label for="fname">First Name</label>
			<input type="text" class="form-control" name="fname" value="<?php echo $row['fname'];?>"/>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label for="lname">Last Name</label>
			<input type="text" class="form-control" name="lname" value="<?php echo $row['lname'];?>"/>
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group">
			<label for="email">Email</label>
			<input type="text" class="form-control" name="email" value="<?php echo $row['email'];?>"/>
		</div>
	</div>
	
	<div class="col-md-6">
		<div class="form-group">
			<label for="phone">Mobile</label>
			<input type="text" class="form-control" name="phone" value="<?php echo $row['phone'];?>"/>
		</div>
	</div>
	
	<div class="col-md-6">
		<div class="form-group">
			<label for="gender">Gender</label>
			<select class="form-control" name="gender">
				<option disabled selected value="">Select Gender</option>
				<option value="male" <?php if($row['gender']=='male'){echo 'selected';}?>>Male</option>
				<option value="female" <?php if($row['gender']=='female'){echo 'selected';}?>>Female</option>
				<option value="other" <?php if($row['gender']=='other'){echo 'selected';}?>>Other</option>
			</select>
			
		</div>
	</div>
	<div class="col-md-12">
		<input type="submit" class="btn btn-primary" name="submit" value="Update"/>
	</div>
	</form>
</div>
<?php }
include'footer1.php'; 
if(isset($_POST['submit'])){
$qry="Update std_info set fname= ?, lname =?, email =?,phone=?,gender=? where id=?";
$stmt1=$con->prepare($qry);
$stmt1->bindParam(1,$_POST['fname']);
$stmt1->bindParam(2,$_POST['lname']);
$stmt1->bindParam(3,$_POST['email']);
$stmt1->bindParam(4,$_POST['phone']);
$stmt1->bindParam(5,$_POST['gender']);
$stmt1->bindParam(6,$_GET['delete_id']);
if($stmt1->execute()){
	echo"<script>$('.alert-success').toggle('show');$('.alert-success').delay(2000).fadeOut();window.location='p42.php';</script>";	
}else{	
	echo"<script>$('.alert-danger').toggle('show');</script>";	
}
}
?>
<?php ?>