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
<?php include('header.php'); ?>
				
</body>
</html>
