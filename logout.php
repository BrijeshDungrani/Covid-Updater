<?php 
<<<<<<< HEAD
        session_start();
        session_unset();
        session_destroy();
		header("Location: login.php");
		echo "please first login";
=======
session_start();
session_destroy();
	
header("Location : http://localhost/cv/adminLogin.php",TRUE,301);
>>>>>>> 19516756e11ae17fa1baa6ca430aac1b89ff396f
	   
?>