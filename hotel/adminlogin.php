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
<img src="images/1.jpg" name="slide" height="200">
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
<h1 align="center">Login Form</h1>
<center>
<fieldset style="border-width:10; margin-right:270px;margin-left:270px;background:url(images/pink_background_by_kindiykhan-d5vjmph.jpg);">
<legend><font size="20">Admin Login</font></legend>
<center>
	<img src="images/lil-face-2-512.png" width="180" height="250">
</center>
<table align="center" border="0" width="30" height="50">
<form action="adminview.php" method="post" name="fom1">
<tr>
	<td align="center">
		<img src="images/uname.png">
    </td>
    <td>
        <input type="text" name="username" placeholder="Enter your UserName" maxlength="50"required autofocus  />
    </td>
</tr>
<tr>
	<td>
    	<img src="images/pwd.png">
    </td>
    <td>
    	<input type="password" name="password" placeholder="Enter your Password" maxlength="20" required/>
    </td>
</tr>
<tr>
<td>
</td>
	<td>
		<input type="submit" value="Login" id="sub1" name="sub1" style="border-radius:6px; color:#FFF; background-color:#31B0D5; border-style:solid; cursor:pointer; height:30px; border-color:#000" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="reset" value="Reset"  id="res1" name="res1" style="border-radius:6px; color:#FFF; background-color:#31B0D5; border-style:solid; cursor:pointer; height:30px; border-color:#000"/>
    </td>
</tr>
</table>
</form>
</center>
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
All rights reserved&copy; A J Hostel Site &reg;<br>
Dated : <?php echo date('d-m-y'); ?><br>
Time <?php echo date('h:i');?></left>

</div>
</body>
</html>
