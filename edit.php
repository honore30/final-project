<?php
include ("dbconnect.php");
//$connect=mysql_connect($servername,$username,$password);
//$select_db=mysql_select_db($databasename);

$strquery = "SELECT * from users_tbl where user_id= '" . $_GET["user_id"] . "' ";
$results = mysql_query ($strquery);
$row = mysql_fetch_array($results);

?>
<body>


<label>
<h1 align="center">UPDATE YOUR DATABASE</h1>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p>&nbsp;</p>
<p>
<label></label>
</p>
<p>&nbsp;</p>
</form>
