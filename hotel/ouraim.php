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
<div class="main">

<dt>
<dl>VISION</dl>
 To give the good food and accomadation to the people.
</dt>
<dt>
<dl>MISSION</dl>
We are working based on our vission. our vission is to give the good food and accomadation facilities to the guests so we r provide the good food very testy but low cost and also our rooms are very clean and good.
</dt>
<dt>
<dl>FACILITIES</dl>
<pre>
   <b> 1)Good infrastructure.
    2)Eco friendly campus.
    3)Free parking(four wheelar and two wheelars).
    4)24/7 water and electricity.
    5)Healthy and higenic foods.<b>
</pre>
</dt>
</div>
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