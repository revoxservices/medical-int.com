@if (count($tags) > 0)
<section class="widget widget_tag_cloud wow fadeInUp" data-wow-delay="0ms" data-wow-duration="2000ms">
    <h3 class="widget-title">Tags</h3>
    <div class="tagcloud">
        @foreach ($tags as $tag)
        <a href="{{ route('blogs.tags', [$tag->slug]) }}">{{ $tag->label }} <span class="tag-link-count"></span></a>
        @endforeach
    </div>
</section>
@endif
