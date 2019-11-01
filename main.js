//************initialize AOS (Automate on Scroll) Plugin
AOS.init();

// Fade-in Nav bar on scroll
// $(document).ready(function() {
//         $(window).scroll(function() {
//                 if ($(this).scrollTop() > 100) {
//                         // $("#nav-bar").css("background-color", "black");
//                         $("#nav-bar").removeClass("nav-fade-out-desktop");
//                         $("#nav-bar").addClass("nav-fade-in-desktop");
//                 } else {
//                         $("#nav-bar").removeClass("nav-fade-in-desktop");
//                         $("#nav-bar").addClass("nav-fade-out-desktop");
//                         // $("#nav-bar").css("background-color", "transparent");
//                 }
//         });
// });

//Contact Form submission
$("form.ajax").on("submit", function() {
        let url = $(this).attr("action");
        let type = $(this).attr("method");

        let name = $("#name").val();
        let email = $("#email").val();
        let message = $("#comment").val();
        let data = {
                name: name,
                email: email,
                message: message
        };

        $.ajax({
                url: url,
                type: type,
                data: data,
                success: function(response) {
                        $("#sucess_message").html(response);
                        $("#sucess_message").css("display", "inline-block");
                }
        });
        return false;
});

//*************************Type writter animation***********************

const text = "Clean & maintainable front-end code";
const speed = 60;
const heroText = document.getElementsByClassName("hero_text");
const heroGreeting = document.getElementsByClassName("hero_greeting");

let l = 0;
function typeWriter() {
        if (l < text.length) {
                heroText[0].innerHTML += text.charAt(l);
                l++;
                setTimeout(typeWriter, speed);
        }
}

setTimeout(function() {
        typeWriter();
}, 800);
