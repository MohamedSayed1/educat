<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Title-->
    <title>Educate</title>
    <!-- SEO Meta-->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="education">
    <!-- viewport scale-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon and Apple Icons-->
    <link rel="icon" type="image/x-icon" href="{{asset('template/front/assets/img/favicon/favicon.ico')}}">
    <link rel="shortcut icon" href="{{asset('template/front/assets/img/favicon/114x114.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('template/front/assets/img/favicon/96x96.png')}}">
    <!--Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700%7CWork+Sans:400,500">
    <!-- Icon fonts -->
    <link rel="stylesheet" href="{{asset('template/front/assets/fonts/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('template/front/assets/fonts/themify-icons/css/themify-icons.css')}}">
    <!-- stylesheet-->
    <link rel="stylesheet" href="{{asset('template/front/assets/css/vendors.bundle.css')}}">
    <link rel="stylesheet" href="{{asset('template/front/assets/css/center-style.css')}}">
    <link rel="stylesheet" href="{{asset('template/front/assets/css/custom.css')}}">
    @yield('css')
</head>

<body>
<header class="site-header bg-dark text-white-0_5">
    <div class="container">
        <div class="row align-items-center justify-content-between mx-0">
            <ul class="list-inline d-none d-lg-block mb-0">
                <li class="list-inline-item mr-3">
                    <div class="d-flex align-items-center">
                        <i class="ti-email mr-2"></i>
                        <a href="mailto:support@educati.com">support@educat.com</a>
                    </div>
                </li>
                <li class="list-inline-item mr-3">
                    <div class="d-flex align-items-center">
                        <i class="ti-headphone mr-2"></i>
                        <a href="tel:+8801740411513">01010214571</a>
                    </div>
                </li>
            </ul>
            <ul class="list-inline mb-0">
                <li class="list-inline-item mr-0 p-3 border-right border-left border-white-0_1">
                    <a href="#"><i class="ti-facebook"></i></a>
                </li>
                <li class="list-inline-item mr-0 p-3 border-right border-white-0_1">
                    <a href="#"><i class="ti-twitter"></i></a>
                </li>
                <li class="list-inline-item mr-0 p-3 border-right border-white-0_1">
                    <a href="#"><i class="ti-vimeo"></i></a>
                </li>
                <li class="list-inline-item mr-0 p-3 border-right border-white-0_1">
                    <a href="#"><i class="ti-linkedin"></i></a>
                </li>
            </ul>
            <ul class="list-inline mb-0">
                <li class="list-inline-item mr-0 p-md-3 p-2 border-right border-left border-white-0_1">
                    <a href="{{url('login')}}">Login</a>
                </li>
                <li class="list-inline-item mr-0 p-md-3 p-2 border-right border-white-0_1">
                    <a href="signup.html">Register</a>
                </li>
            </ul>
        </div> <!-- END END row-->
    </div> <!-- END container-->
</header>
<!-- END site header-->
<nav class="ec-nav sticky-top bg-white">
    <div class="container">
        <div class="navbar p-0 navbar-expand-lg">
            <div class="navbar-brand">
                <a class="logo-default" href="index.html"><img alt="" src="{{asset('template/front/assets/img/logo-black.png')}}"></a>
            </div>
            <span aria-expanded="false" class="navbar-toggler ml-auto collapsed" data-target="#ec-nav__collapsible" data-toggle="collapse">
                    <div class="hamburger hamburger--spin js-hamburger">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                </span>
            <div class="collapse navbar-collapse when-collapsed" id="ec-nav__collapsible">
                <ul class="nav navbar-nav ec-nav__navbar ml-auto">
                    <li class="nav-item nav-item__has-megamenu megamenu-col-2">
                        <a class="nav-link active" href="index.html">Home</a>
                    </li>
                    <li class="nav-item nav-item__has-megamenu megamenu-col-2">
                        <a class="nav-link" href="all-courses.html">Courses</a>
                    </li>
                    <li class="nav-item nav-item__has-megamenu megamenu-col-2">
                        <a class="nav-link" href="teachers.html">Teachers</a>
                    </li>
                    <li class="nav-item nav-item__has-megamenu megamenu-col-2">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item nav-item__has-megamenu megamenu-col-2">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div> <!-- END container-->
</nav>
<!-- END ec-nav -->

@yield('section')


<footer class="site-footer">
    <div class="footer-top bg-dark text-white-0_6 pt-5 paddingBottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mt-5">
                    <img src="{{asset('template/front/assets/img/logo-white.png')}}" alt="Logo">
                    <div class="margin-y-40">
                        <p>
                            Nunc placerat mi id nisi interdm they mtolis. Praesient is haretra justo ught scel erisque placer.
                        </p>
                    </div>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a class="iconbox bg-white-0_2 hover:primary" href=""><i class="ti-facebook"> </i></a></li>
                        <li class="list-inline-item"><a class="iconbox bg-white-0_2 hover:primary" href=""><i class="ti-twitter"> </i></a></li>
                        <li class="list-inline-item"><a class="iconbox bg-white-0_2 hover:primary" href=""><i class="ti-linkedin"> </i></a></li>
                        <li class="list-inline-item"><a class="iconbox bg-white-0_2 hover:primary" href=""><i class="ti-pinterest"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mt-5">
                    <h4 class="h5 text-white">Contact Us</h4>
                    <div class="width-3rem bg-primary height-3 mt-3"></div>
                    <ul class="list-unstyled marginTop-40">
                        <li class="mb-3"><i class="ti-headphone mr-3"></i><a href="tel:01010214571">01010214571</a></li>
                        <li class="mb-3"><i class="ti-email mr-3"></i><a href="mailto:support@educat.com">support@educat.com</a></li>
                        <li class="mb-3">
                            <div class="media">
                                <i class="ti-location-pin mt-2 mr-3"></i>
                                <div class="media-body">
                                    <span> Egypt , Cairo </span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mt-5">
                    <h4 class="h5 text-white">Quick links</h4>
                    <div class="width-3rem bg-primary height-3 mt-3"></div>
                    <ul class="list-unstyled marginTop-40">
                        <li class="mb-2"><a href="#">About Us</a></li>
                        <li class="mb-2"><a href="#">Contact Us</a></li>
                        <li class="mb-2"><a href="#">Students</a></li>
                        <li class="mb-2"><a href="#">Admission</a></li>
                        <li class="mb-2"><a href="#">Events</a></li>
                        <li class="mb-2"><a href="#">Latest News</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 mt-5">
                    <h4 class="h5 text-white">Newslatter</h4>
                    <div class="width-3rem bg-primary height-3 mt-3"></div>
                    <div class="marginTop-40">
                        <p class="mb-4">Subscribe to get update and information. Don't worry, we won't send spam!</p>
                        <form class="marginTop-30" action="#" method="POST">
                            <div class="input-group">
                                <input type="text" placeholder="Enter your email" class="form-control py-3 border-white" required="">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">Subscribe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- END row-->
        </div> <!-- END container-->
    </div> <!-- END footer-top-->
    <div class="footer-bottom bg-black-0_9 py-5 text-center">
        <div class="container">
            <p class="text-white-0_5 mb-0">&copy; 2020 Educati. All rights reserved. Created by <a href="#" target="_blunk">MineCores</a></p>
        </div>
    </div> <!-- END footer-bottom-->
</footer>
<!-- END site-footer -->
<div class="scroll-top">
    <i class="ti-angle-up"></i>
</div>
<script src="{{asset('template/front/assets/js/vendors.bundle.js')}}"></script>
<script src="{{asset('template/front/assets/js/scripts.js')}}"></script>
@yield('script')
</body>

</html>