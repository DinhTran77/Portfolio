let isMenuOpen=closed;

function toggleMenu()
        {
                isMenuOpen=!isMenuOpen;        
                
                if (isMenuOpen===true) //Menu is open
                        {
                        $("#menu").css("visibility", "visible"); 
                        $("#menu").removeClass('slide-out');  
                        $("#menu").addClass('slide-in');

                        $("#line1").removeClass('out_top_line');
                        $("#line3").removeClass('out_bottom_line');
                        $("#line2").removeClass('out_middle_line');

                        $("#line1").addClass('in_top_line');
                        $("#line3").addClass('in_bottom_line');
                        $("#line2").addClass('in_middle_line');
                        // $('#hamburger-icon i').removeClass('fas fa-bars');
                        // $('#hamburger-icon i').addClass('fas fa-times');
                        }
                else //Menu is closed
                        {
                        $("#menu").removeClass('slide-in');   
                        $("#menu").addClass('slide-out');  

                        $("#line1").removeClass('in_top_line');
                        $("#line3").removeClass('in_bottom_line');
                        $("#line2").removeClass('in_middle_line');
                        
                        $("#line1").addClass('out_top_line');
                        $("#line3").addClass('out_bottom_line');
                        $("#line2").addClass('out_middle_line');

                        // $('#hamburger-icon i').removeClass('fas fa-times');
                        // $('#hamburger-icon i').addClass('fas fa-bars');
                        }     
        }

