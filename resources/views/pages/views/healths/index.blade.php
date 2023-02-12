@extends('layouts.pages')

@section('title', 'Inicio')

@section('content')

@include ('pages.includes.header.healths')

<main>
    <section class="fact-area fact-map primary-bg pos-rel pt-115 pb-60" >
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 single-center">

                    <div class="section-title pos-rel ">
                        <div class="section-text section-text-white pos-rel">
                            <h5>Soluciones de salud y telesalud digital</h5>
                            <h1 class="white-color">Abraza la salud digital</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="cta-satisfied">
                        <div class="single-satisfied mb-50">
                            <h1><span class="counter">40</span>%</h1>
                            <h5> Incremento de rentabilidad</h5>
                            <p> Generando procesos y servicios más eficientes que optimizan los recursos de tu centro.</p>
                        </div>
                        <div class="single-satisfied mb-50">
                            <h1><span class="counter">90</span>%</h1>
                            <h5> Fidelización e incremento de pacientes</h5>

                            <p>A través de servicios de salud de calidad y con una experiencia especialmente enfocada en el usuario.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-area about-area-mid pt-120 pb-20 " >
        <div class="container">
            <div class="row mb-60">


                <div class="col-xl-12 col-lg-12 col-md-12 text-center">

                    <div class="about-title mb-20 ">
                        <h1>Digitalizar tu centro de <br> salud es más que implementar <br>la historia clínica electrónica.</h1>
                    </div>
                    <div class="about-text mission-about-text ">
                        <h3 class="hire-text-4 uppercase">Incluye</h3>
                    </div>
                </div>
            </div>

            <div class="row single-center single-action fadeInUp pt-60"  data-animation="fadeInUp" >
                <div class="col-xl-8 col-lg-12 col-md-12">


                    <div class="row feature">

                        <div class="col-xl-12 col-lg-12 col-md-12 healths-container none-mobile">
                            <div class="feature-box mb-40 feature-hover h-modal-details fadeInUp options-box ">
                                <div class="feature-small-icon mb-35">
                                    <img src="/pages/img/healths/healths.svg" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-4  action-container">
                            <div class="feature-box mb-40 feature-hover h-modal-details  options-box "    
                            data-toggle="popover" 
                            data-trigger="hover" 
                            data-placement="bottom" 
                            data-content="Es el proceso mediante el cual la información se pasa de un formato análogo o físico a uno digital mediante el uso de una herramienta digital. El objetivo de este procedimiento es que esa información pueda ser procesada, almacenada y compartida en equipos y redes digitales."
                            >
                                <div class="feature-small-icon mb-35">
                                    <img src="/pages/img/healths/digitization.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 action-container">
                            <div class="feature-box mb-40 feature-hover   options-box" 
                            
                            data-toggle="popover" 
                            data-trigger="hover" 
                            data-placement="bottom" 
                            data-content="Es el proceso por el cual, a través de las tecnologías, se cambian la forma de pensar una organización o un sector, así como también las reglas de participación, formas de trabajo y los modos de interactuar. En la TD intervienen tres elementos clave: las personas y la cultura social; la misión, los procesos y la cultura de trabajo; y las tecnologías informáticas y manuales."
                            >
                                <div class="feature-small-icon mb-35">
                                    <img src="/pages/img/healths/transformation.svg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 action-container" >
                            <div class="feature-box mb-40 feature-hover options-box " 

                            data-toggle="popover" 
                            data-trigger="hover" 
                            data-placement="bottom" 
                            data-content="Son el conjunto de herramientas que permiten recopilar, procesar, almacenar y compartir información. Pueden ser equipos, programas informáticos, redes o aplicaciones.  "
                             >


                                <div class="feature-small-icon mb-35">
                                    <img src="/pages/img/healths/technology.svg" alt="">

                                </div>
                                
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 medical-container none-mobile">
                            <div class="feature-box mb-40 feature-hover options-box"    
                           >
                                <div class="feature-small-icon mb-35">
                                    <img src="/pages/img/healths/medical.svg" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="about-area about-area-mid " >
        <div class="container">
            <div class="row justify-center chevron">
                <img src="/pages/img/healths/chevron.svg" alt="">
            </div>
        </div>
    </section>

    <section class="about-area about-area-mid pt-120 pb-90 " >
        <div class="container">
            <div class="row mb-60">


                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="about-title mb-20 text-center">
                        <h1>La transformación te traerá los siguientes beneficios</h1>

                    </div>
                </div>
            </div>

            <div class="row single-center">



                <div class="col-xl-8 col-lg-12 col-md-12">

                    <div class="row feature">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="feature-box mb-40 feature-hover h-modal-details fadeInUp" 

                            data-toggle="popover" 
                            data-trigger="hover" 
                            data-placement="bottom" 
                            data-content="La telemedicina posibilita el acceso a médicos y especialistas a pacientes en áreas remotas o que tienen problemas de movilidad, ahorrándoles además tiempo y costos de traslado. "
                            >
                                <div class="feature-small-icon mb-35">
                                    <img src="/pages/img/healths/medical/attention.svg" alt="">
                                </div>
                                <div class="feature-small-content">
                                    <h3>Mayor acceso a la atención médica</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="feature-box mb-40 feature-hover h-modal-details fadeInUp" 
                            
                            data-toggle="popover" 
                            data-trigger="hover" 
                            data-placement="bottom" 
                            data-content="Una revisión de 47 estudios asoció a los sistemas de historia clínica electrónica con un menor número de errores médicos y en la medicación. El tener a mano todos las imágenes y protocolos de los pacientes permite tomar mejores decisiones. Las recetas electrónicas también disminuyen errores de legibilidad. Y los sistemas computarizados para la toma de decisionesfacilitan a los profesionales recibir alertas o recordatorios que apoyan su trabajo.  "
                            >
                                <div class="feature-small-icon mb-35">
                                    <img src="/pages/img/healths/medical/errors.svg" alt="">
                                </div>
                                <div class="feature-small-content">
                                    <h3>Menos errores médicos</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="feature-box mb-40 feature-hover h-modal-details fadeInUp" 
                             data-toggle="popover" 
                            data-trigger="hover" 
                            data-placement="bottom" 
                            data-content="Tener acceso a su historia clínica personal le brinda al paciente acceso oportuno a su información y mayor transparencia. La historia clínica electrónica también facilita el uso de mensajería de WhatsApp o texto para mensajes de seguimiento a los pacientes, muy importantes en el caso de quienes tienen patologías crónicas. Los dispositivos móviles y wearables brindan un mayor autocontrol a los pacientes y la salud móvil mejora la adherencia a los tratamientos. "
                            >
                                <div class="feature-small-icon mb-35">
                                    <img src="/pages/img/healths/medical/empowered.svg" alt="">
                                </div>
                                <div class="feature-small-content">
                                    <h3>Pacientes más empoderados</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="feature-box mb-40 feature-hover h-modal-details fadeInUp" 
                            data-toggle="popover" 
                            data-trigger="hover" 
                            data-placement="bottom" 
                            data-content="Con los sistemas de gestión de datos disminuye el tiempo dedicado a tareas administrativas, a buscar resultados de exámenes u otra información necesaria para la toma de decisiones. La historia clínica electrónica reduce un 22% el tiempo dedicado a llenar el historial del paciente. Con el uso de la telemedicina, también se demostró que se reducen los tiempos de diagnóstico y que se maneja más rápido y mejor al paciente. "
                            >
                                <div class="feature-small-icon mb-35">
                                    <img src="/pages/img/healths/medical/costs.svg" alt="">
                                </div>
                                <div class="feature-small-content">
                                    <h3>Reducción de costos</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="feature-box mb-40 feature-hover h-modal-details fadeInUp"                             
                            data-toggle="popover" 
                            data-trigger="hover" 
                            data-placement="bottom" 
                            data-content="La integración de la información de los pacientes puede apoyar la coordinación dentro de los sectores público y privado, segmentar poblaciones para establecer políticas públicas específicas, mejorar la gestión de las organizaciones y también mejorar las capacidades de vigilancia de salud pública. "
                            >
                                <div class="feature-small-icon mb-35">
                                    <img src="/pages/img/healths/medical/organization.svg" alt="">
                                </div>
                                <div class="feature-small-content">
                                    <h3>Mejor control a nivel organizacional</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="feature-box mb-40 feature-hover h-modal-details fadeInUp" 

                            data-toggle="popover" 
                            data-trigger="hover" 
                            data-placement="bottom" 
                            data-content="El uso secundario de los datos de salud provenientes de las historias clínicas electrónicas puede facilitar estudios de investigación que requieran de muestras de gran tamaño o estudiar a una población específica. "
                             >


                                <div class="feature-small-icon mb-35">
                                    <img src="/pages/img/healths/medical/support.svg" alt="">
                                </div>
                                <div class="feature-small-content">
                                    <h3>Apoyo a la investigación clínica</h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="feature-box mb-40 feature-hover h-modal-details fadeInUp" 
                            
                            data-toggle="popover" 
                            data-trigger="hover" 
                            data-placement="bottom" 
                            data-content="La salud digital contribuye al medio ambiente al reducir el gasto de papel y radiografías. La telemedicina permite disminuir el uso de combustibles y la generación de emisiones al reducir viajes y uso de instalaciones."
                             
>
                                <div class="feature-small-icon mb-35">
                                    <img src="/pages/img/healths/medical/input.svg" alt="">
                                </div>
                                <div class="feature-small-content">
                                    <h3>Aporte a la sostenibilidad</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <section class="about-area  pt-60 pb-90 ">

        <div class="container">
            <div class="row ">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="section-title section-title-m-0 pos-rel mb-40 text-center">
                        <div class="section-text section-text-small pos-rel">
                            <h1>Únete a la salud digital implementando <strong class="hire-text-4">Medical Cloud </strong> en tu centro de salud</h1>
                           
                        </div>
                    </div>
                </div>
            </div>
            

        </div>
    </section>

    <section class="news-letter-area pt-120 pb-120 " data-background="/pages/img/healths/bg.jpg" style="background-image: url(&quot;/pages/img/healths/bg.jpg&quot;);background-size: cover;background-repeat: space;">




        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-6 col-lg-8 offset-lg-">
                    <div class="news-letter-box">
                        <div class="about-title news-letter-title mb-20">
                            <h5 class="pink-color">MEDICAL INNOVATION & TECHNOLOGY</h5>
                            <h1>Tu aliado en la transformación</h1>
                        </div>
                        <div class="news-letter-text mb-30">
                            <p>De la mano de nuestras soluciones digitales te acompañamos a optimizar tus procesos e implementar nuevos servicios de salud digital, los cuales permitirán una mayor rentabilidad de tu centro y una atención oportuna y de calidad a tus pacientes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-area gray-bg pt-120 pb-90 ">

        <div class="container">
            <div class="row ">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="section-title section-title-m-0 pos-rel mb-40 text-center">
                        <div class="section-text section-text-small pos-rel">
                            <h5>Medical Cloud</h5>
                            <h1>Plataforma digital de gestión y atención ambulatoria.</h1>
                            <p>Medical Cloud es Salud Digital, es una plataforma tecnológica que te permitirá almacenar la información de salud de tu centro de forma digital y transformar tus procesos análogos a procesos digitales para una atención y gestión eficiente.</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-60">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <a href="{{ route('history') }}" class="service-box service-box-2 mb-30 pos-rel">
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
                    <a href="{{ route('telemedicine') }}" class="service-box service-box-2 mb-30 pos-rel">

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
                    <a href="{{ route('reports') }}" class="service-box service-box-2 mb-30 pos-rel">

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
                    <a href="{{ route('diary') }}" class="service-box service-box-2 mb-30 pos-rel">
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
                <div class="col-xl-12 col-lg-12 col-md-12">

                    <div class="section-button align-items-center text-center mt-30 mb-50">

                        <a data-animation="fadeInLeft" data-delay=".6s" href="{{ route('medicalcloud') }}" class="btn btn-icon ml-0">Conoce más</a>

                    </div>
                </div>


            </div>

        </div>
    </section>


    @include ('pages.partials.sections.healths.partners')


    <section class="fact-area fact-map green-bg pos-rel pt-115 pb-60 ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="section-title pos-rel mb-45">
                        <div class="section-text section-text-white pos-rel">
                            <h5 class="white-color">Medical Cloud</h5>

                            <h1 class="white-color">Si los sistemas de salud de la región se digitalizan, se volverán más eficientes y la esperanza de vida podría aumentar en cuatro años en promedio (BID,2022).</h1>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


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
                        <p class="detalle-detail">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
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
