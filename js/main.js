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


/// header mobile
$(document).ready(function() {

  // SideNav Button Initialization
  $(".button-collapse").sideNav();
  // SideNav Scrollbar Initialization
  var sideNavScrollbar = document.querySelector('.custom-scrollbar');
  var ps = new PerfectScrollbar(sideNavScrollbar);
})