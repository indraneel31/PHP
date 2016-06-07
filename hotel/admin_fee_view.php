<html>
<head>
<link rel="stylesheet" type="text/css" href="css/first.css">
<link rel="stylesheet" href="css/menu.css" />
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<title>A J Hotel Management System</title>
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
<?php  															// starting the php file 
include_once('class/dbconnection.php');							// Including dbconnection file
include_once('class/feequeryprocess.php');						// Including class/Query file

$feelist = new feequeryprocess;								// creating an object 
$results = $feelist->fee_display();							// To call the fee_display function
?>

<h1 align="center">Fee </h1>	  
<table border="2" style="border-collapse:collapse">
<tr bgcolor="#CCCCCC">
<td>ID</td>
<td>Guest Name</td>
<td>Guest Gender</td>
<td>Date/Time of Fee Entered</td>
<td bgcolor="#FF0000">Amount</td>
<td>Fee Reason</td>
<td>Start Date</td>
<td bgcolor="#CC0000">Last Date</td>
<td>Room</td>
<td>Action</td>
</tr>
<?php
foreach($results as $result)									// To display the records in table 
{?>
<tr>
<td><?php echo $result['id'];?></td>
<td><?php echo $result['g_name']; ?></td>						<!-- Displaying the records from DataBase-->
<td><?php echo $result['g_gender']; ?></td>
<td><?php echo $result['g_datetim']; ?></td>
<td><?php echo $result['g_fee']; ?></td>
<td><?php echo $result['g_reason']; ?></td>
<td><?php echo $result['g_startdate']; ?></td>
<td><?php echo $result['g_lastdate']; ?></td>
<td><?php echo $result['g_status']; ?></td>
<td><a href="updatefee.php?fee_id=<?php echo $result['id'];?>" onClick="return confirm('Do you want to Edit?');"><img src="images/update.png"></a>||<a href="delete_fee_details.php?fee_id=<?php echo $result['id'];?>" onClick="return confirm('Do you want to delete?');"><img src="images/cancel.png"></a>||<a href="viewfee.php?fee_id=<?php echo $result['id'];?>"><img src="images/eue.png"></a></td>

</tr>
	
<?php }?>
</table>
<center>
<a href="admin_event_view.php"><button>View/Edit Events</button></a>
<a href="event_register.php"><button>Add Events</button></a>
<a href="add_fee.php"><button>Add fee</button></a>
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