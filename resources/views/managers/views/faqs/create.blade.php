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
                <a href="{{ route('manager.faqs') }}">Preguntas Frecuentes</a>
              </li>
              <li class="breadcrumb-item active">Crear
              </li>
            </ul>



            <div class="row row-same-height">
              <div class="col-md-12">
                <div class="padding-30 sm-padding-5">




                <form  id="formFaqs" enctype="multipart/form-data"  role="form" onSubmit="return false">


                   <textarea style="display: none"  id="text-descriptions" name="description"></textarea>

                    <div class="form-group-attached">
                      <div class="row clearfix">
                        <div class="col-sm-12">
                          <div class="form-group form-group-default required">
                            <label>Titulo</label>
                            {!! Form::text('label', null, ['class' => 'form-control' . ($errors->has('label') ? ' is-invalid' : ''), 'required']) !!}
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="form-group form-group-default required">
                            <label>Posición</label>
                            {!! Form::text('position', null, ['class' => 'form-control' . ($errors->has('position') ? ' is-invalid' : ''), 'required']) !!}
                          </div>
                        </div>
                      </div>
                      <div class="row clearfix">
                        <div class="col-md-12">
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
                        <div class="card-title">DESCRIPCIÓN
                        </div>
                        <div class="tools">
                        </div>
                      </div>
                      <div class="card-body no-scroll card-toolbar">
                        <div class="quill-wrapper">
                          <div  id="description"></div>
                        </div>
                      </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row m-t-25">
                        <div class="col-xl-12">
                          <button class="btn btn-primary pull-right btn-lg btn-block" type="submit" >Crear</button >
                      </div>
                    </div>


                    </form>

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


$(document).ready(function() {


          $("#formFaqs").validate({
                                submit: false,
                                ignore: ":hidden:not(#note),.note-editable.panel-body",
                                rules: {
                                    available: {
                                        required: true,
                                    },
                                    position: {
                                        required: true,
                                        min: 1,
                                        max: 99,
                                    },
                                    label: {
                                        required: true,
                                        minlength: 1,
                                        maxlength: 60,
                                    },
                                    description: {
                                        required: true,
                                        minlength: 1,
                                        maxlength: 60,
                                    },
                                },
                                messages: {
                                  available: {
                                        required: "Elige una estado",
                                    },
                                    position: {
                                        required: "La posicion es necesaria.",
                                        minlength: "La posicion debe ser mayor que 0",
                                        maxlength: "La posicion debe ser menor que 99"
                                    },
                                    label: {
                                        required: "Agregar un nombre.",
                                        minlength: "La dirección debe contener al menos 1 caracteres",
                                        maxlength: "La dirección debe contener no más de 60 caracteres"
                                    },
                                    description: {
                                        required: "Agregar un nombre.",
                                        minlength: "La dirección debe contener al menos 1 caracteres",
                                        maxlength: "La dirección debe contener no más de 60 caracteres"
                                    }
                                },

                                submitHandler: function(form) {

                                    var $form = $('#formFaqs');
                                    var formData = new FormData($form[0]);

                                        $.ajax({
                                            url: "/manager/faqs/storage",
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            },
                                            type: "POST",
                                            contentType: false,
                                            processData: false,
                                            data: formData ,
                                            success: function(data) {


                                              location.href = "/manager/faqs";


                                            }
                                        });


                                }

                });

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

  </script>

@endpush

