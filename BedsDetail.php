<?php include_once('header.html') ?>
<div class="card-header bedheader">
    <i class="fas fa-table mr-1"></i>
    <h3>COvid -19 Beds</h3>
</div>
<div>
    <h3 class="TableHeader">Covid Bed Availability</h3>
    <br>
    <div class="row">
        <div class = "availability" ><h5>&nbsp Availability &nbsp</h5></div>
        <div class = "availability" ><h5 style="background-color: lightgreen;">&nbsp More than 50 Beds &nbsp</h5></div>
        <div class = "availability" ><h5 style="background-color: #FFFF99;">&nbsp Less than 50 Beds &nbsp</h5></div>
        <div class = "availability" ><h5 style="background-color: #FFB6C1;">&nbsp No Bed &nbsp</h5></div>
    </div>
</div>
<div class="card-body bedTable">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Hospital<i class="fa fa-sort"></i></th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Total Beds<i class="fa fa-sort"></i></th>
                    <th>Occupied Beds<i class="fa fa-sort"></i></th>
                    <th>Vacant Beds<i class="fa fa-sort"></i></th>
                </tr>
            </thead>
            <tfoot>

       <?php 
       include('connection.php'); 

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
            $vecbed=$row1['TotBed'] - $row['CurrOccBed'];
            echo '<tr>';
            echo '<td>'.$row1['HospName'].'</td>'; 
            echo '<td>'.$row1['Address'].'</td>';
            echo '<td>'.$row1['phone'].'</td>';
            echo '<td>'.$row1['TotBed'].'</td>';
            echo '<td>'.$row['CurrOccBed'].'</td>';
            echo '<td>'.$vecbed.'</td>';
            echo '</tr>';
        }
        
?>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
<script>

</script>