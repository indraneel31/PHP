<html>
<head>
<title>Adding fee</title>
<link rel="stylesheet" type="text/css" href="css/first.css">
<link rel="stylesheet" type="text/css" href="js/date picker/jquery.datetimepicker.css"/>
<link rel="stylesheet" href="css/menu.css" />
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<style type="text/css">
.custom-date-style {
	background-color: red !important;
}

</style>
<script src="js/date picker/jquery.js"></script>
<script src="js/date picker/jquery.datetimepicker.js"></script>
<script type="text/javascript">
var image1=new Image()
image1.src="images/1.jpg"
var image2=new Image()
image2.src="images/2.jpg"
var image3=new Image()
image3.src="images/3.jpg"
var image4=new Image()
image4.src="images/4.jpg"
</script>
</head>
<body>
<div class="head">
 A J Hotel Management System
</div>
<div class="header">
<img src="images/1.jpg" name="slide" width="1350" height="200">
<script type="text/javascript">
var step=1
function slideit(){
document.images.slide.src=eval("image"+step+".src")
if(step<4)
step++
else
step=1
setTimeout("slideit()",2500)
}
slideit()
</script>
</div>
<div class="menu">
<ul id="menu">
	<li>
	<a href="index.php">Home</a></li>
	<li> <a href="displayevents.php">Show Events</a>
    <ul class="hidden">
    <li><a href="displayevents.php">Events of the Month</a></li>
    </ul>
    </li>
    <li> <a href="displayfee.php">Show Fee</a>
    <ul class="hidden">
    <li><a href="displayfee.php">Fee For the Guest</a></li>
    <li><a href="gallery.php">Photography</a></li>
    </ul>
    </li>
    <li>
	<a href="aboutus.php">About Us</a>
	<ul class="hidden">
	<li>
	<a href="aboutus.php">who we are</a></li>
	<li>
	<a href="ouraim.php">what we do</a></li>
	<li>
	<a href="contact.php">Contact Us</a></li>
    </ul>
	</li>
	<li> <a href="adminlogin.php">Admin</a></li>
	</ul>
</div>
<?php

include_once('class/dbconnection.php');
include_once('class/feequeryprocess.php');
//include_once('feeview.php');
$feeid = $_REQUEST['fee_id'];
$feeedit = new feequeryprocess;
$feedetails = $feeedit->fee_edit($feeid); 

?>
<?php
session_start();
$name = $_SESSION['user'];
if(isset($_SESSION['user']))
	{
?>

<div class="main">
<h1 align="center"><font face="Hobo Std" color="#FF9900">Entering the Fee Amount</font></h1>
<hr color="#999999">
<fieldset style=" border-width:10px; margin-left:250px;margin-right:250px;">
<legend><h3><font face="Burnstown Dam">Entering the fee Amount</font></h3></legend>
<table  align="center" cellpadding="5" cellspacing="5">
<form action="updatefeeprocess.php" method="POST" name="frmfeesave">
<input type="hidden" value="<?php echo $feeid; ?>" name="id" >
<tr>
	<th align="left">*Guest Name</th>
		<td><input type="text" name="g_name" id="1"  placeholder="Guest Name" title="Name" maxlength="20" tabindex="1" autofocus required  size="30" value="<?php echo $feedetails['g_name']; ?>"/></td>
</tr>
<tr>
<th align="left">*Gender</th>
    <td>
	<?php if($feedetails['g_gender']=="Male")
	{
	?>
	<input type="radio" name="g_gender" checked="checked" id="2" value="Male" title="Male" tabindex="2"  />Male
    <input type="radio" name="g_gender"  id="2" value="Female" title="Female" tabindex="3" required >Female
	<?php 
	}else if($feedetails['g_gender']=="Female")
	{?>
    <input type="radio" name="g_gender"  id="2" value="Male" title="Male" tabindex="2"  />Male
    <input type="radio" name="g_gender"  id="2" checked="checked" value="Female" title="Female" tabindex="3" required >Female
	<?php } else
	{?>
    <input type="radio" name="g_gender"  id="2" value="Male" title="Male" tabindex="2"  />Male
    <input type="radio" name="g_gender"  id="2" value="Female" title="Female" tabindex="3" required >Female
    <?php } ?>
    </td>
</tr>
<tr>
	<th align="left">*Date & Time of Fee Entered</th>
	<td>	<input type="text" id="datepicker" name="g_datetim" placeholder="Date of fee Entered" title="fee entered Date" tabindex="4" required size="30" / value=" <?php echo $feedetails['g_datetim']; ?>" ></td>

<tr>
	<th align="left">*Amount</th>
    <td><input type="text" name="g_fee" id="4" placeholder="fee Amount" title="fee Amount" maxlength="20" tabindex="5" required size="30" value="<?php echo $feedetails['g_fee']; ?>"></td>
</tr>
<tr>
	<th align="left">*Reason</th>
    <td><textarea style="40px" name="g_reason" id="5" placeholder="Reason" title="Reason" tabindex="6" required size="30"><?php echo $feedetails['g_reason']; ?></textarea></td>
</tr>
<tr>
	<th align="left">*Start Date</th>
    <td><input type="text" name="g_startdate" id="6" placeholder="Start Date" title="Start Date" maxlength="10" tabindex="7" required size="30" value="<?php echo $feedetails['g_startdate']; ?>"></td>
</tr>
<tr>
	<th align="left">*Last Date</th>
    <td><input type="text" name="g_lastdate" id="6" placeholder="Last Date" title="Last Date" maxlength="10" tabindex="8" required size="30" value="<?php echo $feedetails['g_lastdate']; ?>"></td>
</tr>

<tr>
	<th align="left">*Room</th>
    <td><select name="g_status" id="7" title="Status" tabindex="9" required/>
		<option required value="0">---Select Status---</option>
        <option <?php if($feedetails['g_status'] == 'Single BedRoom'){?> selected="selected" <?php   }?> value="Single BedRoom"> Single BedRoom</option>
		<option <?php if($feedetails['g_status'] == 'Double BedRoom'){?> selected="selected" <?php   }?> value="Double BedRoom">Double BedRoom</option>
		<option <?php if($feedetails['g_status'] == 'Party Hall'){?> selected="selected" <?php   }?> value="Party Hall">Party Hall</option>
		</select></td>
</tr>
<tr>
<th></th>
	<th>
    <input type="submit" value="  Submit  " tabindex="10" title="save"  style="border-radius:6px; color:#FFF; background-color:#FF9900; border-style:solid; cursor:pointer; height:30px; border-color:#000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="reset" value="  Cancel  " tabindex="11" title="reset"  style="border-radius:6px; color:#FFF; background-color:#FF9900; border-style:solid; cursor:pointer; height:30px; border-color:#000">
</form>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="admin_fee_view.php"><button tabindex="12" style="border-radius:6px; color:#FFF; background-color:#FF9900; border-style:solid; cursor:pointer; height:30px; border-color:#000">Back</button></a>
    </th>
</tr>
</table>
</fieldset>
</div>
<?php }
else
	{
		header("location:adminlogin.php");
	}?>
<div class="footer">
<div class="logo">
<table>
<tr><td><a href="dbc@gmail.com" onMouseOver='return confirm("want to Mail?");'><img src="images/socialnet/download (3).jpg" width="30" height="30" align="left"></a></td></tr>
<tr><td><a href="dbc/gmail.com" onMouseOver='return confirm("Open FaceBook?");'><img src="images/socialnet/images.png" width="30" height="30" align="left"></a></td></tr>
<tr><td><a href="8197980557" onMouseOver='return confirm("want to call?");'><img src="images/socialnet/images.jpg" width="30" height="30" align="left"></a></td></tr>
</table>
</div>
<hr>
<left>
All rights reserved&copy;  A J Hostel Site &reg;<br>
Dated : <?php echo date('d-m-y'); ?><br>
Time <?php echo date('h:i');?></left>

</div>
</body>
</html>
<script>$('#datepicker').datetimepicker({
dayOfWeekStart : 1,
lang:'en',
//disabledDates:['1986/01/08','1986/01/09','1986/01/10'],
startDate:	'2016/06/01'
});
$('#datetimepicker3').datetimepicker({
	inline:true
});
</script>