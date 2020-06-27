// Mobile Navigation

//line

////TABLE SORTING

$(document).ready(function() {
  $('th').each(function(col) {
      $(this).hover(
          function() {
              $(this).addClass('focus');
          },
          function() {
              $(this).removeClass('focus');
          }
      );
      $(this).click(function() {
          if ($(this).is('.asc')) {
              $(this).removeClass('asc');
              $(this).addClass('desc selected');
              sortOrder = -1;
          } else {
              $(this).addClass('asc selected');
              $(this).removeClass('desc');
              sortOrder = 1;
          }
          $(this).siblings().removeClass('asc selected');
          $(this).siblings().removeClass('desc selected');
          var arrData = $('table').find('tbody >tr:has(td)').get();
          arrData.sort(function(a, b) {
              var val1 = $(a).children('td').eq(col).text().toUpperCase();
              var val2 = $(b).children('td').eq(col).text().toUpperCase();
              if ($.isNumeric(val1) && $.isNumeric(val2))
                  return sortOrder == 1 ? val1 - val2 : val2 - val1;
              else
                  return (val1 < val2) ? -sortOrder : (val1 > val2) ? sortOrder : 0;
          });
          $.each(arrData, function(index, row) {
              $('tbody').append(row);
          });
      });
  });
});
///change sorting icon color
$( function() {
  $('th').click( function() {
    $('th').children().css('color', 'darkgreen')
    $(this).children().css('color', 'white')
  } );
} );


////


$(document).ready(function () {
  $(".table td:nth-child(6)").each(function () {
      if (parseInt($(this).text(), 10) > 50 ) {
          $(this).parent("tr").css("background-color", "lightgreen");
      }
      if (parseInt($(this).text(), 10) < 50 ) {
          $(this).parent("tr").css("background-color", "#FFFF99");
      }
      if (parseInt($(this).text(), 10) == 0 ) {
          $(this).parent("tr").css("background-color", "#FFB6C1");
      }
  });
});


////ventilator 

$(document).ready(function () {
    $(".table1 td:nth-child(6)").each(function () {
        if (parseInt($(this).text(), 10) > 15 ) {
            $(this).parent("tr").css("background-color", "lightgreen");
        }
        if (parseInt($(this).text(), 10) < 15 ) {
            $(this).parent("tr").css("background-color", "#FFFF99");
        }
        if (parseInt($(this).text(), 10) == 0 ) {
            $(this).parent("tr").css("background-color", "#FFB6C1");
        }
    });
  });

/// header mobile
$(document).ready(function() {

  // SideNav Button Initialization
  $(".button-collapse").sideNav();
  // SideNav Scrollbar Initialization
  var sideNavScrollbar = document.querySelector('.custom-scrollbar');
  var ps = new PerfectScrollbar(sideNavScrollbar);
})

// get user location

var lon,lat ;

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    // x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
    
    lon = position.coords.latitude;
    lat = position.coords.longitude;
    //prompt(lon,lat);
//   x.innerHTML = "Latitude: " + position.coords.latitude + 
//   "<br>Longitude: " + position.coords.longitude;
}



/// find neaby hospitals 

// function distance(lat1, lon1, lat2, lon2, unit) {
//     var radlat1 = Math.PI * lat1/180
//     var radlat2 = Math.PI * lat2/180
//     var theta = lon1-lon2
//     var radtheta = Math.PI * theta/180
//     var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
//     if (dist > 1) {
//         dist = 1;
//     }
//     dist = Math.acos(dist)
//     dist = dist * 180/Math.PI
//     dist = dist * 60 * 1.1515
//     if (unit=="K") { dist = dist * 1.609344 }
//     if (unit=="N") { dist = dist * 0.8684 }
//     return dist
// }

// var data = [{
//     "code": "0001",
//     "lat": "1.28210155945393",
//     "lng": "103.81722480263163",
//     "location": "Stop 1"
// }, {
//     "code": "0003",
//     "lat": "1.2777380589964",
//     "lng": "103.83749709165197",
//     "location": "Stop 2"
// }, {
//     "code": "0002",
//     "lat": "1.27832046633393",
//     "lng": "103.83762574759974",
//     "location": "Stop 3"
// }];

// var html = "";
// var poslat = lat;
// var poslng = lan;

// for (var i = 0; i < data.length; i++) {
//     // if this location is within 0.1KM of the user, add it to the list
//     if (distance(poslat, poslng, data[i].lat, data[i].lng, "K") <= 0.1) {
//         html += '<p>' + data[i].location + ' - ' + data[i].code + '</p>';
//     }
// }

// $('#nearbystops').append(html);