@extends('layouts.frontbase')

@section('title', $setting->title)
@section('keywords',$setting->keywords )
@section('description', $setting->description)
@section('icon', Storage::url($setting->icon))

@section('content')



    <!-- Navbar Start -->
    <div class="container-fluid p-0 mb-5">
        <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-0">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">Safety</span>First</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav m-auto py-4">
                    <a href="index.html" class="nav-item nav-link">Home</a>
                    <a href="about.html" class="nav-item nav-link active">About</a>
                    <a href="service.html" class="nav-item nav-link">Services</a>
                    <a href="guard.html" class="nav-item nav-link">Guards</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="single.html" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
    <!-- About Start -->


    <div class="container-fluid mb-5 py-5">


        <div class="row align-items-center">
            <div class="col-lg-6 px-0">
                <img width="100%" class="img-fluid" src="img/about.jpg" alt="Image">
            </div>
            <div class="col-lg-6 py-5 py-lg-0 px-3 px-lg-5">
                <h5 class="text-primary mb-3">About Us</h5>
                <h1 class="mb-4">15 Years Experience</h1>
                <p>{!! $setting->aboutus!!}</p>
                <div class="row py-2">
                    <div class="col-sm-6">
                        <i class="flaticon-approved display-3 text-primary"></i>
                        <h5 class="mt-2">Govt Approved</h5>
                        <p>Ipsum sanctu dolor ipsum dolore sit et kasd duo</p>
                    </div>
                    <div class="col-sm-6">
                        <i class="flaticon-medal display-3 text-primary"></i>
                        <h5 class="mt-2">Award Winning</h5>
                        <p>Ipsum sanctu dolor ipsum dolore sit et kasd duo</p>
                    </div>
                </div>
                <a href="" class="btn btn-lg px-4 btn-primary">Learn More</a>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-fluid bg-primary my-5 py-5 text-center">
        <div class="row pt-5">
            <div class="col-lg-3 col-sm-6 mb-5">
                <h5 class="fa fa-user-shield mb-4 d-inline-flex align-items-center justify-content-center border rounded-circle text-white" style="width: 50px; height: 50px;"></h5>
                <h4 class="display-4 text-white mb-3" data-toggle="counter-up">250</h4>
                <h6 class="text-white m-0">Our Staff</h6>
            </div>
            <div class="col-lg-3 col-sm-6 mb-5">
                <h5 class="fa fa-users mb-4 d-inline-flex align-items-center justify-content-center border rounded-circle text-white" style="width: 50px; height: 50px;"></h5>
                <h4 class="display-4 text-white mb-3" data-toggle="counter-up">1500</h4>
                <h6 class="text-white m-0">Happy Client</h6>
            </div>
            <div class="col-lg-3 col-sm-6 mb-5">
                <h5 class="fa fa-shield-alt mb-4 d-inline-flex align-items-center justify-content-center border rounded-circle text-white" style="width: 50px; height: 50px;"></h5>
                <h4 class="display-4 text-white mb-3" data-toggle="counter-up">10000</h4>
                <h6 class="text-white m-0">Project Complete</h6>
            </div>
            <div class="col-lg-3 col-sm-6 mb-5">
                <h5 class="fa fa-award mb-4 d-inline-flex align-items-center justify-content-center border rounded-circle text-white" style="width: 50px; height: 50px;"></h5>
                <h4 class="display-4 text-white mb-3" data-toggle="counter-up">25</h4>
                <h6 class="text-white m-0">Award Winning</h6>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Features Start -->
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-5 mb-5">
                <h5 class="text-primary mb-3">Why Choose Us?</h5>
                <h1 class="mb-4">Top Level Security</h1>
                <img class="img-thumbnail mb-4 p-3" src="img/feature.jpg" alt="Image">
                <p>
                    Ea tempor ipsum kasd clita. Sea diam amet et rebum sit stet, vero sea est diam et sit ea sit et ea no
                </p>
                <a href="" class="btn btn-lg btn-primary mt-2">Learn More</a>
            </div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <h3 class="flaticon-policeman font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                                <h6 class="text-truncate m-0">High Security</h6>
                            </div>
                            <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos rebum sit</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <h3 class="flaticon-bodyguard font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                                <h6 class="text-truncate m-0">Trained Guards</h6>
                            </div>
                            <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos rebum sit</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <h3 class="flaticon-approved font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                                <h6 class="text-truncate m-0">Govt Approved</h6>
                            </div>
                            <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos rebum sit</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <h3 class="flaticon-medal font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                                <h6 class="text-truncate m-0">Award Winning</h6>
                            </div>
                            <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos rebum sit</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <h3 class="flaticon-helmet font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                                <h6 class="text-truncate m-0">Latest Equipments</h6>
                            </div>
                            <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos rebum sit</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <h3 class="flaticon-surveillance font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                                <h6 class="text-truncate m-0">24/7 Support</h6>
                            </div>
                            <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos rebum sit</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Subscribe Start -->
    <div class="container-fluid bg-primary my-5 py-5 text-center">
        <h1 class="text-white font-weight-bold mt-5 mb-3">Subscribe Our Newsletter</h1>
        <p class="text-white mb-4">Subscribe and get Our latest article in your inbox</p>
        <form class="form-inline justify-content-center mb-5">
            <div class="input-group">
                <input type="text" class="form-control-lg" placeholder="Your Email">
                <div class="input-group-append">
                    <button class="btn btn-secondary" type="submit">Subscribe</button>
                </div>
            </div>
        </form>
    </div>
    <!-- Subscribe End -->


    <!-- Team Start -->
    <div class="container pt-5 pb-3">
        <div class="d-flex flex-column text-center mb-5">
            <h5 class="text-primary mb-3">Security Officers</h5>
            <h1 class="m-0">Meet Our Security Officers</h1>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="row mb-2 align-items-center">
                    <div class="col-6 text-right">
                        <h6>Officer Name</h6>
                        <h6 class="text-muted font-weight-normal text-capitalize mb-2">Designation</h6>
                        <p>Ipsum tempor tempor dolor no est diam duo dolore, dolor eos dolor amet erat clita amet.</p>
                        <div class="d-flex justify-content-end">
                            <a href=""><i class="fab fa-twitter mr-3"></i></a>
                            <a href=""><i class="fab fa-facebook-f mr-3"></i></a>
                            <a href=""><i class="fab fa-linkedin-in mr-3"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-6">
                        <img class="img-thumbnail p-3" src="img/team-1.jpg" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="row mb-2 align-items-center">
                    <div class="col-6">
                        <img class="img-thumbnail p-3" src="img/team-2.jpg" alt="Image">
                    </div>
                    <div class="col-6 text-left">
                        <h6>Officer Name</h6>
                        <h6 class="text-muted font-weight-normal text-capitalize mb-2">Designation</h6>
                        <p>Ipsum tempor tempor dolor no est diam duo dolore, dolor eos dolor amet erat clita amet.</p>
                        <div class="d-flex justify-content-start">
                            <a href=""><i class="fab fa-twitter mr-3"></i></a>
                            <a href=""><i class="fab fa-facebook-f mr-3"></i></a>
                            <a href=""><i class="fab fa-linkedin-in mr-3"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="row mb-2 align-items-center">
                    <div class="col-6 text-right">
                        <h6>Officer Name</h6>
                        <h6 class="text-muted font-weight-normal text-capitalize mb-2">Designation</h6>
                        <p>Ipsum tempor tempor dolor no est diam duo dolore, dolor eos dolor amet erat clita amet.</p>
                        <div class="d-flex justify-content-end">
                            <a href=""><i class="fab fa-twitter mr-3"></i></a>
                            <a href=""><i class="fab fa-facebook-f mr-3"></i></a>
                            <a href=""><i class="fab fa-linkedin-in mr-3"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-6">
                        <img class="img-thumbnail p-3" src="img/team-3.jpg" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="row mb-2 align-items-center">
                    <div class="col-6">
                        <img class="img-thumbnail p-3" src="img/team-4.jpg" alt="Image">
                    </div>
                    <div class="col-6 text-left">
                        <h6>Officer Name</h6>
                        <h6 class="text-muted font-weight-normal text-capitalize mb-2">Designation</h6>
                        <p>Ipsum tempor tempor dolor no est diam duo dolore, dolor eos dolor amet erat clita amet.</p>
                        <div class="d-flex justify-content-start">
                            <a href=""><i class="fab fa-twitter mr-3"></i></a>
                            <a href=""><i class="fab fa-facebook-f mr-3"></i></a>
                            <a href=""><i class="fab fa-linkedin-in mr-3"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->



@endsection
