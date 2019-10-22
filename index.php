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
        <script src="./js/main.js" type="text/javascript" defer></script>
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
                    class="container w-screen container_content"
                >
                    <template id="template-row" class="row">
                        <template id="template-col">
                            <div class="col-lg-6 progress-bar-container">
                                <h4
                                    class="skill-name"
                                    data-aos="fade-in"
                                    data-aos-duration="1100"
                                    data-aos-offset="-20"
                                ></h4>
                                <div class="progress-bar">
                                    <div
                                        class="container-progress-percentage"
                                        class="skill-name"
                                        data-aos="fade-in"
                                        data-aos-duration="1100"
                                        data-aos-offset="-20"
                                    >
                                        <div
                                            class="progressPercentage"
                                            data-aos="slide-right"
                                            data-aos="fade-in"
                                            data-aos-duration="1100"
                                            data-aos-offset="-20"
                                        ></div>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </template>
                    <!--end row template -->
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
                    <template id="template_project_row" class="row">
                        <template id="template-col-projects">
                            <div class="col-lg-6">
                                <a href="" class="project_link" target="_blank">
                                    <div class="project-container">
                                        <div class="project_overlay"></div>
                                        <img class="project-image" />
                                        <article class="project-text">
                                            <h4 class="project-name"></h4>
                                            <h5
                                                class="project-description"
                                            ></h5>
                                            <div class="preview_link">
                                                live preview
                                            </div>
                                        </article>
                                    </div>
                                </a>
                            </div>
                        </template>
                    </template>
                </div>
            </article>

            <!------------------ Contact Page-------------------->
            <article id="contactPage" class="my-container">
                <header class="section-title-area">
                    <h2 class="section-heading">Contact</h2>
                    <h3 class="section-subheading">Let's get in touch!</h3>
                </header>

                <!-- <p id="contact-greeting" class="section-subheading">
                    Say hi, and let's work together!
                </p> -->

                <div class="container container_content">
                    <div class="row justify-content-center">
                        <!-- <div class="col-lg-7">
                            <img id='profile-pic' src="./images/team/1.jpg" alt="">
                        </div> -->
                        <div class="col-lg-5">
                            <form
                                id="contact-form"
                                method="POST"
                                action="contactForm.php"
                            >
                                <label for="name" class="form-label "
                                    >Name:*</label
                                >
                                <input
                                    required
                                    type="text"
                                    id="name"
                                    name="name"
                                />

                                <label for="name" class="form-label"
                                    >Email:*</label
                                >
                                <input
                                    required
                                    type="email"
                                    id="email"
                                    name="email"
                                />

                                <label for="name" class="form-label"
                                    >Message:*</label
                                >
                                <!-- <textarea  name="comment"></textarea> -->
                                <textarea required rows="3" cols="22" name="comment"></textarea>
                                <input type="submit" value="Submit" />
                            </form>
                        </div>
                    </div>
                </div>
            </article>

            <footer id="footerPage" class="my-container">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-6 col-md-6">
                            <img
                                id="logoImage_footer"
                                src="./images/logos/Logo_ribbon.svg"
                                alt="Logo"
                            />
                            <span class="slogan">Clean Front-end Code</span>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <section class="copyRight">
                                <span>&copy;Copyright 2019</span>
                                <p>Dinh Tran</p>
                            </section>
                        </div>
                    </div>
                </div>
            </footer>

            <!------------------ Initialize animate on scroll library-------------------->
            <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        </main>
    </body>
</html>
