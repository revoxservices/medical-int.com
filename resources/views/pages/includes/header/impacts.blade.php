<header>
    <div class=" top-bar4 white-bg top-border d-none d-md-block pl-55 pr-55 pt-25 pb-25">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-xl-8 col-lg-6">
                    <div class="header-info header-info4 p-0">
                        <span><i class="far fa-envelope-open"></i><a href="https://themepure.net/cdn-cgi/l/email-protection" class="__cf_email__">{{ $setting->email }}</a></span>
                        <span><i class="fal fa-phone"></i>+{{ $setting->whatsapp }}</span>
                        <span><i class="fal fa-clock"></i>{{ $setting->address }}</span>

                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="top4-right d-flex justify-content-end">

                        <div class="header-social-icons top4-social d-none d-xl-block">
                            <ul>
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
    <div class="header-menu-area menu-area4 pl-55 pr-55">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-12 col-md-5 d-flex align-items-center">
                    <div class="logo pos-rel">
                        <a href="{{ route('index') }}"><img src="/pages/img/logo/logo.png" alt="MediDove"></a>


                    </div>
                    <div class="header__menu header__menu4 pl-60">
                        <nav id="mobile-menu">
                            <ul>
                                <li><a href="{{ route('index') }}">Inicio</a></li>
                                <li><a href="{{ route('blogs') }}">Blog</a></li>
                                <li><a href="{{ route('contacts') }}">Contactenos</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-9 col-md-9 d-none d-xl-block">
                    <div class="header-right d-flex align-items-center justify-content-end">

                        <div class="header-button pl-50 pt-30">
                            <a data-animation="fadeInLeft" data-delay=".6s" href="{{ route('healths') }}" class="btn btn-icon ml-0" style="animation-delay: 0.6s;" tabindex="0">Soluciones de salud y telesalud digital</a>




                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
</header>
