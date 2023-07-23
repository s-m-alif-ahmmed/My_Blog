<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{asset('/')}}frontEndAsset/css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}frontEndAsset/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}frontEndAsset/css/fontawesome.css">
    <link rel="stylesheet" href="{{asset('/')}}frontEndAsset/css/style.css">

{{--    Edu Hub Links--}}

    <link rel="icon" type="image/x-icon" href="{{asset('/')}}frontEndAsset/assets/img/logo/favicon.png">

    <link rel="stylesheet" href="{{asset('/')}}frontEndAsset/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}frontEndAsset/assets/css/all-fontawesome.min.css">
    <link rel="stylesheet" href="{{asset('/')}}frontEndAsset/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{asset('/')}}frontEndAsset/assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="{{asset('/')}}frontEndAsset/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('/')}}frontEndAsset/assets/css/style.css">


</head>
<body>

@include('public.include.header')

@yield('content')

@include('public.include.footer')


<script src="{{asset('/')}}frontEndAsset/js/all.js"></script>

<script src="{{asset('/')}}frontEndAsset/js/bootstrap.bundle.js"></script>

<script src="{{asset('/')}}frontEndAsset/js/fontawesome.js"></script>

{{--EduHub Links--}}

{{--<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>--}}
{{--<script src="{{asset('/')}}frontEndAsset/assets/js/jquery-3.6.0.min.js"></script>--}}
{{--<script src="{{asset('/')}}frontEndAsset/assets/js/modernizr.min.js"></script>--}}
{{--<script src="{{asset('/')}}frontEndAsset/assets/js/bootstrap.bundle.min.js"></script>--}}
<script src="{{asset('/')}}frontEndAsset/assets/js/imagesloaded.pkgd.min.js"></script>
<script src="{{asset('/')}}frontEndAsset/assets/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('/')}}frontEndAsset/assets/js/isotope.pkgd.min.js"></script>
<script src="{{asset('/')}}frontEndAsset/assets/js/jquery.appear.min.js"></script>
<script src="{{asset('/')}}frontEndAsset/assets/js/jquery.easing.min.js"></script>
<script src="{{asset('/')}}frontEndAsset/assets/js/owl.carousel.min.js"></script>
<script src="{{asset('/')}}frontEndAsset/assets/js/counter-up.js"></script>
<script src="{{asset('/')}}frontEndAsset/assets/js/masonry.pkgd.min.js"></script>
{{--<script src="{{asset('/')}}frontEndAsset/assets/js/wow.min.js"></script>--}}
{{--<script src="{{asset('/')}}frontEndAsset/assets/js/main.js"></script>--}}


</body>
</html>
