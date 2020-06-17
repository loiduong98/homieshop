@extends('page.layout.index')
@section('content')
<section class="hero-slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/slider-1.jpg" alt="slide-1">
                <div class="carousel-caption d-none d-md-block caption">
                        <h1>2019</h1>
                        <h2>Lookbook.</h2>
                        <a href="#" class="primary-btn">See More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/slider-2.jpg" alt="slide-2">
                <div class="carousel-caption d-none d-md-block caption">
                <h1>2019</h1>
                        <h2>Lookbook.</h2>
                        <a href="#" class="primary-btn">See More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/slider-3.jpg" alt="slide-3">
                <div class="carousel-caption d-none d-md-block caption">
                <h1>2019</h1>
                        <h2>Lookbook.</h2>
                        <a href="#" class="primary-btn">See More</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<!-- Features Section Begin -->
<section class="features-section spad">
    <div class="features-ads">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-features-ads first">
                        <img src="assets/img/icons/f-delivery.png" alt="">
                        <h4>Free shipping</h4>
                        <p>Fusce urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vesti bulum mal
                            esuada aliquet libero viverra cursus. </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-features-ads second">
                        <img src="assets/img/icons/coin.png" alt="">
                        <h4>100% Money back </h4>
                        <p>Urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vesti bulum mal esuada
                            aliquet libero viverra cursus. </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-features-ads">
                        <img src="assets/img/icons/chat.png" alt="">
                        <h4>Online support 24/7</h4>
                        <p>Urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vesti bulum mal esuada
                            aliquet libero viverra cursus. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Box -->
    <div class="features-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="single-box-item first-box">
                                <img src="assets/img/f-box-1.jpg" alt="">
                                <div class="box-text">
                                    <span class="trend-year">2019 Party</span>
                                    <h2>Jewelry</h2>
                                    <span class="trend-alert">Trend Allert</span>
                                    <a href="#" class="primary-btn">See More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="single-box-item second-box">
                                <img src="assets/img/f-box-2.jpg" alt="">
                                <div class="box-text">
                                    <span class="trend-year">2019 Trend</span>
                                    <h2>Footwear</h2>
                                    <span class="trend-alert">Bold & Black</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-box-item large-box">
                        <img src="assets/img/f-box-3.jpg" alt="">
                        <div class="box-text">
                            <span class="trend-year">2019 Party</span>
                            <h2>Collection</h2>
                            <div class="trend-alert">Trend Allert</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features Section End -->

<!-- Latest Product Begin -->
<section class="latest-products spad">
    <div class="container">
        <div class="product-filter">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2>Latest Products</h2>
                    </div>
                    <ul class="product-controls">
                        <li data-filter="*">All</li>
                        <li data-filter=".dresses">Dresses</li>
                        <li data-filter=".bags">Bags</li>
                        <li data-filter=".shoes">Shoes</li>
                        <li data-filter=".accesories">Accesories</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row" id="product-list">
            <div class="col-lg-3 col-sm-6 mix all accesories bags">
                <div class="single-product-item">
                    <figure>
                        <a href="#"><img src="assets/img/products/img-8.jpg" alt=""></a>
                        <div class="p-status popular">popular</div>
                    </figure>
                    <div class="product-text">
                        <h6>Blue Dress with details</h6>
                        <p>$35.50</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Product End -->

<!-- Lookbok Section Begin -->
<section class="lookbok-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 offset-lg-1">
                <div class="lookbok-left">
                    <div class="section-title">
                        <h2>2019 <br />#lookbook</h2>
                    </div>
                    <p>Fusce urna quam, euismod sit amet mollis quis, vestibulum quis velit. Vestibulum malesuada
                        aliquet libero viverra cursus. Aliquam erat volutpat. Morbi id dictum quam, ut commodo
                        lorem. In at nisi nec arcu porttitor aliquet vitae at dui. Sed sollicitudin nulla non leo
                        viverra scelerisque. Phasellus facilisis lobortis metus, sit amet viverra lectus finibus ac.
                        Aenean non felis dapibus, placerat libero auctor, ornare ante. Morbi quis ex eleifend,
                        sodales nulla vitae, scelerisque ante. Nunc id vulputate dui. Suspendisse consectetur rutrum
                        metus nec scelerisque. s</p>
                    <a href="#" class="primary-btn look-btn">See More</a>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="lookbok-pic">
                    <img src="assets/img/lookbok.jpg" alt="">
                    <div class="pic-text">fashion</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Lookbok Section End -->

<!-- Logo Section Begin -->
<div class="logo-section spad">
    <div class="logo-items owl-carousel">
        <div class="logo-item">
            <img src="img/logos/logo-1.png" alt="">
        </div>
        <div class="logo-item">
            <img src="img/logos/logo-2.png" alt="">
        </div>
        <div class="logo-item">
            <img src="img/logos/logo-3.png" alt="">
        </div>
        <div class="logo-item">
            <img src="img/logos/logo-4.png" alt="">
        </div>
        <div class="logo-item">
            <img src="img/logos/logo-5.png" alt="">
        </div>
    </div>
</div>
<!-- Logo Section End -->

@endsection