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
    
    
		$Hospital=$_POST['HospName'];
		$CurrOccBed=$_POST['CurrOccBed'];
		$CurrOccVent=$_POST['CurrOccVent'];
		$Entrydate= date("Y-m-d H:i:s");

		$sqlQuery="UPDATE hospdata SET Entrydate='$Entrydate', CurrOccBed=$CurrOccBed, CurrOccVent='$CurrOccVent' WHERE Hospital='$Hospital'" ;
		$result=mysqli_query($db,$sqlQuery);  
		
		include('updatedata.php');
			if($result)
				echo " <br/> The current data added successfully  !  ";
			else
				echo " <br/> This current data not added successfully  !  ";	   
       
?>
		   

 </div>
 </body>
 </html>