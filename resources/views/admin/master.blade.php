<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>


    <link rel="stylesheet" href="{{asset('/')}}adminAsset/css/all.css" />
    <link rel="stylesheet" href="{{asset('/')}}adminAsset/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{asset('/')}}adminAsset/css/fontawesome.css" />
    <link rel="stylesheet" href="{{asset('/')}}adminAsset/css/owl.carousel.css" />
    <link rel="stylesheet" href="{{asset('/')}}adminAsset/css/style.css" />
    <link rel="stylesheet" href="{{asset('/')}}adminAsset/css/styles.css" />

</head>
<body>

@include('admin.include.header')

<div id="layoutSidenav">
    @include('admin.include.side-nav')

    <div id="layoutSidenav_content">
        <main>
            @yield('content')
        </main>
        @include('admin.include.footer')
    </div>
</div>


<script src="{{asset('/')}}adminAsset/js/all.js"></script>

<script src="{{asset('/')}}adminAsset/js/bootstrap.bundle.js"></script>

<script src="{{asset('/')}}adminAsset/js/fontawesome.js"></script>

<script src="{{asset('/')}}adminAsset/js/jquery.min.js"></script>

<script src="{{asset('/')}}adminAsset/js/owl.carousel.min.js"></script>


</body>
</html>

