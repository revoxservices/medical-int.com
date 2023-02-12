@extends('layouts.managers')

@section('content')

    <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content ">

            <!-- START CONTAINER FLUID -->
            <div class=" container-fluid   container-fixed-lg">


                <div id="rootwizard" class="m-t-50">
                    <div class="tab-content">

                        <div class="pane padding-20 sm-no-padding">

                            <ul class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('manager.dashboard') }}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a >Configuración</a>
                                </li>
                                <li class="breadcrumb-item active">Editar
                                </li>
                            </ul>



                            <div class="row row-same-height">
                                <div class="col-md-12">
                                    <div class="padding-30 sm-padding-5">

                                        {!! Form::open(['route' => ['manager.settings.update', $setting->id], 'method' => 'POST', 'files' => true, 'enctype' => 'multipart/form-data']) !!}
                                        {{ csrf_field() }}

                                        <textarea style="display: none" id="text-description" name="description"
                                            >{{ $setting->description }}</textarea>


                                        <textarea style="display: none" id="text-about" name="about"
                                            >{{ $setting->about }}</textarea>


                                        <textarea style="display: none" id="text-politic" name="politic"
                                            >{{ $setting->politic }}</textarea>

                                        <textarea style="display: none" id="text-mission" name="mission"
                                            >{{ $setting->mission }}</textarea>

                                        <textarea style="display: none" id="text-terms" name="terms"
                                            >{{ $setting->terms }}</textarea>

                                        <textarea style="display: none" id="text-vision" name="vision"
                                            >{{ $setting->vision }}</textarea>


                                        <div class="form-group-attached">
                                            <div class="row clearfix">
                                                <div class="col-sm-12 col-md-12">
                                                    <div class="form-group form-group-default required">
                                                        <label>Titulo</label>
                                                        {!! Form::text('label', $setting->label , ['class' => 'form-control' . ($errors->has('project_title') ? ' is-invalid' : '')]) !!}
                                                    </div>
                                                </div>
                                               
                                                <div class="col-sm-12 col-md-12">
                                                    <div class="form-group form-group-default required">
                                                        <label>Copyright</label>
                                                        {!! Form::text('copyright', $setting->copyright , ['class' => 'form-control' . ($errors->has('copyright') ? ' is-invalid' : '')]) !!}
                                                    </div>
                                                </div>

                                                <div class="col-sm-12 col-md-12">
                                                    <div class="form-group form-group-default required">
                                                        <label>SEO</label>
                                                        {!! Form::text('seo', $setting->seo , ['class' => 'form-control' . ($errors->has('seo') ? ' is-invalid' : '')]) !!}
                                                    </div>
                                                </div>



                                                



                                                

                                                <div class="col-sm-12 col-md-12">
                                                    <div class="form-group form-group-default required">
                                                        <label>Email</label>
                                                        {!! Form::text('email', $setting->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : '')]) !!}
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group form-group-default required">
                                                        <label>Telefono</label>
                                                        {!! Form::text('phone', $setting->phone, ['class' => 'form-control' . ($errors->has('phone') ? ' is-invalid' : '')]) !!}
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group form-group-default required">
                                                        <label>Whatsapp</label>
                                                        {!! Form::text('whatsapp', $setting->whatsapp, ['class' => 'form-control' . ($errors->has('whatsapp') ? ' is-invalid' : '')]) !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group form-group-default required">
                                                        <label>Facebook</label>
                                                        {!! Form::text('facebook', $setting->facebook, ['class' => 'form-control' . ($errors->has('facebook') ? ' is-invalid' : '')]) !!}
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group form-group-default required">
                                                        <label>Instagram</label>
                                                        {!! Form::text('instagram', $setting->instagram, ['class' => 'form-control' . ($errors->has('instagram') ? ' is-invalid' : '')]) !!}
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group form-group-default required">
                                                        <label>Linkedin</label>
                                                        {!! Form::text('linkedin', $setting->linkedin, ['class' => 'form-control' . ($errors->has('linkedin') ? ' is-invalid' : '')]) !!}
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group form-group-default required">
                                                        <label>Twitter</label>
                                                        {!! Form::text('twitter', $setting->twitter, ['class' => 'form-control' . ($errors->has('twitter    ') ? ' is-invalid' : '')]) !!}
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group form-group-default required">
                                                        <label>Youtube</label>
                                                        {!! Form::text('youtube', $setting->youtube, ['class' => 'form-control' . ($errors->has('youtube') ? ' is-invalid' : '')]) !!}
                                                    </div>
                                                </div>  
                                                
                                                <div class="col-sm-12 col-md-6 clearfix">
                                                    <div class="form-group form-group-default required">
                                                        <label>Api Google</label>
                                                        {!! Form::text('api', $setting->map_api , ['class' => 'form-control' . ($errors->has('api') ? ' is-invalid' : '')]) !!}
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group form-group-default required">
                                                        <label>Latitud</label>
                                                        {!! Form::text('lat', $setting->map_lat , ['class' => 'form-control' . ($errors->has('lat') ? ' is-invalid' : '')]) !!}
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group form-group-default required">
                                                        <label>Logintud</label>
                                                        {!! Form::text('long', $setting->map_long , ['class' => 'form-control' . ($errors->has('long') ? ' is-invalid' : '')]) !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>

                                        <div class="card card-default">
                                            <div class="card-header ">
                                                <div class="card-title">DESCRIPCIÓN
                                                </div>
                                                <div class="tools">
                                                </div>
                                            </div>
                                            <div class="card-body no-scroll card-toolbar">
                                                <div class="quill-wrapper">
                                                    <div id="description">{!! $setting->description  !!}</div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="card card-default">
                                            <div class="card-header ">
                                                <div class="card-title">SOBRE NOSOTROS
                                                </div>
                                                <div class="tools">
                                                </div>
                                            </div>
                                            <div class="card-body no-scroll card-toolbar">
                                                <div class="quill-wrapper">
                                                    <div id="about">{!! $setting->about !!}</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card card-default">
                                            <div class="card-header ">
                                                <div class="card-title">POLITICAS
                                                </div>
                                                <div class="tools">
                                                </div>
                                            </div>
                                            <div class="card-body no-scroll card-toolbar">
                                                <div class="quill-wrapper">
                                                    <div id="politic">{!! $setting->politic  !!}</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card card-default">
                                            <div class="card-header ">
                                                <div class="card-title">MISIÓN
                                                </div>
                                                <div class="tools">
                                                </div>
                                            </div>
                                            <div class="card-body no-scroll card-toolbar">
                                                <div class="quill-wrapper">
                                                    <div id="mission">{!! $setting->mission  !!}</div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="card card-default">
                                            <div class="card-header ">
                                                <div class="card-title">VISIÓN
                                                </div>  
                                                <div class="tools">
                                                </div>
                                            </div>
                                            <div class="card-body no-scroll card-toolbar">
                                                <div class="quill-wrapper">
                                                    <div id="vision">{!! $setting->vision  !!}</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card card-default">
                                            <div class="card-header ">
                                                <div class="card-title">TERMINOS Y CONDICIONES
                                                </div>
                                                <div class="tools">
                                                </div>
                                            </div>
                                            <div class="card-body no-scroll card-toolbar">
                                                <div class="quill-wrapper">
                                                    <div id="terms">{!! $setting->terms  !!}</div>
                                                </div>
                                            </div>
                                        </div>

                                       <div class="clearfix"></div>

                                        <div class="row m-t-25">
                                            <div class="col-xl-12">
                                                {!! Form::submit(__('Editar'), ['class' => 'btn btn-primary pull-right btn-lg btn-block']) !!}
                                            </div>
                                        </div>

                                        {!! Form::close() !!}

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- END CONTAINER FLUID -->
        </div>
        <!-- END PAGE CONTENT -->
        <!-- START COPYRIGHT -->
        <!-- START CONTAINER FLUID -->
        <!-- START CONTAINER FLUID -->
        <div class=" container-fluid  container-fixed-lg footer">
            <div class="copyright sm-text-center">
                <p class="small-text no-margin pull-left sm-pull-reset">
                    ©2014-2020 All Rights Reserved. Pages® and/or its subsidiaries or affiliates are registered trademark of
                    Revox Ltd.
                    <span class="hint-text m-l-15">Pages v05.23 20201105.r.190</span>
                </p>
                <p class="small no-margin pull-right sm-pull-reset">
                    Hand-crafted <span class="hint-text">&amp; made with Love</span>
                </p>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- END COPYRIGHT -->
    </div>


@endsection


@push('scripts')

    <script type="text/javascript">

        $('#logo').change(function(e) {
            var fileName = e.target.files[0].name;
            $(".url-logo").text(fileName);
        });


        $('#favicon').change(function(e) {
            var fileName = e.target.files[0].name;
            $(".url-favicon").text(fileName);
        });

        $('#footer').change(function(e) {
            var fileName = e.target.files[0].name;
            $(".url-footer").text(fileName);
        });

        // Editor
        // https://quilljs.com/docs/quickstart/
        var toolbarOptions = [
            ['bold', 'italic', 'underline', 'strike'], // toggled buttons
            ['blockquote', 'code-block'],

            [{
                'header': 1
            }, {
                'header': 2
            }], // custom button values
            [{
                'list': 'ordered'
            }, {
                'list': 'bullet'
            }],
            [{
                'script': 'sub'
            }, {
                'script': 'super'
            }], // superscript/subscript
            [{
                'indent': '-1'
            }, {
                'indent': '+1'
            }], // outdent/indent
            [{
                'direction': 'rtl'
            }], // text direction

            [{
                'size': ['small', false, 'large', 'huge']
            }], // custom dropdown
            [{
                'header': [1, 2, 3, 4, 5, 6, false]
            }],

            [{
                'color': []
            }, {
                'background': []
            }], // dropdown with defaults from theme
            [{
                'font': []
            }],
            [{
                'align': []
            }],

            ['clean'] // remove formatting button
        ];

        var description = new Quill('#description', {
            modules: {
                toolbar: toolbarOptions
            },
            placeholder: 'Escriba aquí...',
            theme: 'snow'
        });

        //Avoid Quick Search Toggle
        description.on('selection-change', function(range, oldRange, source) {
            if (range === null && oldRange !== null) {
                $('body').removeClass('overlay-disabled');
            } else if (range !== null && oldRange === null) {
                $('body').addClass('overlay-disabled');
            }
        });

        description.on('text-change', function(delta, oldDelta, source) {
            $('#text-description').val(description.container.firstChild.innerHTML);
        });

        var about = new Quill('#about', {
            modules: {
                toolbar: toolbarOptions
            },
            placeholder: 'Escriba aquí...',
            theme: 'snow'
        });


        //Avoid Quick Search Toggle
        about.on('selection-change', function(range, oldRange, source) {
            if (range === null && oldRange !== null) {
                $('body').removeClass('overlay-disabled');
            } else if (range !== null && oldRange === null) {
                $('body').addClass('overlay-disabled');
            }
        });

        about.on('text-change', function(delta, oldDelta, source) {
            $('#text-about').val(about.container.firstChild.innerHTML);
        });


        var politic = new Quill('#politic', {
            modules: {
                toolbar: toolbarOptions
            },
            placeholder: 'Escriba aquí...',
            theme: 'snow'
        });

        //Avoid Quick Search Toggle
        politic.on('selection-change', function(range, oldRange, source) {
            if (range === null && oldRange !== null) {
                $('body').removeClass('overlay-disabled');
            } else if (range !== null && oldRange === null) {
                $('body').addClass('overlay-disabled');
            }
        });

        politic.on('text-change', function(delta, oldDelta, source) {
            $('#text-politic').val(politic.container.firstChild.innerHTML);
        });

        var mission = new Quill('#mission', {
            modules: {
                toolbar: toolbarOptions
            },
            placeholder: 'Escriba aquí...',
            theme: 'snow'
        });

        //Avoid Quick Search Toggle
        mission.on('selection-change', function(range, oldRange, source) {
            if (range === null && oldRange !== null) {
                $('body').removeClass('overlay-disabled');
            } else if (range !== null && oldRange === null) {
                $('body').addClass('overlay-disabled');
            }
        });

        mission.on('text-change', function(delta, oldDelta, source) {
            $('#text-mission').val(mission.container.firstChild.innerHTML);
        });
        

        var terms = new Quill('#terms   ', {
            modules: {
                toolbar: toolbarOptions
            },
            placeholder: 'Escriba aquí...',
            theme: 'snow'
        });

        //Avoid Quick Search Toggle
        terms.on('selection-change', function(range, oldRange, source) {
            if (range === null && oldRange !== null) {
                $('body').removeClass('overlay-disabled');
            } else if (range !== null && oldRange === null) {
                $('body').addClass('overlay-disabled');
            }
        });

        terms.on('text-change', function(delta, oldDelta, source) {
            $('#text-terms').val(terms.container.firstChild.innerHTML);
        });


        var vision = new Quill('#vision', {
            modules: {
                toolbar: toolbarOptions
            },
            placeholder: 'Escriba aquí...',
            theme: 'snow'
        });

        //Avoid Quick Search Toggle
        vision.on('selection-change', function(range, oldRange, source) {
            if (range === null && oldRange !== null) {
                $('body').removeClass('overlay-disabled');
            } else if (range !== null && oldRange === null) {
                $('body').addClass('overlay-disabled');
            }
        });

        vision.on('text-change', function(delta, oldDelta, source) {
            $('#text-vision').val(vision.container.firstChild.innerHTML);
        });






    </script>

@endpush
