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
                                <h5 class="green-color text-up-case">Campañas</h5>
                                <h1 class="text-up-case">PILOTO</h1>

                            </div>
                            <div class="section-line pos-rel wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                                <img src="/pages/img/shape/section-title-line.png" alt="">
                            </div>
                        </div>
                        <div class="service-details-thumb mb-20 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                            <img class="img" src="/pages/img/socials/view/piloto.jpg" alt="">

                        </div>


                        <div class="service-details-text mb-40 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                            <p>Estas Campañas se realizaron en varias regiones del país, permitiendo acercarnos a la problemática de zonas rurales, son experiencias que coadyuvaron nuestro acercamiento a comunidades con grandes necesidades, que requerían.</p>

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
                                        <div class="more-service-icon"><img src="/pages/img/socials/details/zones.svg" alt=""></div>



                                        <div class="more-service-title ">Zonas
                                            <span>05 Pilotos en Costa, Sierra, Selva , Centro de Salud Nauta (Loreto), Churcampa (Huancavelica), Shamboyacu (San Martin), Conde de la Vega (Lima),</span>
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
                                            <span>111</span>
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
