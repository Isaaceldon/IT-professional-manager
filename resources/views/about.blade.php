@extends('layouts.head')
@section('main-content')

  <!-- Page Header Start -->
  <div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>About Us</h2>
            </div>
            <div class="col-12">
                <a href="">Home</a>
                <a href="">About Us</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

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

 <!-- FAQs Start -->
 <div class="faqs">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="section-title">Frequently Get in touch with professionals in fields like :</h2>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link collapsed" href="#" aria-expanded="true">
                               Developmenent & Programming
                            </a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link"  href="#">
                               Artificial Intelligence & IT Security
                            </a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <a class="card-link"  href="#">
                               Internet and Multimedia
                            </a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <a class="card-link"  href="#">
                                Software and computer network
                            </a>
                        </div>
                    </div> 
                </div>
                <a class="btn" href="">Contact professional</a>
            </div>
            <div class="col-md-6">
                <img src="{{asset('assets/img/faqs.jpg')}}" alt="Image">
            </div>
        </div>
    </div>
</div>
<!-- FAQs End -->

@endsection