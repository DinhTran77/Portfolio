// initialize AOS (Automate on Scroll) Plugin

AOS.init();

let isNormalPage = true;

function changeTheme() {
        if (isNormalPage) {
                $("#menu").removeClass("menu-normal");
                $("#menu").addClass("menu-david");
                $("#homePage-normal").attr("id", "homePage-david");
                isNormalPage = false;
        } else {
                $("#menu").removeClass("menu-david");
                $("#menu").addClass("menu-normal");
                $("#background-normal").addClass("background-fade-in");
                $("#homePage-david").attr("id", "homePage-normal");
                isNormalPage = true;
        }
}

//Form submission

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
