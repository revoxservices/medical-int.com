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
                <a href="{{ route('manager.blogs') }}">Aliado</a>
              </li>
              <li class="breadcrumb-item active">Crear
              </li>
            </ul>



            <div class="row row-same-height">
              <div class="col-md-12">
                <div class="padding-30 sm-padding-5">



                {!! Form::open([
                'route' => ['manager.teams.storage'],
                'method' => 'POST',
                'id' => 'formTeam',
                'files' => true,
                'enctype' => 'multipart/form-data',
                ]) !!}
                {{ csrf_field() }}


                  <input type="hidden" id="slack" name="slack" value="">
                  <input type="hidden" id="status" name="status" value="false">
                  <input type="hidden" id="edit" name="edit" value="true">
                  

                  <div class="dropzone-container col-md-12 pt-1 pb-2 mb-md-0">

                   <div class="dropzone upload-file text-center py-5" id="dropzoneThumbnail">
                                        <div class="dz-default dz-message">
                                            <button class="btn btn-indigo px-7 mb-2" type="button">
                                                Buscar Archivo
                                            </button>

                                            <p class="text-heading fs-22 lh-15">Arrastra y suelta la imagen o
                                            </p>

                                            <input type="file" hidden name="file">
                                            <p>Las fotos deben estar en formato JPEG o PNG y al menos 1024 x 768</p>
                                        </div>

                                        <div class="dz-thumbnail"></div>
                                    </div>
                     </div>

                     <br>

                    <div class="form-group-attached">
                      <div class="row clearfix">
                      <div class="col-sm-6">
                                            <div class="form-group form-group-default required">
                                              <label>Nombres</label>
                                              {!! Form::text('firstname', null , ['class' => 'form-control' . ($errors->has('firstname') ? ' is-invalid' : ''), 'required']) !!}
                                            </div>
                                          </div> 
                                          <div class="col-sm-6">
                                            <div class="form-group form-group-default required">
                                              <label>Apellidos</label>
                                              {!! Form::text('lastname', null , ['class' => 'form-control' . ($errors->has('lastname') ? ' is-invalid' : ''), 'required']) !!}
                                            </div>
                                          </div>
                                          <div class="col-sm-6">
                                            <div class="form-group form-group-default required">
                                              <label>Cargo</label>
                                              {!! Form::text('charger', null, ['class' => 'form-control' . ($errors->has('charger') ? ' is-invalid' : ''), 'required']) !!}
                                            </div>
                                          </div>
                        <div class="col-md-6">
                          <div class="form-group form-group-default form-check-group d-flex align-items-center">
                            <div class="form-check switch switch-lg success full-width right m-b-0">
                              <input type="checkbox" id="available" class="switchery" name="available"   data-init-plugin="switchery" data-size="small" checked="checked" />
                              <label for="available">Estado</label>
                            </div>
                          </div>
                        </div>
                      </div>


                    </div>


                    <div class="row m-t-25">
                        <div class="col-xl-12">
                                    <button id="submit" type="submit" class="btn btn-primary pull-right btn-lg btn-block">Crear</button>
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
        ©2014-2020 All Rights Reserved. Pages® and/or its subsidiaries or affiliates are registered trademark of Revox Ltd.
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
    Dropzone.autoDiscover = false;

    $(document).ready(function() {


        // Dropzone.options.rentals = false;
        let token = $('meta[name="csrf-token"]').attr('content');


        var myThumbnail = new Dropzone("div#dropzoneThumbnail", {
            paramName: "file"
            , url: "{{ url('/manager/teams/thumbnail') }}"
            , addRemoveLinks: true
            , autoProcessQueue: false
            , uploadMultiple: false
            , acceptedFiles: ".png,.jpg,.jpeg"
            , parallelUploads: 1
            , maxFiles: 1
            , params: {
                _token: token
            },
            // The setting up of the dropzone
            init: function() {

                var myThumbnail = this;

                myThumbnail.on("maxfilesexceeded", function(file) {
                    this.removeFile(file);
                });

                //dz-started
                //Gets triggered when we submit the image.
                myThumbnail.on('sending', function(file, xhr, formData) {
                    //fetch the user id from hidden input field and send that userid with our image
                    let team = document.getElementById('slack').value;
                    formData.append('team', team);


                });

                myThumbnail.on("addedfile", function(file) {
                    $('#dropzoneThumbnail').addClass('dz-started');
                    $("#status").val('false');
                });

                myThumbnail.on("removedfile", function(files) {

                    $("#status").val('false');
                    item = files.name;

                    if (item.length > 30) {
                        $.ajax({
                            type: 'GET'
                            , url: '/manager/teams/delete/thumbnail/' + item
                            , success: function(result) {
                                //$('#dropzoneThumbnail').addClass('dz-started');
                            }
                        });
                    }


                });

                myThumbnail.on('resetFiles', function() {
                    $("#status").val('false');
                    myThumbnail.removeAllFiles();
                });

                myThumbnail.on("success", function(file, response) {
                    $("#status").val('true');
                    location.href = "/manager/teams";
                });

                myThumbnail.on("queuecomplete", function() {
                    $("#status").val('true')
                });

                myThumbnail.on("complete", function() {
                    $("#status").val('true');
                    uploadThumbnail();
                });

            }
        });

        $('#submit').on('click', function(event) {

            event.preventDefault();
            upload = false;
            URL = $("#formTeam").attr('action');
            formData = $('#formTeam').serialize();

            $.ajax({
                type: 'POST'
                , url: URL
                , data: formData
                , success: function(result) {
                    if (result.status == "success") {

                        var statuThumbnail = $("#status").val();
                        var team = result.team;
                        $("#slack").val(team);

                        myThumbnail.processQueue();
                        uploadThumbnail();
                    }
                    //
                }
            });


        });

        function uploadThumbnail() {

            var statuThumbnail = $("#status").val();
            var statuEdit = $("#edit").val();

            if (statuThumbnail == 'true' && statuEdit == 'true') {
                location.href = "/manager/teams";
            }

        }

    });

</script>


<script type="text/javascript">x`
    $(document).ready(function() {

        $("#submit").on('click', function(e) {
            $('#formTeam').submit();
        });

        $("#formTeam").validate({
            submit: false
            , ignore: ":hidden:not(#note),.note-editable.panel-body"
            , rules: {
                firstname: {
                    required: true
                    , minlength: 3
                    , maxlength: 50
                , }
                , lastname: {
                    required: true
                    , minlength: 3
                    , maxlength: 50
                , }
                , charger: {
                    required: true
                    , minlength: 3
                    , maxlength: 50
                , }
                , available: {
                    required: true
                , }
            }
            , messages: {
                firstname: {
                    required: "Este campo es necesario."
                    , minlength: "Minimo 3 caracteres"
                    , maxlength: "Maximo 50 caracteres"
                }
                , 
                lastname: {
                    required: "Este campo es necesario."
                    , minlength: "Minimo 3 caracteres"
                    , maxlength: "Maximo 50 caracteres"
                }
                , charger: {
                    required: "Este campo es necesario."
                    , minlength: "Minimo 3 caracteres"
                    , maxlength: "Maximo 50 caracteres"
                }
                , available: {
                    required: "Este campo es necesario."
                , }
            , }

        });




    });

</script>
@endpush
