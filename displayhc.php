<?php 
        include('connection.php');
        session_start();
        $sqlQuery= "select * from hospdata";
        $result=mysqli_query($db,$sqlQuery); 
        $CurrOccBed=0;
        $CurrOccVent=0;
        $sqlQuery1= "select * from hospital";
        $result1=mysqli_query($db,$sqlQuery1); 
        $Totbed=0;
        $Totvent=0;
        while( $row = mysqli_fetch_array($result))
		{
            $CurrOccBed += $row['CurrOccBed'];
            $CurrOccVent += $row['CurrOccVent'];   
 
        }
        while( $row1 = mysqli_fetch_array($result1))
        {
            $Totbed += $row1['TotBed'];
            $Totvent += $row1['TotVent']; 
        }
        $curvecbed= $Totbed-$CurrOccBed;
        $curvecvent= $Totvent-$CurrOccVent;
        echo $Totvent;
        

?>