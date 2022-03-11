@extends('layouts.head')
@section('main-content')
    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Contact Us</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->



    <div id="contact" class=" row ">
        <div class="container">
            <div class="section-title text-center">
                <h3>Need Help? Sure we are Online!</h3>
                <p class="lead">Let us give you more details about the special offer website you want us. Please
                    fill out the form below. <br>We have million of professional who will happy to work with you !</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-7 col-sm-12" style="background: linear-gradient(to right, #00539C, #4F84C4 50%);">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="p-5" action="" name="contactform" method="post">
                            <div class="row row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-4">
                                    <input type="text" name="first_name" id="first_name" class="form-control"
                                        placeholder="First Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-4">
                                    <input type="text" name="last_name" id="last_name" class="form-control"
                                        placeholder="Last Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-4">
                                    <input type="email" name="email" id="email" class="form-control"
                                        placeholder="Your Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-4">
                                    <input type="text" name="phone" id="phone" class="form-control"
                                        placeholder="Your Phone">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <textarea style="resize:none;" class="form-control " name="comments" id="comments"
                                        rows="6" placeholder="Give us more details.."></textarea>
                                </div>
                                <div class="text-center col-md-12 mt-5 ">
                                    <input type="submit" value="SUBMIT" id="submit"
                                        class="btn col-md-8 text-white btn-danger" style="">
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- end col -->
                <div class=" col-md-5 col-sm-12">
                    <img src="{{ asset('assets/img/team-1.jpg') }}" width="" height="500">
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->


    <div class="mapouter  my-5">
        <div class="gmap_canvas"><iframe width="1365" height="500" id="gmap_canvas"
                src="https://maps.google.com/maps?q=abomey-calavi&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br>
            <style>
                .mapouter {
                    position: relative;
                    text-align: right;
                    height: 500px;
                    width: 1365px;
                }

            </style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
            <style>
                .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    height: 500px;
                    width: 1365px;
                }

            </style>
        </div>
    </div>
@endsection
