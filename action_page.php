<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'covid');
$q="select * from admin where username='$username' && pwd='$password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
	$_SESSION['username']=$username;
	header('location:http://localhost/cv/admin.php');
}
else
{
	echo 'Invalid Id Password';
}
?>