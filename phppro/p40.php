<?php include('header1.php');?>
<div class="container">
 <div class="alert alert-danger" style="display:none" >Error SignUp Please TryAgain Later. </div>
 <div class="alert alert-success" style="display:none" >Registration Successfull.Thank You</div>
	<div class="col-md-12 page-header">
		<h2>Insert New Record</h2>
	</div>
	<form method="POST" action="<?php $_PHP_SELF ?>">
	<div class="col-md-12">		
		<div class="col-md-6 form-group">
			<input type="text" name="fname" class="form-control" placeholder="Enter First Name"/>
		</div>
		<div class="col-md-6 form-group">
			<input type="text" name="lname" class="form-control" placeholder="Enter Last Name"/>
		</div>		
	</div>
	
	<div class="col-md-12">		
		<div class="col-md-6 form-group">
			<input type="email" name="email" class="form-control" placeholder="Enter Your Email ID" required/>
		</div>
		<div class="col-md-6 form-group">
			<input type="mobile" name="mobile" class="form-control" placeholder="Enter 10 Digit Mobile Number" required/>
		</div>		
	</div>
	
	<div class="col-md-12">		
		<div class="col-md-6 form-group">			
			<select name="gender" class="form-control">
				<option value="" disabled selected>Select Gender</option>
				<option value="male">Male</option>
				<option value="female">Female</option>
				<option value="others">Others</option>
			</select>
		</div>
		<div class="col-md-6"></div>		
	</div>
	
	<div class="col-md-12">		
		<div class="col-md-6"></div>
		<div class="col-md-6"></div>		
	</div>
	
	<div class="col-md-12">		
		<div class="col-md-2 pull-right">
			<input type="submit" value="submit" name="submit" id="submit" class="btn btn-primary"/>
			<input type="reset" value="cancel" name="cancel" id="cancel" class="btn btn-danger"/>
		</div>
				
	</div>
	</form>
</div>

<?php 
include'footer1.php'; 
if(isset($_POST['submit'])){
	
$sql="insert into std_info set fname =?,lname=?,email=?,phone=?,gender=?";
$stmt=$con->prepare($sql);
$stmt->bindParam(1,$_POST['fname']);
$stmt->bindParam(2,$_POST['lname']);
$stmt->bindParam(3,$_POST['email']);
$stmt->bindParam(4,$_POST['mobile']);
$stmt->bindParam(5,$_POST['gender']);
if($stmt->execute())
{
	echo"<script>$('.alert-success').toggle('show');
	$('.alert-success').delay(1000).fadeOut();</script>";
}else{
	echo"<script>$('.alert-failure').toggle('show');</script>";
}
}
if(isset($_POST['cancel'])){
	echo"<script>$('.alert-success').toggle('hide');</script>";
	echo"<script>$('.alert-success').toggle('hide');</script>";
}
?>