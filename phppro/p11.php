<?php 
//Example of Loops

/* Loops are used to execute same statments or block of code number of times
PHP Supports Following Types of Loops
1. for ->loops through block of code a specified number of times
2. While -> loops through block of code if and as long as condition is true
3. do..while ->loops through block of code once,and repeats till condition is true
4. foreach ->loops through block of code for each element is array
*/

//Example using For Loops
include 'header.php';
?>
<div class="container">
	<div class="row">
		<div class="col-md-6">
		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			
			<label for="table">Tables </label>
			<input type="number" id="table" class="form-control" name="table" />
			<br/>
			<input type="submit" name="submit" value="submit" class="btn btn-primary"/>
		</div>
		
		<div class="col-md-6">
			<h3>
			<?php 
				if(isset($_POST['submit'])){
						$num=$_POST['table'];
						for($i=1; $i<=10; $i++){
							
							echo $num. " * ". $i ." = ".($num*$i)."<br/>";
						}
				}
			
			?>
			</h3>
		</div>
	</div>
</div>
</body>
</html>
<?php include 'footer.php'; ?>

