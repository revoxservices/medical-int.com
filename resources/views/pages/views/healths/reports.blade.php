@extends('layouts.pages')

@section('title', 'Inicio')

@section('content')

@include ('pages.includes.header.healths')

<main>

    <section class="about-area pt-130 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-12 col-md-11 modules-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">

                    <img src="/pages/img/healths/modules/reports.svg" alt="">



                </div>


                <div class="col-xl-6 col-lg-7">
                    <div class="about-right-side h4about-right mb-30">
                        <div class="about-title mb-20">
                            <h5 class="pink-color wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">MODULO 3</h5>
                            <h1 class="wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">Reporte y Analítica de tu centro de salud</h1>

                        </div>
                        <div class="about-text">
                            <p class="mb-20 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">Controla tu centro de salud con indicadores claves en tiempo real como especialidades más rentables, medicamentos más recetados, tiempo promedio de cita, entre otros.</p>


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
                            <h1>Reportes y estadísticas que permiten identificar y controlar los indicadores más importantes de tu centro de salud</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12">

                    <div class="service-box service-box-border text-center mb-30 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                        
                        <div class="service-content">
                            <div class="service-thumb">
                                <img src="/pages/img/healths/reports/specialty.svg" alt="">
    
    
                            </div>
                            <h3><a>Especialidades más rentables</a></h3>
                            <p> Gestiona eficientemente las Especialidades de tu centro de salud. Identifica rápidamente las especialidades de mayor y menor demanda, las que son más o menos rentables. Personaliza tus búsquedas por rango de edad, sexo, por frecuencia de tiempo, etc.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12">

                    <div class="service-box service-box-border text-center mb-30 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                        
                        <div class="service-content">
                            <div class="service-thumb">
                                <img src="/pages/img/healths/reports/medicines.svg" alt="">
    
                            </div>
                            <h3><a>Medicamentos más recetados</a></h3>
                            <p>Toma el control del stock y abastecimiento de tus medicamentos.    Identifica los medicamentos mas recetadas por especialidad, edades, sexo, temporadas, patologías .</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="service-box service-box-border text-center mb-30 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                        
                        <div class="service-content">
                            <div class="service-thumb">
                                <img src="/pages/img/healths/reports/time.svg" alt="">
    
    
    
                            </div>
                            <h3><a>Duracion de Citas</a></h3>
                            <p>Máxima optimización de tus citas disponibles. Identifica los promedios de duración de citas por especialidad, por doctor, que permitan generar cupos y citas adicionales.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="fact-area fact-map green-bg pos-rel pt-115 pb-120 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-10 offset-xl-1">
                    <div class="section-title pos-rel">
                        <div class="section-text section-text-white pos-rel text-center">
                            <h1 class="white-color mb-0">“Controla tu centro de salud con indicadores claves en tiempo real”</h1>

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
