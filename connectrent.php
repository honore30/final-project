<?php

include_once 'dbconnect.php';

if(isset($_POST['btn-Create']))
{
	$first_name = mysql_real_escape_string($_POST['first_name']);
	$last_name = mysql_real_escape_string($_POST['last_name']);
	$gender = mysql_real_escape_string($_POST['gender']);
	$pdy = mysql_real_escape_string($_POST['pdy']);
	$pdm = mysql_real_escape_string($_POST['pdm']);
	$pdd = mysql_real_escape_string($_POST['pdd']);
	$ddy = mysql_real_escape_string($_POST['ddy']);
	$ddm = mysql_real_escape_string($_POST['ddm']);
	$ddd = mysql_real_escape_string($_POST['ddd']);
	$timep = mysql_real_escape_string($_POST['timep']);
	$timed = mysql_real_escape_string($_POST['timed']);
	
	$drivers = mysql_real_escape_string($_POST['drivers']);
	$actual = mysql_real_escape_string($_POST['actual']);

	$pl = mysql_real_escape_string($_POST['pl']);
	$dl = mysql_real_escape_string($_POST['dl']);
	$activity = mysql_real_escape_string($_POST['activity']);
	$rate = mysql_real_escape_string($_POST['rate']);
	if(mysql_query("INSERT INTO rent_tbl(user_id,first_name,last_name,gender,pdm,pdd,ddy,ddm,ddd,timep,timed,drivers,actual,pl,dl,activity,rate)VALUES('$user_id','$first_name','$last_name','$gender','$pdm','$pdd','$ddy','$ddm','$ddd','$timep','$timed','$drivers','$actual','$pl','$dl','$activity','$rate')"))
	{
		header ("Location: thankh.php");
    }
	else {
		?> 
         <script>alert('Sorry !!! Verify Well your details information well .');</script>
		<?php 
		}
}	
?>
</body>
</html>
