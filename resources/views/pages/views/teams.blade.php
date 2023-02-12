@extends('layouts.pages')

@section('title', 'Nuestro Equipo')

@section('content')

@include ('pages.includes.header.header')


<main>
    <!-- hero-area start -->
    <section class="breadcrumb-bg pt-200 pb-180" data-background="/pages/img/shape/page-bg.jpg" style="background-image: url(&quot;img/shape/page-bg.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9">
                    <div class="page-title">
                        <p class="small-text pb-15">Estamos aquí para su cuidado.</p>
                        <h1>Nuestro equipo</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 d-flex justify-content-start justify-content-md-end align-items-center">
                    <div class="page-breadcumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb ">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('index') }}">Inicio</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero-area end -->

    <section class="team-area pt-115 pb-55">
        <div class="container">

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

</main>



@endsection
