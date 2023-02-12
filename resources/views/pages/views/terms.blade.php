@extends('layouts.pages')

@section('title', 'Terminos y condiciones')

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
                        <h1>Terminos y condiciones</h1>
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

    <!-- blog-area start -->
    <section class="blog-area pt-120 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <article class="postbox post format-image mb-40">

                        <div class="postbox__text bg-none">
                            {!! $setting->terms !!}


                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-area end -->
</main>



@endsection
