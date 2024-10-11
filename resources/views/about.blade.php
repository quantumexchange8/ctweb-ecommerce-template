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
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb area end -->

        <!-- banner area start -->
        <section class="about__banner-area">
            <div class="container-fluid p-0">
                <div class="row gx-0">
                    <div class="col-xxl-12">
                        <div class="about__banner w-img">
                            <img src="assets/img/about/about-bg.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner area end -->

        <!-- about area start -->
        <section class="about__area box-plr-75 p-relative about__mt--325">
            <div class="container-fluid">
                <div class="about__inner white-bg">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="about__wrapper">
                                <h3>About Topico Magento</h3>
                                <p class="about__text">Vivamus a lacinia sem. Integer in enim sapien. Aenean vitae hendrerit nisi, ut suscipit justo. Duis hendrerit sceleri sque dui. Donec ornare massa vitae neque lobortis rutrum.</p>

                                <div class="about__quote">
                                    <blockquote>
                                        <p>Lorem ipsum <span>dolor sit amet</span>, consectetur adipiscing elit. Nunc hendrerit tellus et nisi ultra trices, eu feugiat sapien commodo. Praesent vitae ipsum et risus.</p>
                                    </blockquote>
                                </div>
                                <p class="about__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc hendrerit tellus et nisi ultrices, eu feugiat sapien com modo. Praesent vitae ipsum et risus tempus tincidunt in tincidunt justo. Nunc consectetur non sapien id faucibus. Curabitur id nibh eu felis pellentesque pellentesque quis vel nulla. Vivamus a lacinia sem. Integer in enim sapien. Aenean vitae hendrerit nisi, ut suscipit justo. Duis hendrerit scelerisque dui. Donec ornare massa vitae neque lobor tis rutrum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about area end -->

        <!-- what area start -->
        <section class="why__area box-plr-75">
            <div class="container-fluid">
                <div class="why__inner pl-90 pr-90">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="section__head mb-30">
                                <div class="section__title">
                                    <h3>What We Do?</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                            <div class="why__item mb-30">
                                <div class="why__thumb w-img fix">
                                    <img src="assets/img/about/about-1.jpg" alt="">
                                </div>
                                <div class="why__content">
                                    <h3>What Do We Do?</h3>
                                    <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                            <div class="why__item mb-30">
                                <div class="why__thumb w-img fix">
                                    <img src="assets/img/about/about-2.jpg" alt="">
                                </div>
                                <div class="why__content">
                                    <h3>Our Mission?</h3>
                                    <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                            <div class="why__item mb-30">
                                <div class="why__thumb w-img fix">
                                    <img src="assets/img/about/about-3.jpg" alt="">
                                </div>
                                <div class="why__content">
                                    <h3>History Of Us?</h3>
                                    <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- what area end -->

        <!-- video area start -->
        <section class="video__area box-plr-75 pb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="section__head video__section-head mb-30 ml-90 mr-90">
                            <div class="section__title">
                                <h3>How We Do It?</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="video__content">
                            <iframe  src="https://www.youtube.com/embed/ZuzZXT3A1aQ" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="video__text pl-155 pr-155 mt-30">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc hendrerit tellus et nisi ultrices, eu feugiat sapien com modo. Praesent vitae ipsum et risus tempus tincidunt in tincidunt justo. Nunc consectetur non sapien id faucibus. Curabitur id nibh eu felis pellentesque pellentesque quis vel nulla. Vivamus a lacinia sem. Integer in enim sapien. Aenean vitae hendrerit nisi, ut suscipit justo. Duis hendrerit scelerisque dui. Donec ornare massa vitae neque lobor tis rutrum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- video area end -->

        <!-- team area start -->
        <section class="team__area box-plr-75 pb-30">
            <div class="container-fluid">
                <div class="team__inner pl-155 pr-155">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="section__head mb-30">
                                <div class="section__title">
                                    <h3>Our Team Member</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4">
                            <div class="team__item text-center mb-30">
                                <div class="team__thumb w-img fix">
                                    <img src="assets/img/team/as1.jpg" alt="">
                                </div>
                                <div class="team__content">
                                    <h3>John Doe</h3>
                                    <span>Web Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4">
                            <div class="team__item text-center mb-30">
                                <div class="team__thumb w-img fix">
                                    <img src="assets/img/team/as2.jpg" alt="">
                                </div>
                                <div class="team__content">
                                    <h3>Shahnewaz Sakil</h3>
                                    <span>Business Man</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4">
                            <div class="team__item text-center mb-30">
                                <div class="team__thumb w-img fix">
                                    <img src="assets/img/team/as3.jpg" alt="">
                                </div>
                                <div class="team__content">
                                    <h3>Salim Rana</h3>
                                    <span>CEO Themepure</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4">
                            <div class="team__item text-center mb-30">
                                <div class="team__thumb w-img fix">
                                    <img src="assets/img/team/as4.jpg" alt="">
                                </div>
                                <div class="team__content">
                                    <h3>Pavilion Dyne</h3>
                                    <span>Story Teller</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team area end -->

        <!-- subscribe area start -->
        <section class="subscribe__area subscribe__border pt-35 pb-30 box-plr-75">
            <div class="container-fluid">
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
                            <a href="javascript:void(0);">back to top</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- back to top btn area end -->


    </main>

@endsection