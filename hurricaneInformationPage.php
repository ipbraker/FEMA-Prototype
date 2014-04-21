<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
	session_start();
	include("config.php"); //including config.php in our file
	$cid = $_SESSION['cid'];
?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Hurricane Information Page</title>
</head>

<body>
<! Standard first header on all pages>
<div id="header"><h2 class="sansserif">FEMA Disaster Relief Application</h2></div>

<div align="center"> Please enter the following information about the damage related to the hurricane:</div>

	<form action="hurricaneInfoWrite.php" method="post">
	Has the hurricane stopped completely? <input type="checkbox" name="stopYes" value="yes">Yes <input type="checkbox" name="stopNo" value="no">No<br>
	When did the hurricane and rain associated with it stop? (If ongoing, please put n/a) <input type="text" name="hurrStopTime"><br>
	Are the damaged areas replacable? <input type="checkbox" name="damYes" value="yes">Yes <input type="checkbox" name="damNo" value="no">No<br>
	Are there further damages that are beyond repair? <input type="checkbox" name="furthYes" value="yes">Yes <input type="checkbox" name="damRepNo" value="no">No<br>
	<input type="submit" value="Continue Application">
	</form>

</body>

</html>
