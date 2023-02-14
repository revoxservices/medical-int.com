@extends('layouts.pages')

@section('title', 'Inicio')

@section('content')

@include ('pages.includes.header.header')

<main>
    <!-- contact-area start -->
    <section class="contact-area pt-120 pb-90" data-background="assets/img/bg/bg-map.html">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="contact text-center mb-30 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                        <i class="fas fa-envelope"></i>
                        <h3>Correo Electrónico</h3>
                        <p><a target="_blank" href="mailto:{{ $setting->email }}" class="__cf_email__">{{ $setting->email }}</a></p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="contact text-center mb-30 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                        <i class="fas fa-map-marker-alt"></i>
                        <h3>Direccion</h3>
                            <p>{{ $setting->address }}</p>


                    </div>
                </div>
                <div class="col-xl-4  col-lg-4 col-md-4 ">
                    <div class="contact text-center mb-30 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                        <i class="fa fa-whatsapp icons"></i>
                        <h3>Comunicate</h3>
                        <p >
                            <a target="_blank" href="https://api.whatsapp.com/send?phone={{ $setting->whatsapp }}" class="__cf_email__">
                            {{ $setting->whatsapp }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area end -->

    <!-- contact-form-area start -->
    <section class="contact-form-area gray-bg pt-100 pb-100">
        <div class="container">
            <div class="form-wrapper wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="section-title mb-55">
                            <p><span></span> Cualquier cosa en tu mente</p>
                            <h1>Estima tu idea</h1>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <form  id="formContacts" enctype="multipart/form-data"  class="ttm-contactform wrap-form style2 res-991-mt_15 clearfi" role="form" onSubmit="return false">

                                <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-box  mb-30">
                                                    <input type="text" name="names" id="names" placeholder="Sus nombres" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-box  mb-30">
                                                    <input type="email" name="email" id="email" placeholder="Tu correo electrónico" required>

                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-box  mb-30">
                                                    <input type="text" name="cellphone" id="cellphone" placeholder="Su teléfono" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-box  mb-30">
                                                    <input type="text" name="subject" id="subject" placeholder="Tu asunto" required>

                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-box  mb-30">
                                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Tu mensaje" required></textarea>

                                                </div>
                                            </div>
                                            <div class="contact-btn text-center mt-30">
                                                    <button type="submit" class="btn btn-icon ml-0">Enviar</button>
                                            </div>
                                        </div>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>


@endsection



@push('scripts')

<script type="text/javascript">
        $(document).ready(function() {


        jQuery.validator.addMethod("emailExt", function(value, element, param) {
            return value.match(/^[a-zA-Z0-9_\.%\+\-]+@[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,3}$/);
        }, 'Porfavor ingrese email valido');

          $("#formContacts").validate({
                                submit: false,
                                ignore: ":hidden:not(#note),.note-editable.panel-body",
                                rules: {
                                    names: {
                                        required: true,
                                    },
                                    email: {
                                        required: true,
                                        email: true,
                                        emailExt: true,
                                    },
                                    cellphone: {
                                        required: true,
                                        number: true,
                                        minlength: 8,
                                        maxlength: 500,
                                    },
                                    message: {
                                        required: true,
                                    },
                                    subject: {
                                        required: true,
                                    },
                                },
                                messages: {
                                    names: {
                                        required: "Este campo es necesario",
                                    },
                                    email: {
                                        required: "El email es necesario",
                                        email: "Por favor ingrese email valido"
                                    },
                                    cellphone: {
                                        required: "La celular es necesario",
                                        minlength: "La celular debe contener al menos 6 caracteres",
                                        maxlength: "La celular debe contener no mas de 20 caracteres",
                                        number: "Sólo se pueden ingresar números"
                                    },
                                    message: {
                                        required: "Este campo es necesario",
                                    },
                                    subject: {
                                        required: "Este campo es necesario",
                                    },
                                },

                                submitHandler: function(form) {

                                    var $form = $('#formContacts');
                                    var formData = new FormData($form[0]);

                                        $.ajax({
                                            url: "/contact/storage",
                                            headers: {
                                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                            },
                                            type: "POST",
                                            contentType: false,
                                            processData: false,
                                            data: formData ,
                                            success: function(data) {

                                              obj = JSON.parse(data);
                                              var slack = obj.team;

                                              location.href = "/contact/success/"+slack;


                                            }
                                        });


                                }

                });

        });
    </script>
@endpush


