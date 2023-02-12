@extends('layouts.pages')

@section('title', 'Cambiar Contraseña')

@section('content')

<section class="contact-area pt-100 pb-100">
   <div class="container">
      <div class="section-title">
         <span class="sub-title">AUTENTICACIÓN</span>
         <h2>CAMBIAR CONTRASEÑA</h2>
         <p>¿Recuesdas tu contraseña? ir al <a  href="{{ route('login') }}" class="text-heading hover-primary"><u>Login</u></a></p>
      </div>
      <div class="auth-form">
         {!! Form::open(['route' => 'password.reset', 'role' => 'form', 'method' => 'POST']) !!}

         {{ csrf_field() }}

            <input name="email" type="hidden" value="{{ $email }}">

            <div class="row auth-content">
               <div class="col-lg-12 col-md-12">
                     <div class="form-group">
                        <input type="text" class="form-control" required data-error="Introduzca su nombre" value="{{ $email }}" disabled>
                     </div>
                     <div class="form-group">
                        <input  class="form-control" required type="password" autocomplete="new-password"  id="password" name="password" placeholder="Contraseña">
                     </div>
                     <div class="form-group">
                        <input  class="form-control" required type="password" autocomplete="new-password"  id="password_confirmation" name="password_confirmation" placeholder="Repetir Contraseña">
                     </div>

                     <div class=" auth-content">
                        <button type="submit" class="default-btn">
                           <span class="label">CAMBIAR CONTRASEÑA</span>
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
