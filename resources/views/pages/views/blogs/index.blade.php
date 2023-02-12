@extends('layouts.pages')

@section('title', 'Inicio')

@section('content')

@include ('pages.includes.header.healths')

<main>



    <!-- blog-area start -->
    <section class="blog-area pt-120 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @include ('pages.partials.sections.blogs.items')
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
