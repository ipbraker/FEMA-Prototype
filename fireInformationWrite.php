<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	session_start();
	include("config.php"); //including config.php in our file
	$cid = $_SESSION['cid'];
?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Fire Information Write</title>
</head>

<body>

<?php
	
	//Updates the disaster_info table with information from hurricane post
	$fireDam = $_POST['fireDam'];
	$smokDam = $_POST['smokDam'];

	mysql_query("INSERT INTO disaster_info (cid, fireDam, smokDam) VALUES ('$cid','$fireDam','$smokDam')");

	if (isset($_POST['catYes'])) {
		mysql_query("UPDATE disaster_info SET catastDam = '1' WHERE cid = '$cid'");
	} 
		header("Location: personalDamagesCheck.php");

?>


</body>

</html>
