@extends('layouts.pages')

@section('title', 'Cambiar Contraseña')

@section('content')
    <section class="contact-area pb-100 pt-100">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">CORREO DE RECUPERACIÓN</span>
                <h2>Te enviamos un mensaje al correo electrónico: <u>{{ $email }}</u></h2>
                <p>Sigue las instrucciones del mensaje para restablecer la contraseña.</p>
                <form class="form">
                    <p class="mb-4">¿No recibiste el mensaje?</p>
                    <a href="{{ route('password.reset') }}" class="auth-btn pb-10">
                        <span class="label">ENVIAR DE NUEVO</span>
                    </a>
                </form>
            </div>
        </div>
    </section>
@endsection
