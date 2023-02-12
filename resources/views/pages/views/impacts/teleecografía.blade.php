@extends('layouts.pages')

@section('title', 'Inicio')

@section('content')
@include ('pages.includes.header.impacts')

<main>
    <div class="doctor-details-area pt-115 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-sm-12">

                    <article class="doctor-details-box">
                        <div class="section-title pos-rel mb-25">
                            <div class="section-icon">
                                <img class="section-back-icon back-icon-left" src="/pages/img/section/section-back-icon-sky.png" alt="">
                            </div>
                            <div class="section-text pos-rel wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                                <h5 class="green-color text-up-case">CAMPAÑA</h5>

                                <h1 class="text-up-case">TELE-ECOGRAFÍA.</h1>



                            </div>
                            <div class="section-line pos-rel wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                                <img src="/pages/img/shape/section-title-line.png" alt="">
                            </div>
                        </div>
                        <div class="service-details-thumb mb-20 ">
                            <img class="img wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms" src="/pages/img/socials/view/teleecografía.jpg" alt="">


                        </div>


                        <div class="service-details-text mb-40 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                            <p>Esta iniciativa permitió brindar una atención de calidad a las comunidades de la zona de Megantoni, al ser una zona con muchas vías fluviales el desplazamiento es lento y puede durar horas, días o semanas, este Proyecto redujo el tiempo de acceso de estos procedimientos de salud, entregando Reportes médicos a pacientes que nunca accedieron a ellas, inclusive a gestantes que normalmente no se habían realizado ecografías obstétricas y pacientes con padecimientos recurrentes que no podían trasladarse a establecimientos de salud de mayor nivel de complejidad que contaban con especialistas y equipos para realizar la adquisición de imágenes médicas. Abrió las puertas a los médicos a diagnosticar a tiempo y contar con un mayor nivel de resolución para los pacientes.</p>


                        </div>
                    </article>
                </div>

                <div class="col-xl-4 col-lg-4 col-sm-12">

                    <div class="service-widget mb-50 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                        <div class="widget-title-box mb-30">
                            <h3 class="widget-title">Detalle</h3>
                        </div>
                        <div class="more-service-list">
                            <ul>
                                <li class="wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                                    <a >
                                        <div class="more-service-icon"><img src="/pages/img/socials/details/customer.svg" alt=""></div>
                                        <div class="more-service-title ">Cliente
                                            <span>REPSOL EXPLORACIÓN PERU S.A</span>

                                        </div>
                                    </a>
                                </li>


                                <li class="wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                                    <a >
                                        <div class="more-service-icon"><img src="/pages/img/socials/details/zones.svg" alt=""></div>

                                        <div class="more-service-title ">Zonas
                                            <span>Nuevo Mundo, Megantoni– La Convención, Cusco</span>

                                        </div>
                                    </a>
                                </li>
                                <li class="wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                                    <a >
                                        <div class="more-service-icon"><img src="/pages/img/socials/details/strakeholders.svg" alt=""></div>


                                        <div class="more-service-title ">Stakeholders
                                            <span>
                                                Gobierno Regional Cusco

                                            </span>
                                            <span>
                                                DIRESA Cusco

                                            </span>

                                        </div>
                                    </a>
                                </li>
                                <li class="wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                                    <a >
                                        <div class="more-service-icon"><img src="/pages/img/socials/details/teleecografia.svg" alt=""></div>

                                        <div class="more-service-title ">Tele-ecografías
                                            <span>
                                                Obstétricas, Tiroides, Cuadrante Superior Derecho

                                            </span>
                                        </div>
                                    </a>
                                </li>


                                <li class="wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                                    <a >
                                        <div class="more-service-icon"><img src="/pages/img/socials/details/attention.svg" alt=""></div>

                                        <div class="more-service-title ">Personas atendidas
                                            <span>72</span>


                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <main>


        @endsection
