@extends('layouts.pages')

@section('title', 'Inicio')

@section('content')
@include ('pages.includes.header.healths')


<main>



    <section class="about-area about-area-mid pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-11 modules-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">

                    <img src="/pages/img/healths/modules/history.svg" alt="">

                </div>
                <div class="col-xl-6 col-lg-12 col-md-11">
                    <div class="about-right-side pt-25 mb-30 ">


                        <div class="about-title mb-20">
                            <h5 class="pink-colo wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">MODULO 1</h5>
                            <h1 class="wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">Historia clínica electrónica.</h1>

                        </div>
                        <div class="about-text">
                            <p class="wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">Por qué integrar una historia clínica electrónica a mi centro de salud.</p>
                            <p class="wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">Información digital e integrada del paciente accesibles en tiempo real. Que permite</p><br>

                        </div>
                        <div class="mission-vision-list pr-90 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                            <div class="mv-single-list d-flex border-0">
                                <div class="mv-icon">
                                    <img src="/pages/img/shape/mv-icon-1.png" alt="#">
                                </div>
                                <div class="mv-text">
                                    <p>Mejora la calidad de la atención del pacientes generado fidelidad.</p>
                                </div>
                            </div>
                            <div class="mv-single-list d-flex border-0">
                                <div class="mv-icon">
                                    <img src="/pages/img/shape/mv-icon-1.png" alt="#">
                                </div>
                                <div class="mv-text">
                                    <p>Eficiencia Médica y ahorro en costos tu C. Salud.</p>
                                </div>
                            </div>
                            <div class="mv-single-list d-flex border-0">
                                <div class="mv-icon">
                                    <img src="/pages/img/shape/mv-icon-1.png" alt="#">
                                </div>
                                <div class="mv-text">
                                    <p>Mejora toma de decisiones estratégicas para él C. Salud.</p>
                                </div>
                            </div>

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
                            <h1>Medical innovation and technology ofrece una historia clínica</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="service-box service-box-border text-center mb-30 wow fadeInLeft service-mad" data-wow-delay="0ms" data-wow-duration="2000ms">
                        <div class="service-thumb">
                            <img src="/pages/img/healths/history/hl7.svg" alt="">
                        </div>
                        <div class="service-content">
                            <h3><a >Interoperable HL7</a></h3>
                            <p>Fácil de integrar con otros sistemas y hacer intercambio de información.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="service-box service-box-border text-center mb-30 wow fadeInLeft service-mad" data-wow-delay="0ms" data-wow-duration="2000ms">
                        <div class="service-thumb">
                            <img src="/pages/img/healths/history/regulation.svg" alt="">
                        </div>
                        <div class="service-content">
                            <h3><a >Cumple con normativas</a></h3>
                            <p>Cumple normativas del MINSA y estándares HIPPA. Incluye la firma digital electrónica.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="service-box service-box-border text-center mb-30 wow fadeInLeft service-mad" data-wow-delay="0ms" data-wow-duration="2000ms">
                        <div class="service-thumb">
                            <img src="/pages/img/healths/history/platform.svg" alt="">

                        </div>
                        <div class="service-content">
                            <h3><a >Visual e intuitiva</a></h3>
                            <p>Con opciones de filtro y un interfaz versátil y dinámica.</p>
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
