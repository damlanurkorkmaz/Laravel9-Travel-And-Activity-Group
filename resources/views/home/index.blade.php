@extends('layouts.frontbase')

@section('title', $setting->title)
@section('keywords',$setting->keywords )
@section('description', $setting->description)
@section('icon', Storage::url($setting->icon))


@section('content')
    @include('home._slider')
    <!-- Features Start -->
    <div class="container-fluid py-5 py-lg-0 feature">
        <div class="row py-5 py-lg-0">
            <div class="col-lg-4 p-0">
                <div class="feature-item d-flex align-items-center border-right px-5 mb-4 mb-lg-0">
                    <i class="flaticon-policeman display-3 text-primary mr-4"></i>
                    <div class="">
                        <h5 class="mb-3">Professional Staff</h5>
                        <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci velit id libero
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div class="feature-item d-flex align-items-center border-right px-5 mb-4 mb-lg-0">
                    <i class="flaticon-helmet display-3 text-primary mr-4"></i>
                    <div class="">
                        <h5 class="mb-3">Latest Equipments</h5>
                        <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci velit id libero
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div class="feature-item d-flex align-items-center px-5">
                    <i class="flaticon-surveillance display-3 text-primary mr-4"></i>
                    <div class="">
                        <h5 class="mb-3">24/7 Support</h5>
                        <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci velit id libero
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- About Start -->
    <div class="container-fluid mb-5" style="background: #f6f6f6;">
        <div class="row align-items-center">
            <div class="col-lg-6 px-0">
                <img width="100%" class="img-fluid" src="{{asset('assets')}}/img/about.jpg" alt="Image">
            </div>
            <div class="col-lg-6 py-5 py-lg-0 px-3 px-lg-5">
                <h5 class="text-primary mb-3">About Us</h5>
                <h1 class="mb-4">15 Years Experience</h1>
                <p>Labore vero lorem eos sed aliquy ipsum aliquy sed. Vero dolore dolore takima ipsum lorem rebum</p>
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


    <!-- Services Start -->
    <div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h5 class="text-primary mb-3">Our Services</h5>
            <h1 class="m-0">Premium Security Services</h1>
        </div>
        <div class="row pb-3">
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card mb-2 p-3">
                    <img class="card-img-top" src="{{asset('assets')}}/img/service-1.jpg" alt="">
                    <div class="card-body bg-secondary d-flex align-items-center p-0">
                        <h3 class="flaticon-desk font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                        <h6 class="card-title text-white text-truncate m-0">Office Security</h6>
                    </div>
                    <div class="card-footer">
                        Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum sit vero stet ipsum justo et.
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card mb-2 p-3">
                    <img class="card-img-top" src="{{asset('assets')}}/img/service-2.jpg" alt="">
                    <div class="card-body bg-secondary d-flex align-items-center p-0">
                        <h3 class="flaticon-home font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                        <h6 class="card-title text-white text-truncate m-0">Home Security</h6>
                    </div>
                    <div class="card-footer">
                        Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum sit vero stet ipsum justo et.
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card mb-2 p-3">
                    <img class="card-img-top" src="{{asset('assets')}}/img/service-3.jpg" alt="">
                    <div class="card-body bg-secondary d-flex align-items-center p-0">
                        <h3 class="flaticon-factory font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                        <h6 class="card-title text-white text-truncate m-0">Industry Security</h6>
                    </div>
                    <div class="card-footer">
                        Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum sit vero stet ipsum justo et.
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card mb-2 p-3">
                    <img class="card-img-top" src="{{asset('assets')}}/img/service-4.jpg" alt="">
                    <div class="card-body bg-secondary d-flex align-items-center p-0">
                        <h3 class="flaticon-transportation font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                        <h6 class="card-title text-white text-truncate m-0">Transport Security</h6>
                    </div>
                    <div class="card-footer">
                        Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum sit vero stet ipsum justo et.
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card mb-2 p-3">
                    <img class="card-img-top" src="{{asset('assets')}}/img/service-5.jpg" alt="">
                    <div class="card-body bg-secondary d-flex align-items-center p-0">
                        <h3 class="flaticon-desk font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                        <h6 class="card-title text-white text-truncate m-0">Objects Security</h6>
                    </div>
                    <div class="card-footer">
                        Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum sit vero stet ipsum justo et.
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card mb-2 p-3">
                    <img class="card-img-top" src="{{asset('assets')}}/img/service-6.jpg" alt="">
                    <div class="card-body bg-secondary d-flex align-items-center p-0">
                        <h3 class="flaticon-bodyguard font-weight-normal d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white m-0 mr-3" style="width: 45px; height: 45px;"></h3>
                        <h6 class="card-title text-white text-truncate m-0">Private Security</h6>
                    </div>
                    <div class="card-footer">
                        Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum sit vero stet ipsum justo et.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


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
                <img class="img-thumbnail mb-4 p-3" src="{{asset('assets')}}/img/feature.jpg" alt="Image">
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
                        <img class="img-thumbnail p-3" src="{{asset('assets')}}/img/team-1.jpg" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="row mb-2 align-items-center">
                    <div class="col-6">
                        <img class="img-thumbnail p-3" src="{{asset('assets')}}/img/team-2.jpg" alt="Image">
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
                        <img class="img-thumbnail p-3" src="{{asset('assets')}}/img/team-3.jpg" alt="Image">
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


    <!-- Testimonial Start -->
    <div class="container-fluid my-5 p-0 py-5" style="background: #f6f6f6;">
        <div class="container p-0 py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h5 class="text-primary mb-3">Testimonial</h5>
                <h1 class="m-0">What Our Clients Say</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item px-3">
                    <div class="testimonial-text position-relative border bg-light mb-4 py-3 px-4">
                        Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolores tempor voluptua ipsum sanctus clita
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="img-thumbnail bg-light rounded-circle" src="{{asset('assets')}}/img/testimonial-1.jpg" style="width: 80px; height: 80px; padding: 12px;" alt="Image">
                        <div class="pl-4">
                            <h6 class="text-primary">Client Name</h6>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item px-3">
                    <div class="testimonial-text position-relative border bg-light mb-4 py-3 px-4">
                        Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolores tempor voluptua ipsum sanctus clita
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="img-thumbnail bg-light rounded-circle" src="{{asset('assets')}}/img/testimonial-2.jpg" style="width: 80px; height: 80px; padding: 12px;" alt="Image">
                        <div class="pl-4">
                            <h6 class="text-primary">Client Name</h6>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item px-3">
                    <div class="testimonial-text position-relative border bg-light mb-4 py-3 px-4">
                        Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolores tempor voluptua ipsum sanctus clita
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="img-thumbnail bg-light rounded-circle" src="{{asset('assets')}}/img/testimonial-3.jpg" style="width: 80px; height: 80px; padding: 12px;" alt="Image">
                        <div class="pl-4">
                            <h6 class="text-primary">Client Name</h6>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item px-3">
                    <div class="testimonial-text position-relative border bg-light mb-4 py-3 px-4">
                        Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolores tempor voluptua ipsum sanctus clita
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="img-thumbnail bg-light rounded-circle" src="{{asset('assets')}}/img/testimonial-4.jpg" style="width: 80px; height: 80px; padding: 12px;" alt="Image">
                        <div class="pl-4">
                            <h6 class="text-primary">Client Name</h6>
                            <p class="m-0">Profession</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h5 class="text-primary mb-3">Recent Blog</h5>
            <h1 class="m-0">Latest From Our Blog</h1>
        </div>
        <div class="row pb-3">
            <div class="col-lg-4 mb-4">
                <div class="card mb-2 p-3">
                    <img class="card-img-top" src="{{asset('assets')}}/img/blog-1.jpg" alt="">
                    <div class="card-body bg-secondary d-flex align-items-center p-0">
                        <h6 class="card-title text-white text-truncate m-0 ml-3">Diam amet eos at no eos</h6>
                        <a href="" class="fa fa-link d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white text-decoration-none m-0 ml-auto" style="width: 45px; height: 45px;"></a>
                    </div>
                    <div class="card-footer py-3 px-4">
                        <div class="d-flex mb-2">
                            <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                            <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                            <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                        </div>
                        <p class="m-0">Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum sit vero stet ipsum justo et.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card mb-2 p-3">
                    <img class="card-img-top" src="{{asset('assets')}}/img/blog-2.jpg" alt="">
                    <div class="card-body bg-secondary d-flex align-items-center p-0">
                        <h6 class="card-title text-white text-truncate m-0 ml-3">Diam amet eos at no eos</h6>
                        <a href="" class="fa fa-link d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white text-decoration-none m-0 ml-auto" style="width: 45px; height: 45px;"></a>
                    </div>
                    <div class="card-footer py-3 px-4">
                        <div class="d-flex mb-2">
                            <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                            <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                            <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                        </div>
                        <p class="m-0">Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum sit vero stet ipsum justo et.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card mb-2 p-3">
                    <img class="card-img-top" src="{{asset('assets')}}/img/blog-3.jpg" alt="">
                    <div class="card-body bg-secondary d-flex align-items-center p-0">
                        <h6 class="card-title text-white text-truncate m-0 ml-3">Diam amet eos at no eos</h6>
                        <a href="" class="fa fa-link d-flex flex-shrink-0 align-items-center justify-content-center bg-primary text-white text-decoration-none m-0 ml-auto" style="width: 45px; height: 45px;"></a>
                    </div>
                    <div class="card-footer py-3 px-4">
                        <div class="d-flex mb-2">
                            <small class="mr-3"><i class="fa fa-user text-primary"></i> Admin</small>
                            <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small>
                            <small class="mr-3"><i class="fa fa-comments text-primary"></i> 15</small>
                        </div>
                        <p class="m-0">Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum sit vero stet ipsum justo et.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection
