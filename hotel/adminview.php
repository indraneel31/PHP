<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<?php
session_start();

$login = array("username" =>'admin', "password" => 'admin');
$name = $_POST['username'];
$password = $_POST['password'];

	foreach($login as $process)
	{
		
		if($process == $name && $process == $password)
		{
			//echo"welcome ,".$_POST['username']." Good to see you...";
			//header("location:index.php");
			$_SESSION['user'] = $name;
			$ans=1;
			break;
			
		}
		else
		{
			//echo "Bad username and password";
			$ans=2;
		}
		
	}
	if($ans == 1)
		{
			if(isset($_SESSION['user']))
			{
			//echo"welcome ,".$_POST['username']." Good to see you...";
			header("location:admin_fee_view.php");
			}
		}
		else
		{
			echo "Bad username and password";
			echo '<a href="adminlogin.php"><button>Back</button></a>';
		}
?>