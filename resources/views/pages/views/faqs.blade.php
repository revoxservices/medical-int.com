@extends('layouts.pages')

@section('title', 'Preguntar Frecuentes')

@section('content')

@include ('pages.includes.header.header')

<main>
    <!-- hero-area start -->
    <section class="breadcrumb-bg pt-200 pb-180" data-background="img/shape/page-bg.jpg" style="background-image: url(&quot;img/shape/page-bg.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9">
                    <div class="page-title">
                        <p class="small-text pb-15">We are here for your care.</p>
                        <h1>Blog Details</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 d-flex justify-content-start justify-content-md-end align-items-center">
                    <div class="page-breadcumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb ">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero-area end -->

    <!-- blog-area start -->
    <section class="blog-area pt-120 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <article class="postbox post format-image mb-40">
                        <div class="postbox__thumb mb-35">
                            <img src="img/blog/b2.jpg" alt="blog image">
                        </div>
                        <div class="postbox__text bg-none">
                            <div class="post-meta mb-15">
                                <span><i class="far fa-calendar-check"></i> September 15, 2018 </span>
                                <span><a ><i class="far fa-user"></i> Diboli B. Joly</a></span>
                                <span><a ><i class="far fa-comments"></i> 23 Comments</a></span>
                            </div>
                            <h3 class="blog-title">
                                If you find yourself constantly bookmarking health sections on news.
                            </h3>
                            <div class="post-text mb-20">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                    aliquip ex ea commodo.</p>
                                <p>Bccaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                    laborum. Sed ut perspiciatis
                                    unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
                                    aperiam, eaque ipsa quae ab
                                    illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo
                                    enim ipsam voluptatem quia
                                    voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui
                                    ratione voluptatem sequi
                                    nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non
                                    numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                                    voluptatem.</p>
                                <blockquote>
                                    <p>This health blog from NPR takes a fairly broad look at the medical world,.</p>
                                    <footer>- Rosalina Pong</footer>
                                </blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                    aliquip ex ea commodo consequat.
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                    nulla pariatur. Excepteur sint
                                    occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>

                                <div class="blog-inner-img mb-30 mt-30">
                                    <img src="img/blog/b6.jpg" alt="blog image">
                                </div>

                                <div class="inner-content">
                                    <h4>A cleansing hot shower or bath</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                        aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur
                                        sint
                                        occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                                </div>
                                <div class="inner-content">
                                    <h4>Setting the mood with incense</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                        aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur
                                        sint
                                        occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                                </div>
                            </div>
                            <div class="row mt-50">
                                <div class="col-xl-8 col-lg-8 col-md-8 mb-15">
                                    <div class="blog-post-tag">
                                        <span>Releted Tags</span>
                                        <a >organic</a>
                                        <a >Foods</a>
                                        <a >tasty</a>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 mb-15">
                                    <div class="blog-share-icon text-left text-md-right">
                                        <span>Share: </span>
                                        <a ><i class="fab fa-facebook-f"></i></a>
                                        <a ><i class="fab fa-twitter"></i></a>
                                        <a ><i class="fab fa-instagram"></i></a>
                                        <a ><i class="fab fa-google-plus-g"></i></a>
                                        <a ><i class="fab fa-vimeo-v"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="navigation-border pt-50 mt-40"></div>
                                </div>
                                <div class="col-xl-5 col-lg-5 col-md-5">
                                    <div class="bakix-navigation b-next-post text-left mb-30">
                                        <span><a >Prev Post</a></span>
                                        <h4><a >Tips on Minimalist</a></h4>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-2 ">
                                    <div class="bakix-filter text-left text-md-center mb-30">
                                        <a ><img src="img/shape/filter.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-5 col-md-5">
                                    <div class="bakix-navigation b-next-post text-left text-md-right  mb-30">
                                        <span><a >Next Post</a></span>
                                        <h4><a >Tips on Minimalist</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="author mt-80 mb-40">
                            <div class="author-img text-center">
                                <img src="img/blog/details/author.png" alt="">
                            </div>
                            <div class="author-text text-center">
                                <h3>MD. Salim Rana</h3>
                                <div class="author-icon">
                                    <a ><i class="fab fa-facebook-f"></i></a>
                                    <a ><i class="fab fa-twitter"></i></a>
                                    <a ><i class="fab fa-behance-square"></i></a>
                                    <a ><i class="fab fa-youtube"></i></a>
                                    <a ><i class="fab fa-vimeo-v"></i></a>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                    nisi ut aliquip ex
                                    ea commodo consequa aute irure dolor. </p>
                            </div>
                        </div>
                        <div class="post-comments">
                            <div class="blog-coment-title mb-30">
                                <h2>03 Comments</h2>
                            </div>
                            <div class="latest-comments">
                                <ul>
                                    <li>
                                        <div class="comments-box">
                                            <div class="comments-avatar">
                                                <img src="img/blog/details/comments1.png" alt="">
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
                                    <li class="children">
                                        <div class="comments-box">
                                            <div class="comments-avatar">
                                                <img src="img/blog/details/comments1.png" alt="">
                                            </div>
                                            <div class="comments-text">
                                                <div class="avatar-name">
                                                    <h5>Julias Roy</h5>
                                                    <span>19th May 2018</span>
                                                    <a class="reply" ><i class="fas fa-reply"></i>Reply</a>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt
                                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                    exercitation
                                                    ullamco laboris nisi ut aliquip.</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="comments-box">
                                            <div class="comments-avatar">
                                                <img src="img/blog/details/comments2.png" alt="">

                                            </div>
                                            <div class="comments-text">
                                                <div class="avatar-name">
                                                    <h5>Arista Williamson</h5>
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
                                </ul>
                            </div>
                        </div>
                        <div class="post-comments-form">
                            <div class="post-comments-title">
                                <h2>Post Comments</h2>
                            </div>
                            <form id="contacts-form" class="conatct-post-form" action="#">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="contact-icon contacts-message">
                                            <textarea name="comments" id="comments" cols="30" rows="10" placeholder="Your Comments...."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="contact-icon contacts-name">
                                            <input type="text" placeholder="Your Name.... ">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="contact-icon contacts-email">
                                            <input type="email" placeholder="Your Email....">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="contact-icon contacts-website">
                                            <input type="text" placeholder="Your Website....">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <button class="btn theme-btn" type="submit">Post comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4">
                    <div class="widget mb-40">
                        <div class="widget-title-box mb-30">
                            <span class="animate-border"></span>
                            <h3 class="widget-title">Search Objects</h3>
                        </div>
                        <form class="search-form">
                            <input type="text" placeholder="Search your keyword...">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget mb-40">
                        <div class="widget-title-box mb-30">
                            <span class="animate-border"></span>
                            <h3 class="widget-title">About Me</h3>
                        </div>
                        <div class="about-me text-center">
                            <img src="img/blog/details/me.jpg" alt="">
                            <h4>Zulia Maron Duo</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                ut labore.</p>
                            <div class="widget-social-icon">
                                <a ><i class="fab fa-facebook-f"></i></a>
                                <a ><i class="fab fa-twitter"></i></a>
                                <a ><i class="fab fa-behance"></i></a>
                                <a ><i class="fab fa-linkedin-in"></i></a>
                                <a ><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="widget mb-40">
                        <div class="widget-title-box mb-30">
                            <span class="animate-border"></span>
                            <h3 class="widget-title">Popular Feeds</h3>
                        </div>
                        <ul class="recent-posts">
                            <li>
                                <div class="widget-posts-image">
                                    <a ><img src="img/blog/details/img1.jpg" alt=""></a>
                                </div>
                                <div class="widget-posts-body">
                                    <h6 class="widget-posts-title"><a >Lorem ipsum dolor sit
                                            cing elit, sed do.</a></h6>
                                    <div class="widget-posts-meta">October 18, 2018 </div>
                                </div>
                            </li>
                            <li>
                                <div class="widget-posts-image">
                                    <a ><img src="img/blog/details/img2.jpg" alt=""></a>
                                </div>
                                <div class="widget-posts-body">
                                    <h6 class="widget-posts-title"><a >Lorem ipsum dolor sit
                                            cing elit, sed do.</a></h6>
                                    <div class="widget-posts-meta">October 24, 2018 </div>
                                </div>
                            </li>
                            <li>
                                <div class="widget-posts-image">
                                    <a ><img src="img/blog/details/img3.jpg" alt=""></a>
                                </div>
                                <div class="widget-posts-body">
                                    <h6 class="widget-posts-title"><a >Lorem ipsum dolor sit
                                            cing elit, sed do.</a></h6>
                                    <div class="widget-posts-meta">October 28, 2018 </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="widget mb-40">
                        <div class="widget-title-box mb-30">
                            <span class="animate-border"></span>
                            <h3 class="widget-title">Categories</h3>
                        </div>
                        <ul class="cat">
                            <li>
                                <a >Lifestyle <span class="f-right">78</span></a>
                            </li>
                            <li>
                                <a >Travel <span class="f-right">42</span></a>
                            </li>
                            <li>
                                <a >Fashion <span class="f-right">32</span></a>
                            </li>
                            <li>
                                <a >Music <span class="f-right">85</span></a>
                            </li>
                            <li>
                                <a >Branding <span class="f-right">05</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget mb-40">
                        <div class="widget-title-box mb-30">
                            <span class="animate-border"></span>
                            <h3 class="widget-title">Social Profile</h3>
                        </div>
                        <div class="social-profile">
                            <a ><i class="fab fa-facebook-f"></i></a>
                            <a ><i class="fab fa-twitter"></i></a>
                            <a ><i class="fab fa-behance"></i></a>
                            <a ><i class="fab fa-linkedin-in"></i></a>
                            <a ><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="widget mb-40">
                        <div class="widget-title-box mb-30">
                            <span class="animate-border"></span>
                            <h3 class="widget-title">Instagram Feeds</h3>
                        </div>
                        <ul id="Instafeed">
                            <li><a ><img src="img/instagram/ins1.jpg" alt=""></a></li>
                            <li><a ><img src="img/instagram/ins2.jpg" alt=""></a></li>
                            <li><a ><img src="img/instagram/ins3.jpg" alt=""></a></li>
                            <li><a ><img src="img/instagram/ins4.jpg" alt=""></a></li>
                            <li><a ><img src="img/instagram/ins5.jpg" alt=""></a></li>
                            <li><a ><img src="img/instagram/ins6.jpg" alt=""></a></li>
                            <li><a ><img src="img/instagram/ins7.jpg" alt=""></a></li>
                            <li><a ><img src="img/instagram/ins8.jpg" alt=""></a></li>
                            <li><a ><img src="img/instagram/ins9.jpg" alt=""></a></li>
                        </ul>
                    </div>
                    <div class="widget mb-40">
                        <div class="widget-title-box mb-30">
                            <span class="animate-border"></span>
                            <h3 class="widget-title">Instagram Feeds</h3>
                        </div>
                        <div class="tag">
                            <a >Popular</a>
                            <a >desgin</a>
                            <a >usability</a>
                            <a >develop</a>
                            <a >consult</a>
                            <a >icon</a>
                            <a >HTML</a>
                            <a >ux</a>
                            <a >business</a>
                            <a >kit</a>
                            <a >keyboard</a>
                            <a >tech</a>
                        </div>
                    </div>
                    <div class="widget mb-40 p-0 b-0">
                        <div class="banner-widget">
                            <a ><img src="img/blog/details/banner.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-area end -->
</main>



@endsection
