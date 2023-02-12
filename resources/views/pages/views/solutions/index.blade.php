@extends('layouts.services')

@section('title', 'Inicio')

@section('content')

<main>

    <section class="hiring-area pos-rel">
        <div class="hiring-top">
            <div class="hire-left-img" data-overlay-dark="6" style="background-image:url(/pages/img/services/healths.jpg)"></div>

            <div class="container-fluid pl-0 pr-0">
                <div class="row no-gutters">
                    <div class="col-xl-6 offset-xl-6 offset-lg-6">
                        <div class="hire-text hire-text-2">
                            <div class="about-title">
                                <h5>SERVICIOS</h5>
                                <h1>Soluciones de salud y telesalud digital.</h1>
                            </div>
                            <div class="about-text">
                                <p>Soy un Centro de Salud.</p>
                            </div>
                            <div class="hiring-button">
                                <a data-animation="fadeInLeft" data-delay=".6s" href="{{ route('healths') }}" class="btn btn-icon ml-0">Más información</a>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hiring-bottom pos-rel">
            <div class="hire-right-img" data-overlay-dark="6" style="background-image:url(/pages/img/services/impacts.jpg)"></div>

            <div class="container-fulid pl-0 pr-0">
                <div class="hire-opacity"></div>
                <div class="row no-gutters">
                    <div class="col-xl-6 col-lg-6">
                        <div class="hire-text hire-text-2">
                            <div class="about-title">
                                <h5>SERVICIOS</h5>
                                <h1>Proyecto de impacto social en salud.</h1>
                            </div>
                            <div class="about-text">
                                <p>Soy una empresa de responsabilidad social / ONG.</p>

                            </div>
                            <div class="hiring-button">
                                <a data-animation="fadeInLeft" data-delay=".6s" href="{{ route('impacts') }}" class="btn btn-icon ml-0">Más información</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>



@endsection
