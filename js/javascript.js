// Initialize SlickNav (Hamburger menu plugin)
	$(function(){
		$('#menu').slicknav(
			{
			'label' : ''
			}
		);
  });
  
// initialize AOS (Automate on Scroll Plugin
	
  AOS.init();	

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


// Type writter animation
var i = 0;
var txt = 'Clean code, so help me God.'; /* The text */


 /* The speed/duration of the effect in milliseconds */
let j = 0;
var speed = 60;

function typeWriter() 
    {

        if(j<txt.length)
            {
            document.getElementById("hero_text").innerHTML += txt.charAt(j);
            j++;
         
            setTimeout(typeWriter, speed);
            }
            if(txt.charAt(j)==='s')
            {
              document.getElementById("hero_text").innerHTML += "<br/>";
            }
    }

    setTimeout(function() {
      typeWriter();
    }, 800);

