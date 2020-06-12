<?php include('connection.php');
	session_start();
 ?>
<html>

<title>Add New Hospital</title>
<link href="css/styles.css" rel="stylesheet" />

 <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />


<body >
        <div >  
 <?php 
	//include('Control.php');
		$HospName=$_POST['HospName'];
		$Address=$_POST['Address'];
		$HosType=$_POST['HosType'];
		$TotBed=$_POST['TotBed'];
		$TotVent=$_POST['TotVent'];

		$sqlQuery="INSERT INTO hospital (HospName,Address,HosType,TotBed,TotVent) VALUES ('$HodName' , '$Address' , '$HosType' , '$TotBed' , '$TotVent')" ;
		$result=mysqli_query($connect,$sqlQuery);  
					
		if($result)
			echo " <br/> The Hospital added successfully  !  ";
		else
			echo " <br/> The Hospital not added successfully  !  ";	     
       
?>
		   

 </div>
 </body>
 </html>