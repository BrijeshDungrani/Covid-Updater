<?php 
        include('connection.php');
        session_start();
        $sqlQuery= "select * from hospdata";
        $result=mysqli_query($db,$sqlQuery); 
        $TodTotCon=0;
        $TodTotRec=0;
        $TodTotDea=0;
        while( $row = mysqli_fetch_array($result) )
		{
            $TodTotCon += $row['TodTotCon'];
            $TodTotRec += $row['TodTotRec'];
            $TodTotDea += $row['TodTotDea'];           
        }
        $TodTotAct= $TodTotCon-$TodTotRec-$TodTotDea;
        echo $TodTotCon;
        echo $TodTotRec;
        echo $TodTotDea;
        echo $TodTotAct;

?>