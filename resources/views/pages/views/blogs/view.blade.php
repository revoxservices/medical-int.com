@extends('layouts.pages')

@section('title', 'Inicio')

@section('content')

@include ('pages.includes.header.healths')


<main>


    <!-- blog-area start -->
    <section class="blog-area pt-120 pb-80 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="2000ms">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <article class="postbox post format-image mb-40">
                        <div class="postbox__thumb mb-35">
                            @if ($blog->thumbnail() != null)
                            <img class="rounded-lg d-block thumbnail" src="/pages/img/blogs/{{ $blog->thumbnail()->filename }}" alt="{{ $blog->slug }}">
                            @else
                            <img class="rounded-lg d-block thumbnail" src="/pages/img/blogs/default.jpg" alt="{{ $blog->slug }}">
                            @endif
                        </div>
                        <div class="postbox__text bg-none">
                            <div class="post-meta mb-15">
                                <span><i class="far fa-calendar-check"></i> {{ blog_date($blog->created_at) }} </span>

                                <span><a href="{{ route('blogs.categories', $blog->categorie->slug) }}"><i class="far fa-user"></i> {{ ucwords($blog->categorie->label) }}</a></span>



                            </div>
                            <h3 class="blog-title">
                                {{ ucwords($blog->label) }}.
                            </h3>
                            <div class="post-text mb-20">

                                {!! $blog->content !!}

                                @if ($blog->sentence != null)
                                <blockquote>
                                    <p>{{ $blog->sentence }}</p>
                                </blockquote>
                                @endif

                            </div>
                            <div class="row mt-50">
                                @if (count($blog->tags) > 0)
                                <div class="col-xl-8 col-lg-8 col-md-8 mb-15">
                                    <div class="blog-post-tag">
                                        <span>Tags Relacionados</span>

                                        @foreach ( $tags as $tag)
                                        <a >
                                            {{ $tag }}
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                                @endif

                                
                            </div>

                        </div>

                        @include ('pages.partials.sections.blogs.comments')

                    </article>
                </div>
                <div class="col-lg-4">
                    @include ('pages.partials.sections.blogs.search')
                    @include ('pages.partials.sections.blogs.categories')
                    @include ('pages.partials.sections.blogs.recents')
                    @include ('pages.partials.sections.blogs.tags')
                    @include ('pages.partials.sections.blogs.social')
                </div>
            </div>
        </div>
    </section>
    <!-- blog-area end -->
</main>


@endsection
