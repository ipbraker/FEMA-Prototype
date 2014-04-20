<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	session_start();
	include("config.php"); //including config.php in our file
	$cid = $_SESSION['cid'];
?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Personal Damages Check Write</title>
</head>

<body>

<?php
	//Home or residence damaged
	session_register("homeDam");
	if (isset($_POST['homeYes'])) {
		$_SESSION['homeDam'] = 'true';
	}
	
	//Business damaged
	session_register("busDam");
	if (isset($_POST['busYes'])) {
		$_SESSION['busDam'] = 'true';
	}
	
	//Personal Property damage
	session_register("propDam");
	if (isset($_POST['propYes'])) {
		$_SESSION['propDam'] = 'true';
	}
	
	//Vehicle damagae
	session_register("vehDam");
	if (isset($_POST['vehYes'])) {
		$_SESSION['vehDam'] = 'true';
	}
	
	//Medical issue
	session_register("medDam");
	if (isset($_POST['medYes'])) {
		$_SESSION['medDam'] = 'true';
	}
	
	//Funeral Needs
	session_register("funDam");
	if (isset($_POST['funYes'])) {
		$_SESSION['funDam'] = 'true';
	}
	
	//Functional Needs?
	session_register("funcDam");
	if (isset($_POST['funcYes'])) {
		$_SESSION['funcDam'] = 'true';
	}
	
	//LOCATION to be determined based on the true/false of the different variables
	if($_SESSION['homeDam'] == 'true') {
		header("Location: homeDamagePage.php"); 
	} else {	
		if ($_SESSION['busDam'] == 'true') {
			header("Location: businessRentalPropertyDamage.php");
		} else {
			if ($_SESSION['propDam'] == 'true') {
				header("Location: personalPropertyDamagePage.php");
			} else {
				if ($_SESSION['vehDam'] == 'true') {
					header("Location: vehicleDamagePage.php");
				} else {
					if ($_SESSION['medDam'] == 'true') {
						header("Location: medicalDamagePage.php");
					} else {
						if ($_SESSION['funDam'] == 'true') {
							header("Location: funeralDamagePage.php");
						} else {
							if ($_SESSION['funcDam'] == 'true') {
								header("Location: functionalNeedsPage.php");
							} else {
							}
						}
					}
				}
			}
		}
	}
?>

</body>

</html>
