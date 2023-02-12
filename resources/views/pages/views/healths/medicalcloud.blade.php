@extends('layouts.pages')

@section('title', 'Inicio')

@section('content')

@include ('pages.includes.header.healths')

<main>

    <section class="about-area pt-130 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-5">

                    <div class="about-front-img pos-rel wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                        <img src="/pages/img/healths/about/about__thumb.jpg" alt="">

                        <a class="popup-video about-video-btn white-video-btn" href="https://www.youtube.com/watch?v=u6EvWl6moUg"><i class="fas fa-play"></i></a>
                    </div>

                </div>
                <div class="col-xl-6 col-lg-7">
                    <div class="about-right-side about-right mb-30">
                        <div class="about-title mb-20">
                            <h5 class="pink-color wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">SERVICIOS</h5>
                            <h1 class="wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">Medical Cloud</h1>
                            <p class="theme-color wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">Plataforma digital de gestión y atención ambulatoria</p>

                        </div>
                        <div class="about-text wow fadeInLeft">
                            <p class="mb-20 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">Medical Cloud es Salud Digital, es una plataforma tecnologica que te permitira almacenar la información de salud de tu centro de forma digital y transformar tus procesos analogos a procesos digitales procesos digitales para una atencio y gestion eficiente.</p>
                            <p class="mb-20 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">Medical Cloud es una plataforma que te permitira brindar nuevos servicios de salud digital. Tele-monitoreo, Tele-ecografia, Tele-consultas, Tele-cardiologia y muchas mas.</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>



    <section class="about-area pt-20 pb-90">
        <div class="container">

            <div class="row">
                <div class="row ">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="section-title section-title-m-0 pos-rel mb-40 text-center">
                            <div class="section-text section-text-small pos-rel">
                                <h5 class="wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">Medical Cloud</h5>
                                <h1 class="wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">Plataforma digital de gestión y atención ambulatoria.</h1>
                                <p class="wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms"> Medical Cloud es Salud Digital, es una plataforma tecnológica que te permitirá almacenar la información de salud de tu centro de forma digital y transformar tus procesos análogos a procesos digitales para una atención y gestión eficiente.</p>
    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-60">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <a href="{{ route('history') }}" class="service-box service-box-2 mb-30 pos-rel wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                            <div class="service-thumb">
                                <img src="/pages/img/healths/modules/history.svg" alt="">
    
                            </div>
                            <div class="service-content service-content-2">
                                <h6 class="green-color text-up-case letter-spacing mb-20">MODULO</h6>
                                <h3>Historia Clínica Electrónica</h3>
                                <p>Accede a la información clínica de tus pacientes en un click y facilita tus procesos son herramientas como la firma digital.</p>
                            </div>
                            <div class="service-number">
                                <h1 class="service-big-number">01</h1>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <a href="{{ route('telemedicine') }}" class="service-box service-box-2 mb-30 pos-rel wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
    
                            <div class="service-thumb">
                                <img src="/pages/img/healths/modules/telemedicine.svg" alt="">
    
                            </div>
                            <div class="service-content service-content-2">
                                <h6 class="green-color text-up-case letter-spacing mb-20">MODULO</h6>
                                <h3>Telemedicina</h3>
                                <p>Atiende a mayor cantidad de pacientes a través de citas y servicios virtuales a través de los siguientes servicios Tele Consultas, Tele- Orientacion, Tele Ecografia en tiempo Real.</p>
                            </div>
                            <div class="service-number">
                                <h1 class="service-big-number">02</h1>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <a href="{{ route('reports') }}" class="service-box service-box-2 mb-30 pos-rel wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
    
                            <div class="service-thumb">
                                <img src="/pages/img/healths/modules/reports.svg" alt="">
    
                            </div>
                            <div class="service-content service-content-2">
                                <h6 class="green-color text-up-case letter-spacing mb-20">MODULO</h6>
                                <h3>Reportes y Analitica</h3>
                                <p>Controla tu centro de salud con indicadores claves en tiempo real como especialidades más rentables, medicamentos más recetados, tiempo promedio de cita, entre otros.</p>
                            </div>
                            <div class="service-number">
                                <h1 class="service-big-number">03</h1>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <a href="{{ route('diary') }}" class="service-box service-box-2 mb-30 pos-rel wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                            <div class="service-thumb">
                                <img src="/pages/img/healths/modules/diary.svg" alt="">
    
                            </div>
                            <div class="service-content service-content-2">
                                <h6 class="green-color text-up-case letter-spacing mb-20">MODULO</h6>
                                <h3>Agenda Inteligente digital</h3>
                                <p>Simplifica tu proceso de agendamiento de servicios y brinda una mejor experiencia a tus paciente para convertirlos en clientes fieles de tu centro de salud.</p>
                            </div>
                            <div class="service-number">
                                <h1 class="service-big-number">04</h1>
                            </div>
                        </a>
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
