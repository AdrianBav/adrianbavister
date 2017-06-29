<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Site Meta -->
        <meta name="description" content="Online resume portfolio for Dallas based lead web developer Adrian Bavister.">
        <meta name="author" content="Adrian Bavister">
        <link rel="icon" type="image/x-icon" href="/favicon.ico">
        <title><?php echo "Adrian Bavister - {$sub1} | {$sub2} | {$sub3}"; ?></title>

        <!-- Styles -->

        <!-- Font Awesome -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-k2/8zcNbxVIh5mnQ52A0r3a6jAgMGxFJFE2707UxGCk= sha512-ZV9KawG2Legkwp3nAlxLIVFudTauWuBpC10uEafMHYL0Sarrz5A7G79kXh5+5+woxQ5HM559XX2UZjMJ36Wplg==" crossorigin="anonymous">
        <!-- Bootstrap -->
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Simple Text Rotator (Main Background Image Captions) -->
        <link href="/assets/css/simpletextrotator.css" rel="stylesheet">
        <!-- Animate (Used by WOW, Reveal Animations When You Scroll) -->
        <link href="/assets/css/animate.css" rel="stylesheet">
        <!-- Easy Pie Chart (Language Toolbox) -->
        <link href="/assets/css/chart.css" rel="stylesheet">
        <!-- OwlCarousel (Testimonials) -->
        <link href="/assets/css/owl.carousel.css" rel="stylesheet">
        <link href="/assets/css/owl.theme.css" rel="stylesheet">
        <!-- FlexSlider (Portfolios) -->
        <link href="/assets/css/flexslider.css" rel="stylesheet">

        <!-- Custom Styles -->
        <link href="/assets/css/style.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <div class="wrapper">

            <!-- Pre-loader screen -->
            <div id="preloader">
                <div id="status">
                    <div class="status-mes">
                        <h4>Adrian Bavister</h4>
                        <p><i class="fa fa-cog fa-spin"></i> Loading Online Resume Portfolio...</p>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
                <div class="container">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/">Adrian Bavister</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#intro">Home</a></li>
                            <li><a href="#profile">Profile</a></li>
                            <li><a href="#services">Skills</a></li>
                            <li><a href="#portfolio">Portfolio</a></li>
                            <li><a href="#resume">Resume</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>

                </div>
            </nav>

            <!-- Home Image section -->
            <section id="intro" class="section">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="hello wow bounceInDown">
                                <h1>Hello, I'm Adrian Bavister</h1>
                                <h3><span class="rotate"><?php echo "{$sub1} | {$sub2} | {$sub3}"; ?></span></h3>
                            </div>
                            <a href="#profile">
                                <div class="mouse-icon">
                                    <div class="wheel"></div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Home Contact Callout section -->
            <section id="profile-contact">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-4 wow bounceInLeft">
                            <div class="profile-item">
                                <i class="fa fa-envelope-o"></i>
                                <h5><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></h5>
                            </div>
                        </div>

                        <div class="col-sm-4 wow bounceInUp">
                            <div class="profile-item">
                                <i class="fa fa-phone"></i>
                                <h5><?php echo $telephone; ?></h5>
                            </div>
                        </div>

                        <div class="col-sm-4 wow bounceInRight">
                            <div class="profile-item">
                                <i class="fa fa-map-marker"></i>
                                <h5><?php echo $address; ?></h5>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Profile section start -->
            <section id="profile" class="section">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12 headline wow bounceInDown">
                            <h2>Adrian Bavister</h2>
                            <p><?php echo "{$sub1}. {$sub2}. {$sub3}."; ?></p>
                        </div>

                        <div class="col-md-6 col-sm-12 hidden-xs wow bounceInLeft">
                            <img class="avatar" src="/assets/images/mockups.png" alt="Example Websites">
                        </div>

                        <div class="col-md-6 col-sm-12 wow bounceInRight" id="professional-profile">
                            <h3>Professional Profile</h3>
                            <p>Lead web developer with <span class="standout">four years full time experience</span> in structuring, developing and implementing interactive and responsive websites. Fluent in the fundamental web programming languages with a background of fifteen years web and non-web coding experience.</p>
                            <p><span class="standout">Exceptional organization and prioritization skills</span> with the ability to meet tight deadlines. Strong verbal and written communication skills with a keen eye for detail and ability to explain complex instructions in an easy to understand way.</p>
                            <p>Motivated by a <span class="standout">passion and desire</span> to produce attractive, user-friendly websites built on <span class="standout">optimized, readable and maintainable code.</span></p>

                            <div class="profile-widget">
                                <ul class="widget-social">
                                    <li>
                                        <a role="button" tabindex="0" data-toggle="popover" title="HTML5" data-content="<?php echo $html5; ?>">
                                            <img src="/assets/images/logo/logo_html5.png" alt="HTML5" class="desaturate">
                                        </a>
                                    </li>
                                    <li>
                                        <a role="button" tabindex="0" data-toggle="popover" title="CSS3" data-content="<?php echo $css3; ?>">
                                            <img src="/assets/images/logo/logo_css3.png" alt="CSS3" class="desaturate">
                                        </a>
                                    </li>
                                    <li>
                                        <a role="button" tabindex="0" data-toggle="popover" title="JavaScript" data-content="<?php echo $javascript; ?>">
                                            <img src="/assets/images/logo/logo_javascript.png" alt="JavaScript" class="desaturate">
                                        </a>
                                    </li>
                                    <li>
                                        <a role="button" tabindex="0" data-toggle="popover" title="PHP" data-content="<?php echo $php; ?>">
                                            <img src="/assets/images/logo/logo_php.png" alt="PHP" class="desaturate">
                                        </a>
                                    </li>
                                    <li>
                                        <a role="button" tabindex="0" data-toggle="popover" title="MySQL" data-content="<?php echo $mysql; ?>">
                                            <img src="/assets/images/logo/logo_mysql.png" alt="MySQL" class="desaturate">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Language Toolbox section -->
            <section id="skills" class="light-text parallax" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row">

                        <div class="col-md-3 hidden-xs wow bounceInLeft">
                            <h3>Language Toolbox</h3>
                        </div>

                        <div class="col-md-9 headline nomargin wow bounceInDown">
                            <h3>I am comfortable working with both back-end and front-end technologies.</h3>
                            <p>I regularly work with databases, PHP, HTML, CSS, JavaScript and everything else in between. Currently, I am learning to develop Mobile Apps with Node.js and AngularJS.</p>
                        </div>

                        <div class="col-md-12 text-center">
                        <?php foreach($charts as $chart): ?>
                            <div class="chart" data-percent="<?php echo $chart['percent']; ?>" data-bar-color="<?php echo $chart['color']; ?>" data-animate="<?php echo $chart['animate']; ?>">
                                <div class="chart-content">
                                    <div class="percent"><?php echo $chart['percent']; ?></div>
                                    <div class="chart-title"><?php echo $chart['title']; ?></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Skills, My Areas of Expertise section -->
            <section id="services" class="section">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12 headline wow bounceInDown">
                            <h2>Skills</h2>
                            <p>My Areas of Expertise.</p>
                        </div>

                        <div class="col-md-12">

                            <div class="row">
                                <div class="col-sm-4 wow bounceInUp" data-wow-delay=".2s">
                                    <div class="service">
                                        <div class="icon">
                                            <i class="fa fa-code"></i>
                                        </div>
                                        <h4>Coding Standards</h4>
                                        <div class="text">
                                            <p>I work extensively with PHP based websites, commonly in an MVC design pattern. Strict self-imposed coding standards help me produce correct logic separation and best practice coding.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 wow bounceInUp" data-wow-delay=".4s">
                                    <div class="service">
                                        <div class="icon">
                                            <i class="fa fa-desktop"></i>
                                        </div>
                                        <h4>Responsive design</h4>
                                        <div class="text">
                                            <p>Ensuring the best experience possible via the minimum amount of resizing and scrolling be it on a desktop machine, netbook, or smaller mobile device through mobile-first, responsive web design.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 wow bounceInUp" data-wow-delay=".6s">
                                    <div class="service">
                                        <div class="icon">
                                            <i class="fa fa-html5"></i>&nbsp;<i class="fa fa-css3"></i>
                                        </div>
                                        <h4>HTML5 & CSS3</h4>
                                        <div class="text">
                                            <p>Perficient in HTML5, CSS3, and related front-end technologies. Continually learning new techniques and keen to implement the best practices/current trends for user needs.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4 wow bounceInUp">
                                    <div class="service">
                                        <div class="icon">
                                            <i class="fa fa-opencart"></i>&nbsp;<i class="fa fa-wordpress"></i>
                                        </div>
                                        <h4>Ecommerce &amp; WordPress</h4>
                                        <div class="text">
                                            <p>Regular experience developing with OpenCart and Wordpress. Comfortable customizing the framework to meet precise customer requirements while staying within and utilizing the existing framework.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 wow bounceInLeft">
                                    <div class="service">
                                        <div class="icon">
                                            <i class="fa fa-tachometer"></i>
                                        </div>
                                        <h4>Bootstrap Dashboard</h4>
                                        <div class="text">
                                            <p>Capable of designing and developing custom administration dashboards. Experience of utilizing the Bootstrap framework to provide a responsive, mobile first front-end.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 wow bounceInRight">
                                    <div class="service">
                                        <div class="icon">
                                            <i class="fa fa-bar-chart"></i>
                                        </div>
                                        <h4>Developer Skills</h4>
                                        <div class="text">
                                            <p>Knowledge and application of fundamental SEO principles. Command line familiarity with version control systems such as Git and Subversion. Exposure to Linux and basic shell scripting.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </section>

            <!-- Fun Statistics section -->
            <section id="stats" class="light-text parallax" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row">

                        <div class="col-md-3 col-sm-12 hidden-xs wow bounceInLeft">
                            <h3>Fun Statistics</h3>
                        </div>

                        <div class="col-md-3 col-sm-4 wow bounceInDown">
                            <div class="stat">
                                <div class="stat-icon">
                                    <h2><i class="fa fa-coffee hidden-xs"></i><span class="reverse-timer" data-from="<?php echo $stat1; ?>"></span></h2>
                                </div>
                                <h3>Cups of Coffee<br>in Lifetime</h3>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-4 wow bounceInRight">
                            <div class="stat">
                                <div class="stat-icon">
                                    <h2><i class="fa fa-bicycle hidden-xs"></i><span class="timer" data-to="<?php echo $stat2; ?>"></span></h2>
                                </div>
                                <h3>Miles Cycled<br>this Year</h3>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-4 wow bounceInUp">
                            <div class="stat">
                                <div class="stat-icon">
                                    <h2><i class="fa fa-university hidden-xs"></i><span class="timer" data-to="<?php echo $stat3; ?>"></span></h2>
                                </div>
                                <h3>Days of<br>Web Presence</h3>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Portfolio section -->
            <section id="portfolio" class="section">
                <div class="container">
                    <div class="row">

                        <!-- Portfolio Headline -->
                        <div class="col-md-12 headline wow bounceInDown">
                            <h2>Portfolio</h2>
                            <p>A selection of my work.</p>
                        </div>

                        <!-- Portfolio Preview Template -->
                        <div class="col-md-12" id="portfolio-outer">
                            <div id="portfolio-preview">
                                <span class="close-preview">×</span>
                                <div id="portfolio-slider" class="flexslider"></div>
                                <div>
                                    <div id="portfolio-icons"></div>
                                    <button id="portfolio-close" type="button" class="btn btn-default btn-custom-2"><i class="fa fa-hand-o-left icon-before"></i>Portfolio</button>
                                </div>
                                <div class="clearfix"></div>
                                <h2 id="portfolio-title"></h2>
                                <div id="portfolio-content">
                                    <section></section>
                                </div>
                            </div>
                        </div>
                        <!-- /Portfolio Preview Template -->

                    </div>
                </div>

                <div class="container portfolio-item-wrapper">
                    <div class="row">

                        <!-- Responsive Design -->
                        <div class="col-md-4 col-sm-6 portfolio-item-outer wow bounceInLeft">
                            <div class="portfolio-item">
                                <div class="portfolio-item-preview">
                                    <img src="/assets/images/portfolio/rd.jpg" alt="">
                                </div>
                                <div class="portfolio-item-description">
                                    <h3>Responsive Design</h3>
                                    <p>Retrofitting an existing site</p>
                                </div>
                            </div>
                            <div class="sr-only portfolio-technologies">
                                <img src="/assets/images/logo/logo_bootstrap.png" alt="Bootstrap" title="Bootstrap">
                                <img src="/assets/images/logo/logo_css3.png" alt="CSS3" title="CSS3">
                            </div>
                            <div class="sr-only portfolio-description" data-images="/assets/images/portfolio/rd/s1.jpg,/assets/images/portfolio/rd/s2.jpg">
                                <p>
                                    It is becoming increasingly common for clients to request their website to be retrofitted with responsive technologies. I provide here an example of a website where I integrated a custom build of the Bootstrap CSS framework into the clients existing site to produce a fully responsive website.
                                    (<a class="btn btn-color1" href="https://github.com/AdrianBav/contentcustoms" target="_blank"><i class="fa fa-github icon-before"></i>View Source on Github</a>)
                                </p>
                                <p>
                                    The two live previews demonstrate the websites responsiveness before and after the retrofit.<br>
                                    <a class="btn btn-color1" href="http://cc.eestage.com/" target="_blank"><i class="fa fa-eye icon-before"></i>Live Preview (Before)</a> |
                                    <a class="btn btn-color1" href="http://contentcustoms.eestage.com/" target="_blank"><i class="fa fa-eye icon-before"></i>Live Preview (After)</a>
                                </p>
                                <div class="standout">
                                    <img src="/assets/images/logo/logo_foundation.png" alt="Foundation" title="Foundation">
                                    <p>
                                        I recently completed a project where I integrated a custom build of the Foundation CSS framework into the clients existing website. (<a class="btn btn-color1" href="https://github.com/AdrianBav/lewisellis" target="_blank"><i class="fa fa-github icon-before"></i>View Source on Github</a>).
                                        Again, this produced a fully responsive website from a previously unresponsive one.
                                        (<a class="btn btn-color1" href="http://le.eestage.com/" target="_blank"><i class="fa fa-eye icon-before"></i>Live Preview (Before)</a> |
                                        <a class="btn btn-color1" href="http://lewisellis.eestage.com/" target="_blank"><i class="fa fa-eye icon-before"></i>Live Preview (After)</a>)
                                    </p>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Ecommerce -->
                        <div class="col-md-4 col-sm-6 portfolio-item-outer wow bounceInUp">
                            <div class="portfolio-item">
                                <div class="portfolio-item-preview">
                                    <img src="/assets/images/portfolio/ec.jpg" alt="">
                                </div>
                                <div class="portfolio-item-description">
                                    <h3>Ecommerce</h3>
                                    <p>Building within the Framework</p>
                                </div>
                            </div>
                            <div class="sr-only portfolio-technologies">
                                <img src="/assets/images/logo/logo_oc.png" alt="OpenCart" title="OpenCart">
                                <img src="/assets/images/logo/logo_php.png" alt="PHP" title="PHP">
                                <img src="/assets/images/logo/logo_mysql.png" alt="MySQL" title="MySQL">
                            </div>
                            <div class="sr-only portfolio-description" data-images="/assets/images/portfolio/ec/s1.jpg,/assets/images/portfolio/ec/s2.jpg,/assets/images/portfolio/ec/s3.jpg">
                                <p>
                                    I have experience at customizing Opencart based ecommerce projects to meet the customers needs. I provide here an example of a jewelry store which I have recently worked on.
                                    Slide (1) shows the addition of a color picker.
                                </p>
                                <p>
                                    After I have completed styling the front end of the store, I ensure that the ecommerce functionality matches the customers unique set of requirements.
                                    I consider it important to seamlessly extend the framework when adding features and extensions. I have experience working with most common payment gateways and shipping APIs.
                                    (<a class="btn btn-color1" href="https://github.com/AdrianBav/ethelandmyrtle" target="_blank"><i class="fa fa-github icon-before"></i>View Source on Github</a>)
                                </p>
                                <p>
                                    I provide training to the client, walking them through the website and ensuring that they are happy with the customizations I have made.
                                    I ensure that they understand how to use the backend interface to maintain products and categories as well as review orders, manage customers and run sales reports.
                                    (<a class="btn btn-color1" href="http://ethelandmyrtle.com/" target="_blank"><i class="fa fa-eye icon-before"></i>Live Preview</a>)
                                </p>
                            </div>
                        </div>

                        <!-- Admin Dashboard -->
                        <div class="col-md-4 col-sm-6 portfolio-item-outer wow bounceInUp" data-wow-delay=".6s">
                            <div class="portfolio-item">
                                <div class="portfolio-item-preview">
                                    <img src="/assets/images/portfolio/ad.jpg" alt="">
                                </div>
                                <div class="portfolio-item-description">
                                    <h3>Admin Dashboard</h3>
                                    <p>Beautifying with Bootstrap</p>
                                </div>
                            </div>
                            <div class="sr-only portfolio-technologies">
                                <img src="/assets/images/logo/logo_ci.png" alt="CodeIgniter" title="CodeIgniter">
                                <img src="/assets/images/logo/logo_bootstrap.png" alt="Bootstrap" title="Bootstrap">
                            </div>
                            <div class="sr-only portfolio-description" data-images="/assets/images/portfolio/ad/s1.jpg,/assets/images/portfolio/ad/s2.jpg,/assets/images/portfolio/ad/s3.jpg,/assets/images/portfolio/ad/s4.jpg">
                                <p>
                                    The example referenced here was an internal company project what I worked on in my free time. The task was to build an online questionnaire, based on existing PDF versions, for new clients to complete giving an insight into their specific styles and needs.<br>
                                    The (<a class="btn btn-color1" href="http://ee-questionnaire.eestage.com/go/34eebc13dc31b" target="_blank"><i class="fa fa-eye icon-before"></i>Live Preview</a>) demonstrates the front-end client experience of completing the questionnaire.
                                </p>
                                <p>
                                    The back-end of the project consists of a private admin dashboard for internal management of the questionnaires. The project was built on the Codeigniter PHP framework and I chose the Bootstrap CSS framework to reduce development time by eliminating the need to work on styling components.
                                    (<a class="btn btn-color1" href="https://github.com/AdrianBav/ee-questionnaire" target="_blank"><i class="fa fa-github icon-before"></i>View Source on Github</a>)
                                </p>
                            </div>
                        </div>

                        <!-- 100% Custom Design -->
                        <div class="col-md-4 col-sm-6 portfolio-item-outer wow bounceInUp" data-wow-delay=".2s">
                            <div class="portfolio-item bottom">
                                <div class="portfolio-item-preview">
                                    <img src="assets/images/portfolio/c.jpg" alt="">
                                </div>
                                <div class="portfolio-item-description">
                                    <h3>100% Custom Design</h3>
                                    <p>Meeting Customer Requirements</p>
                                </div>
                            </div>
                            <div class="sr-only portfolio-technologies">
                                <img src="assets/images/logo/logo_html5.png" alt="HTML5" title="HTML5">
                                <img src="assets/images/logo/logo_css3.png" alt="CSS3" title="CSS3">
                                <img src="assets/images/logo/logo_jquery.png" alt="jQuery" title="jQuery">
                            </div>
                            <div class="sr-only portfolio-description" data-images="assets/images/portfolio/c/s1.jpg,assets/images/portfolio/c/s2.jpg,assets/images/portfolio/c/s3.jpg">
                                <p>Having a custom website is a great way to stand out from the crowd and to achieve all of your specialist needs and requirements.</p>
                                <p>
                                    The example shown in slide (1) uses jQuery to achieve a fully custom site navigation. (<a class="btn btn-color1" href="https://github.com/AdrianBav/roadwarriors" target="_blank"><i class="fa fa-github icon-before"></i>View Source on Github</a>)<br>
                                    The client had a very specific vision of how they wanted their site to operate and function.<br>
                                    The (<a class="btn btn-color1" href="http://roadwarriors.eestage.com/" target="_blank"><i class="fa fa-eye icon-before"></i>Live Preview</a>) demonstrates a working prototype with dummy text, ready for the client to evaluate.
                                </p>
                                <p>
                                    Slides (2) and (3) show an artist and illustrators website that I created for a friend. I developed an administrative backend to the website to allow regular updates to the gallery in the form of uploading, cropping and re-ordering of images.<br>
                                    <a class="btn btn-color1" href="http://www.helenapluskowska.co.uk/" target="_blank"><i class="fa fa-eye icon-before"></i>Live Preview</a> |
                                    <a class="btn btn-color1" href="https://github.com/AdrianBav/helenapluskowska" target="_blank"><i class="fa fa-github icon-before"></i>View Source on Github</a>
                                </p>
                            </div>
                        </div>

                        <!-- WordPress -->
                        <div class="col-md-4 col-sm-6 portfolio-item-outer wow bounceInRight">
                            <div class="portfolio-item bottom">
                                <div class="portfolio-item-preview">
                                    <img src="assets/images/portfolio/wp.jpg" alt="">
                                </div>
                                <div class="portfolio-item-description">
                                    <h3>WordPress</h3>
                                    <p>Customizing the WordPress Admin</p>
                                </div>
                            </div>
                            <div class="sr-only portfolio-technologies">
                                <img src="assets/images/logo/logo_wp.png" alt="WordPress" title="WordPress">
                            </div>
                            <div class="sr-only portfolio-description" data-images="assets/images/portfolio/wp/s1.jpg,assets/images/portfolio/wp/s2.jpg,assets/images/portfolio/wp/s3.jpg">
                                <p>
                                    Occasionally clients have very specific requirements of their content management system and who also require their website to be built in Wordpress. This requires me to fully understand their needs and find appropriate plugins or to write my own post types and widgets to achieve the desired result.
                                </p>
                                <p>
                                    When extending the Wordpress backend to add functionality I am careful to do so within the existing framework. This ensures that the client will already be somewhat familiar with the new additions and find the modifications to work as intuitively as the rest of Wordpress. It also helps other developers to easily grasp the new code.
                                    (<a class="btn btn-color1" href="https://github.com/AdrianBav/oilandgas" target="_blank"><i class="fa fa-github icon-before"></i>View Source on Github</a>)
                                </p>
                                <p>
                                    I provide an example of a website that I worked on where I was required to create custom post types for the clients various ‘Awards ‘ and what they refer to as ‘Tombstones.’ The Wordpress backend allowed them to simply fill in a few fields to see their award or tombstone appear on the respective page.
                                    (<a class="btn btn-color1" href="http://oilgasadvisor.com/" target="_blank"><i class="fa fa-eye icon-before"></i>Live Preview</a>)

                                </p>
                            </div>
                        </div>

                        <!-- Web Applications -->
                        <div class="col-md-4 col-sm-6 portfolio-item-outer wow bounceInUp" data-wow-delay=".4s">
                            <div class="portfolio-item bottom">
                                <div class="portfolio-item-preview">
                                    <img src="assets/images/portfolio/wa.jpg" alt="">
                                </div>
                                <div class="portfolio-item-description">
                                    <h3>Web Applications</h3>
                                    <p>Technical Challenges / Data Manipulation</p>
                                </div>
                            </div>
                            <div class="sr-only portfolio-technologies">
                                <img src="assets/images/logo/logo_python.png" alt="Python" title="Python">
                                <img src="assets/images/logo/logo_javascript.png" alt="JavaScript" title="JavaScript">
                            </div>
                            <div class="sr-only portfolio-description" data-images="assets/images/portfolio/wa/s1.jpg,assets/images/portfolio/wa/s2.jpg,assets/images/portfolio/wa/s3.jpg,assets/images/portfolio/wa/s4.jpg,assets/images/portfolio/wa/s5.jpg">
                                <p>
                                    I undertook the development of a custom web app and underlying infrastructure to allow the client remote access to real-time instrumentation of their industrial equipment. The app GUI was achieved by converting a given design into front-end code. This project is represented in slides (1), (2) and (3).
                                </p>
                                <p>
                                    The back-end consisted of designing and implementing an API to communicate with their equipment. The complex nature of the projects required excellent problem solving, analytical and debugging skills. I produced a thorough set of project documentation outlining the protocols I developed and how to use them.
                                </p>
                                <p>
                                    A data analysis web app project that I worked on is represented in slides (4) and (5). I built the back-end in Python and implemented unit testing. (<a class="btn btn-color1" href="https://github.com/AdrianBav/lategoals" target="_blank"><i class="fa fa-github icon-before"></i>View Source on Github</a>)
                                </p>
                                <p>
                                    The frequent update of data meant the overhead for jQuery was too high so I implemented the client side in JavaScript.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Testimonials section -->
            <section id="clients" class="light-text parallax" data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row">

                        <div class="col-md-3 hidden-xs wow bounceInLeft">
                            <h3>Testimonials</h3>
                        </div>

                        <div class="col-md-9 wow bounceInRight">

                            <div id="owl-clients" class="owl-carousel">

                                <div class="owl-item">
                                    <div class="testimonial-text">
                                        <p><i class="fa fa-quote-left quote-left"></i>Adrian is easy to work with, suggests alternative approaches when he feels there is a better way to accomplish the same task, and consistently delivers his part on schedule.<i class="fa fa-quote-right quote-right"></i></p>
                                    </div>
                                    <div class="testimonial-author">
                                        <p class="author-name">- Greg Asseff</p>
                                        <p class="author-title">Owner, 3states Media.</p>
                                    </div>
                                </div>

                                <div class="owl-item">
                                    <div class="testimonial-text">
                                        <p><i class="fa fa-quote-left quote-left"></i>Adrian has done a great job. He took on board what I wanted and has been very helpful. He is quick to respond to emails, resolve any issues and work on new updates for the website.<i class="fa fa-quote-right quote-right"></i></p>
                                    </div>
                                    <div class="testimonial-author">
                                        <p class="author-name">- Helena Pluskowska</p>
                                        <p class="author-title">Artist and Illustrator.</p>
                                    </div>
                                </div>

                                <div class="owl-item">
                                    <div class="testimonial-text">
                                        <p><i class="fa fa-quote-left quote-left"></i>Adrian is wonderful web developer. He created a new user-friendly website for us that our customers love. When I have a question or issue he responds a timely manner and is always up for a challenge with new developments on our website.<i class="fa fa-quote-right quote-right"></i></p>
                                    </div>
                                    <div class="testimonial-author">
                                        <p class="author-name">- Kathryn Mathews</p>
                                        <p class="author-title">Owner, Ethel & Myrtle.</p>
                                    </div>
                                </div>

                                <div class="owl-item">
                                    <div class="testimonial-text">
                                        <p><i class="fa fa-quote-left quote-left"></i>Adrian was a tremendous help with our website project. He simplified the technical aspect and guided me through the process. I would highly recommend Adrian as a web developer.<i class="fa fa-quote-right quote-right"></i></p>
                                    </div>
                                    <div class="testimonial-author">
                                        <p class="author-name">- Brandon Sherbert</p>
                                        <p class="author-title">Investment Advisor Representative, Beacon Financial Group.</p>
                                    </div>
                                </div>

                                <div class="owl-item">
                                    <div class="testimonial-text">
                                        <p><i class="fa fa-quote-left quote-left"></i>His high level of expertise coupled with delivering great work in a timely manner and the ability to get the job done right the first time makes him an amazing person to refer.<i class="fa fa-quote-right quote-right"></i></p>
                                    </div>
                                    <div class="testimonial-author">
                                        <p class="author-name">- David Dillon</p>
                                        <p class="author-title">Vice President, Lewis & Ellis.</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Resume section -->
            <section id="resume" class="section">
                <div class="container">

                    <div class="row">
                        <div class="col-md-12 headline wow bounceInDown">
                            <h2>Resume</h2>
                            <p>My experience and education.</p>
                        </div>
                    </div>

                    <div class="row resume-items">
                        <div class="col-md-3 wow bounceInLeft">
                            <h3>Experience</h3>
                        </div>

                        <div class="col-md-6 col-sm-8 resume-item wow bounceInUp">
                            <h4 class="blue-text">Lead web developer</h4>
                            <p>My role primarily consists of the development of dynamic PHP-based CMS websites in a variety of frameworks.</p>
                            <p>I am responsible for managing my workload which averages around 12 active projects. Working for a small company requires exceptional organization and prioritization skills with the ability to meet tight deadlines.</p>
                            <hr class="hidden-xs">
                        </div>

                        <div class="col-md-3 col-sm-4 resume-place wow bounceInRight">
                            <h4><i class="fa fa-suitcase"></i> Einstein's Eyes</h4>
                            <i class="fa fa-calendar"></i> June 2013 - Present Day
                            <hr class="visible-xs">
                        </div>

                        <div class="col-md-6 col-md-offset-3 col-sm-8 resume-item wow bounceInUp">
                            <h4 class="blue-text">Web developer</h4>
                            <p>Working as a freelance website developer required me to have initiative, to get up to speed on new technologies fast, to create and manage my own goals and to have a strong work ethic.</p>
                            <hr class="hidden-xs">
                        </div>

                        <div class="col-md-3 col-sm-4 resume-place wow bounceInRight">
                            <h4><i class="fa fa-suitcase"></i> Freelancing</h4>
                            <i class="fa fa-calendar"></i> October 2011 - June 2013
                            <hr class="visible-xs">
                        </div>
                    </div>

                    <div class="row resume-items">
                        <div class="col-md-3 wow bounceInLeft">
                            <h3>Education</h3>
                        </div>

                        <div class="col-md-6 col-sm-8 resume-item wow bounceInUp">
                            <h4 class="blue-text">IT Qualifications</h4>
                            <ul class="icon-list">
                                <li><i class="fa fa-fw fa-trophy"></i>Cisco Certified Network Associate (CCNA)</li>
                                <li><i class="fa fa-fw fa-trophy"></i>Microsoft Windows 2003 Server (MCP)</li>
                                <li><i class="fa fa-fw fa-trophy"></i>Microsoft Windows XP (MCP)</li>
                            </ul>
                            <hr class="hidden-xs">
                        </div>

                        <div class="col-md-3 col-sm-4 resume-place wow bounceInRight">
                            <h4><i class="fa fa-suitcase"></i> Self Initiated</h4>
                            <i class="fa fa-calendar"></i> 2007
                            <hr class="visible-xs">
                        </div>

                        <div class="col-md-6 col-md-offset-3 col-sm-8 resume-item wow bounceInUp">
                            <h4 class="blue-text">Electronic Engineering</h4>
                            <p>I was educated in England, obtaining a Bachelor of Engineering Honors degree in Electronic Engineering from De Montfort University.</p>
                            <hr class="hidden-xs">
                        </div>

                        <div class="col-md-3 col-sm-4 resume-place wow bounceInRight">
                            <h4><i class="fa fa-suitcase"></i> De Montfort University</h4>
                            <i class="fa fa-calendar"></i> 1996 - 2000
                            <hr class="visible-xs">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 wow bounceInUp">
                            <a href="javascript:void(0);" class="btn btn-default btn-custom-2" id="download-button"><i class="fa fa-cloud-download icon-before"></i> Download Full Resume</a>
                        </div>
                    </div>

                </div>
            </section>

            <!-- Contact form section -->
            <section id="contact" class="section">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12 headline wow bounceInLeft">
                            <h2>Get in touch</h2>
                            <p>Feel free to say hello! I'll respond as soon as possible.</p>
                        </div>

                        <div class="col-md-6 wow bounceInUp">
                            <p>Ready to chat? Just fill out the adjacent form or contact me direct on the information below and I’ll reply back as soon as possible. Cheers!</p>
                            <ul class="icon-list">
                                <li><i class="fa fa-fw fa-map-marker"></i><?php echo $address; ?></li>
                                <li><i class="fa fa-fw fa-phone"></i><?php echo $telephone; ?></li>
                                <li><i class="fa fa-fw fa-envelope-o"></i><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
                            </ul>
                            <ul class="icon-list">
                                <li><i class="fa fa-fw fa-linkedin"></i><a href="<?php echo $linkedin; ?>" target="_blank"><?php echo $linkedin; ?></a></li>
                                <li><i class="fa fa-fw fa-github"></i><a href="<?php echo $github; ?>" target="_blank"><?php echo $github; ?></a></li>
                                <li><i class="fa fa-fw fa-university"></i><a href="<?php echo $sitepoint; ?>" target="_blank"><?php echo $sitepoint; ?></a></li>
                            </ul>
                        </div>

                        <div class="col-md-6 wow bounceInRight">
                            <form id="contact-form" role="form">

                                <div class="form-group">
                                    <label class="sr-only" for="c_name">Name</label>
                                    <input type="text" id="c_name" class="form-control" name="c_name" placeholder="Name" autocomplete="off">
                                </div>

                                <div class="form-group">
                                    <label class="sr-only" for="c_email">Email address</label>
                                    <input type="email" id="c_email" class="form-control" name="c_email" placeholder="E-mail" autocomplete="off">
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" id="c_message" name="c_message" rows="7" placeholder="Your message" autocomplete="off"></textarea>
                                </div>

                                <button type="submit" class="btn btn-custom-1">
                                    <i class="fa fa-bullhorn icon-before"></i> Send it
                                </button>

                            </form>
                            <div class="ajax-response"></div>
                        </div>

                    </div>
                </div>

                <!-- Background contact image -->
                <div id="map-image">
                    <img src="/assets/images/contact.jpg" alt="Contact form">
                </div>
            </section>

            <!-- Footer start -->
            <footer id="footer">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <p class="copy">© <?php echo $year; ?> Adrian Bavister, All Rights Reserved.</p>
                        </div>

                    </div>
                </div>
            </footer>

        </div><!-- .wrapper -->

        <!-- Scripts -->

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="/assets/js/bootstrap.min.js"></script>

        <!-- Backstretch (Main Background Image) -->
        <script src="/assets/js/jquery.backstretch.min.js"></script>
        <!-- Simple Text Rotator (Main Background Image Captions) -->
        <script src="/assets/js/jquery.simple-text-rotator.min.js"></script>

        <!-- Smooth Scroll -->
        <script src="/assets/js/smoothscroll.js"></script>
        <!-- Stellar (Parallax) -->
        <script src="/assets/js/jquery.stellar.min.js"></script>
        <!-- WOW (Reveal Animations When You Scroll) -->
        <script src="/assets/js/wow.min.js"></script>
        <!-- Waypoints (Activate Plugins When Scrolled Into View) -->
        <script src="/assets/js/jquery.waypoints.js"></script>
        <!-- Easy Pie Chart (Language Toolbox) -->
        <script src="/assets/js/jquery.easypiechart.min.js"></script>
        <!-- CountTo (Fun Statistics) -->
        <script src="/assets/js/jquery.countTo.js"></script>
        <!-- OwlCarousel (Testimonials) -->
        <script src="/assets/js/owl.carousel.min.js"></script>
        <!-- Flexslider (Portfolios) -->
        <script src="/assets/js/jquery.flexslider.min.js"></script>

        <!-- Custom Scripts -->
        <script src="/assets/js/custom.js"></script>

    </body>
</html>