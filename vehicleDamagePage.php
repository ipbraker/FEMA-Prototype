<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	session_start();
	include("config.php"); //including config.php in our file
	$cid = $_SESSION['cid'];
?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Vehicle Damage Page</title>
</head>

<body>
<div id="header"><h2 class="sanserif">FEMA Disaster Relief Application</h2></div><br>
<div id="header"><h2 class="sanserif">Vehicle Damage </h2></div>
<div align="center">Please answer the following questions about your damage:</div>

	<form action="vehicleDamageWrite.php" method="post">
		Is the vehicle damaged so that you cannot drive it? <input type="checkbox" name="driYes" value="yes"> Yes <br>
		Is the vehicle registered? <input type="checkbox" name="regYes" value="yes"> Yes <br>
		Is the vehicle insured? <input type="checkbox" name="insurYes" value="yes"> Yes<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		What kind of insurance do you have (comprehensive, partial, etc)? <input type="text" name="typeInsurVeh"><br>
		Do you have an alternate form of transportation? <input type="checkbox" name="transYes" value="yes"> Yes<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Have you contacted a rental car service? <input type="checkbox" name="rentYes" value="yes"> Yes <br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		What is the daily cost of this rental vehicle? <input type="text" name="rentCost"> <br>
		<input type="submit" value="Continue Application">
	</form>

</body>

</html>
