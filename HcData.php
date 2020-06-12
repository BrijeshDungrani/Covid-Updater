<?php include('connection.php');
	session_start();
 ?>
<html>

<title>Add current data</title>
<link href="css/styles.css" rel="stylesheet" />

 <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />


<body >
        <div >  
 <?php 
	
		$HospName=$_POST['HospName'];
		$CurrOccBed=$_POST['CurrOccBed'];
		$CurrOccVent=$_POST['CurrOccVent'];
//		$TotBed=$_POST['TotBed'];
//		$TotVent=$_POST['TotVent'];

		$sqlQuery="INSERT INTO hospdata (HospName,CurrOccBed,CurrOccVent) VALUES ('$HospName' , '$CurrOccBed' , '$CurrOccVent' )" ;
		$result=mysqli_query($connect,$sqlQuery);  
					
		if($result)
			echo " <br/> The current data added successfully  !  ";
		else
			echo " <br/> The current data not added successfully  !  ";	     
       
?>
		   

 </div>
 </body>
 </html>