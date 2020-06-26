<?php 
       include('connection.php');
        session_start();

        $sqlQuery= "select * from hospdata";
        $result=mysqli_query($db,$sqlQuery); 
        $CurrOccBed=0;
        $CurrOccVent=0;
        $sqlQuery1= "select * from hospital";
        $result1=mysqli_query($db,$sqlQuery1); 
       
        while( $row1 = mysqli_fetch_array($result1))
        {
        $sqlQuery= "select CurrOccBed from hospdata where hid = '".$row1['hid']."' order by entrydate DESC";
            $result=mysqli_query($db,$sqlQuery);
            $row = mysqli_fetch_array($result);


            echo '<table><tr> <th>'.$row1['hid'].'</th> <th>'.$row1['HospName'].'</th> <th>'.$row1['Address'].'</th> <th>'.$row1['TotBed'].'</th> <th>'.$row['CurrOccBed'].'</th> </tr> </table>';

        }
        // while( $row = mysqli_fetch_array($result))
	// 	{
        //     $CurrOccBed += $row['CurrOccBed'];
        //     $CurrOccVent += $row['CurrOccVent'];   
 
        // }
        

        // $sqlQuery= "select * from hospital ";
        // $result=mysqli_query($db,$sqlQuery); 
        // while( $row=mysqli_fetch_array($result))
        // {
        //             echo '</br></br>'.$row['HospName'];
        //             echo "</br>bed";
        //             echo $row['CurrOccBed']; 
        //             echo $row['TotBed']; 
        //             echo $row['TotBed']-$row['CurrOccBed']; 
            
        //             echo "</br>vent";
        //             echo $row['CurrOccVent']; 
        //             echo $row['TotVent']; 
        //             echo $row['TotVent']-$row['CurrOccVent']; 

    
        // } 
        
?>