<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	session_start();
	include("config.php"); //including config.php in our file
	$cid = $_SESSION['cid'];
?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Business/Rental Property Damage</title>
</head>

<body>
<div id="header"><h2 class="sanserif">FEMA Disaster Relief Application</h2></div><br>
<div id="header"><h2 class="sanserif">Business or Rental Property Damage </h2></div>
<div align="center">Please answer the following questions about your damage:</div>

	<form action="businessRentalPropertyDamageWrite.php" method="post">
		Is the damaged property a business or rental? <input type="checkbox" name="busYes" value="yes"> Business <input type="checkbox" name="rentYes" value="yes"> Rental<br>	
		What is the address of your property?<input type="text" name="propAdd"><br>
		What utilities are damaged or not working?<input type="text" name="utilBus"><br>
		Are you currently able to access your property? <input type="checkbox" name="accessYes" value="yes"> Yes<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		If not, why? <input type="text" name="accessWhy"><br>
		Is your property insured? <input type="checkbox" name="insurYes" value="yes"> Yes<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		What kind of insurance do you have (comprehensive, partial, etc)? <input type="text" name="typeInsurBus"><br>
		<input type="submit" value="Continue Application">
		</form>
		

</body>

</html>
