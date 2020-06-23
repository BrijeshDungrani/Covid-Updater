<?php include_once('../connection.php');

session_start();

$username=$_POST['username'];
$password=$_POST['password'];
<<<<<<< HEAD:action_page.php
$_SESSION["uname"] = $username;
$_SESSION["password"] = $password;
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'covid');
=======

>>>>>>> 19516756e11ae17fa1baa6ca430aac1b89ff396f:lib/adminValidation.php
$q="select * from admin where username='$username' && pwd='$password'";
$result=mysqli_query($db,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
	$_SESSION['username']=$username;
<<<<<<< HEAD:action_page.php
	include('home.php');
=======
    header("Location:http://localhost/cv/admin.php");
    
>>>>>>> 19516756e11ae17fa1baa6ca430aac1b89ff396f:lib/adminValidation.php
}
else
{
   
    header("Location : http://localhost/cv/adminLogin.php");
}
?>
