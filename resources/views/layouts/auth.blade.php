<!DOCTYPE html>

<html>

<head>

        
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="{{ $setting->description }}"/>
    <meta name="keywords" content="{{ $setting->seo }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $setting->label }}</title>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ url('pages/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('pages/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('pages/css/select.css') }}">


    {!! SEOMeta::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}
    {!! JsonLdMulti::generate() !!}
    {!! SEO::generate() !!}
    {!! SEO::generate(true) !!}


    {!! app('seotools')->generate() !!}
    {{ Html::favicon('/pages/img/favicon.png') }}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">



    @stack('css')

</head>

<body>

    @yield('content')

    <script src="{{ url('managers/assets/plugins/jquery/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
    
    @stack('scripts')

</body>

</html>
