<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	session_start();
	include("config.php"); //including config.php in our file
	$cid = $_SESSION['cid'];
?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Home Damage Page</title>
</head>

<body>

<div id="header">
	<h2 class="sanserif">FEMA Disaster Relief Application</h2>
</div>
<br>
<div id="header"><h2 class="sanserif">Home or Place of Residence Damage </h2></div>
<div align="center">Please answer the following questions about your home damage:</div>

	<form action="homeDamageWrite.php" method="post">
		Is the residence that sustained damage your primary residence? <input type="checkbox" name="primYes" value="yes"> Yes<br>	
		What is the address of your home?<input type="text" name="addr"><br>
		What type of home do you live in?<input type="text" name="typeHome"><br>
		What utilities are damaged or not working?<input type="text" name="util"><br>
		Are you currently able to access your home? <input type="checkbox" name="accessYes" value="yes"> Yes<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		If not, why? <input type="text" name="accessWhy"><br>
		Is your home insured? <input type="checkbox" name="insurYes" value="yes"> Yes<br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		What kind of insurance do you have (comprehensive, partial, etc)? <input type="text" name="typeInsur"><br>
		<input type="submit" value="Continue Application">
		</form>
		

			

</body>

</html>
