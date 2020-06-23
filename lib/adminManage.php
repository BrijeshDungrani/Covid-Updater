<?php include('../connection.php'); ?>
<?php
if($_REQUEST['act'])
{
   $_REQUEST['act']();
}
function add_hospital()
{
    
    $R=$_REQUEST;
    $HospName=$R['HospName'];
    $Address=$R['Address'];
    $HosType=$R['HosType'];
    $TotBed=$R['TotBed'];
    $TotVent=$R['TotVent'];
		$Entrydate= date("Y-m-d H:i:s");
		$sqlQuery="INSERT INTO hospital (HospName,Address,HosType,TotBed,TotVent) VALUES ('$HospName' , '$Address' , '$HosType' , '$TotBed' , '$TotVent')" ;
		$result=mysqli_query($db,$sqlQuery);  
        if($result)
        {
            $msg = "The Hospital added successfully  !  ";
            header("Location:http://localhost/cv/admin.php");
        }
			
        else
        {
            $msg =  "The Hospital not added successfully  !  ";
            
        }
        
             	
            
         
}

?>