//************initialize AOS (Automate on Scroll) Plugin
AOS.init();

//script to fill skills templates
$(function() {
    $.getJSON("skills.json", function(data) {
        var template = $("#skills_template").html();
        var html = Mustache.to_html(template, data);
        $("#skill").html(html);
    });
});

//script to fill portfolio templates
$(function() {
    $.getJSON("projects.json", function(data) {
        var template = $("#portfolio_template").html();
        var html = Mustache.to_html(template, data);
        $("#project").html(html);
    });
});

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
const heroText = document.getElementsByClassName("hero-text");
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
