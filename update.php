<?php
include ("dbconnect.php");
//$connect=mysql_connect($servername,$username,$password);
//$select_db=mysql_select_db($databasename);

$strquery="UPDATE users_tbl SET firstname= '" . $_GET['firstname'] . "', lastname= '". $_GET['lastname'] ."' WHERE user_id='". $_GET['user_id'] ."' ";
$results=mysql_query ($strquery);

header ('location: welcomeadmin.php'); 

?>
