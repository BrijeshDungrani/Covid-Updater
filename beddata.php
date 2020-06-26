<?php 
       include('connection.php');
        session_start();



        $sqlQuery1= "select * from hospital";
        $result1=mysqli_query($db,$sqlQuery1); 
       
        while( $row1 = mysqli_fetch_array($result1))
        {
        $sqlQuery= "select CurrOccBed from hospdata where hid = '".$row1['hid']."' order by entrydate DESC";
            $result=mysqli_query($db,$sqlQuery);
            $row = mysqli_fetch_array($result);


            echo '<table><tr> <th>'.$row1['hid'].'</th> <th>'.$row1['HospName'].'</th> <th>'.$row1['Address'].'</th> <th>'.$row1['TotBed'].'</th> <th>'.$row['CurrOccBed'].'</th> </tr> </table>';

        }
        
?>