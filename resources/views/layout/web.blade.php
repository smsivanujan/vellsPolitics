<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website." />
    <meta name="keywords"
        content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template" />
    <meta name="author" content="elemis" />
    <title>Sandbox - Modern & Multipurpose Bootstrap 5 Template</title>
    <link rel="shortcut icon" href="./assets/img/favicon.png" />
    <link rel="stylesheet" href="./assets/css/plugins.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="preload" href="./assets/css/fonts/dm.css" as="style" onload="this.rel='stylesheet'" />
</head>
<style>
    .banner {
        background-image: url("./assets/images/index1.png");
    }
</style>
<body>
    <div class="content-wrapper">
        <header class="wrapper bg-light">
            <div class="bg-primary text-white fw-bold fs-15 mb-2">
                <div class="container py-2 d-md-flex flex-md-row">
                    <div class="d-flex flex-row align-items-center">
                        <div class="icon text-white fs-22 mt-1 me-2">
                            <i class="uil uil-location-pin-alt"></i>
                        </div>
                        <address class="mb-0">
                            Moonshine St. 14/05 Light City
                        </address>
                    </div>
                    <div class="d-flex flex-row align-items-center me-6 ms-auto">
                        <div class="icon text-white fs-22 mt-1 me-2">
                            <i class="uil uil-phone-volume"></i>
                        </div>
                        <p class="mb-0">00 (123) 456 78 90</p>
                    </div>
                    <div class="d-flex flex-row align-items-center">
                        <div class="icon text-white fs-22 mt-1 me-2">
                            <i class="uil uil-message"></i>
                        </div>
                        <p class="mb-0">
                            <a href="mailto:sandbox@email.com" class="link-white hover">sandbox@email.com</a>
                        </p>
                    </div>
                </div>
                <!-- /.container -->
            </div>
            <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
                <div class="container flex-lg-row flex-nowrap align-items-center">
                    <div class="navbar-brand w-100">
                        <a href="/index">
                            <img src="./assets/images/logo.png" srcset="./assets/images/logo.png" alt="" />
                        </a>
                    </div>
                    <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                        <div class="offcanvas-header d-lg-none">
                            <h3 class="text-white fs-30 mb-0">Sandbox</h3>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="/home">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="/events">Events</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="/blog">Blog</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="/about">About</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="/contact">Contact</a>
                                </li>
                            </ul>
                            <!-- /.navbar-nav -->
                            <div class="offcanvas-footer d-lg-none">
                                <div>
                                    <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                                    <br />
                                    00 (123) 456 78 90 <br />
                                    <nav class="nav social social-white mt-4">
                                        <a href="#"><i class="uil uil-twitter"></i></a>
                                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                                        <a href="#"><i class="uil uil-dribbble"></i></a>
                                        <a href="#"><i class="uil uil-instagram"></i></a>
                                        <a href="#"><i class="uil uil-youtube"></i></a>
                                    </nav>
                                    <!-- /.social -->
                                </div>
                            </div>
                            <!-- /.offcanvas-footer -->
                        </div>
                        <!-- /.offcanvas-body -->
                    </div>
                    <!-- /.navbar-collapse -->
                    <div class="navbar-other w-100 d-flex ms-auto">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <li class="nav-item d-none d-md-block">
                                <a href="/contact" class="btn btn-sm btn-primary rounded-pill">Contact</a>
                            </li>
                            <li class="nav-item d-lg-none">
                                <button class="hamburger offcanvas-nav-btn">
                                    <span></span>
                                </button>
                            </li>
                        </ul>
                        <!-- /.navbar-nav -->
                    </div>
                    <!-- /.navbar-other -->
                </div>
                <!-- /.container -->
            </nav>
            <!-- /.navbar -->
        </header>
        <!-- /header -->

        @yield('content')
        
    </div>
    <!-- /.content-wrapper -->
    <footer class="bg-light">
        <div class="container py-13 py-md-15">
            <div class="row gy-6 gy-lg-0">
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <img class="mb-4" src="./assets/img/logo-dark.png"
                            srcset="./assets/img/logo-dark@2x.png 2x" alt="" />
                        <p class="mb-4">
                            © 2022 Sandbox.
                            <br class="d-none d-lg-block" />All rights
                            reserved.
                        </p>
                        <nav class="nav social">
                            <a href="#"><i class="uil uil-twitter"></i></a>
                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                            <a href="#"><i class="uil uil-dribbble"></i></a>
                            <a href="#"><i class="uil uil-instagram"></i></a>
                            <a href="#"><i class="uil uil-youtube"></i></a>
                        </nav>
                        <!-- /.social -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title mb-3">Get in Touch</h4>
                        <address class="pe-xl-15 pe-xxl-17">
                            Moonshine St. 14/05 Light City, London, United
                            Kingdom
                        </address>
                        <a href="mailto:#" class="link-body">info@email.com</a><br />
                        00 (123) 456 78 90
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title mb-3">Learn More</h4>
                        <ul class="list-unstyled text-reset mb-0">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Our Story</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-12 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title mb-3">Our Newsletter</h4>
                        <p class="mb-5">
                            Subscribe to our newsletter to get our news &
                            deals delivered to you.
                        </p>
                        <div class="newsletter-wrapper">
                            <!-- Begin Mailchimp Signup Form -->
                            <div id="mc_embed_signup2">
                                <form
                                    action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a"
                                    method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form"
                                    class="validate" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll2">
                                        <div class="mc-field-group input-group form-floating">
                                            <input type="email" value="" name="EMAIL"
                                                class="required email form-control" placeholder="Email Address"
                                                id="mce-EMAIL2" />
                                            <label for="mce-EMAIL2">Email
                                                Address</label>
                                            <input type="submit" value="Join" name="subscribe"
                                                id="mc-embedded-subscribe2" class="btn btn-primary" />
                                        </div>
                                        <div id="mce-responses2" class="clear">
                                            <div class="response" id="mce-error-response2" style="display: none">
                                            </div>
                                            <div class="response" id="mce-success-response2" style="display: none">
                                            </div>
                                        </div>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="
                                                    position: absolute;
                                                    left: -5000px;
                                                "
                                            aria-hidden="true">
                                            <input type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc"
                                                tabindex="-1" value="" />
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </form>
                            </div>
                            <!--End mc_embed_signup-->
                        </div>
                        <!-- /.newsletter-wrapper -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </footer>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/theme.js"></script>
</body>

</html>
