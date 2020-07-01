<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get lon lat</title>
</head>

<body>
    <!-- <input type="text" id="addr">
    <button onclick=getLonLat()>click</button>
    <p id = "lon"></p>
    <p id = "lat"></p> -->
    
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script>
	function getLonLat() {
         var addrs = document.getElementById("addr").value;
		var settings = {
			"async": true,
			"crossDomain": true,
			"url": "https://us1.locationiq.com/v1/search.php?key=1d3d1d3cfb474b&q=" + addrs + "&format=json",
			"method": "GET"
		}
		var lon
		var lat
		$.ajax(settings).done(function (response) {
			 lon = response[0].lon
             lat = response[0].lat
             console.log(lon,lat)
             document.getElementById("lon").value = lon;
            document.getElementById("lat").value = lat;
		});
        
    }
  
</script>
</html>