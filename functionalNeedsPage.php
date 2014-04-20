<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	session_start();
	include("config.php"); //including config.php in our file
	$cid = $_SESSION['cid'];
?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Functional Needs Page</title>
</head>

<body>
<div id="header"><h2 class="sanserif">FEMA Disaster Relief Application</h2></div><br>
<div id="header"><h2 class="sanserif">Functional Needs </h2></div>
<div align="center">Please answer the following questions about your functional needs:<br></div>

	<form action="functionalNeedsWrite.php" method="post">
		Do you need communication devices as related to hearing and speech? <input type="checkbox" name="commYes" value="yes"> Yes <br>		
		Do you need medical supplies and/or a generator? <input type="checkbox" name="medYes" value="yes"> Yes <br>
		Do you need help as related to transportation and mobility such as a wheelchair? <input type="checkbox" name="transYes" value="yes"> Yes <br>
		Do you need a home caregiver? <input type="checkbox" name="homeYes" value="yes"> Yes <br>
		Do you need specific prescriptions that you have lost? <input type="checkbox" name="prepYes" value="yes"> Yes <br>
		Do you need anything as related to cognitive/developmental/mental health issues? <input type="checkbox" name="mentYes" value="yes"> Yes <br>
		Do you need vision devices? <input type="checkbox" name="visYes" value="yes"> Yes <br>
		<input type="submit" value="Continue Application">
	</form>

</body>

</html>
