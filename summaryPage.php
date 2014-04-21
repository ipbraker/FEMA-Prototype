<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	session_start();
	include("config.php"); //including config.php in our file
	$cid = $_SESSION['cid'];
	
	
	$test = "TEST TEST TEST";
	$name = mysql_query("SELECT * FROM personal_info WHERE cid = '$cid'");
	$fname = mysql_result($name, 0, firstname);
	$lname = mysql_result($name, 0, lastname);
	$ssn = mysql_result($name, 0, ssn);
	$dob = mysql_result($name, 0, dob);
	$lang = mysql_result($name, 0, lang);
	$phone = mysql_result($name, 0, phone);
	$email = mysql_result($name, 0, email);
	$county = mysql_result($name, 0, county);
	$state = mysql_result($name, 0, state);
	
?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Summary Page</title>
<style type="text/css">
.auto-style1 {
	text-decoration: underline;
}
</style>
</head>

<body>

<div id="header"><h2 class="sanserif">FEMA Disaster Relief Application</h2></div><br>
<div id="header"><h2 class="sanserif">Summary of Application </h2>
</div>
<span class="auto-style1">Application # <?php echo"{$cid}"?></span><br> 

<! This is the personal information section >
<span class="auto-style1"><strong><br/>Personal Information</strong></span><br> 
Name -- <?php echo"{$fname} {$lname}"?><br>
Social Security # -- <?php echo"{$ssn}"?><br>
Date of Birth -- <?php echo"{$dob}"?><br>
Primary Language -- <?php echo"{$lang}"?><br>
Phone # -- <?php echo"{$phone}"?><br>
Email -- <?php echo"{$email}"?><br>

<! Disaster information section>
<span class="auto-style1"><strong><br/>Disaster Info</strong></span><br> 
County -- <?php echo"{$county}"?><br>
State -- <?php echo"{$state}"?><br>

<! This is the disaster specific area>
<span class="auto-style1"><strong><br/>Disaster Specific Information</strong></span><br> 
<?php 
	if ($county == 'Nassau' || $county == 'Harrison'){
		echo "Test test {$county}";
	} else{
		if ($county == 'El Paso') {
				echo "Test test {$county}";
		} else {
			if ($county == 'Cleveland') {
					echo "Test test {$county}";
			} else {
			}
		}
	}

?>

</body>

</html>
