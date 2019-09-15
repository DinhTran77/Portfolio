

//Smooth scroll and offset for fixed navbar
$('a[href^="#"]').on('click', function(event) {

  var navBarHeight=$('#topnav_area').height();
  var target = $(this.getAttribute('href'));
  if( target.length ) {
      event.preventDefault();
      $('html, body').stop().animate({
          scrollTop: target.offset().top-navBarHeight
      }, 500);
  }
});