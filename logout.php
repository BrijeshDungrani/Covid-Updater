<?php 
session_start();
session_destroy();
	
header("Location : http://localhost/cv/adminLogin.php",TRUE,301);
	   
?>