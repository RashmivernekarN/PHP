<?php include 'header1.php';?>
<div class="container">
	<form method="POST" action="<?php $_PHP_SELF; ?>">
	<div class="col-md-6">
		<div class="form-group">			
			<label for="fname">Name</label>
			<input type="text" name="fname" class="form-control"/>
		</div>
		
		<div class="form-group">			
			<label for="email">Email</label>
			<input type="email" name="email" class="form-control" required/>
		</div>
		<div class="form-group">			
			<label for="subject">Subject</label>
			<select class="form-control" name="subject">
				<option selected disabled>Select subject</option>
				<option>FeedBack</option>
				<option>Enquiry</option>
				<option>Complaint</option>
			</select>
		</div>
		<div class="form-group">			
			<label for="mobile">Phone Number</label>
			<input type="mobile" name="mobile" class="form-control"/>
		</div>
		
		<div class="form-group">			
			<label for="msg">Message</label>
			<textarea class="form-control" name="msg">
			</textarea>
		</div>
	</div>
	<div class="col-md-12">
		<input type="submit" name="submit" value="submit" class="btn btn-primary"/>
	</div>
</form>	
</div>
<?php 
if(isset($_POST['submit'])){
	sendmail($_POST['email'],$_POST['msg'],$_POST['subject']);
}
function sendmail($to,$message,$subject){
$header="From:vijaytallolli@gmail.com\r\n";
$header .= "MIME-Version: 1.0\r\n";
$header.="Content-type:text/html \r\n";	
$msg="<h3>Submitted Details </h3><br/><b> Name:</b> ".$_POST['fname']."<br/><b>Email : </b>".$to."<br/><b>Subject:</b>".$subject."<br/><b>Message: </b>".$message."<br/>";
$result=mail($to,$subject,$msg,$header);
if($result){
	echo"Mail Send Successfully";	
}
else{
	echo"Mail Not Sent ..!!";
}
}
?>