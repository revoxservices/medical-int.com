@extends('layouts.pages')
@section('title', 'Inicio')


@section('content')
@include ('pages.includes.header.header')

<main>

    <section class="about-area pt-120 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-5">
                    <div class="about-left-side pos-rel mb-30">
                        <div class="about-front-img pos-rel">
                            <img src="/pages/img/about/about-img.jpg" alt="">
                            <a class="popup-video about-video-btn white-video-btn" href="https://www.youtube.com/watch?v=I3u3lFA9GX4"><i class="fas fa-play"></i></a>
                        </div>
                        <div class="about-shape">
                            <img src="/pages/img/about/about-shape.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <div class="about-right-side pt-55 mb-30">
                        <div class="about-title mb-20">
                            <h5>BREVE HISTORIA SOBRE</h5>
                            <h1>MEDICAL INNOVATION & TECHNOLOGY.</h1>

                        </div>
                        <div class="about-text mb-50">
                            <p>{!! $setting->about !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="servcies-area gray-bg pt-100 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 offset-xl-12 col-lg-12">
                    <div class="section-title text-center pos-rel mb-75">
                        <div class="section-icon">
                            <img class="section-back-icon" src="img/section/section-back-icon.png" alt="">
                        </div>
                        <div class="section-text pos-rel">
                            <h5>BREVE HISTORIA SOBRE</h5>
                            <h1>SOBRE NOSOTROS</h1>
                        </div>
                        <div class="section-line pos-rel">
                            <img src="img/shape/section-title-line.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="service-box service-box-2 mb-30 pos-rel">
                        <div class="service-thumb">
                            <img src="img/services/service-icon-1.png" alt="">
                        </div>
                        <div class="service-content service-content-2">
                            <h6 class="green-color text-up-case letter-spacing mb-20">NUESTRA</h6>
                            <h3><a >Misión</a></h3>
                            <p>{!! $setting->mission !!}</p>

                        </div>
                        <div class="service-number">
                            <h1 class="service-big-number">01</h1>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="service-box service-box-2 mb-30 pos-rel">
                        <div class="service-thumb">
                            <img src="img/services/service-icon-2.png" alt="">
                        </div>
                        <div class="service-content service-content-2">
                            <h6 class="green-color text-up-case letter-spacing mb-20">NUESTRA</h6>

                            <h3><a >Visión</a></h3>
                            <p>{!! $setting->vision !!}</p>
                        </div>
                        <div class="service-number">
                            <h1 class="service-big-number">02</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- appoinment Section End -->
    <!-- team-area start -->
    <section class="team-area pt-115 pb-55">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7 col-md-10">
                    <div class="section-title pos-rel mb-75">
                        <div class="section-icon">
                            <img class="section-back-icon back-icon-left" src="/pages/img/section/section-back-icon.png" alt="">
                        </div>
                        <div class="section-text pos-rel">
                            <h5>Nuestro equipo</h5>
                            <h1>Un profesional y proveedor de atención</h1>
                        </div>
                        <div class="section-line pos-rel">
                            <img src="/pages/img/shape/section-title-line.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5">

                </div>
            </div>
            <div class="row">
                @foreach($teams as $team)
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="team-box text-center mb-60">
                        <div class="team-thumb mb-45 pos-rel">
                            @if($team->thumbnail()!=null)
                            <img src="{{ asset('/pages/img/teams/'.$team->thumbnail()->filename) }}" alt="image">

                            @else
                            <img src="{{ asset('/pages/img/teams/default.png') }}" alt="image">
                            @endif
                        </div>
                        <div class="team-content">
                            <h3>{{ $team->firstname }} {{ $team->lastname }}</h3>
                            <h6>{{ $team->charger }}</h6>

                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>


    @endsection


    @push('scripts')


    @endpush
