<!DOCTYPE html>
<html>
<head>
	<title>Send SMS</title>
	<style type="text/css">
		input,textarea{
			display: block;
			margin:10px;
			width:350px;
			padding:20px;
			font-size: 1.5em;
		}
	</style>
</head>
<body>
<form method="post" action="sendsms.php">
	<input type="number" name="phone" required="required" placeholder="Enter Phone Number">
	<textarea name="message" required="required" placeholder="Enter Your Message"></textarea>
	<input type="submit" name="submit" value="Send SMS">
</form>
</body>
</html>