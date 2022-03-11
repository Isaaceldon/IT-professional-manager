<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Professionnal manager</title>
    <link rel="stylesheet" href="{{ asset('/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/lib/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/lib/lightbox/css/lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/lib/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/sweetalert2.min.css') }}">

</head>

<body>

    <div class="wrapper">
        @include('partials.header')
        @yield('main-content')
        @include('partials.footer')
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/assets/js/main.js') }}"></script>
    <script src="{{ asset('/assets/js/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('/assets/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('/assets/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('/assets/lib/slick/slick.min.js') }}"></script>

    <script type="text/javascript">
        // Testimonial Slider
        $('.testimonial-slider').slick({
            infinite: true,
            autoplay: true,
            arrows: false,
            dots: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            asNavFor: '.testimonial-slider-nav'
        });
        $('.testimonial-slider-nav').slick({
            arrows: false,
            dots: false,
            focusOnSelect: true,
            centerMode: true,
            centerPadding: '22px',
            slidesToShow: 3,
            asNavFor: '.testimonial-slider'
        });
        $('.testimonial .slider-nav').css({
            "position": "relative",
            "height": "160px"
        });



        // Portfolio isotope and filter
        var portfolioIsotope = $('.portfolio-container').isotope({
            itemSelector: '.portfolio-item',
            layoutMode: 'fitRows'
        });

        $('#portfolio-flters li').on('click', function() {
            $("#portfolio-flters li").removeClass('filter-active');
            $(this).addClass('filter-active');

            portfolioIsotope.isotope({
                filter: $(this).data('filter')
            });
        });
    </script>
</body>

</html>
