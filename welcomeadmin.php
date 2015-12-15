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
a:link {
	color: #0066FF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #0066FF;
}
a:hover {
	text-decoration: none;
	color: #0066FF;
}
a:active {
	text-decoration: none;
	color: #0066FF;
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
.style25 {color: #0066FF}
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

<body bgcolor="#0066FF" onload="MM_preloadImages('JKFJKKJFKJDF.jpg')">
<table width="1094" border="0" align="center" bgcolor="#FFFFFF">
  <tr>
    <td width="522" height="111" rowspan="4"><img src="african.PNG" width="443" height="97" alt="car" /></td>
    <td height="21" colspan="7"><div align="right"><a href="logout.php?logout"> Sign Out</a></div></td>
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
    <td height="21" colspan="4"><div align="right">Today is</div></td>
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
    <td height="44" colspan="3" bgcolor=""><h1 align="center" class="white">Welcome To Your Account</h1></td>
    <td height="44" colspan="5" bgcolor="#FFFFFF"><h2 align="center">Admin Here you can Edit and Delete a User!!!!!!</h2></td>
  </tr>
  <tr>
    <td height="162" colspan="6" bgcolor=""><table width="875" height="73" border="0" align="center">
        <tr>
          <td width="118" height="23"><h3 align="left"><strong>Fisrt Name</strong></h3></td>
          <td width="142"><h3 align="left"><strong>Last  Name</strong></h3></td>
          <td width="221"><h3 align="left">E-mail</h3></td>
          <td colspan="2"> <h3 align="left">Phone Number</h3></td>
          <td width="64"><h3 align="left"><strong> User_id </strong></h3></td>
          <td colspan="3"><h3 align="center"><strong> Opti<span class="style25"></span>ons </strong></h3></td>
        </tr>
        <?php
include ("dbconnect.php");

$strquery="SELECT * from users_tbl";
$results=mysql_query($strquery);
$num=mysql_num_rows($results);

$i=0;
while ($i< $num)

{
$first_name=mysql_result($results,$i,"first_name");
$last_name=mysql_result($results,$i,"last_name");
$email=mysql_result($results,$i,"email");
$code=mysql_result($results,$i,"code");
$phone=mysql_result($results,$i,"phone");
$user_id=mysql_result($results,$i,"user_id");

?>
        <tr>
          <td height="21"><?php echo $first_name ; ?></td>
          <td><?php echo $last_name ; ?></td>
          <td><?php echo $email ; ?></td>

          <td width="51"><?php echo $code ; ?></td>
          <td width="111"><?php echo $phone ; ?></td>
          <td><?php echo $user_id ; ?></td>
          <td width="30">&nbsp;</td>
          <td width="49"><?php echo " <a href='Edit.php?do=edit&user_id=" . $user_id . "'> Edit </a> "; ?></td>
          <td width="51"><?php echo " <a href='Delete.php?user_id=" . $user_id . "'> Delete </a> "; ?></td>
        </tr>
        <?php

  $i++;
  }
  ?>
        <tr>
          <td height="21">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
    </table></td>
    <td colspan="2" rowspan="2" bgcolor=""><a href="welcomeadmin.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','JKFJKKJFKJDF.jpg',1)"></a></td>
  </tr>
  <tr>
    <td colspan="6" bgcolor=""><strong>Please Administrator don't Delete or Edit user's details by mistake, try to check well the user details you want to Delete or Edit!!!!!</strong></td>
  </tr>
  <tr>
    <td height="27" colspan="8" bgcolor=""><table width="514" border="0" align="center">
      <tr class="My_color">
        <td height="21"><div align="center"><a href="logout.php?logout">Sign Out</a></div></td>
        </tr>
  </table></td>
  </tr>
  <tr>
    <td height="21" colspan="8"><div align="center"><span class="style16">Copy right &copy; 2015, All rights reserved to African Rental Ltd.</span></div></td>
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