<html>
<head>
<link rel="stylesheet" type="text/css" href="css/first.css">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="css/menu.css" />
<title> A J Hotel Management System</title>
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
<div class="main">
<?php
include_once('class/dbconnection.php');
include_once('class/eventqueryprocess.php');

$displayevent = new eventqueryprocess;
$results = $displayevent->select_event();
?>
<h1 align="center"> Events </h1>	  
<table border="1" style="border-collapse:collapse">
    <tr bgcolor="#999999">
    <td>Event ID</td>
    <td>Event Name</td>
    <td>Event Date</td>
    <td>Event Month</td>
    <td>Event year</td>
    <td>Event Organiser</td>
    <td>Event Hour</td>
    <td>Event Minute</td>
    <td>Event Daytime</td>
    <td>Event Venue</td>
    <td>Event Description</td>
    <td>ADMIN ACTION</td>
    </tr>
	<?php
		foreach($results as $display){	
	?>
<tr>
	<td><?php echo $display['id'];?></td>
	<td><?php echo $display['event_name'];?></td>
    <td><?php echo $display['event_dat']; ?></td>
    <td><?php echo $display['event_mon']; ?></td>
    <td><?php echo $display['event_yr']; ?></td>
    <td><?php echo $display['event_organiser'];?></td>
    <td><?php echo $display['event_hr']; ?></td>
    <td><?php echo $display['event_min']; ?></td>
    <td><?php echo $display['event_daytim']; ?></td>
    <td><?php echo $display['event_venue']; ?></td>
    <td><?php echo $display['event_description']; ?></td>
	<td><a href="delete_event.php?eve_id=<?php echo $display['id']; ?>" onClick="return confirm('Are You Sure To Delete This Paricular Event ?');"><img src="images/cancel.png"></a>||
    <a href="update_event.php?eve_id=<?php echo $display['id'];?>" onClick="return confirm('Are You Sure To Edit ?')"><img src="images/update.png"></a>||
    <a href="viewevent.php?eve_id=<?php echo $display['id'];?>"><img src="images/eue.png"></a></td>
</tr>
	<?php }?>
</table>
<center>
<a href="admin_fee_view.php"><button>View/Edit Fee</button></a>
<a href="event_register.php"><button>Add Events</button></a>
<a href="add_fee.php"><button>Add Fee</button></a>
<a href="logout.php"><button>Logout</button></a>
</center>
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
All rights reserved&copy; A J Hostel Site &reg;<br>
Dated : <?php echo date('d-m-y'); ?><br>
Time <?php echo date('h:i');?></left>

</div>
</body>
</html>