
// initialize AOS (Automate on Scroll Plugin
	
  AOS.init();	

//Smooth scroll and offset for fixed navbar
// $('a[href^="#"]').on('click', function(event) {

//   var navBarHeight=$('#topnav_area').height();
//   var target = $(this.getAttribute('href'));
//   if( target.length ) {
//       event.preventDefault();
//       $('html, body').stop().animate({
//           scrollTop: target.offset().top-navBarHeight
//       }, 500);
//   }
// });


// Type writter animation
let i = 0;
const txt1 = "Hi, I'm Dinh Tran!"
const txt2= "I translate beautiful designs" ; 
const txt3 = " into clean front-end code.";

 /* The speed/duration of the effect in milliseconds */
let j = 0;
let k=0;
let l=0;
let m=0;
const speed = 50;

const heroText=document.getElementById("hero_text");
const heroGreeting=document.getElementById('hero_greeting');
function typeWriter() 
    {

        if(j<txt1.length)
            {
              heroGreeting.innerHTML += txt1.charAt(j);

            j++;
         
             if(j===(txt1.length))
                {
                  heroGreeting.innerHTML += "<br/>";
                }
                setTimeout(typeWriter, speed);
            }

      
        else if(k<txt2.length)
            {
            heroText.innerHTML += txt2.charAt(k);
            k++;
            if(k===(txt2.length))
            {
            heroText.innerHTML += "<br/>";
            }
            setTimeout(typeWriter, speed);
            }
        
      else  if(l<txt3.length)
          {
          heroText.innerHTML += txt3.charAt(l);
          l++;
          setTimeout(typeWriter, speed);
          }
    }

    setTimeout(function() {
      typeWriter();
    }, 800);

    $(".menu-opener").click(function(){
      $(".menu-opener, .menu-opener-inner, .menu").toggleClass("active");
    });
  

//Handle submit button

const myForm = document.getElementById('contact-form');
myForm.addEventListener("submit", (e)=>{
  e.preventDefault();
  alert('Button pressed');
})
