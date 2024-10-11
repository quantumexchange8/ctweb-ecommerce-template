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
                              <li class="breadcrumb-item active" aria-current="page">Page Not Found</li>
                            </ol>
                          </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- error area start -->
    <section class="error__area pt-60 pb-100">
        <div class="container">
            <div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2">
                <div class="error__content text-center">
                    <div class="error__number">
                        <h1>404</h1>
                    </div>
                    <span>component not found</span>
                    <h2>Nothing To See Here!</h2>
                    <p>The page are looking for has been moved or doesn’t exist anymore, if you like you can return to our homepage. If the problem persists, please send us an email to <span class="highlight comment"><a href="mailto:ThemePure@gmail.com">ThemePure@gmail.com</a></span></p>

                    <div class="error__search">
                        <form action="#">
                            <input type="text" placeholder="Enter Your Text...">
                            <button type="submit" class="t-y-btn t-y-btn-grey">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- error area end -->

</main>


@endsection