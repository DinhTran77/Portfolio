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

    console.log("url: " + url + "method: " + type);
    console.log(data);

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

const text = "Clean front-end code";
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

// $(".menu-opener").click(function() {
//     $(".menu-opener, .menu-opener-inner, .menu").toggleClass("active");
// });

//*************************Change URL on Scroll***********************

// let skillsPage = $("#skillsPage");
// skillsPage.waypoint(function() {
//     window.history.pushState("object or string", "Title", "/skills");
// });

// let homePage = $("#nav-bar");
// homePage.waypoint(function() {
//     window.history.pushState("object or string", "Title", "/home");
// });

// let portfolioPage = $("#portfolioPage");
// portfolioPage.waypoint(function() {
//     window.history.pushState("object or string", "Title", "/portfolio");
// });

// let contactPage = $("#contactPage");
// contactPage.waypoint(function() {
//     window.history.pushState("object or string", "Title", "/contact");
// });

// //Handle submit button

// const myForm = document.getElementById("contact-form");
// myForm.addEventListener("submit", e => {
//     e.preventDefault();
//     alert("Button pressed");
// });
