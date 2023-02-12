<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="{{ $setting->description }}"/>
    <meta name="keywords" content="{{ $setting->seo }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $setting->label }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    

    {!! SEOMeta::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}
    {!! JsonLdMulti::generate() !!}
    {!! SEO::generate() !!}
    {!! SEO::generate(true) !!}

    {!! app('seotools')->generate() !!}


    {{ Html::favicon('/pages/img/favicon.png') }}

    @yield('head')

    <link rel="stylesheet" href="{{ url('pages/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('pages/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('pages/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ url('pages/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ url('pages/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('pages/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('pages/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ url('pages/css/default.css') }}">
    <link rel="stylesheet" href="{{ url('pages/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('pages/css/responsive.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


    @stack('css')


</head>

<body>



    
    <input id="whatsapp" type="hidden" value="{{ $setting->whatsapp }}" >

    @yield('content')

    @include ('pages.includes.socials')

    @include ('pages.includes.footer')


    <script src="{{ url('pages/js/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('pages/js/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('pages/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('pages/js/owl.carousel.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('pages/js/isotope.pkgd.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('pages/js/one-page-nav-min.js') }}" type="text/javascript"></script>
    <script src="{{ url('pages/js/slick.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('pages/js/ajax-form.js') }}" type="text/javascript"></script>
    <script src="{{ url('pages/js/wow.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('pages/js/jquery.nice-select.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('pages/js/jquery.scrollUp.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('pages/js/jquery.meanmenu.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('pages/js/imagesloaded.pkgd.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('pages/js/jquery.magnific-popup.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('pages/js/plugins.js') }}" type="text/javascript"></script>
    <script src="{{ url('pages/js/main.js') }}" type="text/javascript"></script>
    <script src="{{ url('pages/js/actions.js') }}" type="text/javascript"></script>
    <script src="{{ url('pages/js/typer.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/share.js') }}"></script>
    
    
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    @stack('scripts')

</body>

</html>
