@extends('layouts.managers')


@section('content')




    <div class="content ">

        <div class="jumbotron" data-pages="parallax">
            <div class=" container-fluid   container-fixed-lg sm-p-l-0 sm-p-r-0">
                <div class="inner">
                    <!-- START BREADCRUMB -->
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('manager.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Usuarios</li>
                    </ol>
                    <!-- END BREADCRUMB -->
                </div>
            </div>
        </div>

    
        <div >

         <div class=" container-fluid   container-fixed-lg bg-white">
                <div class="card card-transparent">
                    <div class="card-header ">
                        <div class="card-title">
                        </div>
                        <div class="pull-right row">
                            <div class="col-xs-2">
                                <small>
                                    <a href="{{ route('manager.users.create') }}" class="btn btn-complete btn-add"
                                        data-toggle="button">+</a>
                                </small>
                            </div>
                            <div class="col-xs-10">
                                <input type="text" id="search" class="form-control pull-right" placeholder="Busqueda">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="card-body" id="divUsers">

                    
                        @include ('managers.partials.sections.users.list')

                      
                    </div>
                </div>


            </div>
    ´
            
        </div>


        <br>
        <br>
    @endsection



@push('scripts')


    <script src="{{ url('managers/assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
        
    <script src="{{ url('managers/assets/plugins/jquery/jquery-3.2.1.min.js') }}" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $("#search").on('keyup', function (e) {
                var keycode = e.keyCode || e.which;
                if(keycode == '13'){
                            
                            var search = $('#search').val();
                            
                            $.ajax({
                                url: "/manager/users/filters",
                                type: "POST",
                                datatype: "html",
                                data: {
                                    _token: $('meta[name=csrf-token]').attr('content'),
                                    search : search,
                                },
                                success: function(data) {
                                    $("#divUsers").empty();
                                    $("#divUsers").empty().html(data);
                                },
                                error: function(jqXHR, textStatus, errorThrown) {
                                    if (jqXHR.status == 500) {
                                        alert('Internal error: ' + jqXHR.responseText);
                                    } else {
                                        alert('Unexpected error.');
                                    }
                                }
                            });

                        }
            });


    });

    </script>

@endpush
