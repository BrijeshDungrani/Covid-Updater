<?php include_once('header.html') ?>
<script type= "text/javascript">
    var lon,lat ;
    <?php 
 $lat = 22.32;
 $long = 78.50; ?>
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
    
  } else { 
    // x.innerHTML = "Geolocation is not supported by this browser.";
  }
}
function showPosition(position) {
    
    lon = position.coords.longitude;
    lat = position.coords.latitude;
    
    // <?php  
     $lat = lat;
     $long = lon; ?>
     console.log(lon,lat);
    // document.getElementById("lon").innerHTML = lon;
    // document.getElementById("lat").innerHTML = lat;
    return lon,lat
//   x.innerHTML = "Latitude: " + position.coords.latitude + 
//   "<br>Longitude: " + position.coords.longitude;
}
</script>

 <body onload = "getLocation()">
<div class="card-header bedheader">
    <i class="fas fa-table mr-1"></i>
    <h3>COvid -19 Beds</h3>
</div>
<div>

<?php
function geoDistance($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo, $earthRadius = 6371000)
{
    
  // convert from degrees to radians
  $latFrom = deg2rad($latitudeFrom);
  $lonFrom = deg2rad($longitudeFrom);
  $latTo = deg2rad($latitudeTo);
  $lonTo = deg2rad($longitudeTo);
 
  $latDelta = $latTo - $latFrom;
  $lonDelta = $lonTo - $lonFrom;
 
  $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
    cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
  return round($angle * $earthRadius * 1.60934/1000,2,PHP_ROUND_HALF_ODD);
}
//  $x = geoDistance(21.2347797,72.8188308,21.214920,72.828629,6371000);
//  $y = geoDistance(21.2347797,72.8188308,21.235542,72.816449,6371000);
//  $z = geoDistance(21.2347797,72.8188308,21.222301,72.821043,6371000);
   
 
 
?>

    <h3 class="TableHeader">Covid Bed Availability</h3>
    <!-- <?php echo "<h3> $x </h3>" ?>
    <?php echo "<h3> $y </h3>" ?>
    <?php echo "<h3> $z </h3>" ?> -->
    <br>
    <div class="row">
        <div class = "availability" ><h5>&nbsp Availability &nbsp</h5></div>
        <div class = "availability" ><h5 style="background-color: lightgreen;">&nbsp More than 50 Beds &nbsp</h5></div>
        <div class = "availability" ><h5 style="background-color: #FFFF99;">&nbsp Less than 50 Beds &nbsp</h5></div>
        <div class = "availability" ><h5 style="background-color: #FFB6C1;">&nbsp No Bed &nbsp</h5></div>
        <div class = "availability" ><button onclick="getLocation()">Nearby Hospital</button></div>
        
    </div>
</div>
<div class="card-body bedTable">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Hospital<i class="fa fa-sort"></i></th>
                    <th>Address</th>
                    <!-- <th>Lat</th>
                    <th>Lon</th> -->
                    <!-- <th>Distance</th> -->
                    <th>Contact</th>
                    <th>Total Beds<i class="fa fa-sort"></i></th>
                    <th>Occupied Beds<i class="fa fa-sort"></i></th>
                    <th>Vacant Beds<i class="fa fa-sort"></i></th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Hospital</th>
                    <th>Address</th>
                    <!-- <th>Lat</th>
                    <th>Lon</th> -->
                    <!-- <th>Distance</th> -->
                    <th>Contact</th>
                    <th>Total Beds</th>
                    <th>Occupied Beds</th>
                    <th>Vacant Beds</th>
                </tr>
            </tfoot>
            <tbody>
                
       <?php 
       include('connection.php'); 

        $sqlQuery= "select * from hospdata";
        $result=mysqli_query($db,$sqlQuery); 

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
            echo '<td>'.$row1['Address'].' ('.geoDistance($lat,$long,$row1['latitude'],$row1['longitude'],6371000).' Km)'.'</td>';
            // echo '<td>'.$row1['latitude'].'</td>';
            // echo '<td>'.$row1['longitude'].'</td>';
            // echo '<td>'.geoDistance($lat,$long,$row1['latitude'],$row1['longitude'],6371000).'</td>';
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
</body>