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
.whir {
	color: #FFF;
}
.wf {
	color: #FFF;
}
.gg {
	color: #FFF;
}
.jdxd {
	color: #FFF;
}
.whit {
	color: #FFF;
}
.whiutr {
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
    <td height="51" colspan="4" bgcolor=""><h1 align="center" class="white">You are most welcome in your account</h1></td>
    <td height="51" colspan="2" bgcolor="#FFFFFF"><table width="82" height="57" border="1" align="center">
      <tr>
        <td width="87"><div align="center">PHOTO</div></td>
      </tr>
    </table></td>
    <td height="51" colspan="2" bgcolor="#FFFFFF">Hi <?php echo $userRow['first_name']; ?> you are now in your account!!!</td>
  </tr>
  <tr>
    <td colspan="9" bgcolor=""><h2 align="center"><strong><marquee direction="left"></marquee>
    </strong>Please fill the form below to rent an African Rental Ltd. car :</h2></td>
  </tr>
  <tr>
    <td colspan="9" background="images1.jpg">
    <form name="" id="" action="connectrent.php" method="post">
      <table width="588" height="248" border="0" align="center" bgcolor="#0066FF" >
        <tr>
          <td colspan="8"><h2 align="center"><strong><span class="whir">Rent an African Rental Ltd. car</span></strong></h2></td>
        </tr>
        <tr>
          <td width="138"><strong><span class="whir">First name</span></strong></td>
          <td colspan="7"><strong><span class="whir">
            <input type="text" name="first_name" required="required" placeholder="Your First name" id="first_name"/>
          </span></strong></td>
        </tr>
        <tr>
          <td><strong><span class="whir">Last name</span></strong></td>
          <td colspan="7"><strong><span class="whir">
            <input type="text" name="last_name" required="required" placeholder="Your Last name" id="last_name"/>
          </span></strong></td>
        </tr>
        <tr>
          <td><strong><span class="whir">Gender</span></strong></td>
          <td colspan="7"><strong><span class="whir">
            <label>
              <input name="gender" type="radio" value="Male" />
              Male</label>
            <label>
              <input name="gender" type="radio" value="Female" />
              Female</label>
          </span></strong></td>
        </tr>
        <tr>
          <td><strong><span class="whir">Pick-up date:</span></strong></td>
          <td><strong><span class="whir">
            <select name="pdy" required="required" >
              <option>Year</option>
              <option>2015</option>
              <option>2016</option>
              <option>2017</option>
              <option>2018</option>
              <option>2019</option>
              <option>2020</option>
            </select>
          </span></strong></td>
          <td width="101"><strong><span class="whir">
            <select name="pdm" required="required" >
              <option>Month</option>
              <option>January</option>
              <option>February</option>
              <option>March</option>
              <option>April</option>
              <option>May</option>
              <option>June</option>
              <option>July</option>
              <option>August</option>
              <option>September</option>
              <option>October</option>
              <option>November</option>
              <option>December</option>
              <option> </option>
            </select>
          </span></strong></td>
          <td width="90"><strong><span class="whir">
            <select name="pdd" required="required" >
              <option>Day</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
              <option>13</option>
              <option>14</option>
              <option>15</option>
              <option>16</option>
              <option>17</option>
              <option>18</option>
              <option>19</option>
              <option>20</option>
              <option>21</option>
              <option>22</option>
              <option>23</option>
              <option>24</option>
              <option>25</option>
              <option>26</option>
              <option>27</option>
              <option>28</option>
              <option>29</option>
              <option>30</option>
              <option>31</option>
              <option> </option>
            </select>
          </span></strong></td>
          <td width="1">&nbsp;</td>
          <td width="3">&nbsp;</td>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td><strong><span class="whir">Drop-off date</span></strong></td>
          <td><strong><span class="whir">
            <select name="ddy" required="required" >
              <option>Year</option>
              <option>2015</option>
              <option>2016</option>
              <option>2017</option>
              <option>2018</option>
              <option>2019</option>
              <option>2020</option>
            </select>
          </span></strong></td>
          <td><strong><span class="whir">
            <select name="ddm" required="required" >
              <option>Month</option>
              <option>January</option>
              <option>February</option>
              <option>March</option>
              <option>April</option>
              <option>May</option>
              <option>June</option>
              <option>July</option>
              <option>August</option>
              <option>September</option>
              <option>October</option>
              <option>November</option>
              <option>December</option>
              <option> </option>
            </select>
          </span></strong></td>
          <td><strong><span class="whir">
            <select name="ddd" required="required" >
              <option>Day</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
              <option>13</option>
              <option>14</option>
              <option>15</option>
              <option>16</option>
              <option>17</option>
              <option>18</option>
              <option>19</option>
              <option>20</option>
              <option>21</option>
              <option>22</option>
              <option>23</option>
              <option>24</option>
              <option>25</option>
              <option>26</option>
              <option>27</option>
              <option>28</option>
              <option>29</option>
              <option>30</option>
              <option>31</option>
              <option> </option>
            </select>
          </span></strong></td>
          <td colspan="4">&nbsp;</td>
        </tr>
        <tr>
          <td class="wf"><strong>Pick-up time</strong></td>
          <td colspan="3"><strong><span class="whir">
            <select name="timep" required="required" >
              <option>Code </option>
              <option>12:00 AM</option>
              <option>01:00 AM</option>
              <option>02:00 AM</option>
              <option>03:00 AM</option>
              <option>04:00 AM</option>
              <option>05:00 AM</option>
              <option>06:00 AM</option>
              <option>07:00 AM</option>
              <option>08:00 AM</option>
              <option>09:00 AM</option>
              <option>10:00 AM</option>
              <option>11:00 AM</option>
              <option>12:00 PM</option>
              <option>01:00 PM</option>
              <option>02:00 PM</option>
              <option>03:00 PM</option>
              <option>04:00 PM</option>
              <option>05:00 PM</option>
              <option>06:00 PM</option>
              <option>07:00 PM</option>
              <option>08:00 PM</option>
              <option>09:00 PM</option>
              <option>10:00 PM</option>
              <option>11:00 PM</option>
              
              <option> </option>
            </select>
          </span></strong></td>
          <td colspan="4">&nbsp;</td>
        </tr>
        <tr>
          <td class="wf"><strong>Drop-off time</strong></td>
          <td colspan="3"><strong><span class="whir">
            <select name="timed" required="required" >
              <option>Code </option>
              <option>12:00 AM</option>
              <option>01:00 AM</option>
              <option>02:00 AM</option>
              <option>03:00 AM</option>
              <option>04:00 AM</option>
              <option>05:00 AM</option>
              <option>06:00 AM</option>
              <option>07:00 AM</option>
              <option>08:00 AM</option>
              <option>09:00 AM</option>
              <option>10:00 AM</option>
              <option>11:00 AM</option>
              <option>12:00 PM</option>
              <option>01:00 PM</option>
              <option>02:00 PM</option>
              <option>03:00 PM</option>
              <option>04:00 PM</option>
              <option>05:00 PM</option>
              <option>06:00 PM</option>
              <option>07:00 PM</option>
              <option>08:00 PM</option>
              <option>09:00 PM</option>
              <option>10:00 PM</option>
              <option>11:00 PM</option>
              <option> </option>
            </select>
          </span></strong></td>
          <td colspan="4">&nbsp;</td>
        </tr>
        <tr>
          <td class="wf"><strong>Driver's age</strong></td>
          <td width="80"><strong><span class="whir">
            <select name="drivers" required="required" >
              <option>Age </option>
              <option>18 - 20</option>
              <option>21 - 24</option>
              <option>25 - Up</option>
              <option> </option>
            </select>
          </span></strong></td>
          <td colspan="2">&nbsp;</td>
          <td colspan="4">&nbsp;</td>
        </tr>
        <tr>
          <td class="wf"><strong><span class="whir">Actual Country </span></strong></td>
          <td colspan="3"><strong><span class="whir">
            <select name="actual" required="required" >
              <option>Actual Country </option>
              <option>D R Congo</option>
              <option>Uganda</option>
              <option>Somali</option>
              <option>Burundi</option>
              <option>Rwanda</option>
              <option>Comoro</option>
              <option>Kenya</option>
              <option>Tanzani</option>
              <option>South Sudan</option>
              <option>North Sudan</option>
              <option>Zambia</option>
              <option>Nigeria</option>
              <option>India</option>
              <option>America</option>
              <option>Erithrea</option>
              <option>Ethiopia</option>
              <option>Egypti</option>
              <option>South Africa</option>
              <option>Ivory cost</option>
              <option>Ghana</option>
              <option>Libya</option>
              <option>Morocco</option>
              <option>Tunisia</option>
              <option>Madascar</option>
              <option>Mozambica</option>
              <option>Namibia</option>
              <option>Zimbabwe</option>
              <option> </option>
            </select>
          </span></strong></td>
          <td colspan="4">&nbsp;</td>
        </tr>
        <tr>
          <td><strong><span class="whir">Pick up Location</span></strong></td>
          <td colspan="7"><strong><span class="whir">
            <select name="pl" required="required" id="questionone" >
              <option>Select</option>
              <option>Kinshasa</option>
              <option>Juba</option>
              <option>Kampala</option>
              <option>Kigali</option>
              <option>Bukavu</option>
              <option>Goma</option>
              <option> </option>
            </select>
          </span></strong></td>
        </tr>
        <tr>
          <td class="gg"><strong><span class="whir">Drop off Location</span></strong></td>
          <td colspan="7"><strong><span class="whir">
            <select name="dl" required="required" id="question_one" >
              <option>Select</option>
              <option>Kinshasa</option>
              <option>Juba</option>
              <option>Kampala</option>
              <option>Kigali</option>
              <option>Bukavu</option>
              <option>Goma</option>
              <option> </option>
            </select>
          </span></strong></td>
        </tr>
        <tr>
          <td class="whiutr"><strong>Activity</strong></td>
          <td colspan="7"><strong><span class="whir">
            <select name="activity" required="required" id="questiontwo" >
              <option>Select </option>
              <option>Wedding ceremony</option>
              <option>Birth day ceremony</option>
              <option>Funeral ceremony</option>
              <option>Campainging ceremony</option>
              <option>Visitation ceremony</option>
              <option>Others...</option>
              <option> </option>
            </select>
          </span></strong></td>
        </tr>
        <tr>
          <td class="whiutr"><strong>Rate (Price)</strong></td>
          <td colspan="3"><strong><span class="whir">
            <select name="rate" required="required" id="question_one2" >
              <option>Select</option>
              <option>    5 $ per hour</option>
              <option>    7 $ per hour</option>
              <option>   10 $ per hour</option>
              <option>   78 $ per day</option>
              <option>   98 $ per day</option>
              <option>  106 $ per day</option>
               <option> 960 $ per week</option>
              <option>1 080 $ per week</option>
              <option>1 356 $ per week</option>
              <option>3 600 $ per month</option>
              <option>3 900 $ per month</option>
              <option>4 000 $ per month</option>
              <option> </option>
            </select>
          </span></strong></td>
          <td>&nbsp;</td>
          <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
          <td class="whiutr">&nbsp;</td>
          <td colspan="3">&nbsp;</td>
          <td>&nbsp;</td>
          <td colspan="3">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          
        </tr>
        <tr bgcolor="#0066FF">
          
          <td width="48"><strong><span class="whir">
            <input type="reset" name="Create2" id="Create2" value="Reset" />
          </span></strong></td>
          <td width="93"><strong><span class="whir">
            <input type="submit" name="btn-Create" id="btn-Create" value="Rent" />
          </span></strong></td>
        </tr>
      </table>
    </form></td>
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