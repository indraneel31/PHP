<html>
<head>
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="css/first.css">
<link rel="stylesheet" href="css/menu.css" />
<title>Gallery</title>
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
<div class="gallery">
<h2 align="center">Gallery Of A J H..</h2>
<table>
<tr>
<th><img src="images/img/7.jpg"></th>
<th><img src="images/img/8.jpg"></th>
<th><img src="images/img/9.jpg"></th>
<th><img src="images/img/11.jpg"></th>
<th><img src="images/img/12.jpg"></th>
<th><img src="images/img/13.jpg"></th>
</tr>
<tr>
<th><img src="images/img/14.jpg"></th>
<th><img src="images/img/15.jpg"></th>
<th><img src="images/img/16.jpg"></th>
<th><img src="images/img/17.jpg"></th>
<th><img src="images/img/18.jpg"></th>
<th><img src="images/img/19.jpg"></th>
</tr>
<tr>
<th><img src="images/img/20.jpg"></th>
<th><img src="images/img/21.jpg"></th>
<th><img src="images/img/22.jpg"></th>
<th><img src="images/img/23.jpg"></th>
<th><img src="images/img/24.jpg"></th>
<th><img src="images/img/25.jpg"></th>
</tr>
<tr>
<th><img src="images/img/26.jpg"></th>
<th><img src="images/img/27.jpg"></th>
<th><img src="images/img/28.jpg"></th>
<th><img src="images/img/29.jpg"></th>
<th><img src="images/img/30.jpg"></th>
<th><img src="images/img/31.jpg"></th>
</tr>
</table>
<div class="footer">
<div class="logo">
</div>
<hr>
<left>
All rights reserved&copy;  A J Hostel Site &reg;<br>
Dated : <?php echo date('d-m-y'); ?><br>
Time <?php echo date('h:i');?></left>

</div>
</body>
</html>