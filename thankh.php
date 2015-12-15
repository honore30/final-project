<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users_tbl WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>www.africanrental.co.ug</title>
<style type="text/css">
.My_color {	color: #5B00B7;
}
.style16 {color: #CCCCCC; }
.style16 {	color: #000;
}
.style17 {color: #004080}
.style17 {	color: #5B00B7;
}
.style18 {color: #0000D7; font-weight: bold; }
.style19 {color: #000000}
a:link {
	color: #0066FF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.color {
	color: #5B00B7;
}
.ds {
	color: #5B00B7;
}
.white {
	color: #FFF;
}
#form3 table tr td div {
	color: #FFF;
}
.dsd {
	color: #5B00B7;
}
#form3 table tr td div blockquote h3 {
	color: #000;
}
.style20 {	font-size: 14px;
	font-weight: bold;
	color: #000099;
	font-style: italic;
}
.style23 {	font-size: 16px;
	font-weight: bold;
	color: #000099;
	font-style: italic;
}
.style24 {	color: #000099;
	font-weight: bold;
	font-style: italic;
}
.gtr {
	color: #5B00B7;
}
.dej {
	color: #FFF;
}
</style>
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>

<body bgcolor="#0066FF" onload="MM_preloadImages('JKFJKKJFKJDF.jpg','TYRY.PNG','Car Pictures/Hummer 2 mofire.jpg')">
<table width="1072" border="0" align="center" bgcolor="#FFFFFF">
  <tr>
    <td width="443" height="111" rowspan="4"><img src="african.PNG" width="443" height="97" alt="car" /></td>
    <td height="21" colspan="7"><div align="right"><a href="logout.php?logout">Sign Out</a></div></td>
  </tr>
  <tr>
    
    <td colspan="2"><div align="center">
      <form id="form1" name="form1" method="post" action="">
        <label for="Search"></label>
        
      </form>
    </div></td>
    <td colspan="2"><div align="center">
      <form id="form2" name="form2" method="post" action="">
        
        </form>
    </div></td>
  </tr>
  
 <tr>
    <td height="21" colspan="3"><div align="right">Today is</div></td>
    <td><?php echo date('j F Y');?></td>
    <td>&nbsp;</td>
    <td><?php /* date.php
   This script prints the current date
   and time in the web browser
*/

echo "Time ";
echo date('H:i:s');  // Hours, minutes, seconds&nbsp;?></td>
  </tr>
  <tr bgcolor="#0066FF">
    <td height="51" colspan="4" bgcolor=""><h1 align="center" class="white">Thanks for renting a car from African Rental Ltd</h1></td>
    <td height="51" colspan="2" bgcolor="#FFFFFF"><table width="82" height="57" border="1" align="center">
      
    </table></td>
    <td height="51" colspan="2" bgcolor="#FFFFFF">Hi <?php echo $userRow['first_name']; ?> you are now in your account!!!</td>
  </tr>
  <tr>
    <td colspan="9" bgcolor=""><h2 align="center"><strong><marquee direction="left"></marquee>
    </strong></h2></td>
  </tr>
  <tr>
    <td colspan="9" ><h2 align="center">CONGRATULATION !!!!!!!!!!!</h2>
      <h3 align="center"> Thanks for renting a car from African Rental Ltd..Remember that you need to come to our Office to pick the car you have rented..  </h3>
    <h3 align="center">&nbsp;</h3>
    <p align="center"><a href="welcome.php">Click here </a></p></td>
  </tr>
  <tr>
    <td height="47" colspan="9" bgcolor=""><h2 align="center"><strong>
      <marquee direction="left">
      </marquee>
    </strong></h2>
    <p align="center"></p></td>
  </tr>
  <tr>
    <td height="27" colspan="9" bgcolor=""><table width="514" border="0" align="center">
      <tr class="My_color">
        <td height="21"><div align="center"><a href="logout.php?logout">Sign Out</a></div></td>
        </tr>
  </table></td>
  </tr>
  <tr>
    <td height="21" colspan="9"><div align="center"><span class="style16">Copy right &copy; 2015, All rights reserved to African Rental Ltd.</span></div></td>
  </tr>
</table>
</body>
</html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>