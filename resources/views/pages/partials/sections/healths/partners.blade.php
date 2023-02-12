@if (count($partners) > 0)
<section class="brand-area pos-rel pt-115 pb-110">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="about-title text-center mb-70">
                    <h5 class="green-color wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">ALIADOS</h5>

                    <h1 class="wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">Organizaciones que confían en nosotros.</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="brand-active owl-carousel wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                @foreach ($partners as $partner)
                <div class="single-brand">
                    @if($partner->thumbnail()!=null)
                    <img src="{{ asset('/pages/img/partners/'.$partner->thumbnail()->filename) }}" alt="image">
                    @else
                    <img src="{{ asset('/pages/img/partners/default.png') }}" alt="image">
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif
