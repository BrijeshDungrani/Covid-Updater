<?php
if(!isset($_SESSION)) 
{ 
session_start();
if(!isset($_SESSION["uname"])&&!isset($_SESSION["password"]))
{
  header("location: logout.php");
 die();
}
}
?>
<html>
<head>
	<link rel="stylesheet" href="style.css"  type="text/css" />
	<link rel="stylesheet" href="reset.css"  type="text/css" />
	<title>Welcome</title>
</head>
<body>
<header>

	<style>
		body {
	  background-image: url('img/hospBg.jpg');
	  background-repeat: no-repeat;
	  background-attachment: fixed;
	  background-size: 100% 100%;
	}
	</style>
			<center><h1>Regional covid-19 Updater</h1></center>
		</header>
		<nav>
			<ul>

				<li><a href="Addhospital1.php">Add New hospital </a></li>
				<li><a href="updatedata.php">Update Hospital Data </a></li>
				<li><a href="CaseData1.php">Add Today's Cases</a></li>  
				<li><a href="logout.php">Logout </a></li>

			</ul>
		</nav>
		<br/>
				
</body>
</html>
