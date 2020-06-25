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
		$HospName=$_POST['HospName'];
		$Address=$_POST['Address'];
		$HosType=$_POST['HosType'];
		$TotBed=$_POST['TotBed'];
		$TotVent=$_POST['TotVent'];
		$Entrydate= date("Y-m-d H:i:s");

		$sqlQuery="INSERT INTO hospital (HospName,Address,HosType,TotBed,TotVent) VALUES ('$HospName' , '$Address' , '$HosType' , '$TotBed' , '$TotVent')" ;
		$result=mysqli_query($db,$sqlQuery);  
		include('addHospital1.php');

		if($result)
			echo " <br/> The Hospital added successfully  !  ";
		else
			echo " <br/> The Hospital not added successfully  !  ";	
			
			
		$sqlQuery1="INSERT INTO hospdata (Entrydate,Hospital,CurrOccBed,CurrOccVent) VALUES ('$Entrydate' ,'$HospName' , '$TotBed' , '$TotVent' )" ;
		$result1=mysqli_query($db,$sqlQuery1); 
		if($result1)
			echo " The Hospital data added successfully  !  ";
		else
			echo " <br/> The Hospital data not added successfully  !  ";	     
       
?>
		
 </div>
 </body>
 </html>