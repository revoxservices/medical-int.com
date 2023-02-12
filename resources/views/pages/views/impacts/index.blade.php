@extends('layouts.pages')

@section('title', 'Inicio')

@section('content')

    @include ('pages.includes.header.impacts')

    <main>
        <section class="fact-area fact-map primary-bg pos-rel pt-115 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-10 single-center">

                        <div class="section-title pos-rel ">
                            <div class="section-text section-text-white pos-rel wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                                <h5>Proyecto de impacto social en salud</h5>
                                <h1 class="white-color">Acceso a diagnóstico médico oportuno en zonas rurales

                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6 col-md-8">
                        <div class="cta-satisfied">
                            <div class="single-satisfied mb-50 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                                <h1><span class="counter">2 </span> millones</h1>


                                <h5>En ahorro generado: reducción de transporte de casos de emergencia gracias a la atención
                                    oportuna</h5>


                            </div>
                            <div class="single-satisfied mb-50 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                                <h1><span class="counter">39</span>mil</h1>
                                <h5>Pacientes beneficiados con nuestro servicio de tele-ecografía</br>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-area about-area-mid pt-120 pb-90">
            <div class="container">
                <div class="row mb-60">
                    <div class="col-xl-12 col-lg-10 col-md-12 text-center">
                        <div class="about-title mb-20 ">
                            <h1 class="wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">Impacto de la <strong>tele-ecografía</strong> en centros de salud remotos.</.stron>
                                <p class="wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">Las Tele-ecografías son ecografías aplicadas de forma remota, que permiten diagnosticar
                                    patologías sin contar con un especialista de forma presencial en el centro de salud.
                                    Nuestra solución de ecografía ha sido desarrollada para adaptarse a las distintas
                                    condiciones tecnológicas y geográficas del Perú</p>
                        </div>
                    </div>
                </div>

                <div class="row single-center">
                    <div class="col-xl-8 col-lg-12 col-md-12">


                        <div class="row feature">

                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="feature-box mb-40 feature-hover wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms" data-modal="details-modal"
                                    >
                                    <div class="feature-small-icon mb-35">
                                        <img src="/pages/img/socials/diagnoses.svg" alt="">

                                    </div>
                                    <div class="feature-small-content">
                                        <h3>Diagnósticos oportunos para pacientes</h3>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="feature-box mb-40 feature-hover  wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms" data-modal="details-modal"
                                   >
                                    <div class="feature-small-icon mb-35">
                                        <img src="/pages/img/socials/costs.svg" alt="">

                                    </div>
                                    <div class="feature-small-content">
                                        <h3>Reducción de costos de transporte en casos de emergencia</h3>

                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4">
                                <div class="feature-box mb-40 feature-hover  wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms" data-modal="details-modal"
                                    >
                                    <div class="feature-small-icon mb-35">
                                        <img src="/pages/img/socials/attention.svg" alt="">

                                    </div>
                                    <div class="feature-small-content">
                                        <h3>Mejora las atenciones médicas en la localidad</h3>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="fact-area fact-map primary-bg pos-rel pt-115 pb-60">
            <div class="container">
                <div class="row">
                    <div class="cta-text text-center">
                        <div class="section-title pos-rel mb-50">
                            <div class="section-text section-text-white pos-rel  wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                                <h5>TELE-ECOGRAFIA</h5>
                                <h1 class="white-color">Cómo funciona la tele ecografía de Medical Innovation & Technology
                                </h1>

                            </div>
                            <div class="mission-vision-list text-center modules-grid">

                                <div class="mv-single-list d-flex border-0  wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                                    <div class="mv-icon">
                                        <img src="/pages/img/shape/mv-icon-1.png" alt="#">
                                    </div>
                                    <div class="mv-text">
                                        <p>No necesita de un especialista en el centro de salud de atención remota.</p>

                                    </div>
                                </div>
                                <div class="mv-single-list d-flex border-0  wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                                    <div class="mv-icon">
                                        <img src="/pages/img/shape/mv-icon-1.png" alt="#">
                                    </div>
                                    <div class="mv-text">
                                        <p>No requiere de internet de alta velocidad, gracias a la tecnología.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hero-slider-btn  wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">

                            <a data-animation="fadeInRight" data-delay="1.0s"
                                href="https://www.youtube.com/watch?v=Zrch3a1EDYQ" class="play-btn popup-video"
                                tabindex="0" style="animation-delay: 1s;"><i class="fas fa-play"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </section>




        <section class="about-area pt-130 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-5">
                        <div class="h4about-thumb pos-rel wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                            <img src="/pages/img/socials/impacts.png" alt="">

                            <a class="call-btn f-700 white-color green-bg"><span>PROYECTO DE IMPACTO SOCIAL EN
                                    SALUD</span></a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="about-right-side h4about-right mb-30">
                            <div class="about-title mb-20 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                                <h1>Tecnología que salvan vidas.</h1>
                            </div>
                            <div class="about-text wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                                <p class="theme-color wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">Desarrollamos soluciones tecnológicas de salud digital que se
                                    adaptan a distintas condiciones y necesidades, con el fin de que las personas en las
                                    zonas remotas del país accedan a servicios de salud de manera oportuna.</p>

                                <p class="mb-20 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">Implementamos proyectos sostenibles de salud digital trabajando de manera
                                    articulada con empresas socialmente responsables , organizaciones sin fines de lucro y
                                    gobiernos regionales de salud.</p>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="latest-news-area pt-115 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-sm-12 col-lg-12">

                        <div class="section-title text-center pos-rel mb-40">
                            <div class="about-title mb-20 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                                <h1>Proyectos sostenible de <br> Tele-ecografía</h1>
                                <h4 class="theme-color">A través del trabajo articulado entre Organización + Empresa +
                                    Estado.</h4>

                            </div>
                        </div>
                        <div class="section-title text-center pos-rel mb-40">

                            <div class="section-line pos-rel wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                                <img src="/pages/img/socials/bg.jpg" alt="">

                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-sm-12 col-lg-12">

                        <div class="section-title text-center pos-rel mb-40 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">

                            <div class="section-line pos-rel">
                                <img src="/pages/img/shape/section-title-line.png" alt="">
                            </div>


                        </div>
                    </div>
                </div>


                <div class="services-area services-border pos-rel mt-60">
                    <div class="row ">
                    <div class="h4service-active projects">
                        <div class="col-xl-4 col-lg-4 col-md-12">
                            <div class="h4service-box white-bg mb-30 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                                <div class="service-thumb pos-rel mb-0">
                                    <img src="/pages/img/socials/view/piloto.jpg" alt="">
                                    <a class="h4services-tag green-bg white-color text-uppercase f-700" href="#">Proyectos</a>
                                </div>
                                <div class="service-content h4services-content">
                                    <h3><a href="{{ route('project.piloto') }}">Campañas Piloto</a></h3>
                                    <p class="mb-20">Estas Campañas se realizaron en varias regiones del país, permitiendo acercarnos a la problemática de zonas rurales.</p>
                                    <a class="btn btn-icon" href="{{ route('project.piloto') }}">Lee mas<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12">
                            <div class="h4service-box white-bg mb-30 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                                <div class="service-thumb pos-rel mb-0">
                                    <img src="/pages/img/socials/view/teleecografía.jpg" alt="">
                                    <a class="h4services-tag green-bg white-color text-uppercase f-700" href="#">Proyectos</a>
                                </div>
                                <div class="service-content h4services-content">
                                    <h3><a href="{{ route('project.teleecografía') }}">Campaña de tele-ecografía</a></h3>
                                    <p class="mb-20">Esta iniciativa permitió brindar una atención de calidad a las comunidades de la zona de Megantoni..</p>
                                    <a class="btn btn-icon" href="{{ route('project.teleecografía') }}">Lee mas<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12">
                            <div class="h4service-box white-bg mb-30 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                                <div class="service-thumb pos-rel mb-0">
                                    <img src="/pages/img/socials/view/rurales.jpg" alt="">
                                    <a class="h4services-tag green-bg white-color text-uppercase f-700" href="#">Proyectos</a>
                                </div>
                                <div class="service-content h4services-content">
                                    <h3><a href="{{ route('project.rurales') }}">Servicio de tele-ecografía en zonas rurales</a></h3>
                                    <p class="mb-20">Este Proyecto permitió ampliar la cobertura para la atención de imágenes médicas en zonas rurales de Pasco, Ancash e Ica.</p>
                                    <a class="btn btn-icon" href="{{ route('project.rurales') }}">Lee mas<i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
               
            </div>
        </section>






        <section class="fact-area fact-map green-bg pos-rel pt-115 pb-60 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="section-title pos-rel mb-45">
                            <div class="section-text section-text-white pos-rel">
                                <h5 class="white-color">Tele-ecografía</h5>
                                <h1 class="white-color">La salud es un derecho de todos. Acerquemos los servicios de salud
                                    y diagnósticos oportunos a los que más lo necesitan .</h1>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>



        @include ('pages.partials.sections.healths.partners')


        @include ('pages.partials.sections.healths.blogs')




    </main>


    <div id="details-modal" class="modal h-modal is-small">
        <div class="modal-background h-modal-close"></div>
        <div class="modal-content">
            <div class="modal-card">

                <div class="modal-card-body">
                    <div class="appoinment-box white">
                        <div class="appoinment-content">

                            <h1 class="title-detail">If you are a patient seeking quality.</h1>
                            <p class="detalle-detail">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                nisi ut aliquip ex ea
                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</p>

                        </div>

                        <button class="h-modal-close ml-auto btn mt-40" aria-label="close">
                            CERRAR
                        </button>



                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
