<?php include('connection.php');
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

<title>Add New Hospital</title>
<link href="css/styles.css" rel="stylesheet" />

 <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />


<body >
        <div >  
 <?php 
	
		$TodTotCon=$_POST['TodTotCon'];
		$TodTotRec=$_POST['TodTotRec'];
		$TodTotDea=$_POST['TodTotDea'];
		$CaseDate= date("Y-m-d H:i:s");


		$sqlQuery="INSERT INTO casedetail (CaseDate,TodTotCon,TodTotRec,TodTotDea) VALUES ('$CaseDate' , '$TodTotCon' , '$TodTotRec' , '$TodTotDea' )" ;
		$result=mysqli_query($db,$sqlQuery);  
					
		include('CaseData1.php');
		if($result)
			echo " <br/> The cases added successfully  !  ";
		else
			echo " <br/> The cases not added successfully  !  ";
			
       
?>
 </div>
 </body>
 </html>