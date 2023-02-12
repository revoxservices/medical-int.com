 @if (count($recents) > 0)
 <div class="widget mb-40 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="2000ms">
     <div class="widget-title-box mb-30">
         <span class="animate-border"></span>
         <h3 class="widget-title">Publicaciones populares</h3>

     </div>
     <ul class="recent-posts">
         @foreach ($recents as $recent)
         <li>

             <div class="widget-posts-body">
                 <h6 class="widget-posts-title">
                     <a href="{{ route('blogs.view', $recent->slug) }}">{{ substr(strip_tags($recent->label), 0, 400) }}</a>
                 </h6>
                 <div class="widget-posts-meta">{{ date('F ,Y', strtotime($recent->created_at)) }}</div>

             </div>
         </li>
         @endforeach
     </ul>
 </div>
 @endif
