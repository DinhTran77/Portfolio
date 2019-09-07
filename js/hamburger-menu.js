
		$(function() {
            $('#menu').slicknav({
              label: "",
              brand: '<a href="#" id="text_logo">Dinh Tran</a>',
              init: function() {
                $bg = $('.slicknav_menu');
            },
            afterOpen: function(){
                $bg.css({'background': '#212529'});
            },
            afterClose: function(){
                $bg.css({'background': 'rgb(151, 151, 151)'});
            }
            });
        });