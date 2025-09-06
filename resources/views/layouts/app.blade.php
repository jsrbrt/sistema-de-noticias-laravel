<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets_site/images/zaite.png') }}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('assets_site/js/app.js') }}" defer></script>
    <script src="{{ asset('assets_site/splide/js/splide.min.js') }}"></script>
    <script src="{{ asset('assets_site/splideAUTO_SCROLL/dist/js/splide-extension-auto-scroll.min.js') }}"></script>
    <script src="js/instafeed.min.js"></script>
    <script src="{{ asset('assets_site/js/jquery.js') }}"></script>
    <script src="{{ asset('assets_site/js/jquery.mask.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&family=Montserrat:wght@300;400;700&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/futura-std-4" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets_site/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets_site/css/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_site/splide/css/splide.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_site/splide/css/splide-core.min.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
</head>

<body>
    @include('templates.templateCabecalho')

    <main>
        @yield('content')

        <div class="zaite">
            <a href="http://zaite.com.br/" target="_blank"><img src="{{ asset('assets_site/images/zaite.png') }}"
                    alt="zaite"></a>
        </div>
    </main>

    <script src="{{ asset('assets_site/js/toastr.min.js') }}"></script>

   
    

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

   

    

    @yield('js')

</body>

</html>
