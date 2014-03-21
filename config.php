<?php
$database = "ipb_15";  // the name of the database.
$server = "localhost";  // server to connect to.
$db_user = "ipb_15";  // mysql username to access the database with.
$db_pass = "BTdWO_pL";  // mysql password to access the database with.

$link = mysql_connect($server, $db_user, $db_pass)or DIE('Connection to host failed');

mysql_select_db($database,$link)or DIE('Database $dbname is not available!');
?>