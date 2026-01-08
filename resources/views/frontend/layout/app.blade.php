<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - NiceShop Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <meta name="robots" content="noindex, nofollow">

    <!-- Favicons -->
    <link href="frontend/assets/img/favicon.png" rel="icon">
    <link href="frontend/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('frontend/vendors/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendors/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendors/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendors/aos/aos.css" rel="stylesheet')}}">
    <link href="{{asset('frontend/vendors/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendors/drift-zoom/drift-basic.css')}}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{asset('frontend/assets/css/main.css')}}" rel="stylesheet">

</head>

<body class="index-page">

@include('frontend.components.header')
<main class="main">
    @yield('main')
</main>
@include('frontend.components.footer')
<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{asset('frontend/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/vendors/php-email-form/validate.js')}}"></script>
<script src="{{asset('frontend/vendors/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('frontend/vendors/aos/aos.js')}}"></script>
<script src="{{asset('frontend/vendors/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('frontend/vendors/drift-zoom/Drift.min.js')}}"></script>
<script src="{{asset('frontend/vendors/purecounter/purecounter_vanilla.js')}}"></script>

<!-- Main JS File -->
<script src="{{asset('frontend/assets/js/main.js')}}"></script>

</body>

</html>
