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
<title>Home Damage Write</title>
</head>

<body>

<?php

	$addr = $_POST['addr'];
	$typeHome = $_POST['typeHome'];
	$util = $_POST['util'];
	$accessWhy = $_POST['accessWhy'];
	$typeInsur = $_POST['typeInsur'];
	
	mysql_query("INSERT into home_business_personal_info (cid, util, addr, typeHome, accessWhy, typeInsur) VALUES ('$cid', '$util', '$addr', '$typeHome', '$accessWhy', '$typeInsur')");
	
	if (isset($_POST['primYes'])) {
		mysql_query("UPDATE home_business_personal_info SET primRes = '1' WHERE cid = '$cid'");
	} 

	if (isset($_POST['accessYes'])) {
		mysql_query("UPDATE home_business_personal_info SET access = '1' WHERE cid = '$cid'");
	} 

	if (isset($_POST['insurYes'])) {
		mysql_query("UPDATE home_business_personal_info SET insurHome = '1' WHERE cid = '$cid'");
	} 

	// Determines whether or not the other personal damage checks have been selected
	if ($busDam == 'true') {
			header("Location: businessDamagePage.php");
		} else {
			if ($propDam == 'true') {
				header("Location: propertyDamagePage.php");
			} else {
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
							} else {header("Location: additionalCommentsPage.php");
							}
						}
					}
				}
			}
		}
	


?>
THROUGH ALL OF THE PHP....HOPEFULLY THIS FUCKING WORKS
</body>

</html>
