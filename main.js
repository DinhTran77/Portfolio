// initialize AOS (Automate on Scroll) Plugin

AOS.init();

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
        }
    });
    return false;
});

//*************************Type writter animation***********************

const text = "Clean & maintainable front-end code";
const speed = 60;
const heroText = document.getElementById("hero_text");
const heroGreeting = document.getElementById("hero_greeting");

let l = 0;
function typeWriter() {
    if (l < text.length) {
        heroText.innerHTML += text.charAt(l);
        l++;
        setTimeout(typeWriter, speed);
    }
}

setTimeout(function() {
    typeWriter();
}, 800);
