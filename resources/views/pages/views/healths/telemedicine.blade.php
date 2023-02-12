@extends('layouts.pages')

@section('title', 'Inicio')

@section('content')

@include ('pages.includes.header.healths')


<main>

    <section class="about-area pt-130 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-11 modules-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">

                    <img src="/pages/img/healths/modules/telemedicine.svg" alt="">


                </div>

                <div class="col-xl-6 col-lg-7">
                    <div class="about-right-side h4about-right mb-30">
                        <div class="about-title mt-90 mb-20">

                            <h5 class="pink-color wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">MODULO 2</h5>
                            <h1 class="wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">Telemedicina</h1>
                        </div>
                        <div class="about-text">
                            <p class="mb-20 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">Atiende a mayor cantidad de pacientes a través de citas y servicios virtuales a través de los siguientes servicios Tele Consultas, Tele- Orientacion, Tele Ecografia en tiempo Real.</p>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>









    <section class="about-area pt-20 pb-90">
        <div class="container">
            <div class="row ">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="section-title text-center pos-rel mb-75">
                        <div class="section-text pos-rel home_ser_title wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                            <h1>¡Implementa la telemedicina en tu centro de salud con MIT!</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="service-box service-box-border text-center mb-30 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                        <div class="service-thumb">
                            <img src="/pages/img/healths/telemedicine/consult.svg" alt="">
                        </div>
                        <div class="service-content">
                            <h3><a>Tele Consultas</a></h3>
                            <p> Incremento de cantidad de citas, eliminando distancias y optimizando el tiempo del especialista. Además permite al paciente hacer un uso efectivo de su tiempo evitando traslados innecesarios </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="service-box service-box-border text-center mb-30 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                        <div class="service-thumb">
                            <img src="/pages/img/healths/telemedicine/sonography.svg" alt="">


                        </div>
                        <div class="service-content">
                            <h3><a>Tele ecografía </a></h3>
                            <p>Permite ampliar la oferta del servicio de tele ecografías gracias a que la tele-ecografía síncrona permite brindar este servicios incluso cuando los especialistas no se encuentran en el centro de salud, ya que puedan realizar la lectura de imágenes de forma remota.</p>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>
    <section class="calculate-area pos-rel pt-115 pb-120" data-background="/pages/img/calculate/calculate-bg.png" style="background-image: url(&quot;img/calculate/calculate-bg.png&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6 col-md-10">
                    <div class="section-title calculate-section pos-rel mb-45 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                        <div class="section-text section-text-white pos-rel">
                            <h5>MEDICAL CLOUD</h5>
                            <h1>Estás listo para la salud digital ?</h1>
                            <p>Genera más eficiencia y rentabilidad en tu centro de salud con Medical Cloud .</p>

                        </div>
                    </div>
                    <div class="section-button section-button-left mb-80 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                        <a data-animation="fadeInLeft" data-delay=".6s" href="https://api.whatsapp.com/send?phone=57{{ $setting->whatsapp }}&text=Buenas%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20productos%202." class="btn btn-icon ml-0">Conoce más</a>

                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <form id="actionForm" class="calculate-box white-bg wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms" enctype="multipart/form-data" role="form" onSubmit="return false">

                        <input type="hidden" id="service" value="Agenda Inteligente digital">

                        <div class="calculate-content">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="calculate-form" action="#">
                                        <input type="text" id="names" placeholder="Tu nombres" required>
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="calculate-form mt-2" action="#">

                                        <input type="email" id="email" placeholder="Tu correo electrónico" required>

                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <div class="calculate-form mt-2" action="#">

                                        <input type="text" id="phone" placeholder="Tu teléfono" >


                                    </div>

                                </div>

                                <div class="col-xl-12">
                                    <div class="calculate-form mt-2" action="#">
                                        <input type="text" id="company" placeholder="Tu Empresa" >
                                    </div>

                                </div>
                            </div>
                        </div>
                        <button type="submit" id="action" class="btn mt-40 text-center">Solicitar Demo</button>
                    </form>


                </div>

            </div>
        </div>
        </div>
    </section>




</main>


@endsection
