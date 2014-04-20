<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	session_start();
	include("config.php"); //including config.php in our file
	
?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Disaster Verification Page</title>
</head>

<body>
	<div id="header"><h2 class="sansserif">FEMA Disaster Relief Application</h2></div>
	
	 <div align="center"> Please enter the County and State of your disaster:</div>
	 
	 	  <form action="countyVerificationWrite.php" method="post">
		County: <input type="text" name="county"><br>
		State: <input type="text" name="state"><br>
			<input type="submit" value="Continue Application">
	</form>





</body>

</html>
