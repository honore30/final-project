<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
	header("Location: index.php");
}

if(isset($_POST['btn-login']))
{
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);
	$res=mysql_query("SELECT * FROM users_tbl WHERE email='$email'");
	$row=mysql_fetch_array($res);
	
	if($row['password']==md5($password))
	{
		$_SESSION['user'] = $row['user_id'];
		header("Location: welcome.php");
	}
	else
	{
		?>
        <script>alert('Please check well yours details! And Login !!!');</script>
        <?php
	}
	
}
?>
