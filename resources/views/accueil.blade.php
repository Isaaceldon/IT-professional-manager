@extends('layouts.head')
@section('main-content')
    <!-- Hero Start -->
    <div class="hero">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2>WELCOME ON</h2>
                    <h2 class="text-danger">MeetPro-World</h2>
                    <p class="text-justify">Are you a professional in one of the IT fields? Do you want to help other
                        people solve their project
                        problems? You want to post your projects, showcase your skills and allow people to view your profile
                        and get in touch with you?
                    </p>
                    <a class="btn" href="">Register Now</a>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/img/hero.png') }}" alt="Image">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="about">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div id="video-section">


                        <img src="{{ asset('assets/img/poster.jpg') }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="section-title" style="color:teal">Learn About Us</h2>
                    <p class="text-justify">
                        MeetPro-World is a meeting platform for professionals in the various fields of computer scienc. It
                        is a platform that allows professionals in the field of computer science to
                        showcase their skills and share their projects with the world
                    </p>
                    <p class="text-justify">
                        Anyone can consult the profile of these professionals and contact them in order to submit their
                        ambiguities and ask for their guidance on his projects for the improvement of his skills in any of
                        the areas of computer science
                    </p>
                    <a class="btn" href="">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="service">
        <div class="container-fluid">
            <div class="section-header">
                <h2 style="color:teal">Some fields of Computer science</h2>
                <p>Do you need help, coaching or particular accompaniment in one of the fields of computer science in order
                    to realize your projects and improve your skills? We have professionals for you.</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <h3 class="text-danger">Web Design</h3>
                        <img src="{{ asset('assets/img/icon-service-1.png') }}" alt="Service">
                        <p>We have professional web designers who produce must-have stuff that you can contact easily</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <h3 class="text-danger">Development</h3>
                        <img src="{{ asset('assets/img/icon-service-2.png') }}" alt="Service">
                        <p>We have professional web developer who produce must-have stuff that you can contact easily</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <h3 class="text-danger">UI Design</h3>
                        <img src="{{ asset('assets/img/icon-service-3.png') }}" alt="Service">
                        <p>We have professional web designers who produce must-have stuff that you can contact easily</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <h3 class="text-danger">Programming</h3>
                        <img src="{{ asset('assets/img/icon-service-4.png') }}">
                        <p>We have professional programmer who produce must-have stuff that you can contact easily</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <h3 class="text-danger">Graphic Design</h3>
                        <img src="{{ asset('assets/img/icon-service-5.png') }}" alt="Service">
                        <p>We have professional graphic designers who produce must-have stuff that you can contact easily</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <h3 class="text-danger">Video Editing</h3>
                        <img src="{{ asset('assets/img/icon-service-6.png') }}" alt="Service">
                        <p>We have professional video editor who produce must-have stuff that you can contact easily</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <h3 class="text-danger">Hacking</h3>
                        <img src="{{ asset('assets/img/icon-service-7.png') }}" alt="Service">
                        <p>We have professional hackers of security who produce must-have stuff that you can contact easily</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <h3 class="text-danger">IT Security</h3>
                        <img src="{{ asset('assets/img/icon-service-8.png') }}" alt="Service">
                        <p>We have professional in the IT-Security who produce must-have stuff that you can contact easily</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Testimonial Start -->
    <div class="testimonial">
        <div class="container">
            <div class="section-header">
                <h2 style="color:teal">Clients Review</h2>
                <p>Some testimonials from people who used our platform and got in touch with our professionals and were satisfied</p>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-slider-nav">
                        <div class="slider-nav"><img src="{{ asset('assets/img/testimonial-1.jpg') }}"
                                alt="Testimonial"></div>
                        <div class="slider-nav"><img src="{{ asset('assets/img/testimonial-2.jpg') }}"
                                alt="Testimonial"></div>
                        <div class="slider-nav"><img src="{{ asset('assets/img/testimonial-3.jpg') }}"
                                alt="Testimonial"></div>
                        <div class="slider-nav"><img src="{{ asset('assets/img/testimonial-4.jpg') }}"
                                alt="Testimonial"></div>
                        <div class="slider-nav"><img src="{{ asset('assets/img/testimonial-1.jpg') }}"
                                alt="Testimonial"></div>
                        <div class="slider-nav"><img src="{{ asset('assets/img/testimonial-2.jpg') }}"
                                alt="Testimonial"></div>
                        <div class="slider-nav"><img src="{{ asset('assets/img/testimonial-3.jpg') }}"
                                alt="Testimonial"></div>
                        <div class="slider-nav"><img src="{{ asset('assets/img/testimonial-4.jpg') }}"
                                alt="Testimonial"></div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-slider">
                        <div class="slider-item">
                            <h3>Romérik LOKOSSOU</h3>
                            <h4>Backend developer</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur
                                facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum,
                                viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h3>Johanu GANDONOU</h3>
                            <h4>Web ingeener</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur
                                facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum,
                                viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h3>Grâce OGAH</h3>
                            <h4>Graphic designer</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur
                                facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum,
                                viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                        </div>
                        <div class="slider-item">
                            <h3>Delphine TOVIEGBE</h3>
                            <h4>Mobile developer</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur
                                facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum,
                                viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


   
@endsection
