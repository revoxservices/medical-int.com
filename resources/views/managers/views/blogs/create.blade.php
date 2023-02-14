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
                <a href="{{ route('manager.blogs') }}">Blog</a>
              </li>
              <li class="breadcrumb-item active">Crear
              </li>
            </ul>



            <div class="row row-same-height">
              <div class="col-md-12">
                <div class="padding-30 sm-padding-5">





                {!! Form::open(['route' => ['manager.blogs.storage'], 'method' => 'POST', 'id' => 'formBlogs' , 'files' => true, 'enctype' => 'multipart/form-data']) !!}
                {{ csrf_field() }}


                <input type="hidden" id="slack" name="slack" value="">
                <input type="hidden" id="status" name="status" value="false">
                <input type="hidden" id="edit" name="edit" value="true">
                   <textarea style="display: none"  id="text-contents" name="content"></textarea>
                   <textarea style="display: none"  id="text-descriptions" name="description"></textarea>


                   
                   <div class="form-group-attached">
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
                            </div>
                        </div>
                    </div>
                    <br>




                    <div class="form-group-attached">
                      <div class="row clearfix">
                        <div class="col-sm-12">
                          <div class="form-group form-group-default required">
                            <label>Título</label>
                            {!! Form::text('label', null , ['class' => 'form-control' . ($errors->has('label') ? ' is-invalid' : ''), 'required']) !!}
                          </div>
                        </div>
                      
                      <div class="col-sm-12 clearfix">
                          <div class="form-group form-group-default required">
                            <label>Frase</label>
                            {!! Form::text('sentence', null , ['class' => 'form-control' . ($errors->has('sentence') ? ' is-invalid' : ''), 'required']) !!}
                          </div>
                        </div>
                        <div class="col-sm-12 clearfix">
                          <div class="form-group form-group-default required">
                            <label>Fecha</label>
                            <input type="date" name="date_at" value="" class="form-control" placeholder="" required>
                          </div>
                        </div>

                        <div class="col-sm-12">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label>Tags</label>
                            {!! Form::select('tags[]', $tags, null , ['class' => 'full-width' , 'data-init-plugin' => 'select2' , 'multiple' => 'multiple']) !!}
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label>Categoría</label>
                            {!! Form::select('categorie', $categories, null , ['class' => 'full-width','id' => 'categorie', 'data-init-plugin' => 'select2', 'required']) !!}
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

                    <br>


                    <div class="card card-default">
                      <div class="card-header ">
                        <div class="card-title">CONTENIDO
                        </div>
                        <div class="tools">
                        </div>
                      </div>
                      <div class="card-body no-scroll card-toolbar">
                        <div class="quill-wrapper">
                          <div name="content" id="content"></div>
                        </div>
                      </div>
                    </div>

                    <div class="card card-default">
                      <div class="card-header ">
                        <div class="card-title">DESCRIPCIÓN
                        </div>
                        <div class="tools">
                        </div>
                      </div>
                      <div class="card-body no-scroll card-toolbar">
                        <div class="quill-wrapper">
                          <div name="description" id="description"></div>
                        </div>
                      </div>
                    </div>

                    <div class="clearfix"></div>

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
            , url: "{{ url('/manager/blogs/thumbnail') }}"
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
                    let blog = document.getElementById('slack').value;
                    formData.append('blog', blog);


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
                            , url: '/manager/blogs/delete/thumbnail/' + item
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
                    location.href = "/manager/blogs";
                });

                myThumbnail.on("queuecomplete", function() {
                    $("#status").val('true')
                });

                myThumbnail.on("complete", function() {
                    $("#status").val('true');
                    //uploadThumbnail();
                });

            }
        });

        $('#submit').on('click', function(event) {

            event.preventDefault();
            upload = false;
            URL = $("#formBlogs").attr('action');
            formData = $('#formBlogs').serialize();

            $.ajax({
                type: 'POST'
                , url: URL
                , data: formData
                , success: function(result) {
                  


                        var statuThumbnail = $("#status").val();
                        $("#slack").val(result);

                        myThumbnail.processQueue();
                        //uploadThumbnail();
                    //
                }
            });


        });

        function uploadThumbnail() {

            var statuThumbnail = $("#status").val();
            var statuEdit = $("#edit").val();

            if (statuThumbnail == 'true' && statuEdit == 'true') {
                location.href = "/manager/blogs";
            }

        }

        $('.select').select2({
            placeholder: "Selección"
            , minimumResultsForSearch: -1
        });

    });

</script>



<script type="text/javascript">
    var toolbarOptions = [
        ['bold', 'italic', 'underline', 'strike'], // toggled buttons
        , // custom button values
        [{
            'list': 'ordered'
        }, {
            'list': 'bullet'
        }], // superscript/subscript
        [{
            'header': [1, 2, 3, 4, 5, 6, false]
        }], // add's image support
        ['clean'] // remove formatting button
    ];


    var descriptions = new Quill('#description', {
        modules: {
            toolbar: toolbarOptions
        }
        , placeholder: 'Escriba aquí tu descripcion...'
        , theme: 'snow'
    });

    //Avoid Quick Search Toggle
    descriptions.on('selection-change', function(range, oldRange, source) {
        if (range === null && oldRange !== null) {
            $('body').removeClass('overlay-disabled');
        } else if (range !== null && oldRange === null) {
            $('body').addClass('overlay-disabled');
        }
    });

    descriptions.on('text-change', function(delta, oldDelta, source) {
        $('#text-descriptions').val(descriptions.container.firstChild.innerHTML);
    });


    var contents = new Quill('#content', {
        modules: {
            toolbar: toolbarOptions
        }
        , placeholder: 'Escriba aquí tu descripcion...'
        , theme: 'snow'
    });

    //Avoid Quick Search Toggle
    contents.on('selection-change', function(range, oldRange, source) {
        if (range === null && oldRange !== null) {
            $('body').removeClass('overlay-disabled');
        } else if (range !== null && oldRange === null) {
            $('body').addClass('overlay-disabled');
        }
    });

    contents.on('text-change', function(delta, oldDelta, source) {
        $('#text-contents').val(contents.container.firstChild.innerHTML);
    });




    $(document).ready(function() {


        $('#date').pickadate({
            format: 'yyyy-mm-dd'
            , min: undefined
            , selectMonths: true
            , selectYears: true
        , });

        $("#submit").on('click', function(e) {
            $('#formBlogs').submit();
        });

        $("#formBlogs").validate({
            submit: false
            , ignore: ":hidden:not(#note),.note-editable.panel-body"
            , rules: {
                label: {
                    required: true
                    , minlength: 3
                    , maxlength: 50
                , }
                , sentence: {
                    required: false
                    , minlength: 3
                    , maxlength: 50
                , }
                , description: {
                    required: true
                , }
                , content: {
                    required: true
                , }
                , available: {
                    required: true
                , }
                , categorie: {
                    required: true
                , }
                , date: {
                    required: true
                , }
            }
            , messages: {
                label: {
                    required: "Este campo es necesario."
                    , minlength: "Minimo 3 caracteres"
                    , maxlength: "Maximo 50 caracteres"
                }
                , sentence: {
                    required: "Este campo es necesario."
                    , minlength: "Minimo 3 caracteres"
                    , maxlength: "Maximo 50 caracteres"
                }
                , description: {
                    required: "Este campo es necesario."
                , }
                , content: {
                    required: "Este campo es necesario."
                , }
                , available: {
                    required: "Este campo es necesario."
                , }
                , categorie: {
                    required: "Este campo es necesario."
                , }
                , date: {
                    required: "Este campo es necesario."
                , }
            , }

        });

        $('#categorie').select2({
            placeholder: "Selecciónar"
        , });

    });

</script>
@endpush
