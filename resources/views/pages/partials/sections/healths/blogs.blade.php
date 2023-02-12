    @if (count($blogs) > 0)
    <section class="latest-news-area gray-bg pt-115 pb-90 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7">
                    <div class="section-title pos-rel mb-75">
                        <div class="section-text pos-rel">
                            <h5>NOTICIAS</h5>
                            <h2>Todas las actualizaciones aquí.</h2>
                        </div>
                        <div class="section-line pos-rel">
                            <img src="/pages/img/shape/section-title-line.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5 d-none d-lg-block">
                    <div class="section-button text-right pt-80">
                        <a data-animation="fadeInLeft" data-delay=".6s" href="{{ route('blogs') }}" class="btn btn-icon ml-0">Nuestro blog</a>

                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="latest-news-box latest-news-box-2 latest-news-box-3 mb-30">
                        <div class="latest-news-thumb">
                            <a href="{{ route('blogs.view',$blog->slug) }}">

                            @if($blog->thumbnail()!=null)
                            <img src="{{ asset('/pages/img/blogs/'.$blog->thumbnail()->filename) }}" alt="image">
                            @else
                            <img src="{{ asset('/pages/img/blogs/default.png') }}" alt="image">
                            @endif


                            </a>
                        </div>
                        <div class="latest-news-content-box pl-0 pr-0">
                            <div class="latest-news-content">
                                <div class="news-meta mb-10">
                                    <span><a  class="news-tag">{{ $blog->categorie->label }}</a></span>
                                </div>
                                <h3><a href="{{ route('blogs.view',$blog->slug) }}">{{substr(strip_tags($blog->label), 0, 400)}}.</a></h3>


                                <p>{{substr(strip_tags($blog->description), 0, 400)}}.</p>


                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </section>

    @endif
