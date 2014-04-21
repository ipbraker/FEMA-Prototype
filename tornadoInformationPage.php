<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Tornado Information Page</title>
<style type="text/css">
.auto-style1 {
	color: #FF0000;
}
</style>
</head>

<body>
<div id="header"><h2 class="sansserif">FEMA Disaster Relief Application</h2></div>
<div align="center"> Please enter the following information about damage related to the tornado:</div>

	<form action="tornadoInformationWrite.php" method="post">
		Is there powerline damage?</span> <input type="checkbox" name="powYes" value="yes">Yes <br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		If so, have you contacted the local authorities? <input type="checkbox" name="contYes" value="yes">Yes <br>
		Has anything fallen onto your house or property and caused damage?: <input type="checkbox" name="fallenYes" value="yes">Yes<br />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		If so, please describe <input type="text" name="dam"><br>
		<input type="submit" value="Continue Application">
	</form>

</body>

</html>
