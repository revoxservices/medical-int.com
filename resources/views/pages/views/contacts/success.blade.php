@extends('layouts.pages')

@section('content')

@include ('pages.includes.header.header')


<div class="error-404-area">
    <div class="container">
        <div class="notfound">
            <h1>GRACIAS<strong>!</strong></h1>
            <p>Por ponerte en contacto con nosotros. En sandiego siempre estamos dispuestos a escucharte, por eso te enviará una respuesta a la mayor brevedad posible.</p>
            <a href="{{ route('home') }}" class="default-btn">
                <span class="label">VOLVER AL INICIO</span>
            </a>
        </div>
    </div>
</div>

@endsection
