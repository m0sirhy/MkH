@extends('layouts.user_side.default')
@section('content')
    <div class="tt-breadcrumb">
        @include('includes.user_side.breedCrumb')

    </div>
<div class="container-indent">
    <div class="container container-fluid-custom-mobile-padding">
        <h1 class="tt-title-subpages noborder">THE BLOG</h1>
        <div class="row">
            <div class="col-12">
                <div class="tt-listing-post tt-half">
                    <div class="tt-post">
                        <div class="tt-post-img">
                            <a href="#"><img src="{{ asset('user_side/images/loader.svg') }}" data-src="{{ asset('user_side/images/blog/blog-post-img-01.jpg') }}" alt=""></a>
                        </div>
                        <div class="tt-post-content">
                            <div class="tt-tag"><a href="#">FASHION</a></div>
                            <h2 class="tt-title"><a href="#">Labore Et Dolore Magna Sliqua Ut Enim ad Minim Veniam</a></h2>
                            <div class="tt-description">
                                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
                            </div>
                            <div class="tt-meta">
                                <div class="tt-autor">
                                    by <span>ADRIAN</span> on January 14, 2017
                                </div>
                                <div class="tt-comments">
                                    <a href="#"><i class="tt-icon icon-f-88"></i>7</a>
                                </div>
                            </div>
                            <div class="tt-btn">
                                <a href="#" class="btn">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="tt-post">
                        <div class="tt-post-img">
                            <a href="#"><img src="{{ asset('user_side/images/loader.svg') }}" data-src="{{ asset('user_side/images/blog/blog-post-img-02.jpg') }}" alt=""></a>
                        </div>
                        <div class="tt-post-content">
                            <div class="tt-tag"><a href="#">FASHION</a></div>
                            <h2 class="tt-title"><a href="#">Veniam Quis Nostrud Exercitation Ullamco Laboris</a></h2>
                            <div class="tt-description">
                                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
                            </div>
                            <div class="tt-meta">
                                <div class="tt-autor">
                                    by <span>ADRIAN</span> on January 14, 2017
                                </div>
                                <div class="tt-comments">
                                    <a href="#"><i class="tt-icon icon-f-88"></i>7</a>
                                </div>
                            </div>
                            <div class="tt-btn">
                                <a href="#" class="btn">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="tt-post">
                        <div class="tt-post-img">
                            <a href="#"><img src="{{ asset('user_side/images/loader.svg') }}" data-src="{{ asset('user_side/images/blog/blog-post-img-03.jpg') }}" alt=""></a>
                        </div>
                        <div class="tt-post-content">
                            <div class="tt-tag"><a href="#">FASHION</a></div>
                            <h2 class="tt-title"><a href="#">Nisi Ut Aliquip Ex ea Commodo </a></h2>
                            <div class="tt-description">
                                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
                            </div>
                            <div class="tt-meta">
                                <div class="tt-autor">
                                    by <span>ADRIAN</span> on January 14, 2017
                                </div>
                                <div class="tt-comments">
                                    <a href="#"><i class="tt-icon icon-f-88"></i>7</a>
                                </div>
                            </div>
                            <div class="tt-btn">
                                <a href="#" class="btn">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="tt-post">
                        <div class="tt-post-img">
                            <a href="#"><img src="{{ asset('user_side/images/loader.svg') }}" data-src="{{ asset('user_side/images/blog/blog-post-img-04.jpg') }}" alt=""></a>
                        </div>
                        <div class="tt-post-content">
                            <div class="tt-tag"><a href="#">FASHION</a></div>
                            <h2 class="tt-title"><a href="#">Dolore Magna Sliqua Ut Enim ad Minim Veniam</a></h2>
                            <div class="tt-description">
                                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
                            </div>
                            <div class="tt-meta">
                                <div class="tt-autor">
                                    by <span>ADRIAN</span> on January 14, 2017
                                </div>
                                <div class="tt-comments">
                                    <a href="#"><i class="tt-icon icon-f-88"></i>7</a>
                                </div>
                            </div>
                            <div class="tt-btn">
                                <a href="#" class="btn">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="tt-post">
                        <div class="tt-post-img">
                            <div class="tt-slider-blog arrow-location-01 slick-animated-show-js">
                                <div><a href="blog-single-post-gallery.html"><img src="{{ asset('user_side/images/blog/blog-post-img-06.jpg') }}" alt=""></a></div>
                                <div><a href="blog-single-post-gallery.html"><img src="{{ asset('user_side/images/blog/blog-post-img-02.jpg') }}" alt=""></a></div>
                                <div><a href="blog-single-post-gallery.html"><img src="{{ asset('user_side/images/blog/blog-post-img-03.jpg') }}" alt=""></a></div>
                            </div>
                        </div>
                        <div class="tt-post-content">
                            <div class="tt-tag"><a href="blog-single-post-gallery.html">FASHION</a></div>
                            <h2 class="tt-title"><a href="blog-single-post-gallery.html">Enim ad Minim Veniam Quis Nostrud Ullamco Laboris Nisi </a></h2>
                            <div class="tt-description">
                                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
                            </div>
                            <div class="tt-meta">
                                <div class="tt-autor">
                                    by <span>ADRIAN</span> on January 14, 2017
                                </div>
                                <div class="tt-comments">
                                    <a href="#"><i class="tt-icon icon-f-88"></i>7</a>
                                </div>
                            </div>
                            <div class="tt-btn">
                                <a href="blog-single-post-gallery.html" class="btn">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="tt-post">
                        <div class="tt-post-img">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="{{ asset('user_side/images/loader.svg') }}" data-src="http://www.youtube.com/embed/GhyKqj_P2E4" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="tt-post-content">
                            <div class="tt-tag"><a href="#">FASHION</a></div>
                            <h2 class="tt-title"><a href="#">Enim ad Minim Veniam Quis Nostrud Ullamco Laboris Nisi </a></h2>
                            <div class="tt-description">
                                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
                            </div>
                            <div class="tt-meta">
                                <div class="tt-autor">
                                    by <span>ADRIAN</span> on January 14, 2017
                                </div>
                                <div class="tt-comments">
                                    <a href="#"><i class="tt-icon icon-f-88"></i>7</a>
                                </div>
                            </div>
                            <div class="tt-btn">
                                <a href="#" class="btn">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="tt-post">
                        <div class="tt-post-img">
                            <div class="tt-video-block">
                                <a href="#" class="link-video"></a>
                                <video class="movie" src="video/video.mp4" poster="video/video_img.jpg') }}"></video>
                            </div>
                        </div>
                        <div class="tt-post-content">
                            <div class="tt-tag"><a href="#">FASHION</a></div>
                            <h2 class="tt-title"><a href="#">Enim ad Minim Veniam Quis Nostrud Ullamco Laboris Nisi </a></h2>
                            <div class="tt-description">
                                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
                            </div>
                            <div class="tt-meta">
                                <div class="tt-autor">
                                    by <span>ADRIAN</span> on January 14, 2017
                                </div>
                                <div class="tt-comments">
                                    <a href="#"><i class="tt-icon icon-f-88"></i>7</a>
                                </div>
                            </div>
                            <div class="tt-btn">
                                <a href="#" class="btn">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="tt-post">
                        <div class="tt-post-content">
                            <div class="tt-tag"><a href="#">FASHION</a></div>
                            <h2 class="tt-title"><a href="#">Enim ad Minim Veniam Quis Nostrud Ullamco Laboris Nisi</a></h2>
                            <div class="tt-description">
                                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
                            </div>
                            <div class="tt-meta">
                                <div class="tt-autor">
                                    by <span>ADRIAN</span> on January 14, 2017
                                </div>
                                <div class="tt-comments">
                                    <a href="#"><i class="tt-icon icon-f-88"></i>7</a>
                                </div>
                            </div>
                            <div class="tt-btn">
                                <a href="#" class="btn">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="tt-post">
                        <div class="tt-post-content">
                            <div class="tt-tag"><a href="blog-single-post-audio.html">FASHION</a></div>
                            <h2 class="tt-title"><a href="blog-single-post-audio.html">Minim Veniam Quis Nostrud Ullamco Laboris Nisi </a></h2>
                            <div class="tt-description">
                                <audio controls>
                                    <source src="sound/sound.mp3">
                                </audio>
                            </div>
                            <div class="tt-meta">
                                <div class="tt-autor">
                                    by <span>ADRIAN</span> on January 14, 2017
                                </div>
                                <div class="tt-comments">
                                    <a href="#"><i class="tt-icon icon-f-88"></i>7</a>
                                </div>
                            </div>
                            <div class="tt-btn">
                                <a href="blog-single-post-audio.html" class="btn">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="tt-post">
                        <div class="tt-post-content">
                            <div class="tt-description">
                                <a href="blog-single-post-quote.html">
                                    <blockquote class="tt-blockquote add-hover">
                                        <i class="tt-icon icon-g-56"></i>
                                        <span class="tt-title">War and Marketing Have Many Similarities</span>
                                        <span class="tt-title-description">— <span>DANIEL BROWN</span></span>
                                    </blockquote>
                                </a>
                            </div>
                            <div class="tt-btn">
                                <a href="blog-single-post-quote.html" class="btn">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="tt-post">
                        <div class="tt-post-content">
                            <div class="tt-tag"><a href="blog-single-post-link.html">FASHION</a></div>
                            <h2 class="tt-title"><a href="blog-single-post-link.html">Ullamco Laboris Nisi Ut Aliquip Ex ea Commodo </a></h2>
                            <div class="tt-description">
                                <a href="product.html" target="_blank" class="tt-box-link">
                                    <i class="tt-icon icon-g-60"></i>Wokiee - Responsive HTML5 Template
                                </a>
                                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                            </div>
                            <div class="tt-meta">
                                <div class="tt-autor">
                                    by <span>ADRIAN</span> on January 14, 2017
                                </div>
                                <div class="tt-comments">
                                    <a href="#"><i class="tt-icon icon-f-88"></i>7</a>
                                </div>
                            </div>
                            <div class="tt-btn">
                                <a href="blog-single-post-link.html" class="btn">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="tt-pagination">
                        <!-- <a href="#" class="btn-pagination btn-prev"></a> -->
                        <ul>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                        <a href="#" class="btn-pagination btn-next"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
