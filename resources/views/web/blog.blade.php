@extends('layouts.web')
@section('meta_description', '')
@section('title', '')

@section('styles')
    
@endsection

@section('content')
<!-- breadcrumb area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">blog left sidebar</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->

<!-- blog main wrapper start -->
<div class="blog-main-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 order-2 order-lg-1">
                <div class="blog-sidebar-wrapper">
                    <div class="blog-sidebar mb-30">
                        <div class="sidebar-serch-form">
                            <form action="#">
                                <input type="text" class="search-field" placeholder="search here">
                                <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div> <!-- single sidebar end -->
                    <div class="blog-sidebar mb-20">
                        <h4 class="title mb-20">categories</h4>
                        <ul class="blog-archive">
                            <li><a href="#">dry food (10)</a></li>
                            <li><a href="#">wet food (08)</a></li>
                            <li><a href="#">reach (07)</a></li>
                            <li><a href="#">organic (14)</a></li>
                            <li><a href="#">capcicum (10)</a></li>
                        </ul>
                    </div> <!-- single sidebar end -->
                    <div class="blog-sidebar mb-20">
                        <h4 class="title mb-20">Blog Archives</h4>
                        <ul class="blog-archive">
                            <li><a href="#">January (10)</a></li>
                            <li><a href="#">February (08)</a></li>
                            <li><a href="#">March (07)</a></li>
                            <li><a href="#">April (14)</a></li>
                            <li><a href="#">May (10)</a></li>
                        </ul>
                    </div> <!-- single sidebar end -->
                    <div class="blog-sidebar mb-20">
                        <h4 class="title mb-30">recent post</h4>
                        <div class="recent-post mb-20">
                            <div class="recent-post-thumb">
                                <a href="blog-details.html">
                                    <img src="galio/assets/img/product/product-img1.jpg" alt="">
                                </a>
                            </div>
                            <div class="recent-post-des">
                                <span><a href="blog-details.html">first blog post</a></span>
                                <span class="post-date">28.10.2018</span>
                            </div>
                        </div> <!-- end single popular item -->
                        <div class="recent-post mb-20">
                            <div class="recent-post-thumb">
                                <a href="blog-details.html">
                                    <img src="galio/assets/img/product/product-img2.jpg" alt="">
                                </a>
                            </div>
                            <div class="recent-post-des">
                                <span><a href="blog-details.html">second blog post</a></span>
                                <span class="post-date">28.10.2018</span>
                            </div>
                        </div> <!-- end single popular item -->
                        <div class="recent-post mb-20">
                            <div class="recent-post-thumb">
                                <a href="blog-details.html">
                                    <img src="galio/assets/img/product/product-img3.jpg" alt="">
                                </a>
                            </div>
                            <div class="recent-post-des">
                                <span><a href="blog-details.html">third blog post</a></span>
                                <span class="post-date">28.10.2018</span>
                            </div>
                        </div> <!-- end single popular item -->
                    </div> <!-- single sidebar end -->
                    <div class="blog-sidebar mb-20">
                        <h4 class="title mb-30">Tags</h4>
                        <ul class="blog-tags">
                            <li><a href="#">camera</a></li>
                            <li><a href="#">computer</a></li>
                            <li><a href="#">watch</a></li>
                            <li><a href="#">smartphone</a></li>
                            <li><a href="#">bag</a></li>
                            <li><a href="#">shoes</a></li>
                        </ul>
                    </div> <!-- single sidebar end -->
                </div>
            </div>
            <div class="col-lg-9 order-1 order-lg-2">
                <div class="blog-wrapper-inner">
                    <div class="row">
                        <!-- start single blog item -->
                        <div class="col-lg-6 col-md-6">
                            <div class="blog-item mb-26">
                                <div class="blog-thumb img-full fix">
                                    <a href="blog-details.html">
                                        <img src="galio/assets/img/blog/img_blog1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <h3><a href="blog-details.html">post format audio</a></h3>
                                    <div class="blog-meta">
                                        <span class="posted-author">by: admin</span>
                                        <span class="post-date">25 Nov, 2018</span>
                                    </div>
                                    <p>Curabitur sed diam enim. Sed varius faucibus lectus, a scelerisque massa posuere ac. Quisque dapibus, est ac...</p>
                                </div>
                                <a href="blog-details.html">read more <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- end single blog item -->
                        <!-- start single blog item -->
                        <div class="col-lg-6 col-md-6">
                            <div class="blog-item mb-26">
                                <div class="blog-thumb img-full fix">
                                    <div class="blog-gallery-slider slick-arrow-style_2">
                                        <div class="blog-single-slide">
                                            <img src="galio/assets/img/blog/img_blog4.jpg" alt="">
                                        </div>
                                        <div class="blog-single-slide">
                                            <img src="galio/assets/img/blog/img_blog2.jpg" alt="">
                                        </div>
                                        <div class="blog-single-slide">
                                            <img src="galio/assets/img/blog/img_blog3.jpg" alt="">
                                        </div>
                                        <div class="blog-single-slide">
                                            <img src="galio/assets/img/blog/img_blog1.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <h3><a href="blog-details.html">post format video</a></h3>
                                    <div class="blog-meta">
                                        <span class="posted-author">by: admin</span>
                                        <span class="post-date">25 Nov, 2018</span>
                                    </div>
                                    <p>Curabitur sed diam enim. Sed varius faucibus lectus, a scelerisque massa posuere ac. Quisque dapibus, est ac...</p>
                                </div>
                                <a href="blog-details.html">read more <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- end single blog item -->
                        <!-- start single blog item -->
                        <div class="col-lg-6 col-md-6">
                            <div class="blog-item mb-26">
                                <div class="blog-thumb img-full fix">
                                    <a href="blog-details.html">
                                        <img src="galio/assets/img/blog/img_blog3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <h3><a href="blog-details.html">post format image</a></h3>
                                    <div class="blog-meta">
                                        <span class="posted-author">by: admin</span>
                                        <span class="post-date">25 Nov, 2018</span>
                                    </div>
                                    <p>Curabitur sed diam enim. Sed varius faucibus lectus, a scelerisque massa posuere ac. Quisque dapibus, est ac...</p>
                                </div>
                                <a href="blog-details.html">read more <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- end single blog item -->
                        <!-- start single blog item -->
                        <div class="col-lg-6 col-md-6">
                            <div class="blog-item mb-26">
                                <div class="blog-thumb embed-responsive embed-responsive-16by9">
                                    <iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/501298839&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=true&amp;show_comments=false&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
                                </div>
                                <div class="blog-content">
                                    <h3><a href="blog-details.html">post format audio</a></h3>
                                    <div class="blog-meta">
                                        <span class="posted-author">by: admin</span>
                                        <span class="post-date">25 Nov, 2018</span>
                                    </div>
                                    <p>Curabitur sed diam enim. Sed varius faucibus lectus, a scelerisque massa posuere ac. Quisque dapibus, est ac...</p>
                                </div>
                                <a href="blog-details.html">read more <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- end single blog item -->
                        <!-- start single blog item -->
                        <div class="col-lg-6 col-md-6">
                            <div class="blog-item mb-26">
                                <div class="blog-thumb embed-responsive embed-responsive-16by9">
                                    <iframe src="https://www.youtube.com/embed/DR2c266yWEA" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                                <div class="blog-content">
                                    <h3><a href="blog-details.html">post format video</a></h3>
                                    <div class="blog-meta">
                                        <span class="posted-author">by: admin</span>
                                        <span class="post-date">25 Nov, 2018</span>
                                    </div>
                                    <p>Curabitur sed diam enim. Sed varius faucibus lectus, a scelerisque massa posuere ac. Quisque dapibus, est ac...</p>
                                </div>
                                <a href="blog-details.html">read more <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- end single blog item -->
                        <!-- start single blog item -->
                        <div class="col-lg-6 col-md-6">
                            <div class="blog-item mb-26">
                                <div class="blog-thumb img-full fix">
                                    <a href="blog-details.html">
                                        <img src="galio/assets/img/blog/img_blog4.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <h3><a href="blog-details.html">post format audio</a></h3>
                                    <div class="blog-meta">
                                        <span class="posted-author">by: admin</span>
                                        <span class="post-date">25 Nov, 2018</span>
                                    </div>
                                    <p>Curabitur sed diam enim. Sed varius faucibus lectus, a scelerisque massa posuere ac. Quisque dapibus, est ac...</p>
                                </div>
                                <a href="blog-details.html">read more <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- end single blog item -->
                        
                        <!-- start single blog item -->
                        <div class="col-lg-6 col-md-6">
                            <div class="blog-item mb-26">
                                <div class="blog-thumb img-full fix">
                                    <a href="blog-details.html">
                                        <img src="galio/assets/img/blog/img_blog1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <h3><a href="blog-details.html">post format image</a></h3>
                                    <div class="blog-meta">
                                        <span class="posted-author">by: admin</span>
                                        <span class="post-date">25 Nov, 2018</span>
                                    </div>
                                    <p>Curabitur sed diam enim. Sed varius faucibus lectus, a scelerisque massa posuere ac. Quisque dapibus, est ac...</p>
                                </div>
                                <a href="blog-details.html">read more <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- end single blog item -->
                        <!-- start single blog item -->
                        <div class="col-lg-6 col-md-6">
                            <div class="blog-item mb-26">
                                <div class="blog-thumb img-full fix">
                                    <a href="blog-details.html">
                                        <img src="galio/assets/img/blog/img_blog2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <h3><a href="blog-details.html">post format audio</a></h3>
                                    <div class="blog-meta">
                                        <span class="posted-author">by: admin</span>
                                        <span class="post-date">25 Nov, 2018</span>
                                    </div>
                                    <p>Curabitur sed diam enim. Sed varius faucibus lectus, a scelerisque massa posuere ac. Quisque dapibus, est ac...</p>
                                </div>
                                <a href="blog-details.html">read more <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- end single blog item -->
                    </div>
                </div>
                <!-- start pagination area -->
                <div class="paginatoin-area text-center pt-30 pb-30">
                    <div class="row">
                        <div class="col-12">
                            <ul class="pagination-box">
                                <li><a class="Previous" href="#">Previous</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a class="Next" href="#"> Next </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end pagination area -->
            </div>
        </div>
    </div>
</div>
<!-- blog main wrapper end -->

<!-- brand area start -->
<div class="brand-area pb-30 pt-md-6 pt-sm-6">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title mb-30">
                    <div class="title-icon">
                        <i class="fa fa-crop"></i>
                    </div>
                    <h3>Popular Brand</h3>
                </div> <!-- section title end -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="brand-active slick-padding slick-arrow-style">
                    <div class="brand-item text-center">
                        <a href="#"><img src="galio/assets/img/brand/br1.png" alt=""></a>
                    </div>
                    <div class="brand-item text-center">
                        <a href="#"><img src="galio/assets/img/brand/br2.png" alt=""></a>
                    </div>
                    <div class="brand-item text-center">
                        <a href="#"><img src="galio/assets/img/brand/br3.png" alt=""></a>
                    </div>
                    <div class="brand-item text-center">
                        <a href="#"><img src="galio/assets/img/brand/br4.png" alt=""></a>
                    </div>
                    <div class="brand-item text-center">
                        <a href="#"><img src="galio/assets/img/brand/br5.png" alt=""></a>
                    </div>
                    <div class="brand-item text-center">
                        <a href="#"><img src="galio/assets/img/brand/br6.png" alt=""></a>
                    </div>
                    <div class="brand-item text-center">
                        <a href="#"><img src="galio/assets/img/brand/br4.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brand area end -->
@endsection

@section('scripts')
    
@endsection