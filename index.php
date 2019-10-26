<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta name="description" content="Dinh Porfolio" />
        <meta
            name="keywords"
            content="Dinh Porfolio Web-developer Front-end react"
        />
        <meta name="author" content="Dinh Tran" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Dinh's Portfolio</title>

        <!--Fonts-->
        <link
            href="https://fonts.googleapis.com/css?family=Montserrat:400,700"
            rel="stylesheet"
            type="text/css"
        />
        <link
            href="https://fonts.googleapis.com/css?family=Kaushan+Script"
            rel="stylesheet"
            type="text/css"
        />
        <link
            href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic"
            rel="stylesheet"
            type="text/css"
        />
        <link
            href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700"
            rel="stylesheet"
            type="text/css"
        />
        <link
            href="https://fonts.googleapis.com/css?family=Montserrat&display=swap"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css?family=Special+Elite&display=swap"
            rel="stylesheet"
        />

        <!-- FontAwesome -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        />

        <!-- jQuery -->
        <script
            src="https://code.jquery.com/jquery-2.2.4.js"
            integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
            crossorigin="anonymous"
        ></script>

        <!-- Waypoints Library -->
        <script src="./js/jquery.waypoints.min.js"></script>

        <!-- Animate on scroll library -->
        <link rel="stylesheet" href="./css/aos.css" />

        <!-- Slick Nav -->
        <!-- <link rel="stylesheet" href='./css/slicknav.css'> -->
        <!-- <script src='./js/jquery.slicknav.min.js' type="text/javascript"></script> -->

        <!-- Javascript -->
        <script src="./main.js" type="text/javascript" defer></script>
        <script
            src="./js/hamburger_menu.js"
            type="text/javascript"
            defer
        ></script>
        <link rel="stylesheet" href="./font-awesome/css/all.min.css" />

        <!-- Custom Styles -->
        <link rel="stylesheet" href="./scss/main.css" />

        <!-- Bootstrap -->
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous"
        />

        <!-- Mustache and Cycle2 -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/2.1.6/core/jquery.cycle2.autoheight.min.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/3.1.0/mustache.min.js"></script>
    </head>

    <body id="container-page">
        <main>
            <!------------------ Header Section -------------------->
            <header id="header-main">
                <div class="my-container">
                    <nav id="nav-bar">
                        <ul id="menu" class="menuClosed slide-in">
                            <li><a href="#skillsPage">Skills</a></li>
                            <li><div class="diamond"></div></li>
                            <li><a href="#portfolioPage">Portfolio</a></li>
                            <li><div class="diamond"></div></li>
                            <li><a href="#contactPage">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </header>

            <!------------------ Home page -------------------->
            <article id="homePage">
                <div id="container_logo">
                    <img
                        id="logoImage"
                        src="./images/logos/Logo_ribbon.svg"
                        alt="Logo"
                    />
                    <section id="hero_message">
                        <span id="hero_greeting"></span>
                        <span id="hero_text"></span>
                        <span id="cursor"></span>
                    </section>
                </div>
            </article>



            <!------------------ Skills Page-------------------->
            <article id="skillsPage" class="my-container">
                <header class="section-title-area">
                    <h2 class="section-heading">Skills</h2>
                    <h3 class="section-subheading">Front-end skills</h3>
                </header>

                <div
                    id="progress-bars-section"
                    class="container_content container"
                >
                    <div id="skill" class="row">
                        <!-- Template for skills section -->
                        <script id="skills_template" type="text/template">
                            {{#skills}}
                                <div class="col-lg-4 progress-bar-container">
                                        <h4
                                        class="skill-name"
                                        data-aos="fade-in"
                                        data-aos-duration="1100"
                                        data-aos-offset="-20"
                                    >{{skill_title}}</h4>

                                    <div class="progress-bar">
                                            <div
                                                class="container-progress-percentage"
                                                data-aos="fade-in"
                                                data-aos-duration="1100"
                                                data-aos-offset="-20"
                                            >
                                                <div
                                                    class="progressPercentage {{class}}"
                                                    data-aos="slide-right"
                                                    data-aos="fade-in"
                                                    data-aos-duration="1100"
                                                    data-aos-offset="-20"
                                                >
                                                {{percent}}
                                            </div>
                                            </div>
                                        </div>
                                </div>
                            {{/skills}}
                        </script>

                        <script type="text/javascript">
                            $(function() {
                                $.getJSON("skills.json", function(data) {
                                    var template = $("#skills_template").html();
                                    var html = Mustache.to_html(template, data);
                                    $("#skill").html(html);
                                });
                            });
                        </script>
                    </div>
                </div>
                <!--end progress bars section  -->
            </article>

            <!------------------ Portfolio Page-------------------->
            <article id="portfolioPage" class="my-container">
                <header class="section-title-area">
                    <h2 class="section-heading light">Portfolio</h2>
                    <h3 class="section-subheading light">Work I'm proud of</h3>
                </header>
                <div id="projects" class="container_content container">
                    <div id="project" class="row">
                        <script id="portfolio_template" type="text/template">
                            {{#projects}}
                                <div class="col-lg-4 progress-bar-container">

                                        <a
                                        href="{{link}}"
                                        class="project_link"
                                        target="_blank"
                                    >
                                        <div class="project-container">
                                            <div class="project_overlay"></div>
                                            <img src='{{image_source}}' class="project-image" />
                                            <article class="project-text">
                                                <h4 class="project-name">{{name}}</h4>
                                                <h5
                                                    class="project-description"
                                                >{{description}}
                                                {{#items}}
                                                    <ul >
                                                        {{#name}}
                                                        <li >{{.}}</li>
                                                        {{/name}}
                                                    </ul>
                                                    {{/items}}


                                                </h5>
                                                <div class="preview_link">
                                                    live preview
                                                </div>
                                            </article>
                                        </div>
                                    </a>
                                </div>
                            {{/projects}}
                        </script>

                        <script type="text/javascript">
                            $(function() {
                                $.getJSON("projects.json", function(data) {
                                    var template = $(
                                        "#portfolio_template"
                                    ).html();
                                    var html = Mustache.to_html(template, data);
                                    $("#project").html(html);
                                });
                            });
                        </script>
                    </div>
                </div>
            </article>

            <!------------------ Contact Page-------------------->
            <article id="contactPage" class="my-container">
                <header class="section-title-area">
                    <h2 class="section-heading">Contact</h2>
                    <h3 class="section-subheading">Let's get in touch!</h3>
                </header>

                <div class="container container_content">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <p id="sucess_message">sss</p>
                            <form
                                action="contact.php"
                                method="post"
                                class="ajax"
                            >
                                <input
                                    required
                                    type="text"
                                    id="name"
                                    name="name"
                                    placeholder="Name:*"
                                    value="Dinh"
                                />

                                <input
                                    required
                                    type="email"
                                    id="email"
                                    name="email"
                                    placeholder="email"
                                    value="dinhtran77@hotmail.com"
                                />
                                <!-- <textarea  name="comment"></textarea> -->
                                <textarea
                                    required
                                    rows="3"
                                    cols="22"
                                    name="comment"
                                    id="comment"
                                    placeholder="message:*"
                                >This is a message from Dinh
                                </textarea>
                                <input type="submit" value="Submit" />
                            </form>
                        </div>
                    </div>
                </div>
            </article>

            <footer id="footerPage" class="my-container">

                            <img
                                id="logoImage_footer"
                                src="./images/logos/Logo_ribbon.svg"
                                alt="Logo"
                            />
                                <span class='copyRight'>&copy;Copyright 2019. &nbsp;DINH TRAN</span>
                            <!-- <span class="slogan">Clean Front-end Code</span> -->
            </footer>

            <!------------------ Initialize animate on scroll library-------------------->
            <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        </main>
    </body>
</html>
