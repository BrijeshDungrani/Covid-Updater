<?php include_once('../connection.php');

session_start();

$username=$_POST['username'];
$password=$_POST['password'];

$q="select * from admin where username='$username' && pwd='$password'";
$result=mysqli_query($db,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
	$_SESSION['username']=$username;
    header("Location:http://localhost/cv/admin.php");
    
}
else
{
   
    header("Location : http://localhost/cv/adminLogin.php");
}
?>