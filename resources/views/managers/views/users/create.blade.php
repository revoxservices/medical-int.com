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
                                    <a href="{{ route('manager.users') }}">Usuarios</a>
                                </li>
                                <li class="breadcrumb-item active">Editar
                                </li>
                            </ul>

                            <div class="row row-same-height">
                                <div class="col-md-12">
                                    <div class="padding-30 sm-padding-5">




                                        {!! Form::open(['route' => ['manager.users.storage'], 'method' => 'POST', 'files' => true, 'enctype' => 'multipart/form-data']) !!}
                                        {{ csrf_field() }}

                                        <div class="form-group-attached">
                                            <div class="row clearfix">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group form-group-default required">
                                                        <label>Nombres</label>
                                                        {!! Form::text('firstname', null , ['class' => 'form-control'  . ($errors->has('firstname') ? ' is-invalid' : ''), 'required']) !!}
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group form-group-default required">
                                                        <label>Apellidos</label>
                                                        {!! Form::text('lastname', null, ['class' => 'form-control' . ($errors->has('lastname') ? ' is-invalid' : ''), 'required']) !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-sm-12 col-md-12">
                                                    <div class="form-group form-group-default required">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control" id="email" name="email" autocomplete="new-password" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-sm-12 col-md-12">
                                                    <div class="form-group form-group-default required">
                                                        <label>Direccion</label>
                                                        {!! Form::text('address', null, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : '')]) !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-sm-12 col-md-6">
                                                    <div
                                                        class="form-group form-group-default form-group-default-select2 required">
                                                        <label>Role</label>
                                                        {!! Form::select('roles', $roles, null, ['class' => 'full-width', 'id' => 'roles', 'data-init-plugin' => 'select2', 'required']) !!}
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group form-group-default required">
                                                        <label>Identificacion</label>
                                                        {!! Form::text('identification', null , ['class' => 'form-control' . ($errors->has('identification') ? ' is-invalid' : ''), 'required']) !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group form-group-default required">
                                                        <label>Empresa</label>
                                                        {!! Form::text('company', null , ['class' => 'form-control' . ($errors->has('company') ? ' is-invalid' : '')]) !!}
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group form-group-default required">
                                                        <label>Celular</label>
                                                        {!! Form::text('cellphone', null , ['class' => 'form-control' . ($errors->has('cellphone') ? ' is-invalid' : '')]) !!}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row clearfix">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group form-group-default required">
                                                        <label>Contrasena</label>
                                                        <input type="password" class="form-control" id="password" name="password" autocomplete="new-password" required>

                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div
                                                        class="form-group form-group-default form-check-group d-flex align-items-center">
                                                        <div
                                                            class="form-check switch switch-lg success full-width right m-b-0">
                                                                <input type="checkbox" id="available" class="switchery"
                                                                name="available" data-init-plugin="switchery"
                                                                data-size="small" checked />

                                                            <label for="available">Estado</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row clearfix">
                                                
                                                    <div class="col-sm-12 col-md-12 none" id="divEnterprise">
                                                        <div
                                                            class="form-group form-group-default form-group-default-select2 required">
                                                            <label>Empresas</label>
                                                            {!! Form::select('enterprise', $enterprises, null, ['class' => 'full-width', 'id' => 'enterprises', 'data-init-plugin' => 'select2', 'required']) !!}
                                                        </div>
                                                    </div>

                                            </div>

                                        </div>

                                        <br>

                                        <div class="clearfix"></div>

                                        <div class="row m-t-25">
                                            <div class="col-xl-12">
                                                {!! Form::submit(__('Crear'), ['class' => 'btn btn-primary pull-right btn-lg btn-block']) !!}
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
        $(document).ready(function() {

            $('#roles').change(function(e) {

                e.preventDefault();
                var role = $(this).val();

                if (role == 'enterprise') {

                    $('#divEnterprise').removeClass("none");


                }else if (role == 'customer') {
                    $('#divEnterprise').removeClass("none");

                } else {

                    $('#divEnterprise').addClass("none");


                }

            });

        });
    </script>

@endpush
