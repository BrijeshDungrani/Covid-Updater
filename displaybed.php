<?php 
        include('connection.php');
        session_start();
        $sqlQuery= "select * from hospdata";
        $result=mysqli_query($db,$sqlQuery); 
        $CurrOccBed=0;
        $CurrOccVent=0;
        while( $row = mysqli_fetch_array($result) )
		{
            $CurrOccBed += $row['CurrOccBed'];
            $CurrOccVent += $row['CurrOccVent'];           
        }
        $TodTotAct= $TodTotCon-$TodTotRec-$TodTotDea;
        echo $TodTotCon;
        echo $TodTotRec;

?>