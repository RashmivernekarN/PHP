<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css"/>
</head>
<body>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
	<?php 
	$output="<div class='item'>";
	$url="";
	$images=file_get_contents($url);
	$images=json_decode($images,true);
	foreach($images['data'] as $key){
		$output.="<img src='".$key['thumbnail']."'/></div>";
	}
	?>
    <div class="item active">
      <img src="images/all.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="images/thu.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="images/sat.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="images/vada.jpg" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
// Activate Carousel
$("#myCarousel").carousel();

// Enable Carousel Indicators
$(".item").click(function(){
    $("#myCarousel").carousel(1);
});

// Enable Carousel Controls
$(".left").click(function(){
    $("#myCarousel").carousel("prev");
});
</script>