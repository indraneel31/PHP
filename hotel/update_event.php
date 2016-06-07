<html>
<head>
<title>Event Register</title>
<link rel="stylesheet" type="text/css" href="css/first.css">
<link rel="stylesheet" href="css/menu.css" />
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<script language="javascript">								
		
		
		function formsubmit()										
		{
			if(document.frmempsave.eventname.value=='')					
			{
				alert("Please enter the Event Name");				
				document.frmempsave.eventname.focus();					
				return false;										
			}
			if(document.frmempsave.date1.value=='')					
			{
				alert("Please enter the Date");					
				document.frmempsave.date1.focus();					
				return false;										
			}
			if(document.frmempsave.month1.value=='')					
			{
				alert("Please enter the Month");				
				document.frmempsave.month1.focus();					
				return false;										
			}
			if(document.frmempsave.year1.value=='')					
			{
				alert("Please enter the Year");					
				document.frmempsave.year1.focus();					
				return false;
			}
			if(document.frmempsave.eventorganiser.value=='')					
			{
				alert("Please enter the organiser's Name");				
				document.frmempsave.eventorganiser.focus();					
				return false;										
			}
			if(document.frmempsave.time1.value=='')					
			{
				alert("Please enter the Hour");					
				document.frmempsave.time1.focus();					
				return false;										
			}
			if(document.frmempsave.min1.value=='')					
			{
				alert("Please enter the Minute");				
				document.frmempsave.min1.focus();					
				return false;										
			}
			if(document.frmempsave.eventvenue.value=='')					
			{
				alert("Please enter the venue");					
				document.frmempsave.eventvenue.focus();					
				return false;										
			}
			if(document.frmempsave.eventdescription.value=='')					
			{
				alert("Please enter the eventdescription");					
				document.frmempsave.eventdescription.focus();					
				return false;										
			}
			else
			{
			document.frmempsave.submit();
			//return false;						
			}
		}
		</script>
        <!--<script language="javascript" type="text/javascript" src="js/slide/slide.js">
</script>-->
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
session_start();
$name = $_SESSION['user'];
if(isset($_SESSION['user']))
	{
?>

<?php
include_once('class/dbconnection.php');
include_once('class/eventqueryprocess.php');

$eventid = $_REQUEST['eve_id'];
$eventedit = new eventqueryprocess;
$evedetails  = $eventedit->select_update_event($eventid);
?>
<div class="main">
<h1 align="center"><font face="Hobo Std" color="#FF9900">Registering the Month Event</font></h1>
<hr color="#999999">
<fieldset style=" border-width:10px;margin-left:250px;margin-right:250px;">
<legend><h3><font face="Burnstown Dam">Event update Form</font></h3></legend>
<table  align="center"  cellpadding="5" cellspacing="5">
<form action="updateprocess.php" method="POST" name="frmempsave">
<input type="hidden" value="<?php echo $eventid; ?>" name="id" >

<tr>
	<th align="left">*Event Name</th>
	<td align="left"><input type="text" name="eventname" id="1" placeholder="EventName" title="EventName" maxlength="30" tabindex="1" autofocus value="<?php echo $evedetails['event_name']; ?>"></td>
</tr>
<tr>
	<th align="left">*Event Y/M/D</th>
    	<th align="left">
        	<select name="year1" tabindex="4">
            <option value="">Year</option>
            <?php 
					$year = date('Y');
					for($y=$year;$y>1950;$y--){?>
            <option value="<?php echo $y;?>"><?php echo $y;?></option>
            <?php }?>
            </select>
            
            <select name="month1" tabindex="3">
        	<option value="">Month</option>
        	<?php $month = array('1' => 'Jan','2' => 'Feb','3' => 'Mar','4' => 'Apr','5' => 'May','6' => 'Jun','7' => 'Jul','8' => 'Aug','9' => 'Sep','10' => 'Oct','11' => 'Nov','12' => 'Dec');
			foreach($month as $mth => $mo){?>
        	<option value="<?php echo $mo; ?>"><?php echo $mth; ?></option>
        	<?php }?>
        	</select>
            
            <select name="date1" tabindex="2">
        	<option value="">Day</option>
        	<?php for($d=1;$d<32;$d++){?>
            <option value="<?php echo $d;?>"><?php echo $d;?></option>
            <?php }?>
    		</select>
       		</th>
</tr>
<tr>
	<th align="left">*Event Organiser</th>
    <td align="left"><input type="text" name="eventorganiser" id="3" placeholder="EventOrganiser" title="EventOrganiser" maxlength="30" tabindex="5" value="<?php echo $evedetails['event_organiser'];?>"></td>
</tr>
<tr>
	<th align="left">*Event Time</th>
    <th align="left">
    	<select name="time1" tabindex="6">
        <option value="">Hour</option>
        <?php
			for($h=1;$h<13;$h++){?>
            <option value="<?php echo $h;?>"><?php echo $h;?></option>
            <?php }?>
        </select>
        <select name="min1" tabindex="7">
        <option value="">Minutes</option>
        <?php
			for($m=1;$m<61;$m++){?>
            <option value="<?php echo $m;?>"><?php echo $m;?></option>
            <?php }?>
        </select>
        <select name="tim2" tabindex="8">
        <option value="">DayTime</option>
        <option>AM</option>
        <option>PM</option>
		</select>
    </th>
</tr>
<tr>
	<th align="left">*Event Venue</th>
 	<td align="left"><input type="text" name="eventvenue" id="9" placeholder="EventVenue" title="eventvenue" maxlength="30" tabindex="9" value="<?php echo $evedetails['event_venue'];?>"></td>
</tr>
<tr>
	<th align="left">*Event Description</th>
	<td align="left"><textarea name="eventdescription" style="height:120px;" title="eventdescription" placeholder="EventDescription" tabindex="10"><?php echo $evedetails['event_description'];?></textarea></td>
</tr>
<tr>
<th></th>
	<th><input type="button" value=" Register " tabindex="11" onClick="formsubmit()" style="border-radius:6px; color:#000; background-color:#31B0D5; border-style:solid; cursor:pointer; height:30px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="reset" value="  Cancel  " tabindex="12" style="border-radius:6px; color:#000; background-color:#31B0D5; border-style:solid; cursor:pointer; height:30px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</form>
<a href="admin_event_view.php"><button tabindex="12" style="border-radius:6px; color:#000; background-color:#31B0D5; border-style:solid; cursor:pointer; height:30px; @border-color:#000">Back</button></a>
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