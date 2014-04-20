<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	session_start();
	include("config.php"); //including config.php in our file
	$cid = $_SESSION['cid'];
?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Additional Comments</title>
</head>

<body>
<div id="header"><h2 class="sanserif">FEMA Disaster Relief Application</h2></div><br>
<div id="header"><h2 class="sanserif">Additional Comments </h2></div>

	<form action="additionalCommentsWrite.php" method="post">
		Please add any additional comments you may have: <input type="text" name="addCom"> <br>
		<input type="submit" value="Continue Application">
	</form>


</body>

</html>
