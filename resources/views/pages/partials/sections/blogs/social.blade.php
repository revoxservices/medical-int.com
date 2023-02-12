<div class="widget mb-40 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="2000ms">
    <div class="widget-title-box mb-30">
        <span class="animate-border"></span>
        <h3 class="widget-title">Redes sociales</h3>
    </div>
    <div class="social-profile">
        @if ($setting->whatsapp != null)
        <a href="{{ $setting->whatsapp }}" class="" target="_blank"><i class="fab fa-whatsapp"></i></a>
        @endif
        @if ($setting->facebook != null)
        <a href="{{ $setting->facebook }}" class="" target="_blank"><i class="fab fa-facebook-f"></i></a>
        @endif
        @if ($setting->twitter != null)
        <a href="{{ $setting->twitter }}" class="" target="_blank"><i class="fab fa-twitter"></i></a>
        @endif
        @if ($setting->instagram != null)
        <a href="{{ $setting->instagram }}" class="" target="_blank"><i class="fab fa-instagram"></i></a>
        @endif
        @if ($setting->linkedin != null)
        <a href="{{ $setting->linkedin }}" class="" target="_blank"><i class="fab fa-linkedin"></i></a>
        @endif
    </div>
</div>
