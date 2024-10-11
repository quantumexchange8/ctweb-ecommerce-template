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
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
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
                    <div class="col-xxl-2 col-xl-3 col-lg-3">
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
                    <div class="col-xxl-10 col-xl-9 col-lg-9 order-first order-lg-last">
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <article class="postbox__item format-image mb-50 transition-3">
                                    <div class="postbox__thumb w-img">
                                    <a href="/blog-details">
                                        <img src="assets/img/blog/blog-big-1.jpg" alt="">
                                    </a>
                                    </div>
                                    <div class="postbox__content">
                                    <h3 class="postbox__title">
                                        <a href="/blog-details">Curabitur Lobortis News</a>
                                    </h3>
                                        <div class="postbox__meta">
                                            <p>Post Date: <span>July 21, 2021 </span></p>
                                            
                                        </div>
                                    <div class="postbox__text">
                                        <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. Praesent pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl, accumsan placerat justo ultricies vel. </p>
                                    </div>
                                    <div class="postbox__bottom d-flex justify-content-between align-items-center">
                                        <div class="postbox__more">
                                            <a href="/blog-details" class="t-y-btn t-y-btn-grey">read more</a>
                                        </div>
                                        <div class="postbox__tag">
                                            <p> Categories: <a href="/blog">Cooking</a></p>
                                        </div>
                                    </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <article class="postbox__item format-image mb-50 transition-3">
                                    <div class="postbox__thumb w-img">
                                    <a href="/blog-details">
                                        <img src="assets/img/blog/blog-big-2.jpg" alt="">
                                    </a>
                                    </div>
                                    <div class="postbox__content">
                                    <h3 class="postbox__title">
                                        <a href="/blog-details">The Brushed Steel</a>
                                    </h3>
                                        <div class="postbox__meta">
                                            <p>Post Date: <span>July 21, 2021 </span></p>
                                            
                                        </div>
                                    <div class="postbox__text">
                                        <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. Praesent pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl, accumsan placerat justo ultricies vel. </p>
                                    </div>
                                    <div class="postbox__bottom d-flex justify-content-between align-items-center">
                                        <div class="postbox__more">
                                            <a href="/blog-details" class="t-y-btn t-y-btn-grey">read more</a>
                                        </div>
                                        <div class="postbox__tag">
                                            <p> Categories: <a href="/blog">Travel</a></p>
                                        </div>
                                    </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <article class="postbox__item format-image mb-50 transition-3">
                                    <div class="postbox__thumb w-img">
                                    <a href="/blog-details">
                                        <img src="assets/img/blog/blog-big-3.jpg" alt="">
                                    </a>
                                    </div>
                                    <div class="postbox__content">
                                    <h3 class="postbox__title">
                                        <a href="/blog-details">Koma and Torus</a>
                                    </h3>
                                        <div class="postbox__meta">
                                            <p>Post Date: <span>July 21, 2021 </span></p>
                                            
                                        </div>
                                    <div class="postbox__text">
                                        <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. Praesent pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl, accumsan placerat justo ultricies vel. </p>
                                    </div>
                                    <div class="postbox__bottom d-flex justify-content-between align-items-center">
                                        <div class="postbox__more">
                                            <a href="/blog-details" class="t-y-btn t-y-btn-grey">read more</a>
                                        </div>
                                        <div class="postbox__tag">
                                            <p> Categories: <a href="/blog">Travel</a></p>
                                        </div>
                                    </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <article class="postbox__item format-image mb-50 transition-3">
                                    <div class="postbox__thumb w-img">
                                    <a href="/blog-details">
                                        <img src="assets/img/blog/blog-big-4.jpg" alt="">
                                    </a>
                                    </div>
                                    <div class="postbox__content">
                                    <h3 class="postbox__title">
                                        <a href="/blog-details">Grip and Allows</a>
                                    </h3>
                                        <div class="postbox__meta">
                                            <p>Post Date: <span>July 21, 2021 </span></p>
                                            
                                        </div>
                                    <div class="postbox__text">
                                        <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. Praesent pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl, accumsan placerat justo ultricies vel. </p>
                                    </div>
                                    <div class="postbox__bottom d-flex justify-content-between align-items-center">
                                        <div class="postbox__more">
                                            <a href="/blog-details" class="t-y-btn t-y-btn-grey">read more</a>
                                        </div>
                                        <div class="postbox__tag">
                                            <p> Categories: <a href="/blog">Travel</a></p>
                                        </div>
                                    </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <article class="postbox__item format-image mb-50 transition-3">
                                    <div class="postbox__thumb w-img">
                                    <a href="/blog-details">
                                        <img src="assets/img/blog/blog-big-5.jpg" alt="">
                                    </a>
                                    </div>
                                    <div class="postbox__content">
                                    <h3 class="postbox__title">
                                        <a href="/blog-details">Pitterarum Formas</a>
                                    </h3>
                                        <div class="postbox__meta">
                                            <p>Post Date: <span>July 21, 2021 </span></p>
                                            
                                        </div>
                                    <div class="postbox__text">
                                        <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. Praesent pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl, accumsan placerat justo ultricies vel. </p>
                                    </div>
                                    <div class="postbox__bottom d-flex justify-content-between align-items-center">
                                        <div class="postbox__more">
                                            <a href="/blog-details" class="t-y-btn t-y-btn-grey">read more</a>
                                        </div>
                                        <div class="postbox__tag">
                                            <p> Categories: <a href="/blog">Travel</a></p>
                                        </div>
                                    </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                <article class="postbox__item format-image mb-50 transition-3">
                                    <div class="postbox__thumb w-img">
                                    <a href="/blog-details">
                                        <img src="assets/img/blog/blog-big-6.jpg" alt="">
                                    </a>
                                    </div>
                                    <div class="postbox__content">
                                    <h3 class="postbox__title">
                                        <a href="/blog-details">Shelving Burgundy</a>
                                    </h3>
                                        <div class="postbox__meta">
                                            <p>Post Date: <span>July 21, 2021 </span></p>
                                            
                                        </div>
                                    <div class="postbox__text">
                                        <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. Praesent pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl, accumsan placerat justo ultricies vel. </p>
                                    </div>
                                    <div class="postbox__bottom d-flex justify-content-between align-items-center">
                                        <div class="postbox__more">
                                            <a href="/blog-details" class="t-y-btn t-y-btn-grey">read more</a>
                                        </div>
                                        <div class="postbox__tag">
                                            <p> Categories: <a href="/blog">Travel</a></p>
                                        </div>
                                    </div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-xxl-12">
                                <div class="basic-pagination basic-pagination-border pt-30 pb-30">
                                    <nav>
                                    <ul>
                                        <li>
                                            <a href="/blog">
                                                <i class="fal fa-chevron-double-left"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/blog">1</a>
                                        </li>
                                        <li>
                                            <a href="/blog" class="active">2</a>
                                        </li>
                                        <li>
                                            <a href="/blog">3</a>
                                        </li>
                                        <li>
                                            <a href="/blog">
                                                <i class="fal fa-chevron-double-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    </nav>
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