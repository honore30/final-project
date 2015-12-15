<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>www.carj.co.ug</title>
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
	color: #63C;
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

<body bgcolor="#663399" onload="MM_preloadImages('JKFJKKJFKJDF.jpg')">
<table width="1094" border="0" align="center" bgcolor="#FFFFFF">
  <tr>
    <td width="522" height="111" rowspan="4"><img src="banner.PNG" width="443" height="97" alt="car" /></td>
    <td height="21" colspan="7"><div align="right"><a href="logout.php?logout">Do you want to Sign Ou</a>t</div></td>
  </tr>
  <tr>
    <td colspan="3"><div align="right">Search In Car-J!</div></td>
    <td colspan="2"><div align="center">
      <form id="form1" name="form1" method="post" action="">
        <label for="Search"></label>
        <input type="text" name="Search" id="Search" />
      </form>
    </div></td>
    <td colspan="2"><div align="center">
      <form id="form2" name="form2" method="post" action="">
        <input type="submit" name="button" id="button" value="Ok" />
      </form>
    </div></td>
  </tr>
  <tr>
    <td width="87"><div align="left">Follow us on </div></td>
    <td width="31"><a href="http://www.facebook.com/" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','../images/facebook-32x32.png',1)"><img src="facebook-32x32.png" width="25" height="16" alt="facebook" /></a></td>
    <td width="66">Facebook</td>
    <td width="33"><a href="http://www.twitter.com" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','../images/twitter-32x32.png',1)"><img src="twitter-32x32.png" width="29" height="15" alt="twitter" /></a></td>
    <td width="116">Twitter</td>
    <td width="154">&nbsp;</td>
    <td width="51">Yahoo</td>
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
  <tr bgcolor="#663399">
    <td height="44" colspan="3" bgcolor=""><h1 align="center" class="white">Welcome To Your Account</h1></td>
    <td height="44" colspan="5" bgcolor="#FFFFFF"><h2 align="center">Admin Here you can Edit and Delete a User!!!!!!</h2></td>
  </tr>
  <tr>
    <td height="162" colspan="6" bgcolor=""><form id="form3" name="form1" method="get" action="update.php">
      <table width="53%" border="1" align="center">
        <tr>
          <td><strong>First Name:</strong></td>
          <td><input name="first_name" type="text" id="fname" value=" <?php echo $row["first_name"]; ?>" /></td>
        </tr>
        <tr>
          <td><strong>Second Name: </strong></td>
          <td><label>
            <input name="last_name" type="text" id="secname" value=" <?php echo $row['last_name']; ?>" />
          </label>
            <input name="id" type="hidden" id="section2"  value=" <?php echo $row["user_id"]; ?>" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="Submit" value="Update" /></td>
        </tr>
      </table>
    </form></td>
    <td colspan="2" rowspan="2" bgcolor=""><a href="welcomeadmin.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','JKFJKKJFKJDF.jpg',1)"><img src="BHH.jpg" name="Image4" width="208" height="224" border="0" id="Image4" /></a></td>
  </tr>
  <tr>
    <td colspan="6" bgcolor=""><strong>Please Administrator don't Delete or Edit user's details by mistake, try to check well the user details you want to Delete or Edit!!!!!</strong></td>
  </tr>
  <tr>
    <td height="27" colspan="8" bgcolor=""><table width="514" border="0" align="center">
      <tr class="My_color">
        <td height="21"><div align="center"><a href="logout.php?logout">Do you want to Sign Ou</a>t</div></td>
        </tr>
  </table></td>
  </tr>
  <tr>
    <td height="21" colspan="8"><div align="center"><span class="style16">Copy right &copy; 2015, All rights reserved to Car-J Enterprise Ltd.</span></div></td>
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