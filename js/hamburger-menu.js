
		$(function() {
            $('#menu').slicknav({
              label: "",
              brand: '<a href="#" id="text_logo">Dinh Tran</a>',
              closeOnClick:'true',
              init: function() {
                $bg = $('.slicknav_menu');
            },
            afterOpen: function(){
                $bg.css({'background': '#212529'});
            },
            afterClose: function(){
                $bg.css({'background': 'transparent'});
            }
            });
        });