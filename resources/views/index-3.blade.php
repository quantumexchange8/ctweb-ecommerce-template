@extends('Layouts.master')
@section('contents')

    <main>
        <!-- slider area satrt -->
        <section class="slider__area pt-30 grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 custom-col-2 d-none d-xl-block">
                        <div class="cat__menu-wrapper">
                            <div class="cat-toggle">
                                <button type="button" class="cat-toggle-btn"><i class="fas fa-bars"></i> Shop by department</button>
                                <div class="cat__menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li>
                                                <a href="/product">All Categories <i class="far fa-angle-down"></i></a>
                                                <ul class="mega-menu">
                                                    <li><a href="/product">Shop Pages</a>
                                                        <ul class="mega-item">
                                                            <li><a href="/product-details">Standard SHop Page</a></li>
                                                            <li><a href="/product-details">Shop Right Sidebar</a></li>
                                                            <li><a href="/product-details">Shop Left Sidebar</a></li>
                                                            <li><a href="/product-details">Shop 3 Column</a></li>
                                                            <li><a href="/product-details">Shop 4 Column</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="/product">Product Pages</a>
                                                        <ul class="mega-item">
                                                            <li><a href="/product-details">Product Details</a></li>
                                                            <li><a href="/product-details">Product V2</a></li>
                                                            <li><a href="/product-details">Product V3</a></li>
                                                            <li><a href="/product-details">Varriable Product</a></li>
                                                            <li><a href="/product-details">External Product</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="/product">Other Pages</a>
                                                        <ul class="mega-item">
                                                            <li><a href="/product-details">wishlist</a></li>
                                                            <li><a href="/product-details">Shopping Cart</a></li>
                                                            <li><a href="/product-details">Checkout</a></li>
                                                            <li><a href="/product-details">Login</a></li>
                                                            <li><a href="/product-details">Register</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="/product">Phone & Tablets</a>
                                                        <ul class="mega-item">
                                                            <li><a href="/product-details">Catagory 1</a></li>
                                                            <li><a href="/product-details">Catagory 2</a></li>
                                                            <li><a href="/product-details">Catagory 3</a></li>
                                                            <li><a href="/product-details">Catagory 4</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="/product">Phone & Tablets</a>
                                                        <ul class="mega-item">
                                                            <li><a href="/product-details">Catagory 1</a></li>
                                                            <li><a href="/product-details">Catagory 2</a></li>
                                                            <li><a href="/product-details">Catagory 3</a></li>
                                                            <li><a href="/product-details">Catagory 4</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="/product">Best Seller Products
                                                    <span class="cat-label">hot!</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/product">Top 10 Offers
                                                    <span class="cat-label green">new!</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/product">New Arrivals <i class="far fa-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="/product">Home Appliances</a></li>
                                                    <li><a href="/product">Technology</a>
                                                        <ul class="submenu">
                                                            <li><a href="/product">Storage Devices</a></li>
                                                            <li><a href="/product">Monitors</a></li>
                                                            <li><a href="/product">Laptops</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="/product">Office Equipments</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/product">Phones & Tablets</a></li>
                                            <li><a href="/product">Electronics & Digital</a></li>
                                            <li class="d-laptop-none"><a href="/product">Fashion & Clothings</a></li>
                                            <li class="d-laptop-none"><a href="/product">Jewelry & Watches</a></li>
                                            <li><a href="/product">Health & Beauty</a></li>
                                            <li><a href="/product">TV & Audio</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-10 custom-col-10 col-lg-12">
                        <div class="slider__inner slider-active">
                            <div class="single-slider w-img">
                                <img src="assets/img/slider/03/slider-01.jpg" alt="slider">
                            </div>
                            <div class="single-slider w-img">
                                <img src="assets/img/slider/03/slider-02.jpg" alt="slider">
                            </div>
                            <div class="single-slider w-img">
                                <img src="assets/img/slider/03/slider-03.jpg" alt="slider">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider area end -->

        <!-- features area start -->
        <section class="features__area grey-bg-2 pt-30 pb-20 pl-10 pr-10">
            <div class="container">
                <div class="row row-cols-xxl-5 row-cols-xl-5 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 gx-0">
                    <div class="col">
                        <div class="features__item d-flex white-bg">
                            <div class="features__icon mr-15">
                                <i class="fal fa-rocket-launch"></i>
                            </div>
                            <div class="features__content">
                                <h6>Free Shipping</h6>
                                <p>Free Shipping On All Order</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="features__item d-flex white-bg">
                            <div class="features__icon mr-15">
                                <i class="fal fa-sync"></i>
                            </div>
                            <div class="features__content">
                                <h6>Money Guarantee</h6>
                                <p>30 Day Money Back Guarantee</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="features__item d-flex white-bg">
                            <div class="features__icon mr-15">
                                <i class="fal fa-user-headset"></i>
                            </div>
                            <div class="features__content">
                                <h6>Online Support 24/7</h6>
                                <p>Technical Support Stand By</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="features__item d-flex white-bg">
                            <div class="features__icon mr-15">
                                <i class="fal fa-thumbs-up"></i>
                            </div>
                            <div class="features__content">
                                <h6>Secure Payment</h6>
                                <p>All Payment Method are accepted</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="features__item features__item-last d-flex white-bg">
                            <div class="features__icon mr-15">
                                <i class="fal fa-badge-dollar"></i>
                            </div>
                            <div class="features__content">
                                <h6>Member Discount</h6>
                                <p>Upto 40% Discount All Products</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- features area end -->

        <!-- banner area start -->
        <section class="banner__area pt-20 grey-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="banner__item w-img mb-30">
                            <a href="/product-details"><img src="assets/img/banner/banner-1.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="banner__item mb-30 w-img">
                            <a href="/product-details"><img src="assets/img/banner/banner-2.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="banner__item mb-30 w-img">
                            <a href="/product-details"><img src="assets/img/banner/banner-3.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner area end -->

        <!-- deal off the day area start -->
        <section class="deal__area pb-45 pt-25 grey-bg ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="section__head d-md-flex justify-content-between mb-40">
                            <div class="section__title">
                                <h3>Deals<span>Of The Day</span></h3>
                            </div>
                        </div>
                        <div class="product__deal-3 t-nav owl-carousel">
                            <div class="product__deal-item">
                                <div class="product__item white-bg product__sale mb-30">
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
                                            <div class="product__content product__content-2">
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__deal-item">
                                <div class="product__item white-bg  product__sale mb-30">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
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
                                            <div class="product__content product__content-2">
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="section__head d-md-flex justify-content-between mb-40">
                            <div class="section__title">
                                <h3>Electronic & Digital<span>Products</span></h3>
                            </div>
                        </div>
                        <div class="product__electronic-3 t-nav owl-carousel">
                            <div class="product__electronic-item">
                                <div class="product__item white-bg">
                                    <div class="product__thumb p-relative">
                                        <a href="/product-details" class="w-img">
                                            <img src="assets/img/shop/product/product-1.jpg" alt="product" />
                                            <img class="second-img" src="assets/img/shop/product/product-2.jpg" alt="product" />
                                        </a>
                                        <div class="product__offer">
                                            <span class="discount">-34%</span>
                                        </div>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Compare"><i class="far fa-sliders-h"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="/product-details"> High Quality Glass Ultra-Thin Kitchen Scale</a>
                                        </h6>
                                        <div class="rating">
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
                                        <span class="price">$500.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="product__electronic-item">
                                <div class="product__item white-bg">
                                    <div class="product__thumb p-relative">
                                        <a href="/product-details" class="w-img">
                                            <img src="assets/img/shop/product/product-3.jpg" alt="product" />
                                            <img class="second-img" src="assets/img/shop/product/product-4.jpg" alt="product" />
                                        </a>
                                        <div class="product__offer">
                                            <span class="discount">-34%</span>
                                        </div>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Compare"><i class="far fa-sliders-h"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="/product-details"> LG 27UD58: £347.21, Ebuyer.com </a>
                                        </h6>
                                        <div class="rating">
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
                                        <span class="price">$560.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="product__electronic-item">
                                <div class="product__item white-bg">
                                    <div class="product__thumb p-relative">
                                        <a href="/product-details" class="w-img">
                                            <img src="assets/img/shop/product/product-5.jpg" alt="product" />
                                            <img class="second-img" src="assets/img/shop/product/product-6.jpg" alt="product" />
                                        </a>
                                        <div class="product__offer">
                                            <span class="discount">-34%</span>
                                        </div>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Compare"><i class="far fa-sliders-h"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="/product-details"> Samsung C49J89: £875, Debenhams Plus </a>
                                        </h6>
                                        <div class="rating">
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
                                        <span class="price">$450.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <div class="product__electronic-item">
                                <div class="product__item white-bg">
                                    <div class="product__thumb p-relative">
                                        <a href="/product-details" class="w-img">
                                            <img src="assets/img/shop/product/product-7.jpg" alt="product" />
                                            <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product" />
                                        </a>
                                        <div class="product__offer">
                                            <span class="discount">-34%</span>
                                        </div>
                                        <div class="product__action p-absolute">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Add to Wishlist"><i class="fal fa-heart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#productModalId"><i class="fal fa-search"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Compare"><i class="far fa-sliders-h"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product__content text-center">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="/product-details"> Blink Home Security Camera System 01 </a>
                                        </h6>
                                        <div class="rating">
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
                                        <span class="price">$720.00</span>
                                    </div>
                                    <div class="product__add-btn">
                                        <button type="button">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- deal off the day area end -->

        <!-- onsale product area start -->
        <section class="onsell__area pb-20 grey-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__head d-flex justify-content-between mb-40">
                            <div class="section__title">
                                <h3>On Sale<span>Products</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="sale__slider-3 owl-carousel t-nav">
                            <div class="product__item-wrapper">
                                <div class="product__item white-bg d-flex mb-20">
                                    <div class="product__thumb product__thumb-sale p-relative">
                                        <a href="/product-details" class="w-img">
                                            <img src="assets/img/shop/product/product-12.jpg" alt="product">
                                            <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                        </a>
                                    </div>
                                    <div class="product__content">
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
                                <div class="product__item white-bg d-flex mb-20">
                                    <div class="product__thumb product__thumb-sale p-relative">
                                        <a href="/product-details" class="w-img">
                                            <img src="assets/img/shop/product/product-14.jpg" alt="product">
                                            <img class="second-img" src="assets/img/shop/product/product-1.jpg" alt="product">
                                        </a>
                                    </div>
                                    <div class="product__content">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="/product-details">Portable Watch Phone with Blood Pressure Monitor OLED</a>
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
                                        <span class="new new-2">$90.00</span>
                                        <span class="price-old"> <del>$100.00</del> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product__item-wrapper">
                                <div class="product__item white-bg d-flex mb-20">
                                    <div class="product__thumb product__thumb-sale p-relative">
                                        <a href="/product-details" class="w-img">
                                            <img src="assets/img/shop/product/product-13.jpg" alt="product">
                                            <img class="second-img" src="assets/img/shop/product/product-7.jpg" alt="product">
                                        </a>
                                    </div>
                                    <div class="product__content">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="/product-details">New Model Watch Mobile with Bpm Function 1.14" IPS LCD IP68</a>
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
                                        <span class="new new-2">$150.00</span>
                                        <span class="price-old"> <del>$200.00</del> </span>
                                    </div>
                                </div>
                                <div class="product__item white-bg d-flex mb-20">
                                    <div class="product__thumb product__thumb-sale p-relative">
                                        <a href="/product-details" class="w-img">
                                            <img src="assets/img/shop/product/product-15.jpg" alt="product">
                                            <img class="second-img" src="assets/img/shop/product/product-24.jpg" alt="product">
                                        </a>
                                    </div>
                                    <div class="product__content">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="/product-details">Original Mobile Android Dual SIM Smart Phone G3 </a>
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
                                        <span class="new new-2">$90.00</span>
                                        <span class="price-old"> <del>$100.00</del> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product__item-wrapper">
                                <div class="product__item white-bg d-flex mb-20">
                                    <div class="product__thumb product__thumb-sale p-relative">
                                        <a href="/product-details" class="w-img">
                                            <img src="assets/img/shop/product/product-16.jpg" alt="product">
                                            <img class="second-img" src="assets/img/shop/product/product-18.jpg" alt="product">
                                        </a>
                                    </div>
                                    <div class="product__content">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="/product-details">TF Camera Clock Support Bt 4.0 for Ios Android Round Watch </a>
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
                                        <span class="new new-2">$40.00</span>
                                        <span class="price-old"> <del>$100.00</del> </span>
                                    </div>
                                </div>
                                <div class="product__item white-bg d-flex mb-20">
                                    <div class="product__thumb product__thumb-sale p-relative">
                                        <a href="/product-details" class="w-img">
                                            <img src="assets/img/shop/product/product-22.jpg" alt="product">
                                            <img class="second-img" src="assets/img/shop/product/product-1.jpg" alt="product">
                                        </a>
                                    </div>
                                    <div class="product__content">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="/product-details"> 24 Inch LCD Monitor with Touch Screen for Computer Display </a>
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
                                        <span class="new new-2">$90.00</span>
                                        <span class="price-old"> <del>$100.00</del> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product__item-wrapper">
                                <div class="product__item white-bg d-flex mb-20">
                                    <div class="product__thumb product__thumb-sale p-relative">
                                        <a href="/product-details" class="w-img">
                                            <img src="assets/img/shop/product/product-2.jpg" alt="product">
                                            <img class="second-img" src="assets/img/shop/product/product-4.jpg" alt="product">
                                        </a>
                                    </div>
                                    <div class="product__content">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="/product-details">Capacitive Touch Screen 22 Inch Advertising LCD Display Monitor </a>
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
                                        <span class="new new-2">$190.00</span>
                                        <span class="price-old"> <del>$200.00</del> </span>
                                    </div>
                                </div>
                                <div class="product__item white-bg d-flex mb-20">
                                    <div class="product__thumb product__thumb-sale p-relative">
                                        <a href="/product-details" class="w-img">
                                            <img src="assets/img/shop/product/product-20.jpg" alt="product">
                                            <img class="second-img" src="assets/img/shop/product/product-11.jpg" alt="product">
                                        </a>
                                    </div>
                                    <div class="product__content">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="/product-details"> Original Smart Phone for Original for iPhone 6s </a>
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
                                        <span class="new new-2">$250.00</span>
                                        <span class="price-old"> <del>$300.00</del> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product__item-wrapper">
                                <div class="product__item white-bg d-flex mb-20">
                                    <div class="product__thumb product__thumb-sale p-relative">
                                        <a href="/product-details" class="w-img">
                                            <img src="assets/img/shop/product/product-13.jpg" alt="product">
                                            <img class="second-img" src="assets/img/shop/product/product-7.jpg" alt="product">
                                        </a>
                                    </div>
                                    <div class="product__content">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="/product-details">New Model Watch Mobile with Bpm Function 1.14" IPS LCD IP68</a>
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
                                        <span class="new new-2">$150.00</span>
                                        <span class="price-old"> <del>$200.00</del> </span>
                                    </div>
                                </div>
                                <div class="product__item white-bg d-flex mb-20">
                                    <div class="product__thumb product__thumb-sale p-relative">
                                        <a href="/product-details" class="w-img">
                                            <img src="assets/img/shop/product/product-15.jpg" alt="product">
                                            <img class="second-img" src="assets/img/shop/product/product-24.jpg" alt="product">
                                        </a>
                                    </div>
                                    <div class="product__content">
                                        <h6 class="product-name">
                                            <a class="product-item-link" href="/product-details">Original Mobile Android Dual SIM Smart Phone G3 </a>
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
                                        <span class="new new-2">$90.00</span>
                                        <span class="price-old"> <del>$100.00</del> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- onsale product area end -->

        <!-- banner area start -->
        <section class="banner__area pt-20 pb-30 grey-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="banner__item mb-30 w-img">
                            <a href="/product-details"><img src="assets/img/banner/banner-4.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="banner__item mb-30 w-img">
                            <a href="/product-details"><img src="assets/img/banner/banner-5.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner area end -->

        <!-- desktop computer area start -->
        <section class="product__desktop grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__head d-lg-flex justify-content-between mb-40">
                            <div class="section__title">
                                <h3>Computer & Desktop<span>Products</span></h3>
                            </div>
                            <div class="product__nav-tab product__nav-tab-3 mr-75">
                                <ul class="nav nav-tabs" id="desktipTO" role="tablist">
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="deskto-tab" data-bs-toggle="tab" data-bs-target="#deskto" type="button" role="tab" aria-controls="deskto" aria-selected="true">Desktop & Computer</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="tv-tab" data-bs-toggle="tab" data-bs-target="#tv" type="button" role="tab" aria-controls="tv" aria-selected="false">TV & Audios</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="laptop-tab" data-bs-toggle="tab" data-bs-target="#laptop" type="button" role="tab" aria-controls="laptop" aria-selected="false">Laptop Accessories</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="lenovo-tab" data-bs-toggle="tab" data-bs-target="#lenovo" type="button" role="tab" aria-controls="lenovo" aria-selected="false">Lenovo</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-2 custom-col-2-2 ">
                        <div class="banner__area">
                            <div class="banner__item mb-20 w-img">
                                <a href="/product-details"><img src="assets/img/banner/banner-sm-1.jpg" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-10 custom-col-10-2">
                        <div class="tab-content" id="desktop-content">
                            <div class="tab-pane fade show active" id="deskto" role="tabpanel" aria-labelledby="deskto-tab">
                                <div class="product__desktop-slider-3 t-nav owl-carousel">
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-12.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
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
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-14.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-1.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Portable Watch Phone with Blood Pressure Monitor OLED</a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-1.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-5.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Original Smart Phone for Original for iPhone 6s </a>
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
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-11.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-17.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Capacitive Touch Screen 22 Inch LCD Display Monitor</a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-15.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-14.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">High Quality Glass Ultra-Thin Kitchen Scale</a>
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
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-16.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-13.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Samsung C49J89: £875, Debenhams Plus</a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-14.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-15.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
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
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-16.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-17.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Portable Watch Phone with Blood Pressure Monitor OLED</a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tv" role="tabpanel" aria-labelledby="tv-tab">
                                <div class="product__desktop-slider-3 t-nav owl-carousel">
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-12.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
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
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-14.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-1.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Portable Watch Phone with Blood Pressure Monitor OLED</a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-1.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-5.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Original Smart Phone for Original for iPhone 6s </a>
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
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-11.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-17.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Capacitive Touch Screen 22 Inch LCD Display Monitor</a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-15.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-14.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">High Quality Glass Ultra-Thin Kitchen Scale</a>
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
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-16.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-13.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Samsung C49J89: £875, Debenhams Plus</a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-14.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-15.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
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
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-16.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-17.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Portable Watch Phone with Blood Pressure Monitor OLED</a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="laptop" role="tabpanel" aria-labelledby="laptop-tab">
                                <div class="product__desktop-slider-3 t-nav owl-carousel">
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-12.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
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
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-14.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-1.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Portable Watch Phone with Blood Pressure Monitor OLED</a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-1.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-5.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Original Smart Phone for Original for iPhone 6s </a>
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
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-11.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-17.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Capacitive Touch Screen 22 Inch LCD Display Monitor</a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-15.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-14.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">High Quality Glass Ultra-Thin Kitchen Scale</a>
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
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-16.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-13.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Samsung C49J89: £875, Debenhams Plus</a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-14.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-15.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
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
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-16.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-17.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Portable Watch Phone with Blood Pressure Monitor OLED</a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="lenovo" role="tabpanel" aria-labelledby="lenovo-tab">
                                <div class="product__desktop-slider-3 t-nav owl-carousel">
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-12.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
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
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-14.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-1.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Portable Watch Phone with Blood Pressure Monitor OLED</a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-1.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-5.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Original Smart Phone for Original for iPhone 6s </a>
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
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-11.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-17.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Capacitive Touch Screen 22 Inch LCD Display Monitor</a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-15.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-14.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">High Quality Glass Ultra-Thin Kitchen Scale</a>
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
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-16.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-13.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Samsung C49J89: £875, Debenhams Plus</a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-14.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-15.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
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
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-16.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-17.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Portable Watch Phone with Blood Pressure Monitor OLED</a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
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
        <!-- destop computer area end -->

        <!-- desktop computer area start -->
        <section class="product__phone pt-30 grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__head d-lg-flex justify-content-between mb-40">
                            <div class="section__title">
                                <h3>Phones & Tablets<span>Products</span></h3>
                            </div>
                            <div class="product__nav-tab product__nav-tab-3 mr-75">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home Appliances</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="storage-tab" data-bs-toggle="tab" data-bs-target="#storage" type="button" role="tab" aria-controls="storage" aria-selected="false">Storage Devices</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="electrical-tab" data-bs-toggle="tab" data-bs-target="#electrical" type="button" role="tab" aria-controls="electrical" aria-selected="false">Electrical Kettle</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="mobile-tab" data-bs-toggle="tab" data-bs-target="#mobile" type="button" role="tab" aria-controls="mobile" aria-selected="false">Mobile Phones</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-10 custom-col-10-2">
                        <div class="tab-content" id="phone-content">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="product__phone-slider-3 t-nav owl-carousel">
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-2.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Verizon LG K8V 8GB 4G LTE 5" Prepaid Smartphone </a>
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
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-4.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-1.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Apple iPhone XS (64GB) - Space Gray - [Locked key] </a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-5.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-6.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details"> Casio G'zOne Commando C771 Verizon MIL-SPEC… </a>
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
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-7.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Samsung Galaxy S6 Edge+, Gold 32GB (Verizon Wire… </a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-9.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-10.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">LG 27UD58: £347.21, Ebuyer.com </a>
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
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-11.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-12.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Dell U2717D: £434.99, Scan.co.uk </a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-5.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-6.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details"> Casio G'zOne Commando C771 Verizon MIL-SPEC… </a>
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
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-7.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Samsung Galaxy S6 Edge+, Gold 32GB (Verizon Wire… </a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="storage" role="tabpanel" aria-labelledby="storage-tab">
                                <div class="product__phone-slider-3 t-nav owl-carousel">
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-2.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Verizon LG K8V 8GB 4G LTE 5" Prepaid Smartphone </a>
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
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-4.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-1.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Apple iPhone XS (64GB) - Space Gray - [Locked key] </a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-5.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-6.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details"> Casio G'zOne Commando C771 Verizon MIL-SPEC… </a>
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
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-7.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Samsung Galaxy S6 Edge+, Gold 32GB (Verizon Wire… </a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-9.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-10.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">LG 27UD58: £347.21, Ebuyer.com </a>
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
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-11.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-12.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Dell U2717D: £434.99, Scan.co.uk </a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-5.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-6.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details"> Casio G'zOne Commando C771 Verizon MIL-SPEC… </a>
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
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-7.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Samsung Galaxy S6 Edge+, Gold 32GB (Verizon Wire… </a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="electrical" role="tabpanel" aria-labelledby="electrical-tab">
                                <div class="product__phone-slider-3 t-nav owl-carousel">
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-2.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Verizon LG K8V 8GB 4G LTE 5" Prepaid Smartphone </a>
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
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-4.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-1.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Apple iPhone XS (64GB) - Space Gray - [Locked key] </a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-5.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-6.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details"> Casio G'zOne Commando C771 Verizon MIL-SPEC… </a>
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
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-7.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Samsung Galaxy S6 Edge+, Gold 32GB (Verizon Wire… </a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-9.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-10.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">LG 27UD58: £347.21, Ebuyer.com </a>
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
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-11.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-12.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Dell U2717D: £434.99, Scan.co.uk </a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-5.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-6.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details"> Casio G'zOne Commando C771 Verizon MIL-SPEC… </a>
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
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-7.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Samsung Galaxy S6 Edge+, Gold 32GB (Verizon Wire… </a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="mobile" role="tabpanel" aria-labelledby="mobile-tab">
                                <div class="product__phone-slider-3 t-nav owl-carousel">
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-2.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Verizon LG K8V 8GB 4G LTE 5" Prepaid Smartphone </a>
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
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-4.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-1.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Apple iPhone XS (64GB) - Space Gray - [Locked key] </a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-5.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-6.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details"> Casio G'zOne Commando C771 Verizon MIL-SPEC… </a>
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
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-7.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Samsung Galaxy S6 Edge+, Gold 32GB (Verizon Wire… </a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-9.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-10.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">LG 27UD58: £347.21, Ebuyer.com </a>
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
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-11.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-12.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Dell U2717D: £434.99, Scan.co.uk </a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-5.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-6.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details"> Casio G'zOne Commando C771 Verizon MIL-SPEC… </a>
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
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-7.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Samsung Galaxy S6 Edge+, Gold 32GB (Verizon Wire… </a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 custom-col-2-2">
                        <div class="banner__area">
                            <div class="banner__item mb-20 w-img">
                                <a href="/product-details"><img src="assets/img/banner/banner-sm-2.jpg" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- destop computer area end -->

        <!-- desktop computer area start -->
        <section class="product__desktop pt-30 pb-40 grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__head d-lg-flex justify-content-between mb-40">
                            <div class="section__title">
                                <h3>Computer & Desktop<span>Products</span></h3>
                            </div>
                            <div class="product__nav-tab product__nav-tab-3 mr-75">
                                <ul class="nav nav-tabs" id="desktop-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="headphone-tab" data-bs-toggle="tab" data-bs-target="#headphone" type="button" role="tab" aria-controls="headphone" aria-selected="true">Headphone</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="mouse-tab" data-bs-toggle="tab" data-bs-target="#mouse" type="button" role="tab" aria-controls="mouse" aria-selected="false">Mouse</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="battery-tab" data-bs-toggle="tab" data-bs-target="#battery" type="button" role="tab" aria-controls="battery" aria-selected="false">Battery Backup</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-2 custom-col-2-2">
                        <div class="banner__area">
                            <div class="banner__item mb-20 w-img">
                                <a href="/product-details"><img src="assets/img/banner/banner-sm-3.jpg" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-10 custom-col-10-2">
                        <div class="tab-content" id="beauty-content">
                            <div class="tab-pane fade show active" id="headphone" role="tabpanel" aria-labelledby="headphone-tab">
                                <div class="product__beauty-slider-3 t-nav owl-carousel">
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-23.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
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
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-21.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-1.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Portable Watch Phone with Blood Pressure Monitor OLED</a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-20.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-7.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">New Model Watch Mobile with Bpm Function 1.14" IPS LCD IP68</a>
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
                                                <span class="new new-2">$150.00</span>
                                                <span class="price-old"> <del>$200.00</del> </span>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-11.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-24.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Original Mobile Android Dual SIM Smart Phone G3 </a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-5.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-18.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">TF Camera Clock Support Bt 4.0 for Ios Android Round Watch </a>
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
                                                <span class="new new-2">$40.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-3.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-1.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details"> 24 Inch LCD Monitor with Touch Screen for Computer Display </a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-6.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-4.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Capacitive Touch Screen 22 Inch Advertising LCD Display Monitor </a>
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
                                                <span class="new new-2">$190.00</span>
                                                <span class="price-old"> <del>$200.00</del> </span>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-20.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-11.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details"> Original Smart Phone for Original for iPhone 6s </a>
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
                                                <span class="new new-2">$250.00</span>
                                                <span class="price-old"> <del>$300.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-13.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-7.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">New Model Watch Mobile with Bpm Function 1.14" IPS LCD IP68</a>
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
                                                <span class="new new-2">$150.00</span>
                                                <span class="price-old"> <del>$200.00</del> </span>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-15.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-24.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Original Mobile Android Dual SIM Smart Phone G3 </a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="mouse" role="tabpanel" aria-labelledby="mouse-tab">
                                <div class="product__beauty-slider-3 t-nav owl-carousel">
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-23.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
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
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-21.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-1.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Portable Watch Phone with Blood Pressure Monitor OLED</a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-20.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-7.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">New Model Watch Mobile with Bpm Function 1.14" IPS LCD IP68</a>
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
                                                <span class="new new-2">$150.00</span>
                                                <span class="price-old"> <del>$200.00</del> </span>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-11.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-24.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Original Mobile Android Dual SIM Smart Phone G3 </a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-5.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-18.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">TF Camera Clock Support Bt 4.0 for Ios Android Round Watch </a>
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
                                                <span class="new new-2">$40.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-3.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-1.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details"> 24 Inch LCD Monitor with Touch Screen for Computer Display </a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-6.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-4.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Capacitive Touch Screen 22 Inch Advertising LCD Display Monitor </a>
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
                                                <span class="new new-2">$190.00</span>
                                                <span class="price-old"> <del>$200.00</del> </span>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-20.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-11.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details"> Original Smart Phone for Original for iPhone 6s </a>
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
                                                <span class="new new-2">$250.00</span>
                                                <span class="price-old"> <del>$300.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-13.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-7.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">New Model Watch Mobile with Bpm Function 1.14" IPS LCD IP68</a>
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
                                                <span class="new new-2">$150.00</span>
                                                <span class="price-old"> <del>$200.00</del> </span>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-15.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-24.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Original Mobile Android Dual SIM Smart Phone G3 </a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="battery" role="tabpanel" aria-labelledby="battery-tab">
                                <div class="product__beauty-slider-3 t-nav owl-carousel">
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-23.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-8.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
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
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-21.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-1.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Portable Watch Phone with Blood Pressure Monitor OLED</a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-20.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-7.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">New Model Watch Mobile with Bpm Function 1.14" IPS LCD IP68</a>
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
                                                <span class="new new-2">$150.00</span>
                                                <span class="price-old"> <del>$200.00</del> </span>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-11.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-24.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Original Mobile Android Dual SIM Smart Phone G3 </a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-5.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-18.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">TF Camera Clock Support Bt 4.0 for Ios Android Round Watch </a>
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
                                                <span class="new new-2">$40.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-3.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-1.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details"> 24 Inch LCD Monitor with Touch Screen for Computer Display </a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-6.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-4.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Capacitive Touch Screen 22 Inch Advertising LCD Display Monitor </a>
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
                                                <span class="new new-2">$190.00</span>
                                                <span class="price-old"> <del>$200.00</del> </span>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-20.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-11.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details"> Original Smart Phone for Original for iPhone 6s </a>
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
                                                <span class="new new-2">$250.00</span>
                                                <span class="price-old"> <del>$300.00</del> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__item-wrapper">
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-13.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-7.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">New Model Watch Mobile with Bpm Function 1.14" IPS LCD IP68</a>
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
                                                <span class="new new-2">$150.00</span>
                                                <span class="price-old"> <del>$200.00</del> </span>
                                            </div>
                                        </div>
                                        <div class="product__item white-bg d-flex mb-20">
                                            <div class="product__thumb product__thumb-sale p-relative">
                                                <a href="/product-details" class="w-img">
                                                    <img src="assets/img/shop/product/product-15.jpg" alt="product">
                                                    <img class="second-img" src="assets/img/shop/product/product-24.jpg" alt="product">
                                                </a>
                                            </div>
                                            <div class="product__content">
                                                <h6 class="product-name">
                                                    <a class="product-item-link" href="/product-details">Original Mobile Android Dual SIM Smart Phone G3 </a>
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
                                                <span class="new new-2">$90.00</span>
                                                <span class="price-old"> <del>$100.00</del> </span>
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
        <!-- destop computer area end -->

        <!-- banner area start -->
        <section class="banner__area pb-40 grey-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="banner__item mb-30 w-img">
                            <a href="/product-details"><img src="assets/img/banner/banner-6.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="banner__item mb-30 w-img">
                            <a href="/product-details"><img src="assets/img/banner/banner-7.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="banner__item mb-30 w-img">
                            <a href="/product-details"><img src="assets/img/banner/banner-8.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner area end -->

        <!-- blog area start -->
        <section class="blog__area pb-40 grey-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section__head d-flex justify-content-between mb-40">
                            <div class="section__title">
                                <h3>From The<span>Blog</span></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="blog__slider owl-carousel">
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
                            <div class="blog__item mb-30">
                                <div class="blog__thumb fix">
                                    <a href="/blog-details">
                                        <img src="assets/img/blog/blog-4.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog__content white-bg">
                                    <h3><a href="/blog-details">Grip and Allows</a></h3>
                                    <div class="blog__meta">
                                        <span>Post Date:</span>
                                        <span class="date"> 20-Aug-2020</span>
                                    </div>
                                    <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. </p>
                                </div>
                            </div>
                            <div class="blog__item mb-30">
                                <div class="blog__thumb fix">
                                    <a href="/blog-details">
                                        <img src="assets/img/blog/blog-5.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog__content white-bg">
                                    <h3><a href="/blog-details">Pitterarum Formas</a></h3>
                                    <div class="blog__meta">
                                        <span>Post Date:</span>
                                        <span class="date"> 25-Aug-2020</span>
                                    </div>
                                    <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. </p>
                                </div>
                            </div>
                            <div class="blog__item mb-30">
                                <div class="blog__thumb fix">
                                    <a href="/blog-details">
                                        <img src="assets/img/blog/blog-6.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog__content white-bg">
                                    <h3><a href="/blog-details">Shelving Burgundy</a></h3>
                                    <div class="blog__meta">
                                        <span>Post Date:</span>
                                        <span class="date"> 02-Sep-2020</span>
                                    </div>
                                    <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog area end -->

        <!-- subscribe area start -->
        <section class="subscribe__area pt-35 pb-30">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="subscribe__content d-sm-flex align-items-center">
                            <div class="subscribe__icon mr-25">
                                <img src="assets/img/icon/icon_email.png" alt="">
                            </div>
                            <div class="subscribe__text">
                                <h4>Sign up to Newsletter</h4>
                                <p>Get email updates about our latest shop...and receive <span>$30 Coupon For First Shopping</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="subscribe__form f-right">
                            <form action="#">
                                <input type="email" placeholder="Enter your email here...">
                                <button class="t-y-btn t-y-btn-sub">subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribe area end -->

        <!-- back to top btn area start -->
        <section class="back-btn-top">
            <div class="container-fluid p-0">
                <div class="row gx-0">
                    <div class="col-xl-12">
                        <div id="scroll" class="back-to-top-btn text-center">
                            <a href="/javascript:void(0);">back to top</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- back to top btn area end -->

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