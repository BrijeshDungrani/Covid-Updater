<?php 
       include('connection.php');
        session_start();
        $sqlQuery= "select * from hospital inner join hospdata on hospital.hid=hospdata.hid having (count(hid))=1 ";
        $result=mysqli_query($db,$sqlQuery); 
        while( $row=mysqli_fetch_array($result))
        {
                    echo '</br></br>'.$row['HospName'];
                    echo "</br>bed";
                    echo $row['CurrOccBed']; 
                    echo $row['TotBed']; 
                    echo $row['TotBed']-$row['CurrOccBed']; 
            
                    echo "</br>vent";
                    echo $row['CurrOccVent']; 
                    echo $row['TotVent']; 
                    echo $row['TotVent']-$row['CurrOccVent']; 

    
        } 
        
?>