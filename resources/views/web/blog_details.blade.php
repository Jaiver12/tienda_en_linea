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
                            <li class="breadcrumb-item active" aria-current="page">blog details</li>
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
            <div class="col-lg-3 order-2">
                <div class="blog-sidebar-wrapper mt-md-34 mt-sm-30">
                    <div class="blog-sidebar mb-30">
                        <div class="sidebar-serch-form">
                            <form action="#">
                                <input type="text" class="search-field" placeholder="search here">
                                <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div> <!-- single sidebar end -->
                    <div class="blog-sidebar mb-24">
                        <h4 class="title mb-20">categories</h4>
                        <ul class="blog-archive">
                            <li><a href="#">dry food (10)</a></li>
                            <li><a href="#">wet food (08)</a></li>
                            <li><a href="#">reach (07)</a></li>
                            <li><a href="#">organic (14)</a></li>
                            <li><a href="#">capcicum (10)</a></li>
                        </ul>
                    </div> <!-- single sidebar end -->
                    <div class="blog-sidebar mb-24">
                        <h4 class="title mb-20">Blog Archives</h4>
                        <ul class="blog-archive">
                            <li><a href="#">January (10)</a></li>
                            <li><a href="#">February (08)</a></li>
                            <li><a href="#">March (07)</a></li>
                            <li><a href="#">April (14)</a></li>
                            <li><a href="#">May (10)</a></li>
                        </ul>
                    </div> <!-- single sidebar end -->
                    <div class="blog-sidebar mb-24">
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
                    <div class="blog-sidebar mb-24">
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
            <div class="col-lg-9 order-1">
                <div class="blog-wrapper-inner">
                    <div class="row blog-content-wrap">
                        <!-- start single blog item -->
                        <div class="col-lg-12">
                            <div class="blog-item mb-30">
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
                                    <div class="blog-details">
                                        <h3 class="blog-heading">The biggest collection for virtual product</h3>
                                        <div class="blog-meta">
                                            <a class="author" href="#"><i class="icon-people"></i> Admin</a>
                                            <a class="comment" href="#"><i class="icon-bubbles"></i> 3 comment</a>
                                            <a class="post-time" href="#"><i class="icon-calendar"></i> 15 nov 2018</a>
                                        </div>
                                        <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum laborum in labore rerum</p>
                                        <blockquote><p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin dictum tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque. Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex</p></blockquote> 
                                        <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum laborum in labore Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum laborum in labore rerum
                                        Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum laborum in labore rerum </p>
                                    </div>
                                </div>
                                <div class="tag-line">
                                    <h4>tag:</h4>
                                    <a href="#">dry food</a>,
                                    <a href="#">wet food</a>,
                                    <a href="#">reach food</a>,
                                </div>
                                <div class="blog-sharing text-center mt-34 mt-sm-34">
                                    <h4>share this post:</h4>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                            <div class="comment-section">
                                <h3>03 comment</h3>
                                <ul>
                                    <li>
                                        <div class="author-avatar">
                                            <img src="galio/assets/img/blog/comment-icon.png" alt="">
                                        </div>
                                        <div class="comment-body">
                                                <span class="reply-btn"><a href="#">reply</a></span>
                                            <h5 class="comment-author">admin</h5>
                                            <div class="comment-post-date">
                                                20 nov, 2018 at 9:30pm
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores adipisci optio ex, laboriosam facilis non pariatur itaque illo sunt?</p>
                                        </div>
                                    </li>
                                    <li class="comment-children">
                                        <div class="author-avatar">
                                            <img src="galio/assets/img/blog/comment-icon.png" alt="">
                                        </div>
                                        <div class="comment-body">
                                                <span class="reply-btn"><a href="#">reply</a></span>
                                            <h5 class="comment-author">admin</h5>
                                            <div class="comment-post-date">
                                                20 nov, 2018 at 9:30pm
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores adipisci optio ex, laboriosam facilis non pariatur itaque illo sunt?</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="author-avatar">
                                            <img src="galio/assets/img/blog/comment-icon.png" alt="">
                                        </div>
                                        <div class="comment-body">
                                            <span class="reply-btn"><a href="#">reply</a></span>
                                            <h5 class="comment-author">admin</h5>
                                            <div class="comment-post-date">
                                                20 nov, 2018 at 9:30pm
                                            </div>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores adipisci optio ex, laboriosam facilis non pariatur itaque illo sunt?</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- comment area start -->
                            <!-- start blog comment box -->
                            <div class="blog-comment-wrapper mb-sm-6">
                                <h3>leave a reply</h3>
                                <p>Your email address will not be published. Required fields are marked *</p>
                                <form action="#">
                                    <div class="comment-post-box">
                                        <div class="row">
                                            <div class="col-12">
                                                <label>comment</label>
                                                <textarea name="commnet" placeholder="Write a comment"></textarea>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 mb-sm-20">
                                                <label>Name</label>
                                                <input type="text" class="coment-field" placeholder="Name">
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 mb-sm-20">
                                                <label>Email</label>
                                                <input type="text" class="coment-field" placeholder="Email">
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 mb-sm-20">
                                                <label>Website</label>
                                                <input type="text" class="coment-field" placeholder="Website">
                                            </div>
                                            <div class="col-12">
                                                <div class="coment-btn mt-20">
                                                    <input class="sqr-btn" type="submit" name="submit" value="post comment">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- start blog comment box -->
                        </div>
                        <!-- end single blog item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog main wrapper end -->

<!-- brand area start -->
<div class="brand-area pt-34 pt-sm-10 pb-30">
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