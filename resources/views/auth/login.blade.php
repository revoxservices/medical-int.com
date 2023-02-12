@extends('layouts.auth')

@section('title', 'Ingresar')

@section('content')
<main>


    <!-- login Area Strat-->
    <section class="login-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="basic-login">
                        <h3 class="text-center mb-60">Iniciar sesión desde aquí</h3>
                        <form class="metform-form-content" role="form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <label for="name">Correo<span>**</span></label>
                            <input type="email" id="email" name="email" placeholder="Introduzca el correo electrónico...">

                            <label for="pass">Contraseña <span>**</span></label>
                            <input type="password" name="password" id="password" placeholder="Introducir la contraseña...">

                            <div class="login-action mb-20 fix">
                                <span class="log-rem f-left">
                                    <input id="remember" type="checkbox">
                                    <label for="remember">¡Acuérdate de mí!</label>
                                </span>
                                <span class="forgot-login f-right">
                                    <a href="#">¿Perdiste tu contraseña?</a>

                                </span>
                            </div>
                            <button class="btn btn-icon-green w-100">Ingresar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login Area End-->
</main>


@endsection
