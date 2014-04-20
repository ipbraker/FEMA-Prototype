<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	session_start();
	include("config.php"); //including config.php in our file
	$cid = $_SESSION['cid'];
?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Funeral Damage Page</title>
</head>

<body>
<div id="header"><h2 class="sanserif">FEMA Disaster Relief Application</h2></div><br>
<div id="header"><h2 class="sanserif">Funeral Damage </h2></div>
<div align="center">Please answer the following questions about your loss so that we can help you through this difficult time:</div>

	<form action="funeralDamageWrite.php" method="post">
		What is the name of the deceased? <input type="text" name="nameFun"><br>
		Date of death: <input type="text" name="dateFun"><br>
		What is your relationship to the deceased? <input type="text" name="relFun"><br>
		What was the cause of death? <input type="text" name="cauDea"><br>
		<input type="submit" value="Continue Application">
	</form>


</body>

</html>
