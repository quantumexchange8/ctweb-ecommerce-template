@extends('Layouts.master')
@section('contents')

<main>
    <!-- slider area satrt -->
    <section class="slider__area pt-30 pb-30">
        <div class="container custom-container">
            <div class="row">
                <div class="col-xxl-2">

                </div>
                <div class="col-xxl-10 col-xl-9 offset-xxl-0 offset-xl-3 col-lg-12">
                    <div class="row">
                        <div class="col-xxl-9 col-lg-12 col-md-9 mb-20">
                            <div class="slider__inner slider-active">
                                <div class="single-slider single-slider-4 w-img">
                                    <img src="assets/img/slider/04/slider-01.png" alt="slider">
                                </div>
                                <div class="single-slider single-slider-4 w-img">
                                    <img src="assets/img/slider/04/slider-02.jpg" alt="slider">
                                </div>
                                <div class="single-slider single-slider-4 w-img">
                                    <img src="assets/img/slider/04/slider-03.png" alt="slider">
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-lg-12 col-md-3 col-sm-12">
                            <div class="banner__area">
                                <div class="row">
                                    <div class="col-xxl-12 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                        <div class="banner__item mb-20 w-img">
                                            <a href="/product-details"><img src="assets/img/banner/top/banner-top-6.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                        <div class="banner__item w-img mb-20">
                                            <a href="/product-details"><img src="assets/img/banner/top/banner-top-7.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                        <div class="banner__item w-img">
                                            <a href="/product-details"><img src="assets/img/banner/top/banner-top-8.png" alt=""></a>
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
    <!-- slider area end -->

    <!-- features area start -->
    <section class="features__area pb-20 pl-10 pr-10">
        <div class="container custom-container">
            <div class="row">
              <div class="col-xl-2"></div>
              <div class="col-xl-10">
                <div class="features__wrapper white-bg">
                  <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                      <div class="features__item features__item-4 d-flex white-bg">
                          <div class="features__icon mr-15">
                              <i class="fal fa-rocket-launch"></i>
                          </div>
                          <div class="features__content">
                              <h6>Free Shipping</h6>
                              <p>Free Shipping On All Order</p>
                          </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                      <div class="features__item features__item-4 d-flex white-bg">
                          <div class="features__icon mr-15">
                              <i class="fal fa-sync"></i>
                          </div>
                          <div class="features__content">
                              <h6>Money Guarantee</h6>
                              <p>30 Day Money Back Guarantee</p>
                          </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                      <div class="features__item features__item-4 d-flex white-bg">
                          <div class="features__icon mr-15">
                              <i class="fal fa-user-headset"></i>
                          </div>
                          <div class="features__content">
                              <h6>Online Support 24/7</h6>
                              <p>Technical Support Stand By</p>
                          </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                      <div class="features__item features__item-4 features__item-last d-flex white-bg">
                          <div class="features__icon mr-15">
                              <i class="fal fa-thumbs-up"></i>
                          </div>
                          <div class="features__content">
                              <h6>Secure Payment</h6>
                              <p>All Payment Method are accepted</p>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </section>
    <!-- features area end -->

    <!-- home wrapper end -->
    <section class="home-wrapper">
      <div class="container custom-container">
        <div class="row">
          <!-- left area start -->
          <div class="col-xl-2 col-lg-3 d-none d-lg-block">
            <!-- banner area start -->
            <div class="banner__item banner__item-sidebar pt-110 m-img mb-30">
                <a href="/product-details"><img src="assets/img/banner/banner-9.png" alt=""></a>
            </div>
            <!-- banner area end -->

            <!-- top rated product start -->
            <div class="top__rated pt-30 ">
              <div class="section__head section__head-2">
                  <div class="section__title">
                      <h3>Top Rate<span>Products</span></h3>
                  </div>
              </div>
              <div class="top__reted-slider owl-carousel">
                <div class="top__rated-wrapper">
                  <div class="product__item product__item-4 product__item-sidebar white-bg d-flex">
                      <div class="product__thumb product__thumb-sale product__thumb-sidebar p-relative">
                          <a href="/product-details" class="w-img">
                              <img src="assets/img/shop/product/product-12.jpg" alt="product">
                              <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                          </a>
                      </div>
                      <div class="product__content product__content-4">
                          <h6 class="product-name">
                              <a class="product-item-link" href="/product-details">Smart Mobile Phone 7/7plus/8/8plus/X/Xr W </a>
                          </h6>
                          <div class="rating">
                              <ul>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                              </ul>
                          </div>
                          <span class="new new-2">$720.00</span>
                          <span class="price-old"> <del>$800.00</del> </span>
                      </div>
                  </div>
                  <div class="product__item product__item-4 product__item-sidebar white-bg d-flex">
                      <div class="product__thumb product__thumb-sale product__thumb-sidebar p-relative">
                          <a href="/product-details" class="w-img">
                              <img src="assets/img/shop/product/product-13.jpg" alt="product">
                              <img class="second-img" src="assets/img/shop/product/product-7.jpg" alt="product">
                          </a>
                      </div>
                      <div class="product__content product__content-4">
                          <h6 class="product-name">
                              <a class="product-item-link" href="/product-details">Panasonic TV 32 inch, Special Edition </a>
                          </h6>
                          <div class="rating">
                              <ul>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                              </ul>
                          </div>
                          <span>$240.00</span>
                      </div>
                  </div>
                  <div class="product__item product__item-4 product__item-sidebar white-bg d-flex">
                      <div class="product__thumb product__thumb-sale product__thumb-sidebar p-relative">
                          <a href="/product-details" class="w-img">
                              <img src="assets/img/shop/product/product-14.jpg" alt="product">
                              <img class="second-img" src="assets/img/shop/product/product-6.jpg" alt="product">
                          </a>
                      </div>
                      <div class="product__content product__content-4">
                          <h6 class="product-name">
                              <a class="product-item-link" href="/product-details">Original Samsung M21 Black Color </a>
                          </h6>
                          <div class="rating">
                              <ul>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                              </ul>
                          </div>
                          <span>$240.00</span>
                      </div>
                  </div>
                  <div class="product__item product__item-4 product__item-sidebar white-bg d-flex">
                      <div class="product__thumb product__thumb-sale product__thumb-sidebar p-relative">
                          <a href="/product-details" class="w-img">
                              <img src="assets/img/shop/product/product-15.jpg" alt="product">
                              <img class="second-img" src="assets/img/shop/product/product-5.jpg" alt="product">
                          </a>
                      </div>
                      <div class="product__content product__content-4">
                          <h6 class="product-name">
                              <a class="product-item-link" href="/product-details">Asus Laptop 15.6 inch Limited Edition</a>
                          </h6>
                          <div class="rating">
                              <ul>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                              </ul>
                          </div>
                          <span>$240.00</span>
                      </div>
                  </div>
                  <div class="product__item product__item-4 product__item-sidebar white-bg d-flex">
                      <div class="product__thumb product__thumb-sale product__thumb-sidebar p-relative">
                          <a href="/product-details" class="w-img">
                              <img src="assets/img/shop/product/product-16.jpg" alt="product">
                              <img class="second-img" src="assets/img/shop/product/product-4.jpg" alt="product">
                          </a>
                      </div>
                      <div class="product__content product__content-4">
                          <h6 class="product-name">
                              <a class="product-item-link" href="/product-details">Smart Watch , white belt color </a>
                          </h6>
                          <div class="rating">
                              <ul>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                              </ul>
                          </div>
                          <span>$240.00</span>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- top rated product end -->

            <!-- blog area start -->
            <section class="blog__area pt-60">
              <div class="section__head section__head-2 mb-30">
                  <div class="section__title">
                      <h3>From The<span>Blog</span></h3>
                  </div>
              </div>
              <div class="blog__slider-sidebar owl-carousel">
                <div class="blog__item mb-30">
                    <div class="blog__thumb fix">
                        <a href="/blog-details">
                            <img src="assets/img/blog/blog-1.jpg" alt="">
                        </a>
                    </div>
                    <div class="blog__content white-bg">
                        <h3><a href="/blog-details">Curabitur Lobortis News</a></h3>
                        <div class="blog__meta">
                            <span>Post Date:</span>
                            <span class="date"> 01-Jul-2020</span>
                        </div>
                        <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. </p>
                    </div>
                </div>
                <div class="blog__item mb-30">
                    <div class="blog__thumb fix">
                        <a href="/blog-details">
                            <img src="assets/img/blog/blog-2.jpg" alt="">
                        </a>
                    </div>
                    <div class="blog__content white-bg">
                        <h3><a href="/blog-details">The Brushed Steel</a></h3>
                        <div class="blog__meta">
                            <span>Post Date:</span>
                            <span class="date"> 05-Aug-2020</span>
                        </div>
                        <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. </p>
                    </div>
                </div>
                <div class="blog__item mb-30">
                    <div class="blog__thumb fix">
                        <a href="/blog-details">
                            <img src="assets/img/blog/blog-3.jpg" alt="">
                        </a>
                    </div>
                    <div class="blog__content white-bg">
                        <h3><a href="/blog-details">Koma and Torus</a></h3>
                        <div class="blog__meta">
                            <span>Post Date:</span>
                            <span class="date"> 15-Aug-2020</span>
                        </div>
                        <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. </p>
                    </div>
                </div>
              </div>
            </section>
            <!-- blog area end -->

            <!-- top rated product start -->
            <div class="new__area pt-30 ">
              <div class="section__head section__head-2">
                  <div class="section__title">
                      <h3>New<span>Products</span></h3>
                  </div>
              </div>
                  <div class="product__item product__item-4 product__item-sidebar white-bg d-flex">
                      <div class="product__thumb product__thumb-sale product__thumb-sidebar p-relative">
                          <a href="/product-details" class="w-img">
                              <img src="assets/img/shop/product/product-9.jpg" alt="product">
                              <img class="second-img" src="assets/img/shop/product/product-10.jpg" alt="product">
                          </a>
                      </div>
                      <div class="product__content product__content-4">
                          <h6 class="product-name">
                              <a class="product-item-link" href="/product-details">Smart Mobile Phone 7/7plus/8/8plus/X/Xr W </a>
                          </h6>
                          <div class="rating">
                              <ul>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                              </ul>
                          </div>
                          <span>$79.99</span>
                      </div>
                  </div>
                  <div class="product__item product__item-4 product__item-sidebar white-bg d-flex">
                      <div class="product__thumb product__thumb-sale product__thumb-sidebar p-relative">
                          <a href="/product-details" class="w-img">
                              <img src="assets/img/shop/product/product-14.jpg" alt="product">
                              <img class="second-img" src="assets/img/shop/product/product-6.jpg" alt="product">
                          </a>
                      </div>
                      <div class="product__content product__content-4">
                          <h6 class="product-name">
                              <a class="product-item-link" href="/product-details">Panasonic TV 32 inch, Special Edition </a>
                          </h6>
                          <div class="rating">
                              <ul>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                              </ul>
                          </div>
                          <span>$240.00</span>
                      </div>
                  </div>
                  <div class="product__item product__item-4 product__item-sidebar white-bg d-flex">
                      <div class="product__thumb product__thumb-sale product__thumb-sidebar p-relative">
                          <a href="/product-details" class="w-img">
                              <img src="assets/img/shop/product/product-15.jpg" alt="product">
                              <img class="second-img" src="assets/img/shop/product/product-5.jpg" alt="product">
                          </a>
                      </div>
                      <div class="product__content product__content-4">
                          <h6 class="product-name">
                              <a class="product-item-link" href="/product-details">Original Samsung M21 Black Color </a>
                          </h6>
                          <div class="rating">
                              <ul>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                              </ul>
                          </div>
                          <span>$240.00</span>
                      </div>
                  </div>
                  <div class="product__item product__item-4 product__item-sidebar white-bg d-flex">
                      <div class="product__thumb product__thumb-sale product__thumb-sidebar p-relative">
                          <a href="/product-details" class="w-img">
                              <img src="assets/img/shop/product/product-16.jpg" alt="product">
                              <img class="second-img" src="assets/img/shop/product/product-6.jpg" alt="product">
                          </a>
                      </div>
                      <div class="product__content product__content-4">
                          <h6 class="product-name">
                              <a class="product-item-link" href="/product-details">Asus Laptop 15.6 inch Limited Edition</a>
                          </h6>
                          <div class="rating">
                              <ul>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                              </ul>
                          </div>
                          <span>$240.00</span>
                      </div>
                  </div>
                  <div class="product__item product__item-4 product__item-sidebar white-bg d-flex">
                      <div class="product__thumb product__thumb-sale product__thumb-sidebar p-relative">
                          <a href="/product-details" class="w-img">
                              <img src="assets/img/shop/product/product-17.jpg" alt="product">
                              <img class="second-img" src="assets/img/shop/product/product-6.jpg" alt="product">
                          </a>
                      </div>
                      <div class="product__content product__content-4">
                          <h6 class="product-name">
                              <a class="product-item-link" href="/product-details">Smart Watch , white belt color </a>
                          </h6>
                          <div class="rating">
                              <ul>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                                  <li><a href="#"><i class="far fa-star"></i></a></li>
                              </ul>
                          </div>
                          <span>$240.00</span>
                      </div>
                  </div>
            </div>
            <!-- top rated product end -->

            <!-- banner area start -->
            <div class="banner__item pt-60 m-img mb-30">
                <a href="/product-details"><img src="assets/img/banner/banner-17.png" alt=""></a>
            </div>
            <!-- banner area end -->

            <!-- testimonial area start -->
            <section class="testimonial__area mb-60">
              <div class="testimonial__slider owl-carousel">
                <div class="testimonial__item">
                  <div class="testimonial__des">
                    <div class="testimonial__quote">
                      <span><i class="fas fa-quote-left"></i></span>
                    </div>
                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse consequat orci sed nibh ultricies, eget sollicitudin quam consectetur. Donec at mattis purus, ut accumsan nisl. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse consequat orci new sed nibh ultricies”</p>
                  </div>
                  <div class="testimonial__info">
                    <div class="testimonial__avater">
                      <img src="assets/img/testimonial/testimonial-1.jpg" alt="">
                    </div>
                    <h4>Shahnewaz Sakil</h4>
                    <span>Developer</span>
                  </div>
                </div>
                <div class="testimonial__item">
                  <div class="testimonial__des">
                    <div class="testimonial__quote">
                      <span><i class="fas fa-quote-left"></i></span>
                    </div>
                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse consequat orci sed nibh ultricies, eget sollicitudin quam consectetur. Donec at mattis purus, ut accumsan nisl. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse consequat orci new sed nibh ultricies”</p>
                  </div>
                  <div class="testimonial__info">
                    <div class="testimonial__avater">
                      <img src="assets/img/testimonial/testimonial-2.jpg" alt="">
                    </div>
                    <h4>Salim Rana</h4>
                    <span>Envato Author</span>
                  </div>
                </div>
                <div class="testimonial__item">
                  <div class="testimonial__des">
                    <div class="testimonial__quote">
                      <span><i class="fas fa-quote-left"></i></span>
                    </div>
                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse consequat orci sed nibh ultricies, eget sollicitudin quam consectetur. Donec at mattis purus, ut accumsan nisl. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse consequat orci new sed nibh ultricies”</p>
                  </div>
                  <div class="testimonial__info">
                    <div class="testimonial__avater">
                      <img src="assets/img/testimonial/testimonial-3.jpg" alt="">
                    </div>
                    <h4>John Deo</h4>
                    <span>Developer</span>
                  </div>
                </div>
              </div>
            </section>
            <!-- testimonial area end -->
          </div>

          <!-- right area start -->
          <div class="col-xl-10 col-lg-9">

            <!-- deal area start -->
            <section class="deal__area pt-35">
              <div class="section__head section__head-2 mb-40">
                  <div class="section__title">
                      <h3>Deals<span>Of The Day</span></h3>
                  </div>
              </div>
              <div class="product__deal-2 t-nav owl-carousel">
                  <div class="product__deal-item border-right-2">
                      <div class="product__item product__item-4 white-bg product__sale mb-30">
                          <div class="row">
                              <div class="col-xl-6  col-lg-6 col-md-6 col-sm-6">
                                  <div class="product__thumb product__thumb-big p-relative">
                                      <a href="/product-details" class="w-img">
                                          <img src="assets/img/shop/product/product-15.jpg" alt="product" />
                                          <img class="second-img" src="assets/img/shop/product/product-24.jpg" alt="product" />
                                      </a>
                                      <div class="product__offer">
                                          <span class="discount">-34%</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                  <div class="product__content product__content-2 product__content-4">
                                      <h6 class="product-name product__deal-name">
                                          <a class="product-item-link" href="/product-details"> Original Mobile Android Dual SIM Smart Phone G3 </a>
                                      </h6>
                                      <div class="rating rating-2">
                                          <ul>
                                              <li>
                                                  <a href="#"><i class="far fa-star"></i></a>
                                              </li>
                                              <li>
                                                  <a href="#"><i class="far fa-star"></i></a>
                                              </li>
                                              <li>
                                                  <a href="#"><i class="far fa-star"></i></a>
                                              </li>
                                              <li>
                                                  <a href="#"><i class="far fa-star"></i></a>
                                              </li>
                                              <li>
                                                  <a href="#"><i class="far fa-star"></i></a>
                                              </li>
                                          </ul>
                                      </div>
                                      <span class="new mb-5">$120.00</span>
                                      <span class="price-old mb-5"> <del>$125.00</del> </span>
                                      <p class="mt-10">Typi non habent claritatem insitam, est usus legentis in iis qui facit...</p>
                                      <div class="product__countdown">
                                          <h4>Hurry Up! Offer ends in:</h4>
                                          <div class="countdown-wrapper">
                                              <div data-countdown data-date="Dec 02 2022 20:20:22">
                                                  <ul>
                                                      <li>
                                                          <span data-days>0</span>
                                                          <p>Days</p>
                                                      </li>
                                                      <li>
                                                          <span data-hours>0</span>
                                                          <p>Hours</p>
                                                      </li>
                                                      <li>
                                                          <span data-minutes>0</span>
                                                          <p>mins</p>
                                                      </li>
                                                      <li>
                                                          <span data-seconds>0</span>
                                                          <p>secs</p>
                                                      </li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                      <a href="#" class="t-y-btn t-y-btn-red w-100 mb-10">Add to Cart</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="product__deal-item border-right-2">
                      <div class="product__item product__item-4 white-bg product__sale mb-30">
                          <div class="row">
                              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                  <div class="product__thumb product__thumb-big p-relative">
                                      <a href="/product-details" class="w-img">
                                          <img src="assets/img/shop/product/product-17.jpg" alt="product" />
                                          <img class="second-img" src="assets/img/shop/product/product-24.jpg" alt="product" />
                                      </a>
                                      <div class="product__offer">
                                          <span class="discount">-20%</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                  <div class="product__content product__content-2 product__content-4">
                                      <h6 class="product-name product__deal-name">
                                          <a class="product-item-link" href="/product-details"> Sunset analog watch pink color </a>
                                      </h6>
                                      <div class="rating rating-2">
                                          <ul>
                                              <li>
                                                  <a href="#"><i class="far fa-star"></i></a>
                                              </li>
                                              <li>
                                                  <a href="#"><i class="far fa-star"></i></a>
                                              </li>
                                              <li>
                                                  <a href="#"><i class="far fa-star"></i></a>
                                              </li>
                                              <li>
                                                  <a href="#"><i class="far fa-star"></i></a>
                                              </li>
                                              <li>
                                                  <a href="#"><i class="far fa-star"></i></a>
                                              </li>
                                          </ul>
                                      </div>
                                      <span class="new mb-5">$70.00</span>
                                      <span class="price-old mb-5"> <del>$90.00</del> </span>
                                      <p class="mt-10">Typi non habent claritatem insitam, est usus legentis in iis qui facit...</p>
                                      <div class="product__countdown">
                                          <h4>Hurry Up! Offer ends in:</h4>
                                          <div class="countdown-wrapper">
                                              <div data-countdown data-date="Dec 02 2022 20:20:22">
                                                  <ul>
                                                      <li>
                                                          <span data-days>0</span>
                                                          <p>Days</p>
                                                      </li>
                                                      <li>
                                                          <span data-hours>0</span>
                                                          <p>Hours</p>
                                                      </li>
                                                      <li>
                                                          <span data-minutes>0</span>
                                                          <p>mins</p>
                                                      </li>
                                                      <li>
                                                          <span data-seconds>0</span>
                                                          <p>secs</p>
                                                      </li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                      <a href="#" class="t-y-btn t-y-btn-red w-100 mb-10">Add to Cart</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="product__deal-item border-right-2">
                      <div class="product__item product__item-4 white-bg product__sale mb-30">
                          <div class="row">
                              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                  <div class="product__thumb product__thumb-big p-relative">
                                      <a href="/product-details" class="w-img">
                                          <img src="assets/img/shop/product/product-16.jpg" alt="product" />
                                          <img class="second-img" src="assets/img/shop/product/product-24.jpg" alt="product" />
                                      </a>
                                      <div class="product__offer">
                                          <span class="discount">-12%</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                  <div class="product__content product__content-2 product__content-4">
                                      <h6 class="product-name product__deal-name">
                                          <a class="product-item-link" href="/product-details"> Headphone for gaming, Black & Red Color</a>
                                      </h6>
                                      <div class="rating rating-2">
                                          <ul>
                                              <li>
                                                  <a href="#"><i class="far fa-star"></i></a>
                                              </li>
                                              <li>
                                                  <a href="#"><i class="far fa-star"></i></a>
                                              </li>
                                              <li>
                                                  <a href="#"><i class="far fa-star"></i></a>
                                              </li>
                                              <li>
                                                  <a href="#"><i class="far fa-star"></i></a>
                                              </li>
                                              <li>
                                                  <a href="#"><i class="far fa-star"></i></a>
                                              </li>
                                          </ul>
                                      </div>
                                      <span class="new mb-5">$50.00</span>
                                      <span class="price-old mb-5"> <del>$65.00</del> </span>
                                      <p class="mt-10">Typi non habent claritatem insitam, est usus legentis in iis qui facit...</p>
                                      <div class="product__countdown">
                                          <h4>Hurry Up! Offer ends in:</h4>
                                          <div class="countdown-wrapper">
                                              <div data-countdown data-date="Dec 02 2022 20:20:22">
                                                  <ul>
                                                      <li>
                                                          <span data-days>0</span>
                                                          <p>Days</p>
                                                      </li>
                                                      <li>
                                                          <span data-hours>0</span>
                                                          <p>Hours</p>
                                                      </li>
                                                      <li>
                                                          <span data-minutes>0</span>
                                                          <p>mins</p>
                                                      </li>
                                                      <li>
                                                          <span data-seconds>0</span>
                                                          <p>secs</p>
                                                      </li>
                                                  </ul>
                                              </div>
                                          </div>
                                      </div>
                                      <a href="#" class="t-y-btn t-y-btn-red w-100 mb-10">Add to Cart</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </section>
            <!-- deal area end -->

            <!-- top selling product area start -->
            <section class="top__sell pt-15">
              <div class="section__head section__head-2 d-md-flex justify-content-between mb-40">
                  <div class="section__title">
                      <h3>Top Selling<span>Products</span></h3>
                  </div>
                  <div class="product__nav-tab product__nav-tab-red mr-75">
                      <ul class="nav nav-tabs" id="best-sell-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="new-tab" data-bs-toggle="tab" data-bs-target="#new" type="button" role="tab" aria-controls="new" aria-selected="true">New Arrival</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="featured-tab" data-bs-toggle="tab" data-bs-target="#featured" type="button" role="tab" aria-controls="featured" aria-selected="false">Featured</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="hot-tab" data-bs-toggle="tab" data-bs-target="#hot" type="button" role="tab" aria-controls="hot" aria-selected="false">Hot Sale</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="radom-tab" data-bs-toggle="tab" data-bs-target="#radom" type="button" role="tab" aria-controls="radom" aria-selected="false">Random</button>
                        </li>
                      </ul>
                  </div>
              </div>
              <div class="tab-content" id="best-sell">
                <div class="tab-pane fade show active" id="new" role="tabpanel" aria-labelledby="new-tab">
                    <div class="product__slider owl-carousel">
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-1.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-2.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-34%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> High Quality Glass Ultra-Thin Kitchen Scale</a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$120.00</span>
                                <span class="price-old mb-5"> <del>$125.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button" >Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-3.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-4.jpg" alt="product">
                                </a>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> LG 27UD58: £347.21, Ebuyer.com </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$120.00</span>
                                <span class="price-old mb-5"> <del>$125.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-5.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-6.jpg" alt="product">
                                </a>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Samsung C49J89: £875, Debenhams Plus  </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$120.00</span>
                                <span class="price-old mb-5"> <del>$125.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-7.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                </a>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Blink Home Security Camera System 01   </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$120.00</span>
                                <span class="price-old mb-5"> <del>$125.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-9.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-10.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-10%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Blue t-shir for men (X, M, XL, XXL)   </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$120.00</span>
                                <span class="price-old mb-5"> <del>$125.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative" >
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-11.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-12.jpg" alt="product">
                                </a>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Samsung A20 Pro Ultra CPU 4/64 GB  </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$120.00</span>
                                <span class="price-old mb-5"> <del>$125.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-7.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-25%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Blink Home Security Camera System 01   </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$120.00</span>
                                <span class="price-old mb-5"> <del>$125.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                    <div class="product__slider owl-carousel">
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-1.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-2.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-34%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> High Quality Glass Ultra-Thin Kitchen Scale</a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$120.00</span>
                                <span class="price-old mb-5"> <del>$125.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button" >Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-3.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-4.jpg" alt="product">
                                </a>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> LG 27UD58: £347.21, Ebuyer.com </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$120.00</span>
                                <span class="price-old mb-5"> <del>$125.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-5.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-6.jpg" alt="product">
                                </a>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Samsung C49J89: £875, Debenhams Plus  </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$120.00</span>
                                <span class="price-old mb-5"> <del>$125.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-7.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                </a>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Blink Home Security Camera System 01   </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$120.00</span>
                                <span class="price-old mb-5"> <del>$125.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-9.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-10.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-10%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Blue t-shir for men (X, M, XL, XXL)   </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$120.00</span>
                                <span class="price-old mb-5"> <del>$125.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative" >
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-11.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-12.jpg" alt="product">
                                </a>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Samsung A20 Pro Ultra CPU 4/64 GB  </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$120.00</span>
                                <span class="price-old mb-5"> <del>$125.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-7.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-25%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Blink Home Security Camera System 01   </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$120.00</span>
                                <span class="price-old mb-5"> <del>$125.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="hot" role="tabpanel" aria-labelledby="hot-tab">
                    <div class="product__slider owl-carousel">
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-1.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-2.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-34%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> High Quality Glass Ultra-Thin Kitchen Scale</a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$120.00</span>
                                <span class="price-old mb-5"> <del>$125.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button" >Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-3.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-4.jpg" alt="product">
                                </a>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> LG 27UD58: £347.21, Ebuyer.com </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$120.00</span>
                                <span class="price-old mb-5"> <del>$125.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-5.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-6.jpg" alt="product">
                                </a>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Samsung C49J89: £875, Debenhams Plus  </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$120.00</span>
                                <span class="price-old mb-5"> <del>$125.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-7.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                </a>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Blink Home Security Camera System 01   </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$120.00</span>
                                <span class="price-old mb-5"> <del>$125.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-9.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-10.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-10%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Blue t-shir for men (X, M, XL, XXL)   </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$120.00</span>
                                <span class="price-old mb-5"> <del>$125.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative" >
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-11.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-12.jpg" alt="product">
                                </a>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Samsung A20 Pro Ultra CPU 4/64 GB  </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$120.00</span>
                                <span class="price-old mb-5"> <del>$125.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-7.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-25%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Blink Home Security Camera System 01   </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$120.00</span>
                                <span class="price-old mb-5"> <del>$125.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="radom" role="tabpanel" aria-labelledby="radom-tab">
                    <div class="product__slider owl-carousel">
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-1.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-2.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-34%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> High Quality Glass Ultra-Thin Kitchen Scale</a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$120.00</span>
                                <span class="price-old mb-5"> <del>$125.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button" >Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-3.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-4.jpg" alt="product">
                                </a>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> LG 27UD58: £347.21, Ebuyer.com </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$120.00</span>
                                <span class="price-old mb-5"> <del>$125.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-5.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-6.jpg" alt="product">
                                </a>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Samsung C49J89: £875, Debenhams Plus  </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$120.00</span>
                                <span class="price-old mb-5"> <del>$125.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-7.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                </a>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Blink Home Security Camera System 01   </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$120.00</span>
                                <span class="price-old mb-5"> <del>$125.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-9.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-10.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-10%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Blue t-shir for men (X, M, XL, XXL)   </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$120.00</span>
                                <span class="price-old mb-5"> <del>$125.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative" >
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-11.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-12.jpg" alt="product">
                                </a>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Samsung A20 Pro Ultra CPU 4/64 GB  </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$120.00</span>
                                <span class="price-old mb-5"> <del>$125.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-7.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-25%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Blink Home Security Camera System 01   </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$120.00</span>
                                <span class="price-old mb-5"> <del>$125.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </section>
            <!-- top selling product area end -->

            <!-- banner area start -->
            <section class="banner__area pt-50 pb-30">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="banner__item mb-30 w-img">
                            <a href="/product-details"><img src="assets/img/banner/banner-10.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="banner__item mb-30 w-img">
                            <a href="/product-details"><img src="assets/img/banner/banner-11.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- banner area end -->

            <!-- on selling product area start -->
            <section class="on__sell pb-60">
              <div class="section__head section__head-2 d-md-flex justify-content-between mb-40">
                  <div class="section__title">
                      <h3>Onsale<span>Products</span></h3>
                  </div>
                  <div class="product__nav-tab product__nav-tab-red mr-75">
                      <ul class="nav nav-tabs" id="on-sell-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="appliances-tab" data-bs-toggle="tab" data-bs-target="#appliances" type="button" role="tab" aria-controls="appliances" aria-selected="true">Home Appliances</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="office-tab" data-bs-toggle="tab" data-bs-target="#office" type="button" role="tab" aria-controls="office" aria-selected="false">Office Equipment</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="storage-tab" data-bs-toggle="tab" data-bs-target="#storage" type="button" role="tab" aria-controls="storage" aria-selected="false">Storage Devices</button>
                        </li>
                      </ul>
                  </div>
              </div>
              <div class="tab-content" id="on-sell">
                  <div class="tab-pane fade show active" id="appliances" role="tabpanel" aria-labelledby="appliances-tab">
                      <div class="product__slider owl-carousel">
                          <div class="product__item product__item-4 border-right-2 white-bg">
                              <div class="product__thumb p-relative">
                                  <a href="/product-details" class="w-img">
                                      <img src="assets/img/shop/product/product-2.jpg" alt="product">
                                      <img class="second-img" src="assets/img/shop/product/product-3.jpg" alt="product">
                                  </a>
                                  <div class="product__offer">
                                      <span class="discount discount-2">-14%</span>
                                  </div>
                                  <div class="product__action product__action-4 p-absolute">
                                      <ul>
                                          <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                          <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                          <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="product__content product__content-4 text-center">
                                  <h6 class="product-name">
                                      <a class="product-item-link" href="/product-details"> 32 inch LED TV, Special Edition</a>
                                  </h6>
                                  <div class="rating">
                                      <ul>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                      </ul>
                                  </div>
                                  <span class="new mb-5">$120.00</span>
                                  <span class="price-old mb-5"> <del>$125.00</del> </span>
                              </div>
                              <div class="product__add-btn product__add-btn-4">
                                  <button type="button" >Add to Cart</button>
                              </div>
                          </div>
                          <div class="product__item product__item-4 border-right-2 white-bg">
                              <div class="product__thumb p-relative">
                                  <a href="/product-details" class="w-img">
                                      <img src="assets/img/shop/product/product-4.jpg" alt="product">
                                      <img class="second-img" src="assets/img/shop/product/product-5.jpg" alt="product">
                                  </a>
                                  <div class="product__offer">
                                      <span class="discount discount-2">-19%</span>
                                  </div>
                                  <div class="product__action product__action-4 p-absolute">
                                      <ul>
                                          <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                          <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                          <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="product__content product__content-4 text-center">
                                  <h6 class="product-name">
                                      <a class="product-item-link" href="/product-details"> ViewSonic 21.5 inch LED TV, Silver Color</a>
                                  </h6>
                                  <div class="rating">
                                      <ul>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                      </ul>
                                  </div>
                                  <span class="new mb-5">$90.00</span>
                                  <span class="price-old mb-5"> <del>$120.00</del> </span>
                              </div>
                              <div class="product__add-btn product__add-btn-4">
                                  <button type="button">Add to Cart</button>
                              </div>
                          </div>
                          <div class="product__item product__item-4 border-right-2 white-bg">
                              <div class="product__thumb p-relative">
                                  <a href="/product-details" class="w-img">
                                      <img src="assets/img/shop/product/product-6.jpg" alt="product">
                                      <img class="second-img" src="assets/img/shop/product/product-7.jpg" alt="product">
                                  </a>
                                  <div class="product__offer">
                                      <span class="discount discount-2">-30%</span>
                                  </div>
                                  <div class="product__action product__action-4 p-absolute">
                                      <ul>
                                          <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                          <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                          <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="product__content product__content-4 text-center">
                                  <h6 class="product-name">
                                      <a class="product-item-link" href="/product-details"> Originial Samsung Note II, 4/64GB </a>
                                  </h6>
                                  <div class="rating">
                                      <ul>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                      </ul>
                                  </div>
                                  <span class="new mb-5">$80.00</span>
                                  <span class="price-old mb-5"> <del>$85.00</del> </span>
                              </div>
                              <div class="product__add-btn product__add-btn-4">
                                  <button type="button">Add to Cart</button>
                              </div>
                          </div>
                          <div class="product__item product__item-4 border-right-2 white-bg">
                              <div class="product__thumb p-relative">
                                  <a href="/product-details" class="w-img">
                                      <img src="assets/img/shop/product/product-8.jpg" alt="product">
                                      <img class="second-img" src="assets/img/shop/product/product-9.jpg" alt="product">
                                  </a>
                                  <div class="product__offer">
                                      <span class="discount discount-2">-5%</span>
                                  </div>
                                  <div class="product__action product__action-4 p-absolute">
                                      <ul>
                                          <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                          <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                          <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="product__content product__content-4 text-center">
                                  <h6 class="product-name">
                                      <a class="product-item-link" href="/product-details"> Sports T-Shirt yellow color for men   </a>
                                  </h6>
                                  <div class="rating">
                                      <ul>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                      </ul>
                                  </div>
                                  <span class="new mb-5">$150.00</span>
                                  <span class="price-old mb-5"> <del>$175.00</del> </span>
                              </div>
                              <div class="product__add-btn product__add-btn-4">
                                  <button type="button">Add to Cart</button>
                              </div>
                          </div>
                          <div class="product__item product__item-4 border-right-2 white-bg">
                              <div class="product__thumb p-relative">
                                  <a href="/product-details" class="w-img">
                                      <img src="assets/img/shop/product/product-10.jpg" alt="product">
                                      <img class="second-img" src="assets/img/shop/product/product-11.jpg" alt="product">
                                  </a>
                                  <div class="product__offer">
                                      <span class="discount discount-2">-34%</span>
                                  </div>
                                  <div class="product__action product__action-4 p-absolute">
                                      <ul>
                                          <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                          <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                          <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="product__content product__content-4 text-center">
                                  <h6 class="product-name">
                                      <a class="product-item-link" href="/product-details"> Knife Set for home. Black handle 6 piece </a>
                                  </h6>
                                  <div class="rating">
                                      <ul>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                      </ul>
                                  </div>
                                  <span class="new mb-5">$85.00</span>
                                  <span class="price-old mb-5"> <del>$95.00</del> </span>
                              </div>
                              <div class="product__add-btn product__add-btn-4">
                                  <button type="button">Add to Cart</button>
                              </div>
                          </div>
                          <div class="product__item product__item-4 border-right-2 white-bg">
                              <div class="product__thumb p-relative" >
                                  <a href="/product-details" class="w-img">
                                      <img src="assets/img/shop/product/product-12.jpg" alt="product">
                                      <img class="second-img" src="assets/img/shop/product/product-13.jpg" alt="product">
                                  </a>
                                  <div class="product__offer">
                                      <span class="discount discount-2">-34%</span>
                                  </div>
                                  <div class="product__action product__action-4 p-absolute">
                                      <ul>
                                          <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                          <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                          <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="product__content product__content-4 text-center">
                                  <h6 class="product-name">
                                      <a class="product-item-link" href="/product-details"> Samsung A20 Pro Ultra CPU 4/64 GB  </a>
                                  </h6>
                                  <div class="rating">
                                      <ul>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                      </ul>
                                  </div>
                                  <span class="new mb-5">$110.00</span>
                                  <span class="price-old mb-5"> <del>$140.00</del> </span>
                              </div>
                              <div class="product__add-btn product__add-btn-4">
                                  <button type="button">Add to Cart</button>
                              </div>
                          </div>
                          <div class="product__item product__item-4 border-right-2 white-bg">
                              <div class="product__thumb p-relative">
                                  <a href="/product-details" class="w-img">
                                      <img src="assets/img/shop/product/product-14.jpg" alt="product">
                                      <img class="second-img" src="assets/img/shop/product/product-16.jpg" alt="product">
                                  </a>
                                  <div class="product__offer">
                                      <span class="discount discount-2">-34%</span>
                                  </div>
                                  <div class="product__offer">
                                      <span class="discount discount-2">-34%</span>
                                  </div>
                                  <div class="product__action product__action-4 p-absolute">
                                      <ul>
                                          <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                          <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                          <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="product__content product__content-4 text-center">
                                  <h6 class="product-name">
                                      <a class="product-item-link" href="/product-details"> Blink Home Security Camera System 01   </a>
                                  </h6>
                                  <div class="rating">
                                      <ul>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                      </ul>
                                  </div>
                                  <span class="new mb-5">$60.00</span>
                                  <span class="price-old mb-5"> <del>$75.00</del> </span>
                              </div>
                              <div class="product__add-btn product__add-btn-4">
                                  <button type="button">Add to Cart</button>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="tab-pane fade" id="office" role="tabpanel" aria-labelledby="office-tab">
                    <div class="product__slider owl-carousel">
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-2.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-3.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-14%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> 32 inch LED TV, Special Edition</a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$120.00</span>
                                <span class="price-old mb-5"> <del>$125.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button" >Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-4.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-5.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-19%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> ViewSonic 21.5 inch LED TV, Silver Color</a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$90.00</span>
                                <span class="price-old mb-5"> <del>$120.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-6.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-7.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-30%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Originial Samsung Note II, 4/64GB </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$80.00</span>
                                <span class="price-old mb-5"> <del>$85.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-8.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-9.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-5%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Sports T-Shirt yellow color for men   </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$150.00</span>
                                <span class="price-old mb-5"> <del>$175.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-10.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-11.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-34%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Knife Set for home. Black handle 6 piece </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$85.00</span>
                                <span class="price-old mb-5"> <del>$95.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative" >
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-12.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-13.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-34%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Samsung A20 Pro Ultra CPU 4/64 GB  </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$110.00</span>
                                <span class="price-old mb-5"> <del>$140.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-14.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-16.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-34%</span>
                                </div>
                                <div class="product__offer">
                                    <span class="discount discount-2">-34%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Blink Home Security Camera System 01   </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$60.00</span>
                                <span class="price-old mb-5"> <del>$75.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="storage" role="tabpanel" aria-labelledby="storage-tab">
                    <div class="product__slider owl-carousel">
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-2.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-3.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-14%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> 32 inch LED TV, Special Edition</a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$120.00</span>
                                <span class="price-old mb-5"> <del>$125.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button" >Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-4.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-5.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-19%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> ViewSonic 21.5 inch LED TV, Silver Color</a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$90.00</span>
                                <span class="price-old mb-5"> <del>$120.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-6.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-7.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-30%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Originial Samsung Note II, 4/64GB </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$80.00</span>
                                <span class="price-old mb-5"> <del>$85.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-8.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-9.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-5%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Sports T-Shirt yellow color for men   </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$150.00</span>
                                <span class="price-old mb-5"> <del>$175.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-10.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-11.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-34%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Knife Set for home. Black handle 6 piece </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$85.00</span>
                                <span class="price-old mb-5"> <del>$95.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative" >
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-12.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-13.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-34%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Samsung A20 Pro Ultra CPU 4/64 GB  </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$110.00</span>
                                <span class="price-old mb-5"> <del>$140.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-14.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-16.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-34%</span>
                                </div>
                                <div class="product__offer">
                                    <span class="discount discount-2">-34%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Blink Home Security Camera System 01   </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$60.00</span>
                                <span class="price-old mb-5"> <del>$75.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
            </section>
            <!-- on selling product area end -->

            <!-- banner area start -->
            <section class="banner__area pb-40">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="banner__item mb-30 w-img">
                            <a href="/product-details"><img src="assets/img/banner/banner-12.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="banner__item mb-30 w-img">
                            <a href="/product-details"><img src="assets/img/banner/banner-13.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="banner__item mb-30 w-img">
                            <a href="/product-details"><img src="assets/img/banner/banner-14.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- banner area end -->

            <!-- on selling product area start -->
            <section class="tv__audio pb-30">
              <div class="section__head section__head-2 d-md-flex justify-content-between mb-40">
                  <div class="section__title">
                      <h3>Best Selling TV - Audio<span>Products</span></h3>
                  </div>
                  <div class="product__nav-tab product__nav-tab-red mr-75">
                      <ul class="nav nav-tabs" id="tv-audio-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="tablet-tab" data-bs-toggle="tab" data-bs-target="#tablet" type="button" role="tab" aria-controls="tablet" aria-selected="true">Phone & Tablets</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="desktop-tab" data-bs-toggle="tab" data-bs-target="#desktop" type="button" role="tab" aria-controls="desktop" aria-selected="false">Desktop & Computer</button>
                        </li>
                      </ul>
                  </div>
              </div>
              <div class="tab-content" id="tv-audio">
                  <div class="tab-pane fade show active" id="tablet" role="tabpanel" aria-labelledby="tablet-tab">
                      <div class="product__slider owl-carousel">
                          <div class="product__item product__item-4 border-right-2 white-bg">
                              <div class="product__thumb p-relative">
                                  <a href="/product-details" class="w-img">
                                      <img src="assets/img/shop/product/product-3.jpg" alt="product">
                                      <img class="second-img" src="assets/img/shop/product/product-4.jpg" alt="product">
                                  </a>
                                  <div class="product__offer">
                                      <span class="discount discount-2">-21%</span>
                                  </div>
                                  <div class="product__action product__action-4 p-absolute">
                                      <ul>
                                          <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                          <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                          <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="product__content product__content-4 text-center">
                                  <h6 class="product-name">
                                      <a class="product-item-link" href="/product-details">Xiaomi Redmi Note 9 Pro</a>
                                  </h6>
                                  <div class="rating">
                                      <ul>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                      </ul>
                                  </div>
                                  <span class="new mb-5">$70.00</span>
                                  <span class="price-old mb-5"> <del>$80.00</del> </span>
                              </div>
                              <div class="product__add-btn product__add-btn-4">
                                  <button type="button" >Add to Cart</button>
                              </div>
                          </div>
                          <div class="product__item product__item-4 border-right-2 white-bg">
                              <div class="product__thumb p-relative">
                                  <a href="/product-details" class="w-img">
                                      <img src="assets/img/shop/product/product-5.jpg" alt="product">
                                      <img class="second-img" src="assets/img/shop/product/product-6.jpg" alt="product">
                                  </a>
                                  <div class="product__offer">
                                      <span class="discount discount-2">-12%</span>
                                  </div>
                                  <div class="product__action product__action-4 p-absolute">
                                      <ul>
                                          <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                          <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                          <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="product__content product__content-4 text-center">
                                  <h6 class="product-name">
                                      <a class="product-item-link" href="/product-details"> Samsung Galaxy M12  </a>
                                  </h6>
                                  <div class="rating">
                                      <ul>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                      </ul>
                                  </div>
                                  <span class="new mb-5">$80.00</span>
                                  <span class="price-old mb-5"> <del>$100.00</del> </span>
                              </div>
                              <div class="product__add-btn product__add-btn-4">
                                  <button type="button">Add to Cart</button>
                              </div>
                          </div>
                          <div class="product__item product__item-4 border-right-2 white-bg">
                              <div class="product__thumb p-relative">
                                  <a href="/product-details" class="w-img">
                                      <img src="assets/img/shop/product/product-7.jpg" alt="product">
                                      <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                  </a>
                                  <div class="product__offer">
                                      <span class="discount discount-2">-40%</span>
                                  </div>
                                  <div class="product__action product__action-4 p-absolute">
                                      <ul>
                                          <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                          <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                          <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="product__content product__content-4 text-center">
                                  <h6 class="product-name">
                                      <a class="product-item-link" href="/product-details"> Visitor Chair CFV-221-7-1-66</a>
                                  </h6>
                                  <div class="rating">
                                      <ul>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                      </ul>
                                  </div>
                                  <span class="new mb-5">$120.00</span>
                                  <span class="price-old mb-5"> <del>$140.00</del> </span>
                              </div>
                              <div class="product__add-btn product__add-btn-4">
                                  <button type="button">Add to Cart</button>
                              </div>
                          </div>
                          <div class="product__item product__item-4 border-right-2 white-bg">
                              <div class="product__thumb p-relative">
                                  <a href="/product-details" class="w-img">
                                      <img src="assets/img/shop/product/product-9.jpg" alt="product">
                                      <img class="second-img" src="assets/img/shop/product/product-10.jpg" alt="product">
                                  </a>
                                  <div class="product__offer">
                                      <span class="discount discount-2">-16%</span>
                                  </div>
                                  <div class="product__action product__action-4 p-absolute">
                                      <ul>
                                          <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                          <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                          <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="product__content product__content-4 text-center">
                                  <h6 class="product-name">
                                      <a class="product-item-link" href="/product-details"> Blue shirt for men (M, X, XL, XXL)   </a>
                                  </h6>
                                  <div class="rating">
                                      <ul>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                      </ul>
                                  </div>
                                  <span class="new mb-5">$40.00</span>
                                  <span class="price-old mb-5"> <del>$50.00</del> </span>
                              </div>
                              <div class="product__add-btn product__add-btn-4">
                                  <button type="button">Add to Cart</button>
                              </div>
                          </div>
                          <div class="product__item product__item-4 border-right-2 white-bg">
                              <div class="product__thumb p-relative">
                                  <a href="/product-details" class="w-img">
                                      <img src="assets/img/shop/product/product-11.jpg" alt="product">
                                      <img class="second-img" src="assets/img/shop/product/product-12.jpg" alt="product">
                                  </a>
                                  <div class="product__offer">
                                      <span class="discount discount-2">-24%</span>
                                  </div>
                                  <div class="product__action product__action-4 p-absolute">
                                      <ul>
                                          <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                          <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                          <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="product__content product__content-4 text-center">
                                  <h6 class="product-name">
                                      <a class="product-item-link" href="/product-details">Oppo Reno6 Pro+ 5G Red Color   </a>
                                  </h6>
                                  <div class="rating">
                                      <ul>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                      </ul>
                                  </div>
                                  <span class="new mb-5">$140.00</span>
                                  <span class="price-old mb-5"> <del>$160.00</del> </span>
                              </div>
                              <div class="product__add-btn product__add-btn-4">
                                  <button type="button">Add to Cart</button>
                              </div>
                          </div>
                          <div class="product__item product__item-4 border-right-2 white-bg">
                              <div class="product__thumb p-relative" >
                                  <a href="/product-details" class="w-img">
                                      <img src="assets/img/shop/product/product-13.jpg" alt="product">
                                      <img class="second-img" src="assets/img/shop/product/product-14.jpg" alt="product">
                                  </a>
                                  <div class="product__offer">
                                      <span class="discount discount-2">-17%</span>
                                  </div>
                                  <div class="product__action product__action-4 p-absolute">
                                      <ul>
                                          <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                          <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                          <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="product__content product__content-4 text-center">
                                  <h6 class="product-name">
                                      <a class="product-item-link" href="/product-details"> Wooden Headphone Bluetooth, long wire  </a>
                                  </h6>
                                  <div class="rating">
                                      <ul>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                      </ul>
                                  </div>
                                  <span class="new mb-5">$40.00</span>
                                  <span class="price-old mb-5"> <del>$60.00</del> </span>
                              </div>
                              <div class="product__add-btn product__add-btn-4">
                                  <button type="button">Add to Cart</button>
                              </div>
                          </div>
                          <div class="product__item product__item-4 border-right-2 white-bg">
                              <div class="product__thumb p-relative">
                                  <a href="/product-details" class="w-img">
                                      <img src="assets/img/shop/product/product-15.jpg" alt="product">
                                      <img class="second-img" src="assets/img/shop/product/product-17.jpg" alt="product">
                                  </a>
                                  <div class="product__offer">
                                      <span class="discount discount-2">-34%</span>
                                  </div>
                                  <div class="product__offer">
                                      <span class="discount discount-2">-34%</span>
                                  </div>
                                  <div class="product__action product__action-4 p-absolute">
                                      <ul>
                                          <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                          <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                          <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="product__content product__content-4 text-center">
                                  <h6 class="product-name">
                                      <a class="product-item-link" href="/product-details"> Blink Home Security Camera System 01   </a>
                                  </h6>
                                  <div class="rating">
                                      <ul>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                          <li><a href="#"><i class="far fa-star"></i></a></li>
                                      </ul>
                                  </div>
                                  <span class="new mb-5">$60.00</span>
                                  <span class="price-old mb-5"> <del>$75.00</del> </span>
                              </div>
                              <div class="product__add-btn product__add-btn-4">
                                  <button type="button">Add to Cart</button>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="tab-pane fade" id="desktop" role="tabpanel" aria-labelledby="desktop-tab">
                    <div class="product__slider owl-carousel">
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-3.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-4.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-21%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details">Xiaomi Redmi Note 9 Pro</a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$70.00</span>
                                <span class="price-old mb-5"> <del>$80.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button" >Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-5.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-6.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-12%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Samsung Galaxy M12  </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$80.00</span>
                                <span class="price-old mb-5"> <del>$100.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-7.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-40%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Visitor Chair CFV-221-7-1-66</a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$120.00</span>
                                <span class="price-old mb-5"> <del>$140.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-9.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-10.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-16%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Blue shirt for men (M, X, XL, XXL)   </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$40.00</span>
                                <span class="price-old mb-5"> <del>$50.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-11.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-12.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-24%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details">Oppo Reno6 Pro+ 5G Red Color   </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$140.00</span>
                                <span class="price-old mb-5"> <del>$160.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative" >
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-13.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-14.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-17%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Wooden Headphone Bluetooth, long wire  </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$40.00</span>
                                <span class="price-old mb-5"> <del>$60.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-15.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-17.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-34%</span>
                                </div>
                                <div class="product__offer">
                                    <span class="discount discount-2">-34%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Blink Home Security Camera System 01   </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$60.00</span>
                                <span class="price-old mb-5"> <del>$75.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </section>
            <!-- on selling product area end -->

            <!-- banner area start -->
            <section class="banner__area pt-20 pb-40">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="banner__item mb-30 w-img">
                            <a href="/product-details"><img src="assets/img/banner/banner-15.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="banner__item mb-30 w-img">
                            <a href="/product-details"><img src="assets/img/banner/banner-16.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- banner area end -->

           <!-- category area start -->
           <section class="category__area pb-55">
             <div class="section__head section__head-2 d-md-flex justify-content-between mb-40">
                 <div class="section__title">
                     <h3>Shop By <span>Categories</span></h3>
                 </div>
             </div>
              <div class="row">
                <div class="col-xl-12">
                  <div class="category__slider t-nav owl-carousel">
                    <div class="category__item border-right-2 w-img">
                      <div class="category__title">
                        <div class="category__thumb mb-25">
                            <a href="/shop">
                                <img src="assets/img/shop/product/category/cat_1.jpg" alt="">
                            </a>
                        </div>
                        <h3>
                          <a href="/shop">Bestseller Products</a>
                        </h3>
                      </div>
                      <div class="category__links">
                        <ul>
                          <li><a href="/shop">Phones & Tablets</a></li>
                          <li><a href="/shop">Desktop & Computer</a></li>
                          <li><a href="/shop">TV & Audios</a></li>
                          <li><a href="/shop">Laptop Accessories</a></li>
                          <li><a href="/shop">Lenovo</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="category__item border-right-2">
                      <div class="category__title">
                        <div class="category__thumb mb-25">
                            <a href="/shop">
                                <img src="assets/img/shop/product/category/cat_2.jpg" alt="">
                            </a>
                        </div>
                        <h3>
                          <a href="/shop">Phones & Tablets</a>
                        </h3>
                      </div>
                      <div class="category__links">
                        <ul>
                          <li><a href="/shop">Home Appliances</a></li>
                          <li><a href="/shop">Office Equipment</a></li>
                          <li><a href="/shop">Storage Devices</a></li>
                          <li><a href="/shop">Electrical Kettle</a></li>
                          <li><a href="/shop">Mobile Phones</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="category__item border-right-2">
                      <div class="category__title">
                        <div class="category__thumb mb-25">
                            <a href="/shop">
                                <img src="assets/img/shop/product/category/cat_3.jpg" alt="">
                            </a>
                        </div>
                        <h3>
                          <a href="/shop">Electronic & Digital</a>
                        </h3>
                      </div>
                      <div class="category__links">
                        <ul>
                          <li><a href="/shop">Computer</a></li>
                          <li><a href="/shop">Samsung</a></li>
                          <li><a href="/shop">HTC</a></li>
                          <li><a href="/shop">Nokia</a></li>
                          <li><a href="/shop">cell Phone</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="category__item border-right-2">
                      <div class="category__title">
                        <div class="category__thumb mb-25">
                            <a href="/shop">
                                <img src="assets/img/shop/product/category/cat_4.jpg" alt="">
                            </a>
                        </div>
                        <h3>
                          <a href="/shop">TV & Audio</a>
                        </h3>
                      </div>
                      <div class="category__links">
                        <ul>
                          <li><a href="/shop">Sony</a></li>
                          <li><a href="/shop">Samsung</a></li>
                          <li><a href="/shop">LG</a></li>
                          <li><a href="/shop">HP</a></li>
                          <li><a href="/shop">Beat Audio</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="category__item border-right-2">
                      <div class="category__title">
                        <div class="category__thumb mb-25">
                            <a href="/shop">
                                <img src="assets/img/shop/product/category/cat_5.jpg" alt="">
                            </a>
                        </div>
                        <h3>
                          <a href="/shop">Accessories</a>
                        </h3>
                      </div>
                      <div class="category__links">
                        <ul>
                          <li><a href="/shop">Bags & Accessories</a></li>
                          <li><a href="/shop">Accessories</a></li>
                          <li><a href="/shop">Clothing</a></li>
                          <li><a href="/shop">Sports Wears</a></li>
                          <li><a href="/shop">Shoes</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="category__item border-right-2">
                      <div class="category__title">
                        <div class="category__thumb mb-25">
                            <a href="/shop">
                                <img src="assets/img/shop/product/category/cat_1.jpg" alt="">
                            </a>
                        </div>
                        <h3>
                          <a href="/shop">Electronic & Digital</a>
                        </h3>
                      </div>
                      <div class="category__links">
                        <ul>
                          <li><a href="/shop">Computer</a></li>
                          <li><a href="/shop">Samsung</a></li>
                          <li><a href="/shop">HTC</a></li>
                          <li><a href="/shop">Nokia</a></li>
                          <li><a href="/shop">cell Phone</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
           </section>
           <!-- category area end -->

           <!-- on selling product area start -->
           <section class="recomended__area pb-60">
             <div class="section__head section__head-2 d-md-flex justify-content-between mb-40">
                 <div class="section__title">
                     <h3>Recommended<span>Products</span></h3>
                 </div>
                 <div class="product__nav-tab product__nav-tab-red mr-75">
                     <ul class="nav nav-tabs" id="recomended-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="fashion-tab" data-bs-toggle="tab" data-bs-target="#fashion" type="button" role="tab" aria-controls="fashion" aria-selected="true">Fashion & Clothings</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="jewelry-tab" data-bs-toggle="tab" data-bs-target="#jewelry" type="button" role="tab" aria-controls="jewelry" aria-selected="false">Jewelry & Watches</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="beauty-tab" data-bs-toggle="tab" data-bs-target="#beauty" type="button" role="tab" aria-controls="beauty" aria-selected="false">Health & Beauty</button>
                        </li>
                      </ul>
                 </div>
             </div>
             <div class="tab-content" id="recomended">
                 <div class="tab-pane fade show active" id="fashion" role="tabpanel" aria-labelledby="fashion-tab">
                     <div class="product__slider owl-carousel">
                         <div class="product__item product__item-4 border-right-2 white-bg">
                             <div class="product__thumb p-relative">
                                 <a href="/product-details" class="w-img">
                                     <img src="assets/img/shop/product/product-7.jpg" alt="product">
                                     <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                 </a>
                                 <div class="product__offer">
                                     <span class="discount discount-2">-10%</span>
                                 </div>
                                 <div class="product__action product__action-4 p-absolute">
                                     <ul>
                                         <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                         <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                         <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                     </ul>
                                 </div>
                             </div>
                             <div class="product__content product__content-4 text-center">
                                 <h6 class="product-name">
                                     <a class="product-item-link" href="/product-details"> High Quality Glass Ultra-Thin Kitchen Scale</a>
                                 </h6>
                                 <div class="rating">
                                     <ul>
                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                     </ul>
                                 </div>
                                 <span class="new mb-5">$120.00</span>
                                 <span class="price-old mb-5"> <del>$125.00</del> </span>
                             </div>
                             <div class="product__add-btn product__add-btn-4">
                                 <button type="button" >Add to Cart</button>
                             </div>
                         </div>
                         <div class="product__item product__item-4 border-right-2 white-bg">
                             <div class="product__thumb p-relative">
                                 <a href="/product-details" class="w-img">
                                     <img src="assets/img/shop/product/product-9.jpg" alt="product">
                                     <img class="second-img" src="assets/img/shop/product/product-10.jpg" alt="product">
                                 </a>
                                 <div class="product__offer">
                                     <span class="discount discount-2">-13%</span>
                                 </div>
                                 <div class="product__action product__action-4 p-absolute">
                                     <ul>
                                         <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                         <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                         <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                     </ul>
                                 </div>
                             </div>
                             <div class="product__content product__content-4 text-center">
                                 <h6 class="product-name">
                                     <a class="product-item-link" href="/product-details"> LG 27UD58: £347.21, Ebuyer.com </a>
                                 </h6>
                                 <div class="rating">
                                     <ul>
                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                     </ul>
                                 </div>
                                 <span class="new mb-5">$90.00</span>
                                 <span class="price-old mb-5"> <del>$120.00</del> </span>
                             </div>
                             <div class="product__add-btn product__add-btn-4">
                                 <button type="button">Add to Cart</button>
                             </div>
                         </div>
                         <div class="product__item product__item-4 border-right-2 white-bg">
                             <div class="product__thumb p-relative">
                                 <a href="/product-details" class="w-img">
                                     <img src="assets/img/shop/product/product-11.jpg" alt="product">
                                     <img class="second-img" src="assets/img/shop/product/product-12.jpg" alt="product">
                                 </a>
                                 <div class="product__offer">
                                     <span class="discount discount-2">-22%</span>
                                 </div>
                                 <div class="product__action product__action-4 p-absolute">
                                     <ul>
                                         <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                         <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                         <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                     </ul>
                                 </div>
                             </div>
                             <div class="product__content product__content-4 text-center">
                                 <h6 class="product-name">
                                     <a class="product-item-link" href="/product-details"> Samsung C49J89: £875, Debenhams Plus  </a>
                                 </h6>
                                 <div class="rating">
                                     <ul>
                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                     </ul>
                                 </div>
                                 <span class="new mb-5">$80.00</span>
                                 <span class="price-old mb-5"> <del>$85.00</del> </span>
                             </div>
                             <div class="product__add-btn product__add-btn-4">
                                 <button type="button">Add to Cart</button>
                             </div>
                         </div>
                         <div class="product__item product__item-4 border-right-2 white-bg">
                             <div class="product__thumb p-relative">
                                 <a href="/product-details" class="w-img">
                                     <img src="assets/img/shop/product/product-13.jpg" alt="product">
                                     <img class="second-img" src="assets/img/shop/product/product-14.jpg" alt="product">
                                 </a>
                                 <div class="product__offer">
                                     <span class="discount discount-2">-29%</span>
                                 </div>
                                 <div class="product__action product__action-4 p-absolute">
                                     <ul>
                                         <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                         <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                         <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                     </ul>
                                 </div>
                             </div>
                             <div class="product__content product__content-4 text-center">
                                 <h6 class="product-name">
                                     <a class="product-item-link" href="/product-details"> Blink Home Security Camera System 01   </a>
                                 </h6>
                                 <div class="rating">
                                     <ul>
                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                     </ul>
                                 </div>
                                 <span class="new mb-5">$150.00</span>
                                 <span class="price-old mb-5"> <del>$175.00</del> </span>
                             </div>
                             <div class="product__add-btn product__add-btn-4">
                                 <button type="button">Add to Cart</button>
                             </div>
                         </div>
                         <div class="product__item product__item-4 border-right-2 white-bg">
                             <div class="product__thumb p-relative">
                                 <a href="/product-details" class="w-img">
                                     <img src="assets/img/shop/product/product-15.jpg" alt="product">
                                     <img class="second-img" src="assets/img/shop/product/product-16.jpg" alt="product">
                                 </a>
                                 <div class="product__offer">
                                     <span class="discount discount-2">-24%</span>
                                 </div>
                                 <div class="product__action product__action-4 p-absolute">
                                     <ul>
                                         <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                         <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                         <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                     </ul>
                                 </div>
                             </div>
                             <div class="product__content product__content-4 text-center">
                                 <h6 class="product-name">
                                     <a class="product-item-link" href="/product-details"> Blue t-shir for men (X, M, XL, XXL)   </a>
                                 </h6>
                                 <div class="rating">
                                     <ul>
                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                     </ul>
                                 </div>
                                 <span class="new mb-5">$85.00</span>
                                 <span class="price-old mb-5"> <del>$95.00</del> </span>
                             </div>
                             <div class="product__add-btn product__add-btn-4">
                                 <button type="button">Add to Cart</button>
                             </div>
                         </div>
                         <div class="product__item product__item-4 border-right-2 white-bg">
                             <div class="product__thumb p-relative" >
                                 <a href="/product-details" class="w-img">
                                     <img src="assets/img/shop/product/product-18.jpg" alt="product">
                                     <img class="second-img" src="assets/img/shop/product/product-19.jpg" alt="product">
                                 </a>
                                 <div class="product__offer">
                                     <span class="discount discount-2">-17%</span>
                                 </div>
                                 <div class="product__action product__action-4 p-absolute">
                                     <ul>
                                         <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                         <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                         <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                     </ul>
                                 </div>
                             </div>
                             <div class="product__content product__content-4 text-center">
                                 <h6 class="product-name">
                                     <a class="product-item-link" href="/product-details"> Samsung A20 Pro Ultra CPU 4/64 GB  </a>
                                 </h6>
                                 <div class="rating">
                                     <ul>
                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                     </ul>
                                 </div>
                                 <span class="new mb-5">$110.00</span>
                                 <span class="price-old mb-5"> <del>$140.00</del> </span>
                             </div>
                             <div class="product__add-btn product__add-btn-4">
                                 <button type="button">Add to Cart</button>
                             </div>
                         </div>
                         <div class="product__item product__item-4 border-right-2 white-bg">
                             <div class="product__thumb p-relative">
                                 <a href="/product-details" class="w-img">
                                     <img src="assets/img/shop/product/product-20.jpg" alt="product">
                                     <img class="second-img" src="assets/img/shop/product/product-22.jpg" alt="product">
                                 </a>
                                 <div class="product__offer">
                                     <span class="discount discount-2">-34%</span>
                                 </div>
                                 <div class="product__offer">
                                     <span class="discount discount-2">-34%</span>
                                 </div>
                                 <div class="product__action product__action-4 p-absolute">
                                     <ul>
                                         <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                         <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                         <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                     </ul>
                                 </div>
                             </div>
                             <div class="product__content product__content-4 text-center">
                                 <h6 class="product-name">
                                     <a class="product-item-link" href="/product-details"> Blink Home Security Camera System 01   </a>
                                 </h6>
                                 <div class="rating">
                                     <ul>
                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                         <li><a href="#"><i class="far fa-star"></i></a></li>
                                     </ul>
                                 </div>
                                 <span class="new mb-5">$60.00</span>
                                 <span class="price-old mb-5"> <del>$75.00</del> </span>
                             </div>
                             <div class="product__add-btn product__add-btn-4">
                                 <button type="button">Add to Cart</button>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="tab-pane fade" id="jewelry" role="tabpanel" aria-labelledby="jewelry-tab">
                    <div class="product__slider owl-carousel">
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-7.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-10%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> High Quality Glass Ultra-Thin Kitchen Scale</a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$120.00</span>
                                <span class="price-old mb-5"> <del>$125.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button" >Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-9.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-10.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-13%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> LG 27UD58: £347.21, Ebuyer.com </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$90.00</span>
                                <span class="price-old mb-5"> <del>$120.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-11.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-12.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-22%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Samsung C49J89: £875, Debenhams Plus  </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$80.00</span>
                                <span class="price-old mb-5"> <del>$85.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-13.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-14.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-29%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Blink Home Security Camera System 01   </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$150.00</span>
                                <span class="price-old mb-5"> <del>$175.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-15.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-16.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-24%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Blue t-shir for men (X, M, XL, XXL)   </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$85.00</span>
                                <span class="price-old mb-5"> <del>$95.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative" >
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-18.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-19.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-17%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Samsung A20 Pro Ultra CPU 4/64 GB  </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$110.00</span>
                                <span class="price-old mb-5"> <del>$140.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-20.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-22.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-34%</span>
                                </div>
                                <div class="product__offer">
                                    <span class="discount discount-2">-34%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Blink Home Security Camera System 01   </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$60.00</span>
                                <span class="price-old mb-5"> <del>$75.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                 </div>
                 <div class="tab-pane fade" id="beauty" role="tabpanel" aria-labelledby="beauty-tab">
                    <div class="product__slider owl-carousel">
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-7.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-10%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> High Quality Glass Ultra-Thin Kitchen Scale</a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$120.00</span>
                                <span class="price-old mb-5"> <del>$125.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button" >Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-9.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-10.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-13%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> LG 27UD58: £347.21, Ebuyer.com </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$90.00</span>
                                <span class="price-old mb-5"> <del>$120.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-11.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-12.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-22%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Samsung C49J89: £875, Debenhams Plus  </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$80.00</span>
                                <span class="price-old mb-5"> <del>$85.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-13.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-14.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-29%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Blink Home Security Camera System 01   </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$150.00</span>
                                <span class="price-old mb-5"> <del>$175.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-15.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-16.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-24%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Blue t-shir for men (X, M, XL, XXL)   </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$85.00</span>
                                <span class="price-old mb-5"> <del>$95.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative" >
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-18.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-19.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-17%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Samsung A20 Pro Ultra CPU 4/64 GB  </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$110.00</span>
                                <span class="price-old mb-5"> <del>$140.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                        <div class="product__item product__item-4 border-right-2 white-bg">
                            <div class="product__thumb p-relative">
                                <a href="/product-details" class="w-img">
                                    <img src="assets/img/shop/product/product-20.jpg" alt="product">
                                    <img class="second-img" src="assets/img/shop/product/product-22.jpg" alt="product">
                                </a>
                                <div class="product__offer">
                                    <span class="discount discount-2">-34%</span>
                                </div>
                                <div class="product__offer">
                                    <span class="discount discount-2">-34%</span>
                                </div>
                                <div class="product__action product__action-4 p-absolute">
                                    <ul>
                                        <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a></li>
                                        <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__content product__content-4 text-center">
                                <h6 class="product-name">
                                    <a class="product-item-link" href="/product-details"> Blink Home Security Camera System 01   </a>
                                </h6>
                                <div class="rating">
                                    <ul>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <span class="new mb-5">$60.00</span>
                                <span class="price-old mb-5"> <del>$75.00</del> </span>
                            </div>
                            <div class="product__add-btn product__add-btn-4">
                                <button type="button">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                 </div>
             </div>
           </section>
           <!-- on selling product area end -->
          </div>
        </div>
      </div>
    </section>
    <!-- home wrapper end -->

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

    <!-- shop modal start -->
    <div class="modal fade" id="productModalId" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered product__modal" role="document">
            <div class="modal-content">
                <div class="product__modal-wrapper p-relative">
                    <div class="product__modal-close p-absolute">
                        <button data-bs-dismiss="modal"><i class="fal fa-times"></i></button>
                    </div>
                    <div class="product__modal-inner">
                        <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="product__modal-box">
                                <div class="tab-content" id="modalTabContent">
                                    <div class="tab-pane fade show active" id="nav1" role="tabpanel" aria-labelledby="nav1-tab">
                                        <div class="product__modal-img w-img">
                                            <img src="assets/img/shop/product/quick-view/quick-view-1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav2" role="tabpanel" aria-labelledby="nav2-tab">
                                        <div class="product__modal-img w-img">
                                            <img src="assets/img/shop/product/quick-view/quick-view-2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav3" role="tabpanel" aria-labelledby="nav3-tab">
                                        <div class="product__modal-img w-img">
                                            <img src="assets/img/shop/product/quick-view/quick-view-3.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav4" role="tabpanel" aria-labelledby="nav4-tab">
                                        <div class="product__modal-img w-img">
                                            <img src="assets/img/shop/product/quick-view/quick-view-4.jpg" alt="">
                                        </div>
                                    </div>
                                  </div>
                                <ul class="nav nav-tabs" id="modalTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link active" id="nav1-tab" data-bs-toggle="tab" data-bs-target="#nav1" type="button" role="tab" aria-controls="nav1" aria-selected="true">
                                            <img src="assets/img/shop/product/quick-view/nav/quick-nav-1.jpg" alt="">
                                      </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link" id="nav2-tab" data-bs-toggle="tab" data-bs-target="#nav2" type="button" role="tab" aria-controls="nav2" aria-selected="false">
                                        <img src="assets/img/shop/product/quick-view/nav/quick-nav-2.jpg" alt="">
                                      </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link" id="nav3-tab" data-bs-toggle="tab" data-bs-target="#nav3" type="button" role="tab" aria-controls="nav3" aria-selected="false">
                                        <img src="assets/img/shop/product/quick-view/nav/quick-nav-3.jpg" alt="">
                                      </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link" id="nav4-tab" data-bs-toggle="tab" data-bs-target="#nav4" type="button" role="tab" aria-controls="nav4" aria-selected="false">
                                        <img src="assets/img/shop/product/quick-view/nav/quick-nav-4.jpg" alt="">
                                      </button>
                                    </li>
                                  </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="product__modal-content">
                                <h4><a href="/product-details">Samsung C49J89: £875, Debenhams Plus</a></h4>
                                <div class="product__modal-des mb-40">
                                    <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt </p>
                                </div>
                                <div class="product__stock">
                                    <span>Availability :</span>
                                    <span>In Stock</span>
                                </div>
                                <div class="product__stock sku mb-30">
                                    <span>SKU:</span>
                                    <span>Samsung C49J89: £875, Debenhams Plus</span>
                                </div>
                                <div class="product__review d-sm-flex">
                                    <div class="rating rating__shop mb-15 mr-35">
                                    <ul>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                        <li><a href="#"><i class="fal fa-star"></i></a></li>
                                    </ul>
                                    </div>
                                    <div class="product__add-review mb-15">
                                    <span><a href="#">1 Review</a></span>
                                    <span><a href="#">Add Review</a></span>
                                    </div>
                                </div>
                                <div class="product__price">
                                    <span>$560.00</span>
                                </div>
                                <div class="product__modal-form mb-30">
                                    <form action="#">
                                    <div class="pro-quan-area d-lg-flex align-items-center">
                                        <div class="product-quantity mr-20 mb-25">
                                            <div class="cart-plus-minus p-relative"><input type="text" value="1" /></div>
                                        </div>
                                        <div class="pro-cart-btn mb-25">
                                            <button class="t-y-btn" type="submit">Add to cart</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                                <div class="product__modal-links">
                                    <ul>
                                    <li><a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a></li>
                                    <li><a href="#" title="Compare"><i class="far fa-sliders-h"></i></a></li>
                                    <li><a href="#" title="Print"><i class="fal fa-print"></i></a></li>
                                    <li><a href="#" title="Print"><i class="fal fa-share-alt"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop modal end -->
</main>

@endsection