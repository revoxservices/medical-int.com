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
                                    <a href="{{ route('manager.contacts') }}">Contactenos</a>
                                </li>
                                <li class="breadcrumb-item active">Editar
                                </li>
                            </ul>

                            <div class="row row-same-height">
                                <div class="col-md-12">
                                    <div class="padding-30 sm-padding-5">




                                        {!! Form::open(['route' => ['manager.contacts.update', $contact->slack], 'method' => 'POST', 'files' => true, 'enctype' => 'multipart/form-data']) !!}
                                        {{ csrf_field() }}

                                        <div class="form-group-attached">
                                            <div class="row clearfix">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group form-group-default disabled">
                                                        <label>Nombres</label>
                                                        {!! Form::text('firstname', $contact->firstname, ['class' => 'form-control' . ($errors->has('firstname') ? ' is-invalid' : ''), 'disabled']) !!}
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group form-group-default disabled">
                                                        <label>Apellidos</label>
                                                        {!! Form::text('lastname', $contact->lastname, ['class' => 'form-control' . ($errors->has('lastname') ? ' is-invalid' : ''), 'disabled']) !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-sm-12 col-md-12">
                                                    <div class="form-group form-group-default disabled">
                                                        <label>Email</label>
                                                        {!! Form::text('email', $contact->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'disabled']) !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group form-group-default disabled">
                                                        <label>Celular</label>
                                                        {!! Form::text('cellphone', $contact->cellphone, ['class' => 'form-control' . ($errors->has('cellphone') ? ' is-invalid' : ''), 'disabled']) !!}
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div
                                                        class="form-group form-group-default form-check-group d-flex align-items-center">
                                                        <div
                                                            class="form-check switch switch-lg success full-width right m-b-0">
                                                            @if ($contact->reviewed == 1)
                                                                <input type="checkbox" id="reviewed" class="switchery"
                                                                    name="reviewed" data-init-plugin="switchery"
                                                                    data-size="small" checked="checked" />
                                                            @else
                                                                <input type="checkbox" id="reviewed" class="switchery"
                                                                    name="reviewed" data-init-plugin="switchery"
                                                                    data-size="small" />
                                                            @endif
                                                            <label for="reviewed">Estado</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <br>


                                        <div class="card card-default disableds">
                                            <div class="card-header ">
                                                <div class="card-title">MENSAJE
                                                </div>
                                                <div class="tools">
                                                </div>
                                            </div>
                                            <div class="card-body no-scroll card-toolbar disabled">
                                                <div class="quill-wrapper">
                                                    <div id="message">{!! $contact->description !!}</div>
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

@endpush
