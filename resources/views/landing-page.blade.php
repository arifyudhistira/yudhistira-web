<!doctype html>
<html lang="zxx">
<head>

    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content=""/>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Title -->
    <title>Play as Developer!</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets')}}/assets/images/favicon.ico">

    <!-- Css Libraries -->
    <link rel="stylesheet" href="{{asset('assets')}}/vendor/bootstrap-4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendor/fontawesome-free-5.13.0/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendor/fontawesome-free-5.13.0/css/brands.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendor/fontawesome-free-5.13.0/css/solid.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendor//themify-icons/themify-icons.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendor//animate/animate.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendor//animated-headline-master/css/style.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendor//pagepiling/jquery.pagepiling.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendor//featherlight-1.7.13/featherlight.min.css">

    <!-- Main Css -->
    <link rel="stylesheet" href="{{asset('assets')}}/assets/css/style.css">

</head>
<body>

<!-- Preloader -->
<div class="preloader">
    <img src="{{asset('assets')}}/assets/images/loading.gif" alt="preloader" />
</div>
<!-- End Preloader -->

<!-- Main Content -->
<main class="row m-0">

    <!-- Left Side -->
    <div class="col-xl-6 col-lg-12 left-side p-0">

        <!-- Background Image -->
        <div class="bg-img">
            <img src="{{asset('assets')}}/assets/images/person/5.jpg" alt="image name">
        </div>
        <!-- End Background Image -->

        <!-- Logo -->
        <div class="logo">

            <!-- Toggle Menu Button -->
            <div class="toggle-menu">
                <span class="top-line"></span>
                <span class="bottom-line"></span>
            </div>
            <!-- End Toggle Menu Button -->

            <img src="{{asset('assets')}}/assets/images/logo-1.png" alt="Viola"/>
        </div>
        <!-- End Logo -->

        <!-- Nav -->
        <nav>

            <!-- Menu Items Section -->
            <ul class="menu-items">
                <li class="nav-item active" data-menuanchor="home">
                    <a href="#home" class="nav-link anchor" data-img="{{asset('assets')}}/assets/images/person/5.jpg">HOME</a>
                </li>
                <li class="nav-item" data-menuanchor="about">
                    <a href="#about" class="nav-link anchor" data-img="{{asset('assets')}}/assets/images/person/1.jpg">BIO</a>
                </li>
                <li class="nav-item" data-menuanchor="services">
                    <a href="#services" class="nav-link anchor" data-img="{{asset('assets')}}/assets/images/person/2.jpg">SERVICES</a>
                </li>
                <li class="nav-item" data-menuanchor="portfolio">
                    <a href="#portfolio" class="nav-link anchor" data-img="{{asset('assets')}}/assets/images/person/3.jpg">PORTFOLIO</a>
                </li>
                <li class="nav-item" data-menuanchor="contact">
                    <a href="#contact" class="nav-link anchor" data-img="{{asset('assets')}}/assets/images/person/4.jpg">CONTACT</a>
                </li>
            </ul>
            <!-- End Menu Items Section -->

            <!-- Socials Section -->
            <div class="socials">
                <ul>
                    <li><a href="https://twitter.com/arifydhstira" class="fab fa-twitter twitter"></a></li>
                    <!-- <li><a href="#" class="fab fa-dribbble dribbble"></a></li> -->
                    <li><a href="https://instagram.com/arifyudhistira" class="fab fa-instagram instagram"></a></li>
                    <li><a href="https://www.linkedin.com/in/arifyudhistira/" class="fab fa-linkedin-in linkedin"></a></li>
                </ul>
            </div>
            <!-- End Socials Section -->

            <!-- Sections Title -->
            <div class="sections-title">
                <div class="home-title">HOME</a></div>
                <div class="about-title">BIOGRAPHY</div>
                <div class="services-title">SERVICE</div>
                <div class="portfolio-title">PORTFOLIO</div>
                <div class="contact-title">GET IN TOUCH</div>
            </div>
            <!-- End Sections Title -->

        </nav>
        <!-- End Nav -->

    </div>
    <!-- End Left Side -->

    <!-- Right Side -->
    <div class="offset-xl-6 col-xl-6 col-lg-12 right-side pr-0 pl-0">

        <!-- Pagepiling -->
        <div id="pagepiling">

            <!-- Home Section -->
            <section id="home" class="section pp-scrollable">

                <!-- Introduce -->
                <div class="introduce">

                    <!-- Intro Rotation -->
                    <section class="intro-rotation animate-custom">
                        <p class="cd-headline zoom">
                            <span class="cd-words-wrapper">
                                <b class="is-visible">Hello! I am</b>
                                <b>Web Developer</b>
                                <b>Flutter Developer</b>
                                <b>UI / UX Analyst</b>
                            </span>
                        </p>
                    </section>
                    <!-- End Intro Rotation -->

                    <!-- Name -->
                    <h1 class="name animate-custom">Arif <strong>Yudhistira</strong></h1>
                    <!-- End Name -->

                    <!-- Description -->
                    <div class="desc animate-custom">
                        <p>
                            I'm 23-year-old fresh graduate IT student and I do <span style="font-weight: 700;">things</span>.
                        </p>
                    </div>
                    <!-- End Description -->

                    <!-- Buttons -->
                    <div class="buttons">
                        <a href="{{asset('assets')}}/assets/file/resume.pdf" target="_blank" class="download-button animate-custom" download>DOWNLOAD CV</a>
                        <a href="#contact" class="contact-button animate-custom">CONTACT ME</a>
                    </div>
                    <!-- End Buttons -->

                    <!-- Signature -->
                    <!-- <div class="signature animate-custom">
                        <img src="{{asset('assets')}}/assets/images/signature.png" alt="signature">
                    </div> -->
                    <!-- End Signature -->

                    <!-- Go To Bio Button -->
                    <!-- <div class="btn-goto-container animate-custom">
                        <ul class="menu-items">
                            <li class="nav-item" data-menuanchor="about">
                                <a href="#about" class="btn-goto-bg nav-link anchor">
                                    <span class="goto-circle"></span>
                                </a>
                            </li>
                        </ul>
                    </div> -->
                    <!-- End Go To Bio Button -->

                </div>
                <!-- End Introduce -->

            </section>
            <!-- End Home Section -->

            <!-- About Section -->
            <section id="about" class="section pp-scrollable">

                <!-- Biography -->
                <h2 class="section-title bio-title animate-custom">
                    <span>My </span>Biography
                </h2>
                <div class="container desc">
                    <div class="row">
                        <div class="col-xl-12 pl-0 pr-0 pr-xl-5 top-text animate-custom">
                            <p>
                                I am a fresh graduate from bachelor of Information System in Airlangga
                                University. Has 1-year experience in programming especially in Web
                                (Laravel) and Mobile Apps (Flutter) development also Augmented
                                Reality experience.
                            </p>
                        </div>
                        <div class="col-xl-6 col-lg-12 pl-0 pr-0 pr-xl-5 left-text animate-custom">
                            <p>
                                I am highly motivated to learn more about
                                programming experience also in terms of providing client needs
                            </p>
                        </div>
                        <div class="col-xl-6 col-lg-12 pr-0 pl-0 pl-xl-5">
                            <ul class="info-list">
                                <li class="animate-custom">
                                    <span class="title">Name: </span>
                                    <span class="value">M Arif Yudhistira Miftahurrizki</span>
                                </li>
                                <li class="text-custom animate-custom">
                                    <span class="title">Role: </span>
                                    <span class="value">Developer, Designer, Analyst</span>
                                </li>
                                <li class="animate-custom">
                                    <span class="title">Email: </span>
                                    <span class="value">arif.yudhistira@gmail.com</span>
                                </li>
                                <li class="animate-custom">
                                    <span class="title">Phone: </span>
                                    <span class="value">+6281334243154</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Biography -->

                <!-- Experience -->
                <h2 class="section-title experience-title animate-custom">Experience</h2>
                <div class="container experience">
                    <div class="row flex-column">
                        <!-- <p class="date pl-0 animate-custom">1999 - 2020</p> -->
                        <div class="experience-item current animate-custom">
                            <h3 class="title">Android</h3>
                            <!-- <span class="date">2017 - present</span> -->
                            <p class="desc">
                            Developing an Android mobile applications for BUMDes Rengel
                            on Tuban,East Java.
                            </p>
                            <br>
                            <p class="desc">
                            Developing an Android mobile applications for thesis guidance
                            on Information System majors in Airlangga University
                            </p>
                            <br>
                            <p class="desc">
                            Developing an Android mobile applications for indicate Covid 19
                            refferal hospital on East Java with Augmented Reality experience
                            </p>
                            <br>
                            <p class="desc">
                            Staff Internship at the Directorate of Information Systems and
                            Digitization, Universitas Airlangga as an app front-end developer.
                             </p>
                            
                        </div>
                        <div class="experience-item animate-custom">
                            <h3 class="title">Augmented Reality Experience</h3>
                            <!-- <span class="date">2010 - 2017</span> -->
                            <p class="desc">
                                Developing an Android mobile applications to exhibit museum
                                objects with Augmented Reality experience on Faculty of Art and
                                Culture of Airlangga University museum.
                            </p>
                            <br>
                            <p class="desc">
                                Participate as Augmented Reality team on Forum Group
                                Discussion hosted by Department of Culture and Tourism of East
                                Java.
                            </p>
                        </div>
                        <div class="experience-item animate-custom">
                            <h3 class="title">Website</h3>
                            <!-- <span class="date">2005 - 2010</span> -->               
                            <p class="desc">
                                Developing Fundraising website for Yayasan Airlangga Bhakti Lestari
                            </p>
                            <p class="desc">
                                Participate in the Airlangga University study program website
                                redesign competition as a front-end programmer.
                            </p>
                            <br>
                            <p class="desc">
                                Staff Internship at the Directorate of Information Systems and
                                Digitization, Universitas Airlangga as a web back-end developer.

                            </p>
                        </div>
                        <!-- <div class="experience-item animate-custom">
                            <h3 class="title">Junior web designer</h3>
                            <span class="date">1999 - 2005</span>
                            <p class="desc">
                                Designed, developed, and modified research experiments
                                alongside teams of researchers.
                            </p>
                        </div> -->
                    </div>
                </div>
                <!-- End Experience -->

                <!-- Skill -->
                <h2 class="section-title skill-title animate-custom"><span>What </span>do I do</h2>
                <div class="container skill animate-custom">
                    <div class="row">
                        <div class="col-xl-6 skill-item">
                            <div class="skill-item-wrap">
                                <div class="skill-info">
                                    <h4 class="title">UI/UX</h4>
                                    <span class="percent">78%</span>
                                </div>
                                <div class="skill-progress-bar">
                                    <div class="progress-percent" data-value="78%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 skill-item">
                            <div class="skill-item-wrap">
                                <div class="skill-info">
                                    <h4 class="title">Flutter Framework</h4>
                                    <span class="percent">80%</span>
                                </div>
                                <div class="skill-progress-bar">
                                    <div class="progress-percent" data-value="80%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 skill-item">
                            <div class="skill-item-wrap">
                                <div class="skill-info">
                                    <h4 class="title">Laravel Framework</h4>
                                    <span class="percent">92%</span>
                                </div>
                                <div class="skill-progress-bar">
                                    <div class="progress-percent" data-value="92%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 skill-item">
                            <div class="skill-item-wrap">
                                <div class="skill-info">
                                    <h4 class="title">AR Experience</h4>
                                    <span class="percent">70%</span>
                                </div>
                                <div class="skill-progress-bar">
                                    <div class="progress-percent" data-value="70%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Skill -->

                <!-- Rewards -->
                <h2 class="section-title reward-title animate-custom"><span>My </span>Rewards</h2>
                <p class="animate-custom">In publishing and graphic design, Lorem ipsum is a placeholder</p>
                <div class="reward-items clearfix animate-custom">
                    <div class="reward-item">
                        <p>Get silver on iMIT SIC 2021 held by Universiti Teknologi Mara</p> 
                    </div>
                    <div class="reward-item">
                        <p>Get bronze on MSU iRex 11th Edition held by Management and Science University</p>
                    </div>
                </div>
                <!-- End Rewards -->

            </section>
            <!-- End About Section -->

            <!-- Services Section -->
            <section id="services" class="section pp-scrollable">
                <h2 class="section-title d-xl-none">Service</h2>

                <!-- Service Items -->
                <div class="row">

                    <!-- Service Item -->
                    <div class="col-md-6 service-item">
                        <div class="service-item-wrap">
                            <i class="ti-mobile"></i>
                            <h3>Flutter Application Development</h3>
                            <p>One of my services Flutter application development cause i love Flutter!</p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <!-- Service Item -->
                    <div class="col-md-6 service-item">
                        <div class="service-item-wrap">
                            <i class="ti-world"></i>
                            <h3>Website Development</h3>
                            <p>I do websites too. especially with Laravel Framework</p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <!-- Service Item -->
                    <div class="col-md-6 service-item">
                        <div class="service-item-wrap">
                            <i class="ti-notepad"></i>
                            <h3>UI / UX Analyst</h3>
                            <p>I love and i think i have good taste of UI and UX Design</p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <!-- Service Item -->
                    <div class="col-md-6 service-item">
                        <div class="service-item-wrap">
                            <i class="ti-star"></i>
                            <h3>Runaway and Fashion Model</h3>
                            <p>I do modelling too. hahaha</p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                   

                </div>
                <!-- End Service Items -->

            </section>
            <!-- End Services Section -->

            <!-- Portfolio Section -->
            <section id="portfolio" class="section pp-scrollable">
                <h2 class="section-title d-xl-none">Portfolio</h2>

                <!-- Portfolio Filter -->
                <div class="portfolio-filter animate-custom">

                    <ul class="list">

                        <!-- Filter Category Item -->
                        <li class="active mb-4 mb-lg-0" data-filter="*"></li>
                        <!-- End Filter Category Item -->

                        <!-- Filter Category Item -->
                        <li class="mb-4 mb-lg-0" data-filter=".images"></li>
                        <!-- End Filter Category Item -->

                        <!-- Filter Category Item -->
                        <li class="mb-4 mb-lg-0" data-filter=".motions"></li>
                        <!-- End Filter Category Item -->

                    </ul>

                </div>
                <!-- End Portfolio Filter -->


                <!-- Portfolio Items -->
                <div class="portfolio-items animate-custom">

                    <!-- Portfolio Item -->
                    <a href="#" class="portfolio-item motions" data-featherlight="#portfolio_details">
                        <div class="portfolio-item-wrap">
                            <img src="{{asset('assets')}}/assets/images/portfolio/1.jpg" alt="portfolio title"/>
                            <div class="desc">
                                <p>Gallery</p>
                                <h4>Fruits Images</h4>
                            </div>
                        </div>
                    </a>
                    <!-- End Portfolio Item -->

                    <!-- Portfolio Item -->
                    <a href="{{asset('assets')}}/assets/images/portfolio/2.jpg" class="portfolio-item images" data-featherlight="image">
                        <div class="portfolio-item-wrap">
                            <img src="{{asset('assets')}}/assets/images/portfolio/2.jpg" alt="portfolio title"/>
                            <div class="desc">
                                <p>Gallery</p>
                                <h4>Fruits Images</h4>
                            </div>
                        </div>
                    </a>
                    <!-- End Portfolio Item -->

                    <!-- Portfolio Item -->
                    <a href="{{asset('assets')}}/assets/images/portfolio/3.jpg" class="portfolio-item images" data-featherlight="image">
                        <div class="portfolio-item-wrap">
                            <img src="{{asset('assets')}}/assets/images/portfolio/3.jpg" alt="portfolio title"/>
                            <div class="desc">
                                <p>Gallery</p>
                                <h4>Fruits Images</h4>
                            </div>
                        </div>
                    </a>
                    <!-- End Portfolio Item -->

                </div>
                <!-- End Portfolio Items -->

                <!-- Portfolio Modal -->
                <div class="portfolio-modal" id="portfolio_details">
                    <div class="content-wrap">
                        <div class="content-image">
                            <img src="{{asset('assets')}}/assets/images/portfolio/1.jpg" alt="portfolio title">
                        </div>
                        <div class="content-body">
                            <p>Gallery</p>
                            <h4>Fruits Images</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi dicta dolores et in!</p>
                        </div>
                    </div>
                </div>
                <!-- End Portfolio Modal -->

            </section>
            <!-- End Portfolio Section -->

            <!-- Contact Section -->
            <section id="contact" class="section pp-scrollable">
                <h2 class="section-title d-xl-none">Contact</h2>

                <!-- Contact Info -->
                <div class="row contact-info">

                    <!-- Phone -->
                    <div class="col-xl-6 col-lg-12 d-flex align-items-center mb-3 mb-xl-0 contact-info-phone animate-custom">
                        <i class="ti-mobile"></i>
                        <div class="info">
                            <p class="title">Phone</p>
                            <a href="tel:+6281334243154">+6281334243154</a>
                        </div>
                    </div>
                    <!-- End Phone -->

                    <!-- Email -->
                    <div class="col-xl-6 col-lg-12 d-flex align-items-center mb-3 mb-xl-0 contact-info-email animate-custom">
                        <i class="ti-email"></i>
                        <div class="info">
                            <p class="title">E-Mail</p>
                            <a href="mailto:arif.yudhistira@gmail.com">arif.yudhistira@gmail.com</a>
                        </div>
                    </div>
                    <!-- End Email -->

                    <!-- Address -->
                    <div class="col-xl-12 col-lg-12 d-flex align-items-center address mt-3 contact-info-address animate-custom">
                        <i class="ti-location-pin"></i>
                        <div class="info">
                            <p class="title">Address</p>
                            <a href="https://goo.gl/maps/GaV8pJ7RqtKLwWkz7" target="_blank">Star Safira Regency A1/30 Sukodono, Sidoarjo</a>
                        </div>
                    </div>
                    <!-- End Address -->

                </div>
                <!-- End Contact Info -->

                <!-- Contact Form -->
                <form class="row contact-form animate-custom" onsubmit="contactSubmit(this)">

                    <!-- Full Name -->
                    <div class="col-lg-6 pr-lg-2">
                        <div class="form-group">
                            <input type="text" name="full_name" class="form-control" placeholder="NAME"/>
                        </div>
                    </div>
                    <!-- End Full Name -->

                    <!-- Email -->
                    <div class="col-lg-6 pl-lg-2">
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="EMAIL"/>
                        </div>
                    </div>
                    <!-- End Email -->

                    <!-- Subject -->
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="SUBJECT"/>
                        </div>
                    </div>
                    <!-- End Subject -->

                    <!-- Message -->
                    <div class="col-lg-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control" placeholder="MESSAGE..."></textarea>
                        </div>
                    </div>
                    <!-- End Message -->

                    <!-- Send Message Button -->
                    <div class="col-lg-12 text-right">
                        <button type="submit">SEND MESSAGE</button>
                    </div>
                    <!-- End Send Message Button -->

                </form>
                <!-- End Contact Form -->

            </section>
            <!-- End Contact Section -->

        </div>
        <!-- End Pagepiling -->

    </div>
    <!-- End Right Side -->

</main>
<!-- End Main Content -->

<!-- Alerts -->
<div class="alerts">
    <div class="alert alert-danger alert-dismissible" role="alert">
        <i class="fas fa-minus-circle"></i> Your message sending failed!
        <button type="button" class="close mr-5" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="alert alert-success alert-dismissible" role="alert">
        <i class="fas fa-check mr-2"></i> Your message has been successfully sent.
        <button type="button" class="close mr-5" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>
<!-- End Alerts -->

<!-- Js -->
<script src="{{asset('assets')}}/vendor/jquery/jquery-3.1.1.min.js"></script>
<script src="{{asset('assets')}}/vendor/bootstrap-4.3.1/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="{{asset('assets')}}/vendor/isotope/isotope.pkgd.min.js"></script>
<script src="{{asset('assets')}}/vendor/isotope/packery-mode.pkgd.min.js"></script>
<script src="{{asset('assets')}}/vendor/animated-headline-master/js/main.js"></script>
<script src="{{asset('assets')}}/vendor/pagepiling/jquery.pagepiling.min.js"></script>
<script src="{{asset('assets')}}/vendor/featherlight-1.7.13/featherlight.min.js"></script>
<script src="{{asset('assets')}}/assets/js/contact.js"></script>
<script src="{{asset('assets')}}/assets/js/script.js"></script>
<!-- End Js -->

</body>
</html>