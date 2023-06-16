<?php
include 'header1.php';
?>
<?php
$page_name=$_GET['id'];
if($page_name=='about'){
$page_name='about us';
}
if($page_name=='contact'){
$page_name='contact us';
}
?>
<div class="container page-header">
	<h1><?php echo ucwords($page_name);?></h1>
</div>