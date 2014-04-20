<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	session_start();
	include("config.php"); //including config.php in our file
	$cid = $_SESSION['cid'];
?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Personal Damages Check</title>
</head>

<body>
<div id="header"><h2 class="sanserif">FEMA Disaster Relief Application</h2></div>

<div align="center"> Please check all that apply to your situation:</div>

	<form action="personalDamagesCheckWrite.php" method="post">
		Is your home or place of residence damaged? <input type="checkbox" name="homeYes" value="yes">Yes <br>
		Is your business or rental property damaged? <input type="checkbox" name="busYes" value="yes">Yes <br>
		Is your personal property damaged? (Not including home or business) <input type="checkbox" name="propYes" value="yes">Yes<br>
		Is your vehicle damaged? <input type="checkbox" name="vehYes" value="yes">Yes <br>
		Do you have any medical losses (any medical expense check yes)? <input type="checkbox" name="medYes" value="yes">Yes<br>
		Do you have any funeral losses? <input type="checkbox" name="funYes" value="yes">Yes <br>
		Are all of your functional needs met? <input type="checkbox" name="funcYes" value="yes">Yes <br>
		<input type="submit" value="Continue Application">
	</form>

</body>

</html>
