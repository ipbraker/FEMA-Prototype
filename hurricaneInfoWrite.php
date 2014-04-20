<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	session_start();
	include("config.php"); //including config.php in our file
	$cid = $_SESSION['cid'];
?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Hurricane Results Script</title>
</head>

<body>
WORKING SO FAR.....

<?php
	
	//Updates the disaster_info table with information from hurricane post
	$hurrStopTime = $_POST['hurrStopTime'];
	mysql_query("INSERT INTO disaster_info (cid, hurrStopTime) VALUES ('$cid','$hurrStopTime')");

	if (isset($_POST['stopYes'])) {
		mysql_query("UPDATE disaster_info SET hurrStop = '1' WHERE cid = '$cid'");
	} 
	if (isset($_POST['damYes'])) {
		mysql_query("UPDATE disaster_info SET damRepl = '1' WHERE cid = '$cid'");
	}
	if (isset($_POST['furthYes'])) {
		mysql_query("UPDATE disaster_info SET furthDam = '1' WHERE cid = '$cid'");
	}
	header("Location: personalDamagesCheck.php");

	
?>


GOT PAST THE PHP
</body>

</html>
