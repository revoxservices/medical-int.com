@extends('layouts.managers')

@section('content')
    <div class="page-content-wrapper ">
        <div class="content sm-gutter">

            <div data-pages="parallax">
                <div class="container-fluid p-l-25 p-r-25 sm-p-l-0 sm-p-r-0">
                    <div class="inner">
                        <!-- START BREADCRUMB -->
                        <ol class="breadcrumb sm-p-b-5">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="container-fluid p-l-25 p-r-25 p-t-0 p-b-25 sm-padding-10">
                <div class="row">
                    <div class="col-lg-4 d-flex">
                        <div class="card no-border widget-loader-bar m-b-10">
                            <div class="container-xs-height full-height">
                                <div class="row-xs-height">
                                    <div class="col-xs-height col-top">
                                        <div class="card-header  top-left top-right">
                                            <div class="card-title">
                                                <span class="font-montserrat all-caps d-flex align-items-center">TOTAL CONTACTOS <i class="pg-icon">chevron_right</i>
                                                </span>
                                            </div>
                                            <div class="card-controls">
                                                <ul>
                                                    <li><a href="#" class="portlet-refresh text-black"
                                                            data-toggle="refresh"><i
                                                                class="portlet-icon portlet-icon-refresh"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-xs-height">
                                    <div class="col-xs-height col-top">
                                        <div class="p-l-20 p-t-50 p-b-20 p-r-20">
                                            <h3 class="no-margin p-b-5">{{ count($contacts) }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-xs-height">
                                    <div class="col-xs-height col-bottom">
                                        <div class="progress progress-small m-b-0">
                                            <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                                            <div class="progress-bar progress-bar-primary" style="width:71%"></div>
                                            <!-- END BOOTSTRAP PROGRESS -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4  d-flex">
                        <div class="card no-border widget-loader-bar m-b-10">
                            <div class="container-xs-height full-height">
                                <div class="row-xs-height">
                                    <div class="col-xs-height col-top">
                                        <div class="card-header  top-left top-right">
                                            <div class="card-title">
                                                <span class="font-montserrat all-caps d-flex align-items-center">TOTAL BLOGS<i class="pg-icon">chevron_right</i>
                                                </span>
                                            </div>
                                            <div class="card-controls">
                                                <ul>
                                                    <li><a href="#" class="portlet-refresh text-black"
                                                            data-toggle="refresh"><i
                                                                class="portlet-icon portlet-icon-refresh"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-xs-height">
                                    <div class="col-xs-height col-top">
                                        <div class="p-l-20 p-t-50 p-b-20 p-r-20">
                                            <h3 class="no-margin p-b-5">{{ count($blogs) }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-xs-height">
                                    <div class="col-xs-height col-bottom">
                                        <div class="progress progress-small m-b-0">
                                            <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                                            <div class="progress-bar progress-bar-primary" style="width:71%"></div>
                                            <!-- END BOOTSTRAP PROGRESS -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4  d-flex">
                        <div class="card no-border widget-loader-bar m-b-10">
                            <div class="container-xs-height full-height">
                                <div class="row-xs-height">
                                    <div class="col-xs-height col-top">
                                        <div class="card-header  top-left top-right">
                                            <div class="card-title">
                                                <span class="font-montserrat all-caps d-flex align-items-center">TOTAL EQUIPO<i class="pg-icon">chevron_right</i>
                                                </span>
                                            </div>
                                            <div class="card-controls">
                                                <ul>
                                                    <li><a href="#" class="portlet-refresh text-black"
                                                            data-toggle="refresh"><i
                                                                class="portlet-icon portlet-icon-refresh"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-xs-height">
                                    <div class="col-xs-height col-top">
                                        <div class="p-l-20 p-t-50 p-b-20 p-r-20">
                                            <h3 class="no-margin p-b-5">{{ count($teams) }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-xs-height">
                                    <div class="col-xs-height col-bottom">
                                        <div class="progress progress-small m-b-0">
                                            <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                                            <div class="progress-bar progress-bar-primary" style="width:71%"></div>
                                            <!-- END BOOTSTRAP PROGRESS -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-4  d-flex">
                        <div class="card no-border widget-loader-bar m-b-10">
                            <div class="container-xs-height full-height">
                                <div class="row-xs-height">
                                    <div class="col-xs-height col-top">
                                        <div class="card-header  top-left top-right">
                                            <div class="card-title">
                                                <span class="font-montserrat all-caps d-flex align-items-center">TOTAL ALIADOS<i class="pg-icon">chevron_right</i>
                                                </span>
                                            </div>
                                            <div class="card-controls">
                                                <ul>
                                                    <li><a href="#" class="portlet-refresh text-black"
                                                            data-toggle="refresh"><i
                                                                class="portlet-icon portlet-icon-refresh"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-xs-height">
                                    <div class="col-xs-height col-top">
                                        <div class="p-l-20 p-t-50 p-b-20 p-r-20">
                                            <h3 class="no-margin p-b-5">{{ count($partners) }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-xs-height">
                                    <div class="col-xs-height col-bottom">
                                        <div class="progress progress-small m-b-0">
                                            <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                                            <div class="progress-bar progress-bar-primary" style="width:71%"></div>
                                            <!-- END BOOTSTRAP PROGRESS -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4  d-flex">
                        <div class="card no-border widget-loader-bar m-b-10">
                            <div class="container-xs-height full-height">
                                <div class="row-xs-height">
                                    <div class="col-xs-height col-top">
                                        <div class="card-header  top-left top-right">
                                            <div class="card-title">
                                                <span class="font-montserrat all-caps d-flex align-items-center">TOTAL USUARIOS<i class="pg-icon">chevron_right</i>
                                                </span>
                                            </div>
                                            <div class="card-controls">
                                                <ul>
                                                    <li><a href="#" class="portlet-refresh text-black"
                                                            data-toggle="refresh"><i
                                                                class="portlet-icon portlet-icon-refresh"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-xs-height">
                                    <div class="col-xs-height col-top">
                                        <div class="p-l-20 p-t-50 p-b-20 p-r-20">
                                            <h3 class="no-margin p-b-5">{{ count($users) }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-xs-height">
                                    <div class="col-xs-height col-bottom">
                                        <div class="progress progress-small m-b-0">
                                            <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                                            <div class="progress-bar progress-bar-primary" style="width:71%"></div>
                                            <!-- END BOOTSTRAP PROGRESS -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4  d-flex">
                        <div class="card no-border widget-loader-bar m-b-10">
                            <div class="container-xs-height full-height">
                                <div class="row-xs-height">
                                    <div class="col-xs-height col-top">
                                        <div class="card-header  top-left top-right">
                                            <div class="card-title">
                                                <span class="font-montserrat all-caps d-flex align-items-center">TOTAL PREGUNTAS<i class="pg-icon">chevron_right</i>
                                                </span>
                                            </div>
                                            <div class="card-controls">
                                                <ul>
                                                    <li><a href="#" class="portlet-refresh text-black"
                                                            data-toggle="refresh"><i
                                                                class="portlet-icon portlet-icon-refresh"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-xs-height">
                                    <div class="col-xs-height col-top">
                                        <div class="p-l-20 p-t-50 p-b-20 p-r-20">
                                            <h3 class="no-margin p-b-5">{{ count($faqs) }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-xs-height">
                                    <div class="col-xs-height col-bottom">
                                        <div class="progress progress-small m-b-0">
                                            <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                                            <div class="progress-bar progress-bar-primary" style="width:71%"></div>
                                            <!-- END BOOTSTRAP PROGRESS -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>


            </div>

        </div>
      
        <!-- END COPYRIGHT -->
    </div>

    
    <script src="{{ asset('/managers/assets/plugins/jquery/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/managers/assets/plugins/chart.min.js') }}" type="text/javascript"></script>


    <script>
        $(document).ready(function() {

           ß
        });
    </script>


@endsection
