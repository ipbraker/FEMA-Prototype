<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	session_start();
	include("config.php"); //including config.php in our file
	$cid = $_SESSION['cid'];
	$busDam = $_SESSION['busDam'];
	$propDam = $_SESSION['propDam'];
	$vehDam = $_SESSION['vehDam'];
	$medDam = $_SESSION['medDam'];
	$funDam = $_SESSION['funDam'];
	$funcDam = $_SESSION['funcDam'];
?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Personal Property Write</title>
</head>

<body>

<?php
	
	$specItems = $_POST['propDam'];
	$insurType = $_POST['insurType'];
	
	mysql_query("INSERT into personal_property_damage (cid, specItems, insurType) VALUES ('$cid', '$specItems', '$insurType')");
	
	if (isset($_POST['insurYes'])) {
		mysql_query("UPDATE personal_property_damage SET lossInsur = '1' WHERE cid = '$cid'");
	} 

// Determines whether or not the other personal damage checks have been selected
	if ($vehDam == 'true') {
		header("Location: vehicleDamagePage.php");
		} else {
			if ($medDam == 'true') {
				header("Location: medicalDamagePage.php");
			} else {
				if ($funDam == 'true') {
					header("Location: funeralDamagePage.php");
				} else {
					if ($funcDam == 'true') {
						header("Location: functionalNeedsPage.php");
					} else {
					}
				}
			}
		}
		

?>
</body>

</html>
