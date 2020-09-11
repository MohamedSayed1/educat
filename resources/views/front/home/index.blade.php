@extends('front/layout/layout')


@section('section')


    <section class="height-90vh   flex-center bg-cover jarallax" data-dark-overlay="4" style="background:url({{asset('template/front/assets/img/1920x800/2.jpg')}}) no-repeat">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto text-center text-white">
                    <h4 class="display-5 font-weight-bold text-primary wow slideInUp">
                        Welcome To
                    </h4>
                    <h2 class="display-md-3 font-weight-bold text-white wow slideInUp">
                        Educat Center
                    </h2>
                    <p class="lead wow slideInUp">
                        This modern and inviting academic Center, colleges, university, on-line course, and other educational institutions.
                    </p>
                    <a href="all-courses.html" class="btn btn-primary btn-lg  mt-3 mx-2 wow slideInUp">Our Courses</a>
                    <a href="{{url('login')}}" class="btn btn-outline-white btn-lg  mt-3 mx-2 wow slideInUp">Login</a>
                </div>
            </div>
        </div>
    </section>
    <section class="padding-y-100">
        <div class="container">
            <div class="card flex-wrap flex-row padding-md-40 shadow-v2 z-index-10" data-offset-top-lg="-200">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{asset('template/front/assets/img/360x220/1.jpg')}}" class="card-img-top" alt="">
                        <h4 class="my-4">
                            Success Needs a Plan
                        </h4>
                        <p>
                            Investig ationes demons tavge khsed vunt lectores legere doka kuus quodk legunt saepius claritas esekist
                        </p>
                        <a href="#" class="btn btn-outline-primary mt-3 align-self-start">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{asset('template/front/assets/img/360x220/1.jpg')}}" class="card-img-top" alt="">
                        <h4 class="my-4">
                            Learn Courses Online
                        </h4>
                        <p>
                            Investig ationes demons tavge khsed vunt lectores legere doka kuus quodk legunt saepius claritas esekist
                        </p>
                        <a href="#" class="btn btn-outline-primary mt-3 align-self-start">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{asset('template/front/assets/img/360x220/1.jpg')}}" class="card-img-top" alt="">
                        <h4 class="my-4">
                            The Best Courses Tutors
                        </h4>
                        <p>
                            Investig ationes demons tavge khsed vunt lectores legere doka kuus quodk legunt saepius claritas esekist
                        </p>
                        <a href="#" class="btn btn-outline-primary mt-3 align-self-start">
                            Read More
                        </a>
                    </div>
                </div>
            </div> <!-- END row-->
            <div class="row marginTop-lg-100">
                <div class="col-lg-5 mr-auto mt-5">
                    <div class="owl-carousel" data-items="1" data-dots="true">
                        <img class="rounded" src="{{asset('template/front/assets/img/360x220/1.jpg')}}" alt="">
                        <img class="rounded" src="{{asset('template/front/assets/img/360x220/2.jpg')}}" alt="">
                        <img class="rounded" src="{{asset('template/front/assets/img/360x220/3.jpg')}}" alt="">
                        <img class="rounded" src="{{asset('template/front/assets/img/360x220/4.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 mt-5">
                    <h2>
                        <small class="d-block text-gray">Welcome to</small>
                        <span class="text-primary">Educat</span> Online Center
                    </h2>
                    <p class="my-4">
                        Investig ationes demons travge vunt lectores legee lrus quodk legunt saepius claritas est conctetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore edolore magna aliqua. Consectetur adipi sicing elited do eiusm tempor incididunt ut labore et.dolore magna.
                    </p>
                    <a href="#" class="btn btn-outline-primary">
                        Read More
                    </a>
                </div>
            </div> <!-- END row-->
        </div> <!-- END container-->
    </section>
    <section class="padding-y-100 bg-light-v5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="mb-4">
                        Popular Courses
                    </h2>
                    <div class="width-3rem height-4 rounded bg-primary mx-auto"></div>
                </div>
                <div class="col-md-4 mt-5">
                    <div class="card wow slideInUp" data-wow-delay=".1s">
                        <img class="card-img-top" src="{{asset('template/front/assets/img/360x220/1.jpg')}}" alt="">
                        <div class="padding-30">
                            <div class="d-flex justify-content-between">
                                <div class="media align-items-center">
                                    <img src="{{asset('template/front/assets/img/360x220/1.jpg')}}" alt="" class="iconbox mr-2">
                                    <div class="media-body">
                                        by <a href="#" class="text-primary">Abu Hurayra</a>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-opacity-primary iconbox iconbox-sm">
                                    <i class="ti-heart"></i>
                                </a>
                            </div>
                            <h2 class="h4 my-3">
                                Academic English
                            </h2>
                            <p>
                                Investig atones demons trave sed vunt lectores legere kurus quodk
                            </p>
                            <a href="#" class="btn btn-outline-primary mt-2">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5">
                    <div class="card wow slideInUp" data-wow-delay=".2s">
                        <img class="card-img-top" src="{{asset('template/front/assets/img/360x220/1.jpg')}}" alt="">
                        <div class="padding-30">
                            <div class="d-flex justify-content-between">
                                <div class="media align-items-center">
                                    <img src="{{asset('template/front/assets/img/avatar/5.jpg')}}" alt="" class="iconbox mr-2">
                                    <div class="media-body">
                                        by <a href="#" class="text-primary">Abu Hurayra</a>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-opacity-primary iconbox iconbox-sm">
                                    <i class="ti-heart"></i>
                                </a>
                            </div>
                            <h2 class="h4 my-3">
                                Modern Psychology
                            </h2>
                            <p>
                                Investig atones demons trave sed vunt lectores legere kurus quodk
                            </p>
                            <a href="#" class="btn btn-outline-primary mt-2">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-5">
                    <div class="card wow slideInUp" data-wow-delay=".3s">
                        <img class="card-img-top" src="{{asset('template/front/assets/img/360x220/1.jpg')}}" alt="">
                        <div class="padding-30">
                            <div class="d-flex justify-content-between">
                                <div class="media align-items-center">
                                    <img src="{{asset('template/front/assets/img/avatar/6.jpg')}}" alt="" class="iconbox mr-2">
                                    <div class="media-body">
                                        by <a href="#" class="text-primary">Abu Hurayra</a>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-opacity-primary iconbox iconbox-sm">
                                    <i class="ti-heart"></i>
                                </a>
                            </div>
                            <h2 class="h4 my-3">
                                Foreign Language
                            </h2>
                            <p>
                                Investig atones demons trave sed vunt lectores legere kurus quodk
                            </p>
                            <a href="#" class="btn btn-outline-primary mt-2">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center marginTop-60">
                    <a href="all-courses.html" class="btn btn-primary btn-lg">
                        See All Courses
                    </a>
                </div>
            </div> <!-- END row-->
        </div> <!-- END container-->
    </section>
    <section class="paddingTop-60 paddingBottom-100">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-3 col-md-6  mt-5 wow zoomIn" data-wow-delay=".1s">
                    <h1 class="ec-counter text-primary" data-to="520" data-speed="3000">
                        520
                    </h1>
                    <p class="lead text-dark">
                        Online Courses
                    </p>
                </div>
                <div class="col-lg-3 col-md-6  mt-5 wow zoomIn" data-wow-delay=".2s">
                    <h1 class="ec-counter text-primary" data-to="690" data-speed="3000">
                        690
                    </h1>
                    <p class="lead text-dark">
                        Trusted Tutors
                    </p>
                </div>
                <div class="col-lg-3 col-md-6  mt-5 wow zoomIn" data-wow-delay=".3s">
                    <h1 class="ec-counter text-primary" data-to="856084" data-speed="3000">
                        235K
                    </h1>
                    <p class="lead text-dark">
                        Online Students
                    </p>
                </div>
                <div class="col-lg-3 col-md-6  mt-5 wow zoomIn" data-wow-delay=".4s">
                    <h1 class="ec-counter text-primary" data-to="5204" data-speed="3000">
                        5204
                    </h1>
                    <p class="lead text-dark">
                        Success Stories
                    </p>
                </div>
            </div> <!-- END row-->
        </div> <!-- END container-->
    </section>
    <section class="padding-y-100 bg-cover jarallax" data-dark-overlay="5" style="background: url({{asset('template/front/assets/img/1920x800/1_1.jpg')}}) no-repeat">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mr-auto text-white">
                    <p class="lead">
                        SignUp With Us
                    </p>
                    <h1 class="display-lg-4">
                        Begin your Freshman Year Online with <span class="text-primary">Educat</span>
                    </h1>
                </div>
                <div class="col-lg-4 mt-5">
                    <div class="card px-4 py-5 text-center wow zoomIn">
                        <h4>
                            SignUp With Us
                        </h4>
                        <p>
                            Sign up and join online free courses
                        </p>
                        <form action="#" method="POST" class="mt-3">
                            <input type="text" class="form-control mb-3" placeholder="Name">
                            <input type="email" class="form-control mb-3" placeholder="Email">
                            <input type="tel" class="form-control mb-3" placeholder="Phone">
                            <button class="btn btn-primary btn-block mt-4" type="submit">Register now</button>
                        </form>
                    </div>
                </div>
            </div> <!-- END row-->
        </div> <!-- END container-->
    </section>

@endsection