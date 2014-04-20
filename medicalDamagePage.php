<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	session_start();
	include("config.php"); //including config.php in our file
	$cid = $_SESSION['cid'];
?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Medical Damage Page</title>
</head>

<body>
<div id="header"><h2 class="sanserif">FEMA Disaster Relief Application</h2></div><br>
<div id="header"><h2 class="sanserif">Medical Damage </h2></div>
<div align="center">Please answer the following questions about your medical damages:</div>

	<form action="medicalDamageWrite.php" method="post">
		Have you incured any medical expense as a result of the disaster? <input type="checkbox" name="medYes" value="yes"> Yes <br>
		Do you have medical insurance that covers the loss? <input type="checkbox" name="insurYes" value="yes"> Yes <br>
		What is the name of the person injured? <input type="text" name="nameInj"><br>
		What is the persons relationship to you? <input type="text" name="relInj"><br>
		Describe the injuries that were sustained? <input type="text" name="injur"> <br>
		<input type="submit" value="Continue Application">
	</form>

</body>

</html>
