        
        function myFunction() {
            var myLinks = document.getElementById("myLinks");
            var hamburger=document.getElementById("hamburger-icon");
            var navigationLinks=document.getElementById('navigation-links');
            var hamburger_font=document.getElementById('hamburger_font');

            if (myLinks.style.display === "flex") {//when hamburger is closed
              myLinks.style.display = "none";
              navigationLinks.style.flexGrow = "1";
              hamburger.style.flexGrow='1';
              navigationLinks.style.flexBasis = "0";
              navigationLinks.style.backgroundColor='transparent'

              hamburger_font.style.paddingRight='25px';
              // navigationLinks.style.justifyContent='none';

            } else { //when hamburger is expanded
              myLinks.style.display = "flex";
              hamburger.style.flexGrow = "0";
              navigationLinks.style.flexGrow = "1";
              navigationLinks.style.justifyContent='flex-end';
              navigationLinks.style.backgroundColor='grey'
              // hamburger_font.style.padding='5px';
            }
          } 