<?php
include ("dbconnect.php");

$strquery="DELETE from users_tbl where user_id = '" . $_GET['user_id'] . "' ";
$results=mysql_query ($strquery);
echo 'Delete Successfull!!<br/><a href="index.php">Go Back to the Main Page </a>';
header ('location: welcomeadmin.php');
?>
