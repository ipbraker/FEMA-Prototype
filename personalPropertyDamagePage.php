<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	session_start();
	include("config.php"); //including config.php in our file
	$cid = $_SESSION['cid'];
?>


<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Personal Property Damage Page</title>
</head>

<body>
<div id="header"><h2 class="sanserif">FEMA Disaster Relief Application</h2></div><br>
<div id="header"><h2 class="sanserif">Personal Property Damage </h2></div>
<div align="center">Please answer the following questions about your damage:<br>This damage to personal property cannot not include a home, business or rental property.</div>


<form action="personalPropertyWrite.php" method="post">
			
		Describe the personal property that was damaged? <input type="text" name="propDam"><br>
		Is the damaged personal property listed above insured? <input type="checkbox" name="insurYes" value="yes"> Yes<br>	
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
		What kind of insurance do you have? <input type="text" name="insurType"><br>
		<input type="submit" value="Continue Application">
		</form>

</body>

</html>
