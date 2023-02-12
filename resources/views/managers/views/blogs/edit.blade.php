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
              <li class="breadcrumb-item active">Editar
              </li>
            </ul>

            <div class="row row-same-height">
              <div class="col-md-12">
                <div class="padding-30 sm-padding-5">

                {!! Form::open(['route' => ['manager.blogs.update' , $blog->slack], 'method' => 'POST', 'id' => 'formBlogs' , 'files' => true, 'enctype' => 'multipart/form-data']) !!}
                {{ csrf_field() }}


                  <input type="hidden" id="id" name="id" value="{{ $blog->id }}">
                  <input type="hidden" id="slack" name="slack" value="{{ $blog->slack }}">
                  <input type="hidden" id="status" name="status" value="true">
                  <input type="hidden" id="edit" name="edit" value="true">

                    <textarea style="display: none"  id="text-contents" name="content">{!! $blog->content !!}</textarea>
                    <textarea style="display: none"  id="text-descriptions" name="description">{!! $blog->description !!}</textarea>


                    <div class="form-group-attached">
                    <div class="dropzone-container col-md-12 pt-1 pb-2 mb-md-0">


                        @if ($thumbnail != null)
                        <div class="dropzone upload-file text-center py-5 dz-started" id="dropzoneThumbnail">
                            @else
                            <div class="dropzone upload-file text-center py-5" id="dropzoneThumbnail">
                                @endif

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
                        <div class="col-sm-12 clearfix">
                          <div class="form-group form-group-default required">
                            <label>Título</label>
                            {!! Form::text('label', $blog->label, ['class' => 'form-control' . ($errors->has('label') ? ' is-invalid' : ''), 'required']) !!}
                          </div>
                          </div>
                        <div class="col-sm-12 clearfix">
                          <div class="form-group form-group-default required">
                            <label>Frase</label>
                            {!! Form::text('sentence', $blog->sentence, ['class' => 'form-control' . ($errors->has('sentence') ? ' is-invalid' : ''), 'required']) !!}
                          </div>
                        </div>
                        <div class="col-sm-12 clearfix">
                          <div class="form-group form-group-default required">
                            <label>Fecha</label>
                            <input type="date" name="date" value="{{ input_date($blog->date_at)}}" class="form-control" id="date" placeholder="" required>
                          </div>
                        </div>


                        <div class="col-sm-12 clearfix">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label>Tags</label>
                            {!! Form::select('tags[]', $tags, $blog->tags, ['class' => 'full-width' , 'data-init-plugin' => 'select2' , 'multiple' => 'multiple']) !!}
                          </div>
                        </div>
                        <div class="col-sm-6 clearfix">
                          <div class="form-group form-group-default form-group-default-select2 required">
                            <label>Categoría</label>
                            {!! Form::select('categorie', $categories, $blog->categorie_id , ['class' => 'full-width','id' => 'categorie', 'data-init-plugin' => 'select2', 'required']) !!}
                          </div>
                        </div>
                        <div class="col-md-6 clearfix">
                          <div class="form-group form-group-default form-check-group d-flex align-items-center">
                            <div class="form-check switch switch-lg success full-width right m-b-0">
                              @if($blog->available == 1)
                                <input type="checkbox" id="available" class="switchery" name="available"   data-init-plugin="switchery" data-size="small" checked="checked" />
                              @else
                                <input type="checkbox" id="available"  class="switchery" name="available"    data-init-plugin="switchery" data-size="small" />
                              @endif
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
                          <div id="content">{!! $blog->content !!}</div>
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
                          <div  id="description">{!! $blog->description !!}</div>
                        </div>
                      </div>
                    </div>

                   <div class="row m-t-25">

                      <div class="col-xl-12">

                      <button id="submit" type="submit" class="btn btn-primary pull-right btn-lg btn-block">Editar</button>
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
                // The setting up ´f the dropzone
                init: function() {


                    statuThumbnail = false;

                    var myThumbnail = this;

                    item = $("#slack").val();

                    var path = "{{ asset('pages/img') }}";

                    $.getJSON('/manager/blogs/get/thumbnail/' + item, function(data) {
                        $.each(data, function(key, value) {
                            var mockFile = {
                                name: value.file
                                , size: value.size
                                , file: value.file
                            };
                            myThumbnail.options.addedfile.call(myThumbnail, mockFile);
                            myThumbnail.options.thumbnail.call(myThumbnail, mockFile
                                , path + "/blogs/" + value.file);
                            myThumbnail.options.complete.call(myThumbnail, mockFile);
                            myThumbnail.options.success.call(myThumbnail, mockFile);
                        });
                    });

                    myThumbnail.on("maxfilesexceeded", function(file) {
                        this.removeFile(file);
                    });

                    myThumbnail.on('sending', function(file, xhr, formData) {
                        let blog = document.getElementById('slack').value;
                        formData.append('blog', blog);
                    });

                    myThumbnail.on("addedfile", function(file) {
                        $("#status").val('false');
                        $('#dropzoneThumbnail').addClass('dz-started');
                    });

                    myThumbnail.on("removedfile", function(file) {
                        $("#status").val('false');
                        item = file.name;

                        if (item.length > 20) {
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
                    });

                    myThumbnail.on("queuecomplete", function() {
                        $("#status").val('true');
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
                URL = $("#formBlogs").attr('action');
                formData = $('#formBlogs').serialize();

                var statuThumbnail = $("#status").val();

                $.ajax({
                    type: 'POST'
                    , url: URL
                    , data: formData
                    , success: function(result) {
                        if (result.status == "success") {

                            var statuThumbnail = $("#status").val();
                            var blog = result.blog;
                            $("#slack").val(blog);

                            myThumbnail.processQueue();

                            uploadThumbnail();
                        }
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

    $('#contents').change(function(e){
          var fileName = e.target.files[0].name;
          $(".url-contents").text(fileName);
    });

    $('#thumbnail').change(function(e){
      var fileName = e.target.files[0].name;
      $(".url-thumbnail").text(fileName);
    });

    // Editor
		// https://quilljs.com/docs/quickstart/
		var toolbarOptions = [
			['bold', 'italic', 'underline', 'strike'],        // toggled buttons
			['blockquote', 'code-block'],

			[{ 'header': 1 }, { 'header': 2 }],               // custom button values
			[{ 'list': 'ordered' }, { 'list': 'bullet' }],
			[{ 'script': 'sub' }, { 'script': 'super' }],      // superscript/subscript
			[{ 'indent': '-1' }, { 'indent': '+1' }],          // outdent/indent
			[{ 'direction': 'rtl' }],                         // text direction

			[{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
			[{ 'header': [1, 2, 3, 4, 5, 6, false] }],

			[{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
			[{ 'font': [] }],
			[{ 'align': [] }],

			['clean']                                         // remove formatting button
		];

		var description = new Quill('#description', {
			modules: {
				toolbar: toolbarOptions
			},
			placeholder: 'Escriba aquí...',
			theme: 'snow'
		});

		//Avoid Quick Search Toggle
		description.on('selection-change', function (range, oldRange, source) {
			if (range === null && oldRange !== null) {
				$('body').removeClass('overlay-disabled');
			} else if (range !== null && oldRange === null) {
				$('body').addClass('overlay-disabled');
			}
		});

    description.on('text-change', function(delta, oldDelta, source) {
        $('#text-descriptions').val(description.container.firstChild.innerHTML);
    });



		var content = new Quill('#content', {
			modules: {
				toolbar: toolbarOptions
			},
			placeholder: 'Escriba aquí...',
			theme: 'snow'
		});

		//Avoid Quick Search Toggle
		content.on('selection-change', function (range, oldRange, source) {
			if (range === null && oldRange !== null) {
				$('body').removeClass('overlay-disabled');
			} else if (range !== null && oldRange === null) {
				$('body').addClass('overlay-disabled');
			}
		});

    content.on('text-change', function(delta, oldDelta, source) {
        $('#text-contents').val(content.container.firstChild.innerHTML);
    });


  </script>

@endpush

