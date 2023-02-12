@if (count($categories) > 0)
<div class="widget mb-40 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="2000ms">
    <div class="widget-title-box mb-30">
        <span class="animate-border"></span>
        <h3 class="widget-title">Categories</h3>
    </div>
    <ul class="cat">
        @foreach ($categories as $categorie)
        <li>
            <a href="{{ route('blogs.categories', $categorie->slug) }}">{{ $categorie->label }}<span class="f-right"></span></a>
        </li>
        @endforeach


    </ul>
</div>
@endif
