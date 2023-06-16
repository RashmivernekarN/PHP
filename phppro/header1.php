<?php require('dbconfig.php'); ?>
<html>
<head>

<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
<style>
ul{
	list-style-type:none;
	margin:0;
	padding:10px;
	font-size:16px;
	background:rgba(19, 30, 104, 0.82);
	color:white;	
}
ul li{
	display:inline;
	padding:10px;
	color:white;
}
.mymenu{
	padding-top:20px;
	padding-bottom:20px;
}
</style>
</head>
<body>
<div class="container mymenu">
<ul>
<a href="info.php?id=home"><li>Home</li></a>
<a href="info.php?id=about"><li>About us</li></a>
<a href="info.php?id=contact"><li>Contact us</li></a>
<a href="info.php?id=faq"><li>FAQ</li></a>
<a href="info.php?id=feedback"><li>Feedback</li></a>
<a href="p38.php"><li>Show Data</li></a>
<a href="p40.php"><li>Insert Data</li></a>
<a href="p42.php"><li>Delete Data</li></a>
<a href="p43.php"><li>Update Data</li></a>
<a href="sm.php"><li>Send Mail</li></a>
</ul>
</div>