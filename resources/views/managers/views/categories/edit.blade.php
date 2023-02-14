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
                <a href="{{ route('manager.categories') }}">Categorias</a>
              </li>
              <li class="breadcrumb-item active">Editar
              </li>
            </ul>



            <div class="row row-same-height">
              <div class="col-md-12">
                <div class="padding-30 sm-padding-5">


                <form  id="formCategories" enctype="multipart/form-data"  role="form" onSubmit="return false">
                    
                  <input type="hidden"    name="slack"    value="{{$categorie->slack}}" />


                    <div class="form-group-attached">
                      <div class="row clearfix">
                        <div class="col-sm-6">
                          <div class="form-group form-group-default required">
                            <label>Título</label>
                            {!! Form::text('label', $categorie->label , ['class' => 'form-control' . ($errors->has('label') ? ' is-invalid' : ''), 'required']) !!}
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="form-group form-group-default form-check-group d-flex align-items-center">
                            <div class="form-check switch switch-lg success full-width right m-b-0">
                              @if($categorie->available == 1)
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


                    <div class="clearfix"></div>

                    <div class="row m-t-25">
                      <div class="col-xl-12">
                          <button class="btn btn-primary pull-right btn-lg btn-block" type="submit" >Editar</button >
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

          $("#formCategories").validate({
                                submit: false,
                                ignore: ":hidden:not(#note),.note-editable.panel-body",
                                rules: {
                                    available: {
                                        required: true,
                                    },
                                    label: {
                                        required: true,
                                        minlength: 1,
                                        maxlength: 60,
                                    },
                                },
                                messages: {
                                  available: {
                                        required: "Elige una estado",
                                    },
                                    label: {
                                        required: "Agrega la dirección.",
                                        minlength: "La dirección debe contener al menos 1 caracteres",
                                        maxlength: "La dirección debe contener no más de 60 caracteres"
                                    },
                                },

                                submitHandler: function(form) {

                                    var $form = $('#formCategories');
                                    var formData = new FormData($form[0]);

                                        $.ajax({
                                            url: "/manager/categories/update",
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            },
                                            type: "POST",
                                            contentType: false,
                                            processData: false,
                                            data: formData ,
                                            success: function(data) {


                                              location.href = "/manager/categories";


                                            }
                                        });


                                }

                });

        });
    </script>
@endpush

