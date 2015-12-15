<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
	header("Location: mail.php");
}

if(isset($_POST['btn-login']))
{
	$admin_username = mysql_real_escape_string($_POST['admin_username']);
	$admin_password = mysql_real_escape_string($_POST['admin_password']);
	$res=mysql_query("SELECT * FROM admin_tbl WHERE admin_username='$admin_username'");
	$row=mysql_fetch_array($res);
	
	if($row['admin_password']==md5($admin_password))
	{
		$_SESSION['user'] = $row['user_id'];
		header("Location: welcomeadmin.php");
	}
	else
	{
		?>
        <script>alert('Ohhhh You are not an admin don't try again!!');</script>
        <?php
	}
	
}
?>
