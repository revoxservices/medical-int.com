@if(count($comments)>0)
<div class="post-comments wow fadeInUp" data-wow-delay="0ms" data-wow-duration="2000ms">
    <div class="blog-coment-title mb-30">
        <h2>count($comments) Comentarios</h2>
    </div>
    <div class="latest-comments">
        <ul>
            @foreach($comments as $comment)
            <li>
                <div class="comments-box">
                    <div class="comments-avatar">
                        <img src="/pages/img/blog/details/comments1.png" alt="">
                    </div>
                    <div class="comments-text">
                        <div class="avatar-name">
                            <h5>Karon Balina</h5>
                            <span>19th May 2018</span>
                            <a class="reply" ><i class="fas fa-reply"></i>Reply</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>

<div class="post-comments-form">
    <form id="contacts-form" class="conatct-post-form" action="#">
        <div class="row">

            <div class="col-xl-12">
                <div class="contact-icon contacts-name">
                    <input type="text" placeholder="Su nombre....">

                </div>
            </div>
            <div class="col-xl-12">
                <div class="contact-icon contacts-email">
                    <input type="email" placeholder="Tu correo electrónico....">

                </div>
            </div>
            <div class="col-xl-12">
                <div class="contact-icon contacts-message">
                    <textarea name="comments" id="comments" cols="30" rows="10" placeholder="Tus comentarios...."></textarea>

                </div>
            </div>


            <div class="col-xl-12">
                <button class="btn theme-btn" type="submit">Publicar comentario</button>
            </div>
        </div>
    </form>
</div>
@endif
