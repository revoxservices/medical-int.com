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
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    {!! SEOMeta::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}
    {!! JsonLdMulti::generate() !!}
    {!! SEO::generate() !!}
    {!! SEO::generate(true) !!}

    {!! app('seotools')->generate() !!}

    {{ Html::favicon('/pages/img/favicon.png') }}

    <meta name="csrf-token" content="{{ csrf_token() }}">
   

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('managers/assets/plugins/pace/pace-theme-flash.css') }}">
    <link rel="stylesheet" href="{{ url('managers/assets/plugins/fontawesome-pro-5/css/all.css') }}" >
    <link rel="stylesheet" href="{{ url('managers/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('managers/assets/plugins/jquery-scrollbar/jquery.scrollbar.css') }}">
    <link rel="stylesheet" href="{{ url('managers/assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ url('managers/assets/plugins/nvd3/nv.d3.min.css') }}">
    <link rel="stylesheet" href="{{ url('managers/assets/plugins/rickshaw/rickshaw.min.css') }}">
    <link rel="stylesheet" href="{{ url('managers/assets/plugins/bootstrap-datepicker/css/datepicker3.css') }}">
    <link rel="stylesheet" href="{{ url('managers/assets/plugins/simple-line-icons/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ url('managers/assets/plugins/summernote/summernote.css') }}">
    <link rel="stylesheet" href="{{ url('managers/assets/plugins/mapplic/css/mapplic.css') }}">
    <link rel="stylesheet" href="{{ url('managers/assets/css/dashboard.widgets.css') }}">
    <link rel="stylesheet" href="{{ url('managers/assets/css/dropzone.min.css') }}">
    <link rel="stylesheet" href="{{ url('managers/pages/css/pages-icons.css') }}">  
    <link rel="stylesheet" href="{{ url('managers/pages/css/pages.css') }}">
    <link rel="stylesheet" href="{{ url('managers/assets/css/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ url('managers/assets/plugins/picker/default.date.css') }}">
    
    <link rel="stylesheet" href="{{ url('managers/assets/plugins/datatables-responsive/css/datatables.responsive.css') }}">
    <link rel="stylesheet" href="{{ url('managers/assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css') }}">
    <link rel="stylesheet" href="{{ url('managers/assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css') }}">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">



    @stack('css')

</head>

<body class="fixed-header dashboard menu-pin">

    @include ('managers.includes.nav')

    <div class="page-container ">

        @include ('managers.includes.header')

        <div class="page-content-wrapper ">
            @yield('content')
        </div>
        
        @include('managers.partials.sections.modals.destroy')

    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"
    ></script>  
    <script src="{{ url('managers/assets/plugins/jquery/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('managers/assets/plugins/feather-icons/feather.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('managers/assets/plugins/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('managers/assets/plugins/popper/umd/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('managers/assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('managers/assets/plugins/jquery/jquery-easy.js') }}" type="text/javascript"></script>
    <script src="{{ url('managers/assets/plugins/modernizr.custom.js') }}" type="text/javascript"></script>
    <script src="{{ url('managers/assets/plugins/jquery/jquery-easy.js') }}" type="text/javascript"></script>       
    <script src="{{ url('managers/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>
    <script src="{{ url('managers/assets/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('managers/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('managers/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('managers/assets/plugins/quill/quill.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('managers/assets/plugins/summernote/summernote.js') }}" type="text/javascript"></script>
    <script src="{{ url('managers/assets/plugins/picker/picker.js') }}" type="text/javascript"></script>
    <script src="{{ url('managers/assets/plugins/picker/picker.date.js') }}" type="text/javascript"></script>
    <script src="{{ url('managers/assets/plugins/picker/picker.time.js') }}" type="text/javascript"></script>


    <script src="{{ url('managers/assets/plugins/jquery-validation/js/jquery.validate.js') }}" type="text/javascript"></script>

    <script src="{{ url('managers/assets/js/dashboard.js') }}" type="text/javascript"></script>
    <script src="{{ url('managers/assets/js/form_elements.js') }}" type="text/javascript"></script>
    <script src="{{ url('managers/assets/js/dropzone.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('managers/assets/js/daterangepicker.js') }}" type="text/javascript"></script>
    <script src="{{ url('managers/assets/js/scripts.js') }}" type="text/javascript"></script>
    <script src="{{ url('managers/pages/js/pages.js') }}" type="text/javascript"></script>

    
    <script src="{{ url('managers/assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js') }}"
        type="text/javascript"></script>
    <script
        src="{{ url('managers/assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ url('managers/assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js') }}"
        type="text/javascript"></script>
    <script
        src="{{ url('managers/assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js') }}"
        type="text/javascript"></script>
    <script src="{{ url('managers/assets/plugins/datatables-responsive/js/datatables.responsive.js') }}"
        type="text/javascript"></script>
    <script src="{{ url('managers/assets/plugins/datatables-responsive/js/lodash.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ url('managers/assets/js/datatables.js') }}" type="text/javascript"></script>
    <script src="{{ url('managers/assets/plugins/summernote/summernote.js') }}" type="text/javascript"></script>

    @stack('scripts')

</body>

</html>
