// initialize AOS (Automate on Scroll) Plugin

AOS.init();

//*************************Type writter animation***********************
let i = 0;
// const txt1 = "Hi, I'm Dinh Tran!";
// const txt2 = "I convert beautiful & complex designs";
// const txt3 = "into clean & maintainable front-end code.";

const txt3 = "Clean front-end code";

/* The speed/duration of the effect in milliseconds */
let j = 0;
let k = 0;
let l = 0;
let m = 0;
const speed = 60;

const heroText = document.getElementById("hero_text");
const heroGreeting = document.getElementById("hero_greeting");
function typeWriter() {
    if (l < txt3.length) {
        heroText.innerHTML += txt3.charAt(l);
        l++;
        setTimeout(typeWriter, speed);
    }
}

setTimeout(function() {
    typeWriter();
}, 800);

$(".menu-opener").click(function() {
    $(".menu-opener, .menu-opener-inner, .menu").toggleClass("active");
});


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

//Fill Skills Template
if (document.createElement("template").content) {
    let skillsArray = [
        { skill_title: "HTML & CSS", percent: "80%", class: "html" },
        { skill_title: "SCSS", percent: "75%", class: "scss" },
        { skill_title: "JS/jQuery", percent: "60%", class: "javascript" },
        { skill_title: "Bootstrap", percent: "55%", class: "bootstrap" },
        {
            skill_title: "Responsive Design",
            percent: "65%",
            class: "responsive-design"
        },
        { skill_title: "REACT", percent: "75%", class: "react" },
        { skill_title: "Jest", percent: "55%", class: "scss" },
        { skill_title: "Typescript", percent: "50%", class: "typescript" },
        { skill_title: "Node", percent: "75%", class: "node" },
        { skill_title: "Express", percent: "50%", class: "express" },
        { skill_title: "Agile", percent: "90%", class: "agile" },
        { skill_title: "Git", percent: "55%", class: "git" },
        {
            skill_title: "Photoshop/Illustrator",
            percent: "85%",
            class: "photoshop"
        }
    ];

    // Get template for row
    let template_row = document.getElementById("template-row");

    // Creat copy of row template
    let clone_row = template_row.content.cloneNode(true);

    //Append row clone to row template
    template_row.parentNode.appendChild(clone_row);

    //get copy of col template
    let template_col = document.getElementById("template-col");

    for (let i = 0; i < skillsArray.length; i++) {
        let skill = skillsArray[i];

        //for each skill make a clone of the template
        let clone_col = template_col.content.cloneNode(true);

        //get the tag insid the clone-col that is called .skill-name
        let skill_name = clone_col.querySelector(".skill-name");
        skill_name.innerHTML = skill.skill_title;

        //get percentage tag
        let percentage = clone_col.querySelector(".progressPercentage");
        percentage.innerHTML += skill.percent;
        percentage.className += " " + skill.class;
        // template_col.parentNode.appendChild(clone_col);

        document.getElementById("template-row").appendChild(clone_col);
        // template_row.appendChild(clone_col);
    }
} else {
    let skillsSection = document.getElementById("progress-bars-section");
    skillsSection.innerHTML +=
        "Sorry, your browser does not support <template> tag";
}

// Projects Section
if (document.createElement("template").content) {
    let projects = [
        {
            link: "https://drum-shed.herokuapp.com/products",
            image_source: "./images/portfolio/ecommerce.PNG",
            name: "React E-Commerce Site",
            description:
                "This is an e-commerce website built with React. It has all the standard e-commerce site features including a shopping cart, pagination and search bar."
        },
        {
            link: "https://drum-shed.herokuapp.com/products",
            image_source: "./images/portfolio/drum-machine.PNG",
            name: "React Drum-Machine",
            description:
                "A React drum machine. It is very similar in concept to a calculate built in React, except there are sound files associated with each button component"
        },
        {
            link: "https://drum-shed.herokuapp.com/products",
            image_source: "./images/portfolio/space-x.png",
            name: "React Space-X API",
            description:
                "This React application uses Axios to retrieve and display data from the Space-X api."
        },
        {
            link: "https://drum-shed.herokuapp.com/products",
            image_source: "./images/portfolio/personal_sight.png",
            name: "Portfolio Site",
            description:
                "I am particularly proud of this personal porfolio website, because I designed it from scratch including the graphic design, HTML, SCSS, animations and Javascript."
        },
        {
            link: "https://drum-shed.herokuapp.com/products",
            image_source: "./images/portfolio/waves.png",
            name: "ResponsiveWebsite",
            description:
                "An HTML and CSS project for a responsive web programming course. It includes reponsive images, videos and iFrames."
        },
        {
            link: "https://drum-shed.herokuapp.com/products",
            image_source: "./images/portfolio/circle_animation.png",
            name: "Javascript Canvas Animation",
            description:
                "A canvas animation that I completed on my own time to sharpen my Javascript skills."
        }
    ];

    // Get template for row
    let template_row = document.getElementById("template_project_row");

    // Creat copy of row template
    let clone_row = template_row.content.cloneNode(true);

    //Append row clone to row template
    template_row.parentNode.appendChild(clone_row);

    //get copy of col template
    let template_col = document.getElementById("template-col-projects");

    for (let j = 0; j < projects.length; j++) {
        let project = projects[j];
        let clone = template_col.content.cloneNode(true);

        let link = clone.querySelector(".project_link");

        link.setAttribute("href", project.link);

        let image_src = clone.querySelector(".project-image");
        image_src.src += project.image_source;

        let project_name = clone.querySelector(".project-name");
        project_name.innerHTML += project.name;

        let project_description = clone.querySelector(".project-description");
        project_description.innerHTML += project.description;

        template_col.parentNode.appendChild(clone_row);
        document.getElementById("template_project_row").appendChild(clone);
    }
} else {
}

// //Handle submit button

// const myForm = document.getElementById("contact-form");
// myForm.addEventListener("submit", e => {
//     e.preventDefault();
//     alert("Button pressed");
// });
