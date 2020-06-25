// Mobile Navigation
if ($('#nav-menu-container').length) {
  var $mobile_nav = $('#nav-menu-container').clone().prop({
    id: 'mobile-nav'
  });
  $mobile_nav.find('> ul').attr({
    'class': '',
    'id': ''
  });
  $('body').append($mobile_nav);
  $('body').prepend('<button type="button" id="mobile-nav-toggle"><i class="fa fa-bars"></i></button>');
  $('body').append('<div id="mobile-body-overly"></div>');
  $('#mobile-nav').find('.menu-has-children').prepend('<i class="fa fa-chevron-down"></i>');

  $(document).on('click', '.menu-has-children i', function (e) {
    $(this).next().toggleClass('menu-item-active');
    $(this).nextAll('ul').eq(0).slideToggle();
    $(this).toggleClass("fa-chevron-up fa-chevron-down");
  });

  $(document).on('click', '#mobile-nav-toggle', function (e) {
    $('body').toggleClass('mobile-nav-active');
    $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
    $('#mobile-body-overly').toggle();
  });

  $(document).click(function (e) {
    var container = $("#mobile-nav, #mobile-nav-toggle");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
      if ($('body').hasClass('mobile-nav-active')) {
        $('body').removeClass('mobile-nav-active');
        $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
        $('#mobile-body-overly').fadeOut();
      }
    }
  });
} else if ($("#mobile-nav, #mobile-nav-toggle").length) {
  $("#mobile-nav, #mobile-nav-toggle").hide();
}

// Smooth scroll for the menu and links with .scrollto classes
$('.nav-menu a, #mobile-nav a, .scrollto').on('click', function () {
  if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
    var target = $(this.hash);
    if (target.length) {
      var top_space = 0;

      if ($('#header').length) {
        top_space = $('#header').outerHeight();

        if (!$('#header').hasClass('header-fixed')) {
          top_space = top_space - 20;
        }
      }

      $('html, body').animate({
        scrollTop: target.offset().top - top_space
      }, 1500, 'easeInOutExpo');

      if ($(this).parents('.nav-menu').length) {
        $('.nav-menu .menu-active').removeClass('menu-active');
        $(this).closest('li').addClass('menu-active');
      }

      if ($('body').hasClass('mobile-nav-active')) {
        $('body').removeClass('mobile-nav-active');
        $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
        $('#mobile-body-overly').fadeOut();
      }
      return false;
    }
  }
});
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
  $(".table td:nth-child(4)").each(function () {
      if (parseInt($(this).text(), 10) > 50 ) {
          $(this).parent("tr").css("background-color", "lightgreen");
      }
      if (parseInt($(this).text(), 10) < 50 ) {
          $(this).parent("tr").css("background-color", "#FFFF99");
      }
      if (parseInt($(this).text(), 10) == 0 ) {
          $(this).parent("tr").css("background-color", "red");
      }
  });
});