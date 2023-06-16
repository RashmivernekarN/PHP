<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
</head>
<body>
	<div class="container">
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<div class="row">
		<div class="col-md-4 col-sm-12 col-xs-12 ">
		<br/>
			<label for="percentage">Percentage</label>
			<input type="text" id="percentage" placeholder="Please Enter your Percentage " name="percentage" class="form-control"/>	
				<br/>
		</div>
		</div>
		<div class="row">
		<div class="col-md-4">
			<input type="submit" name="submit" value="submit" class="btn btn-info "/>
			<?php 
		if(isset($_POST['submit'])){
			$per=$_POST['percentage'];
			if($per>=95){
				echo "<label class='label label-success'> You Secured A + Grade </label>";
			}else if($per>=85 && $per <95){
				echo "<label class='label label-primary'> You Secured A  Grade </label>";
			}else if($per>=70 && $per <85){
				echo "<label class='label label-info'> You Secured B  Grade </label>";
			}else if($per>=60 && $per <70){
				echo "<label class='label label-default'> You Secured C  Grade </label>";
			}else if($per>=35 && $per <60){
				echo "<label class='label label-warning'> You Secured D  Grade </label>";
			}else if($per<35){
				echo "<label class='label label-danger'>No Grade ..! Your Failed. </label>";
			}
		}		
		?>
		</div>
		</div>
	</div>
</body>
</html>
