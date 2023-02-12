@if(isset($blogs))
@foreach($blogs as $blog)
<article class="postbox post format-image mb-40 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="2000ms" >
    <div class="postbox__thumb">

        <a href="{{ route('blogs.view',$blog->slug) }}" class="d-block">
            @if($blog->thumbnail()!=null)
            <img src="{{ asset('/pages/img/blogs/'.$blog->thumbnail()->filename) }}" alt="image">


            @else
            <img src="{{ asset('/pages/img/blogs/default.jpg') }}" alt="image">
            @endif
        </a>
    </div>
    <div class="postbox__text p-50">
        <div class="post-meta mb-15">
            <span><i class="far fa-calendar-check"></i> {{ date('F ,Y', strtotime($blog->created_at)) }} </span>

            <span><a ><i class="far fa-user"></i>{{ $blog->categorie->label }}</a></span>

        </div>
        <h3 class="blog-title">
            <a href="{{ route('blogs.view',$blog->slug) }}">{{substr(strip_tags($blog->label), 0, 400)}}.</a>
        </h3>
        <div class="post-text mb-20">
            <p>There’s a good chance Everyday Health is the most appropriately named blog on this list because it focuses on the health
                topics that consistently affect a wide range of people. They also get kudos for addressing the emotional challenges
                folks face when managing conditions.</p>
        </div>
        <div class="read-more mt-30">
            <a href="{{ route('blogs.view',$blog->slug) }}" class="btn theme-btn">Lee mas</a>
        </div>
    </div>
</article>
@endforeach

{{ $blogs->links() }}


@endif
