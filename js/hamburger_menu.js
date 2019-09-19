let isMenuOpen=closed;

function toggleMenu()
        {
                isMenuOpen=!isMenuOpen;        
                
                if (isMenuOpen===true) //Menu is open
                        {
                        $("#menu").css("visibility", "visible"); 
                        $("#menu").removeClass('slide-out');  
                        $("#menu").addClass('slide-in');

                        $('#hamburger-icon i').removeClass('fas fa-bars');
                        $('#hamburger-icon i').addClass('fas fa-times');
                        }
                else //Menu is closed
                        {
                        $("#menu").removeClass('slide-in');   
                        $("#menu").addClass('slide-out');  

                        $('#hamburger-icon i').removeClass('fas fa-times');
                        $('#hamburger-icon i').addClass('fas fa-bars');
                        }     
        }

