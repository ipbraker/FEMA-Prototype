<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Untitled 1</title>
</head>

<body>

THE PAGE HAS OPENED!<br>

<?php
$con=mysqli_connect("localhost","ipb_15","BTdWO_pL","ipb_15");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO personal_info (firstname, lastname)
VALUES
('test','test')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);
?>


YOU GOT HERE.....NICE....maybe
</body>

</html>
