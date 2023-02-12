 <!-- footer start -->
 <footer>
     <div class="footer-top primary-bg footer-map pos-rel pt-120 pb-80">
         <div class="container">
             <div class="row justify-content-between">
                 <div class="col-xl-4 col-lg-6 col-md-12">
                     <div class="footer-contact-info footer-contact-info-3 mb-40">
                         <div class="footer-logo mb-35">
                             <a href="{{ route('index') }}"><img src="/pages/img/logo/footer-logo.png" alt=""></a>
                         </div>
                         <div class="footer-contact-content mb-25">
                             <p class="p-0">{!! $setting->description !!}</p>

                         </div>
                         <div class="footer-emailing">
                             <ul>
                                 <li><i class="far fa-envelope"></i><a href="{{ $setting->email }}" class="__cf_email__">{{ $setting->email }}</a></li>
                                 <li><i class="far fa-clone"></i>{{ $setting->email }}</li>
                                 <li><i class="far fa-flag"></i>{{ $setting->address }}</li>

                             </ul>
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-2 col-lg-6 col-md-12">
                     <div class="footer-widget h4footer-widget mb-40">
                         <div class="footer-title">
                             <h3>Recursos</h3>
                         </div>
                         <div class="footer-menu footer-menu-2 h4footer-menu">
                             <ul>
                                 <li><a href="{{ route('terms') }}">Términos y condiciones</a></li>
                                 <li><a href="{{ route('politics') }}">Políticas de privacidad</a></li>

                             </ul>
                         </div>
                         <div class="footer-title mt-2">
                             <h3>Conócenos</h3>

                         </div>
                         <div class="footer-menu footer-menu-2 h4footer-menu">
                             <ul>
                                 <li><a href="{{ route('about') }}">Quienes somos</a></li>
                                 <li><a href="{{ route('team') }}">Equipo</a></li>
                                 <li><a href="{{ route('blogs') }}">Blog</a></li>
                                 <li><a href="{{ route('contacts') }}">Contáctanos</a></li>
                             </ul>
                         </div>

                     </div>
                 </div>
                 <div class="col-xl-4 col-lg-6 col-md-12">
                     <div class="footer-widget h4footer-widget mb-40">
                         <div class="footer-title">
                             <h3>Horario</h3>
                         </div>
                         <div class="h4events-list mb-30">
                             <ul>
                                 <li><i class="fal fa-clock"></i><span>Lunes - Sabado <span>08:00 am - 06:00pm</span></span></li>
                                 <li><i class="fal fa-times-square"></i><span class="close-days">Domingos Cerrado</span></li>
                             </ul>
                         </div>
                         <div class="h4footer-social">
                             <ul class="list-inline">

                                 @if ($setting->whatsapp != null)
                                 <li><a href="{{ $setting->whatsapp }}" class="d-block" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                                 @endif
                                 @if ($setting->facebook != null)
                                 <li><a href="{{ $setting->facebook }}" class="d-block" target="_blank"><i class="fab fa-facebook-f"></i></a></li>

                                 @endif
                                 @if ($setting->twitter != null)
                                 <li><a href="{{ $setting->twitter }}" class="d-block" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                 @endif
                                 @if ($setting->instagram != null)
                                 <li><a href="{{ $setting->instagram }}" class="d-block" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                 @endif
                                 @if ($setting->linkedin != null)
                                 <li><a href="{{ $setting->linkedin }}" class="d-block" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                 @endif

                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="footer-bottom pt-25 pb-20">
         <div class="container">
             <div class="row">
                 <div class="col-xl-12">
                     <div class="footer-copyright footer-copyright-3 text-center">
                         <p>Copyright <a class="__cf_email__"></a>{{ $setting->copyright }}</p>

                     </div>
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <!-- footer end -->
