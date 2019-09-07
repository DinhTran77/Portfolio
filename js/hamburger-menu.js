
		$(function() {
            $('#menu').slicknav({
              label: ""
              ,brand: '<a href="#" id="logo">Dinh Tran</a>',
              init: function() {
                $bg = $('.slicknav_menu');
            },
            afterOpen: function(){
                $bg.css({'background': 'transparent'});
            },
            afterClose: function(){
                $bg.css({'background': 'transparent'});
            }
            });
        });