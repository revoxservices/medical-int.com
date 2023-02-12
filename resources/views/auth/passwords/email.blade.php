@extends('layouts.pages')

@section('title', '¿Olvidaste tu contraseña?')

@section('content')

    <section class="contact-area pt-100 pb-100">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">AUTENTICACIÓN</span>
                <h2>¿OLVIDASTE TU CONTRASEÑA?</h2>
                <p>¿Aún no tienes una cuenta? <a href="{{ route('register') }}"
                        class="text-heading hover-primary"><u>Registrate</u></a></p>
            </div>
            <div class="auth-form">
                {!! Form::open(['route' => 'password.email', 'class' => 'form', 'role' => 'form', 'method' => 'POST']) !!}

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">

                            <input type="text" name="email" id="email" class="form-control" required
                                data-error="Introduzca su nombre" placeholder="Ingresar email o cedula">

                            @if ($errors->has('email'))
                                <div class="notification error closeable">
                                    <p>{{ $errors->first('email') }}</p>
                                    <a class="close"></a>
                                </div>
                            @endif

                            <div class=" auth-content">
                                <button type="submit" class="default-btn">
                                    <span class="label">OBTENER NUEVA CONTRASEÑA</span>
                                </button>
                            </div>

                        </div>


                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </section>



@endsection
