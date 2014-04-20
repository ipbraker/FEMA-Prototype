<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	session_start();
	include("config.php"); //including config.php in our file
	$cid = $_SESSION['cid'];
?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Fire Information Page</title>
</head>

<body>
<! Standard first header on all pages>
<div id="header"><h2 class="sansserif">FEMA Disaster Relief Application</h2></div>

<div align="center"> Please enter the following information:</div>

	<form action="fireInformationWrite.php" method="post">
	Describe any fire damage: <input type="text" name="fireDam"><br>
	Describe any smoke damage: <input type="text" name="smokDam"><br>
	Is any of the damage catastrophic? <input type="checkbox" name="catYes" value="yes">Yes <input type="checkbox" name="catNo" value="no">No<br>
	<input type="submit" value="Continue Application">
	</form>

</body>

</html>
