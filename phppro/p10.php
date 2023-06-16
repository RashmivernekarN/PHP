<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css"/>
</head>
<body>
	<div class="container">
		<div class="row">
		<div class="col-md-4">
			<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<h3> Hotel * * * * * Menu </h3>
			<label for="Menu">Select Day </label>			
			<select class="form-control" name="menu" id="menu">
				<option>Select Day</option>	
				<option value="mon">Monday</option>				
				<option value="tue">Tuesday</option>
				<option value="wed">Wednesday</option>
				<option value="thu">Thursday</option>
				<option value="fri">Friday</option>
				<option value="sat">Saturday</option>
				<option value="sun">Sunday</option>
			</select>
			<br/>
			<input type="submit" value="submit" name="submit" class="btn btn-primary"/>
			</form>
		</div>
		</div>
		<div class="row">
			<div class="col-md-10">
		<?php if(isset($_POST['submit'])){?>
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th>Sl.No</th>
							<th>Name</th>
							<th>Price</th>
							<th>Image</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$day=$_POST['menu'];
							switch($day){
								case "mon":
							echo "<tr> 
							<td>1</td>
							<td>Idli</td>
							<td><i class='fa fa-inr'></i> 30 </td>
							<td><img src='images/idli.jpg' class='img-responsive' style='width:300px;'/></td>
							</tr>";
								break;
							 case "tue":
							echo "<tr> 
							<td>1</td>
							<td>Wada / Vada</td>
							<td><i class='fa fa-inr'></i> 40 </td>
							<td><img src='images/vada.jpg' class='img-responsive' style='width:300px;'/></td>
							</tr>";
								break;
							 case "wed":
							echo "<tr> 
							<td>1</td>
							<td>Peanut Butter Cup Pancake Breakfast</td>
							<td><i class='fa fa-inr'></i> 140 </td>
							<td><img src='images/wed.jpg' class='img-responsive' style='width:300px;'/></td>
							</tr><tr> 
							<td>2</td>
							<td>Idli</td>
							<td><i class='fa fa-inr'></i> 30 </td>
							<td><img src='images/idli.jpg' class='img-responsive' style='width:300px;'/></td>
							</tr><tr> 
							<td>3</td>
							<td>Vegetable Biryani</td>
							<td><i class='fa fa-inr'></i> 150 </td>
							<td><img src='images/thu.jpg' class='img-responsive' style='width:300px;'/></td>
							</tr>";
							break;
							 case "thu":
							echo "<tr> 
							<td>1</td>
							<td>Vegetable Biryani</td>
							<td><i class='fa fa-inr'></i> 150 </td>
							<td><img src='images/thu.jpg' class='img-responsive' style='width:300px;'/></td>
							</tr>";
							break;
							 case "fri":
							echo "<tr> 
							<td>1</td>
							<td>Vegetable Fried Rice</td>
							<td><i class='fa fa-inr'></i> 180 </td>
							<td><img src='images/Veg-Fried-rice.jpg' class='img-responsive' style='width:300px;'/></td>
							</tr>";
							break;
							 case "sat":
							echo "<tr> 
							<td>1</td>
							<td>Four Flavour Ice-Cream</td>
							<td><i class='fa fa-inr'></i> 340 </td>
							<td><img src='images/sat.jpg' class='img-responsive' style='width:300px;'/></td>
							</tr>";
							break;
							 case "sun":
							echo "<tr> 
							<td>1</td>
							<td>Non-Veg</td>
							<td><i class='fa fa-inr'></i> 650 </td>
							<td><img src='images/kfc.jpeg' class='img-responsive' style='width:300px;'/></td>
							</tr>";
							break;							
							default:
							echo "<tr> 
							<td></td>
							<td></td>
							<td></td>
							<td><img src='images/all.jpg' class='img-responsive' style='width:600px;'/></td>
							</tr>";
							}							
						?>
					</tbody>
				</table>
				<?php }?>
			</div>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
document.getElementById('menu').value="<?php echo $_POST['menu'];?>";
</script>
</html>
