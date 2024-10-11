@extends('Layouts.master')
@section('contents')

    <main>
                
        <!-- breadcrumb area start -->
        <section class="breadcrumb__area box-plr-75">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="breadcrumb__wrapper">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="//">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- blog area start -->
        <section class="blog__area box-plr-75 pb-70">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xxl-2 col-xl-3 col-lg-4">
                        <div class="sidebar__widget">
                            <div class="sidebar__widget-item mb-35">
                                <div class="sidebar__search">
                                    <form action="#">
                                        <input type="text" placeholder="Search posts here">
                                        <button type="submit"><i class="far fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar__widget-item mb-35">
                                <h3 class="sidebar__widget-title mb-10">Categories</h3>
                                <div class="sidebar__categories">
                                    <ul>
                                        <li><a href="#">Videos</a></li>
                                        <li><a href="#">Uncategorized </a></li>
                                        <li><a href="#">Travel </a></li>
                                        <li><a href="#">Music </a></li>
                                        <li><a href="#">Photography </a></li>
                                        <li><a href="#">Images </a></li>
                                        <li><a href="#">Creative </a></li>
                                        <li><a href="#">Azone Post </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar__widget-item mb-35">
                                <h3 class="sidebar__widget-title mb-30">Recent</h3>
                                <div class="sidebar__post rc__post">
                                    <ul>
                                    <li>
                                        <div class="rc__post d-flex align-items-center">
                                            <div class="rc__post-thumb mr-20">
                                                <a href="/blog-details">
                                                    <img src="assets/img/blog/sidebar/blog-sm-1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="rc__post-content">
                                                <h3 class="rc__post-title">
                                                <a href="/blog-details">Curabitur Lobortis News </a>
                                                </h3>
                                                <div class="rc__meta">
                                                <span>July 21 2021</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="rc__post d-flex align-items-center">
                                            <div class="rc__post-thumb mr-20">
                                                <a href="/blog-details">
                                                    <img src="assets/img/blog/sidebar/blog-sm-2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="rc__post-content">
                                                <h3 class="rc__post-title">
                                                <a href="/blog-details">The Brushed Steel </a>
                                                </h3>
                                                <div class="rc__meta">
                                                <span>July 21, 2021</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="rc__post d-flex align-items-start">
                                            <div class="rc__post-thumb mr-20">
                                                <a href="/blog-details">
                                                    <img src="assets/img/blog/sidebar/blog-sm-3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="rc__post-content">
                                                <h3 class="rc__post-title">
                                                <a href="/blog-details">Koma and Torus </a>
                                                </h3>
                                                <div class="rc__meta">
                                                <span>July 21, 2021</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="rc__post d-flex align-items-start">
                                            <div class="rc__post-thumb mr-20">
                                                <a href="/blog-details">
                                                    <img src="assets/img/blog/sidebar/blog-sm-4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="rc__post-content">
                                                <h3 class="rc__post-title">
                                                <a href="/blog-details"> Grip and Allows</a>
                                                </h3>
                                                <div class="rc__meta">
                                                <span>July 21, 2021</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="rc__post d-flex align-items-start">
                                            <div class="rc__post-thumb mr-20">
                                                <a href="/blog-details">
                                                    <img src="assets/img/blog/sidebar/blog-sm-5.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="rc__post-content">
                                                <h3 class="rc__post-title">
                                                <a href="/blog-details">Pitterarum Formas  </a>
                                                </h3>
                                                <div class="rc__meta">
                                                <span>July 21, 2021</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="rc__post d-flex align-items-start">
                                            <div class="rc__post-thumb mr-20">
                                                <a href="/blog-details">
                                                    <img src="assets/img/blog/sidebar/blog-sm-6.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="rc__post-content">
                                                <h3 class="rc__post-title">
                                                <a href="/blog-details">Shelving Burgundy  </a>
                                                </h3>
                                                <div class="rc__meta">
                                                <span>July 21, 2021</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="rc__post d-flex align-items-start">
                                            <div class="rc__post-thumb mr-20">
                                                <a href="/blog-details">
                                                    <img src="assets/img/blog/sidebar/blog-sm-7.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="rc__post-content">
                                                <h3 class="rc__post-title">
                                                <a href="/blog-details">Anteposue Rarum Formas</a>
                                                </h3>
                                                <div class="rc__meta">
                                                <span>July 21, 2021</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="rc__post d-flex align-items-start">
                                            <div class="rc__post-thumb mr-20">
                                                <a href="/blog-details">
                                                    <img src="assets/img/blog/sidebar/blog-sm-8.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="rc__post-content">
                                                <h3 class="rc__post-title">
                                                <a href="/blog-details">Posuerit Litterarum Formas  </a>
                                                </h3>
                                                <div class="rc__meta">
                                                <span>July 21, 2021</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="rc__post d-flex align-items-start">
                                            <div class="rc__post-thumb mr-20">
                                                <a href="/blog-details">
                                                    <img src="assets/img/blog/sidebar/blog-sm-9.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="rc__post-content">
                                                <h3 class="rc__post-title">
                                                <a href="/blog-details">Anteposuerit Litterarum Formas  </a>
                                                </h3>
                                                <div class="rc__meta">
                                                <span>July 21, 2021</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="rc__post d-flex align-items-start">
                                            <div class="rc__post-thumb mr-20">
                                                <a href="/blog-details">
                                                    <img src="assets/img/blog/sidebar/blog-sm-10.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="rc__post-content">
                                                <h3 class="rc__post-title">
                                                <a href="/blog-details">Curabitur Lobortis  </a>
                                                </h3>
                                                <div class="rc__meta">
                                                <span>July 21, 2021</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar__widget-item">
                                <h3 class="sidebar__widget-title">Archive </h3>
                                <div class="sidebar__archive">
                                    <ul>
                                        <li>
                                            <a href="/blog">April 2021 </a>
                                        </li>
                                        <li>
                                            <a href="/blog">January 2021 </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-10 col-xl-9 col-lg-8 order-first order-lg-last">
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="postbox__wrapper">
                                    <article class="postbox__item format-image mb-50 transition-3">
                                        <div class="postbox__thumb w-img">
                                        <a href="/blog-details">
                                            <img src="assets/img/blog/blog-big-1.jpg" alt="">
                                        </a>
                                        </div>
                                        <div class="postbox__content">
                                        <h3 class="postbox__title postbox__title-2">
                                            <a href="/blog-details">Curabitur Lobortis News</a>
                                        </h3>
                                            <div class="postbox__meta">
                                                <p>Post Date: <span>July 21, 2021 </span></p>
                                            </div>
                                        <div class="postbox__text">
                                            <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. Praesent pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl, accumsan placerat justo ultricies vel. Aenean sit amet quam vel turpis interdum sagittis et eget neque.</p>
                                        </div>
                                        <div class="postbox__text">
                                            <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. Praesent pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl, accumsan placerat justo ultricies vel. Aenean sit amet quam vel turpis interdum sagittis et eget neque.</p>
                                        </div>
                                        <div class="postbox__text">
                                            <p>Koma and Torus are two tea infusers, each with an original design and a concealed function. Koma has a round base and a long stainless steel-trimmed handle which offers a comfortable grip and allows. And the brushed steel cover opens and closes at the touch of a finger to easily fill and empty the infuser. The perfect way to enjoy brewing tea. Torus is donut-shaped and can cling to any cup. It is accompanied by a case that can contain up to three different diffusers and can be used for dry storage of loose tea.</p>
                                        </div>
                                        <div class="postbox__text">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                        </div>
                                    </article>
                                    <div class="row">
                                        <div class="col-xxl-8">
                                            <div class="postbox__comments">
                                                <div class="postbox__comment-title mb-30">
                                                    <h3>Comments (32)</h3>
                                                </div>
                                                <div class="latest-comments mb-30">
                                                    <ul>
                                                        <li>
                                                            <div class="comments-box">
                                                                <div class="comments-avatar">
                                                                    <img src="assets/img/blog/comments/avater-1.png" alt="">
                                                                </div>
                                                                <div class="comments-text">
                                                                    <div class="avatar-name">
                                                                        <h5>Siarhei Dzenisenka</h5>
                                                                        <span> - 3 months ago </span>
                                                                        <a class="reply" href="#">Leave Reply</a>
                                                                    </div>
                                                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for <span>“lorem ipsum”</span> will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="children">
                                                            <div class="comments-box">
                                                                <div class="comments-avatar">
                                                                    <img src="assets/img/blog/comments/avater-2.png" alt="">
                                                                </div>
                                                                <div class="comments-text">
                                                                    <div class="avatar-name">
                                                                        <h5>Julias Roy</h5>
                                                                        <span> - 6 months ago </span>
                                                                        <a class="reply" href="#">Leave Reply</a>
                                                                    </div>
                                                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for <span>“lorem ipsum”</span> will uncover many web sites still in their infancy. </p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="comments-box">
                                                                <div class="comments-avatar">
                                                                    <img src="assets/img/blog/comments/avater-3.png" alt="">       
                                                                </div>
                                                                <div class="comments-text">
                                                                    <div class="avatar-name">
                                                                        <h5>Arista Williamson</h5>
                                                                        <span> - 6 months ago </span>
                                                                        <a class="reply" href="#">Leave Reply</a>
                                                                    </div>
                                                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for <span>“lorem ipsum”</span> will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="post-comments-form mb-100">
                                                <div class="post-comments-title mb-30">
                                                    <h3>Leave A Reply</h3>
                                                </div>
                                                <form id="contacts-form" class="conatct-post-form" action="#">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                                            <div class="contact-icon p-relative contacts-name">
                                                                <input type="text" placeholder="Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6">
                                                            <div class="contact-icon p-relative contacts-name">
                                                                <input type="email" placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="contact-icon p-relative contacts-email">
                                                                <input type="text" placeholder="Subject">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <div class="contact-icon p-relative contacts-message">
                                                                <textarea name="comments" id="comments" cols="30" rows="10"
                                                                    placeholder="Comments"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <button class="t-y-btn t-y-btn-grey" type="submit">Post comment</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog area end -->

        <!-- brand area start -->
        <section class="brand__area">
            <div class="container custom-container">
                <div class="row align-items-center">
                    <div class="col-xl-12">
                    <div class="brand__slider owl-carousel">
                        <div class="brand__item">
                        <img src="assets/img/brand/brand-1.jpg" alt="">
                        </div>
                        <div class="brand__item">
                        <img src="assets/img/brand/brand-2.jpg" alt="">
                        </div>
                        <div class="brand__item">
                        <img src="assets/img/brand/brand-3.jpg" alt="">
                        </div>
                        <div class="brand__item">
                        <img src="assets/img/brand/brand-4.jpg" alt="">
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- brand area end -->

    </main>

@endsection