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
<title>Business Rental Property Damage Write</title>
</head>

<body>
<?php
	
	$addrBus = $_POST['propAdd'];
	$utilBus = $_POST['utilBus'];
	$accessWhyBus = $_POST['accessWhy'];
	$typeInsurBus = $_POST['typeInsurBus'];
	
	mysql_query("INSERT into business_rental_damage (cid, propAddr, utilProp, accessWhyProp, typeInsurProp) VALUES ('$cid', '$addrBus', '$utilBus', '$accessWhyBus', '$typeInsurBus')");

	if (isset($_POST['busYes'])) {
		mysql_query("UPDATE business_rental_damage SET busRen = '1' WHERE cid = '$cid'");
	} 
	
	if (isset($_POST['accessYes'])) {
		mysql_query("UPDATE business_rental_damage SET accessProp = '1' WHERE cid = '$cid'");
	} 
	
	if (isset($_POST['insurYes'])) {
		mysql_query("UPDATE business_rental_damage SET insurProp = '1' WHERE cid = '$cid'");
	} 

// Determines whether or not the other personal damage checks have been selected
	if ($propDam == 'true') {
		header("Location: personalPropertyDamagePage.php");
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
						} else { header("Location: additionalCommentsPage.php");
						}
					}
				}
			}
		}
	
?>

</body>

</html>
