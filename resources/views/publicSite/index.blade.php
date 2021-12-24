@extends('publicSite.layout.master')

@section('content')
    

        <section class="banner-two">
            <div class="banner-two__bg">
                <div class="banner-two__bg-inner" data-options='{ "delay": 5000, "slides": [ { "src": "assets/images/backgrounds/banner-2-bg-1.jpg" }, { "src": "assets/images/backgrounds/banner-2-bg-2.jpg" }, { "src": "assets/images/backgrounds/banner-2-bg-3.jpg" } ], "transition": "fade", "timer": false }'></div><!-- /.banner-two__bg-inner -->
            </div><!-- /.banner-two__bg -->
            <img src="assets/images/shapes/banner-two__flotated-text.png" alt="" class="banner-two__floated-text">
            <div class="container">
                <p>explore</p>
                <h2>the Beauty</h2>
            </div><!-- /.container -->
        </section><!-- /.banner-two -->


        


        <section class="destinations-three">
            <div class="container">
                <div class="block-title text-center">
                    <p>Checkout featured</p>
                    <h3>Top Destinations</h3>
                </div><!-- /.block-title -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="destinations-three__single">
                            <img src="assets/images/destinations/destinations-3-1-1.jpg" alt="">
                            <div class="destinations-three__content">
                                <h3><a href="destinations-details.html">Maldives</a></h3>
                            </div><!-- /.destinations-three__content -->
                            <div class="destinations-three__hover-content">
                                <h3><a href="destinations-details.html">Maldives</a></h3>
                                <p>24 Tours</p>
                                <a href="#" class="destinations-three__link"><i class="tripo-icon-right-arrow"></i></a>
                            </div><!-- /.destinations-three__hover-content -->
                        </div><!-- /.destinations-three__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="destinations-three__single">
                            <img src="assets/images/destinations/destinations-3-1-2.jpg" alt="">
                            <div class="destinations-three__content">
                                <h3><a href="destinations-details.html">Africa</a></h3>
                            </div><!-- /.destinations-three__content -->
                            <div class="destinations-three__hover-content">
                                <h3><a href="destinations-details.html">Africa</a></h3>
                                <p>24 Tours</p>
                                <a href="#" class="destinations-three__link"><i class="tripo-icon-right-arrow"></i></a>
                            </div><!-- /.destinations-three__hover-content -->
                        </div><!-- /.destinations-three__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="destinations-three__single">
                            <img src="assets/images/destinations/destinations-3-1-3.jpg" alt="">
                            <div class="destinations-three__content">
                                <h3><a href="destinations-details.html">Egypt</a></h3>
                            </div><!-- /.destinations-three__content -->
                            <div class="destinations-three__hover-content">
                                <h3><a href="destinations-details.html">Egypt</a></h3>
                                <p>24 Tours</p>
                                <a href="#" class="destinations-three__link"><i class="tripo-icon-right-arrow"></i></a>
                            </div><!-- /.destinations-three__hover-content -->
                        </div><!-- /.destinations-three__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="destinations-three__single">
                            <img src="assets/images/destinations/destinations-3-1-4.jpg" alt="">
                            <div class="destinations-three__content">
                                <h3><a href="destinations-details.html">London</a></h3>
                            </div><!-- /.destinations-three__content -->
                            <div class="destinations-three__hover-content">
                                <h3><a href="destinations-details.html">London</a></h3>
                                <p>24 Tours</p>
                                <a href="#" class="destinations-three__link"><i class="tripo-icon-right-arrow"></i></a>
                            </div><!-- /.destinations-three__hover-content -->
                        </div><!-- /.destinations-three__single -->
                    </div><!-- /.col-lg-4 col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->

        </section><!-- /.destinations-three -->

        




        <section class="cta-one cta-one__home-two">
            <div class="container">
                <h3>Work with our amazing tour guides</h3>
                <div class="cta-one__button-block">
                    <a href="contact.html" class="thm-btn cta-one__btn">Join our team</a><!-- /.thm-btn cta-one__btn -->
                </div><!-- /.cta-one__button-block -->
            </div><!-- /.container -->
        </section><!-- /.cta-one -->

        <section class="tour-one">
            <div class="container">
                <div class="block-title text-center">
                    <p>Featured tours</p>
                    <h3>Most Popular Tours</h3>
                </div><!-- /.block-title -->
                <div class="tour-one__carousel tour-one__carousel-no-overflow thm__owl-carousel  owl-carousel owl-theme" data-options='{"nav": false, "autoplay": true, "autoplayTimeout": 5000, "smartSpeed": 700, "dots": true, "margin": 30, "loop": true, "responsive": { "0": { "items": 1, "nav": true, "navText": ["Prev", "Next"], "dots": false }, "767": { "items": 1, "nav": true, "navText": ["Prev", "Next"], "dots": false }, "991": { "items": 2 }, "1199": { "items": 2 }, "1200": { "items": 3 } }}'>
                    <div class="item">
                        <div class="tour-one__single">
                            <div class="tour-one__image">
                                <img src="assets/images/tour/tour-1-1.jpg" alt="">
                                <a href="tour-details.html"><i class="fa fa-heart"></i></a>
                            </div><!-- /.tour-one__image -->
                            <div class="tour-one__content">
                                <div class="tour-one__stars">
                                    <i class="fa fa-star"></i> 8.0 Superb
                                </div><!-- /.tour-one__stars -->
                                <h3><a href="tour-details.html">National Park 2 Days Tour</a></h3>
                                <p><span>$1870</span> / Per Person</p>
                                <ul class="tour-one__meta list-unstyled">
                                    <li><a href="tour-details.html"><i class="far fa-clock"></i> 3 Days</a></li>
                                    <li><a href="tour-details.html"><i class="far fa-user-circle"></i> 12+</a></li>
                                    <li><a href="tour-details.html"><i class="far fa-map"></i> Los Angeles</a></li>
                                </ul><!-- /.tour-one__meta -->
                            </div><!-- /.tour-one__content -->
                        </div><!-- /.tour-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="tour-one__single">
                            <div class="tour-one__image">
                                <img src="assets/images/tour/tour-1-2.jpg" alt="">
                                <a href="tour-details.html"><i class="fa fa-heart"></i></a>
                            </div><!-- /.tour-one__image -->
                            <div class="tour-one__content">
                                <div class="tour-one__stars">
                                    <i class="fa fa-star"></i> 8.0 Superb
                                </div><!-- /.tour-one__stars -->
                                <h3><a href="tour-details.html">The Dark Forest Adventure</a></h3>
                                <p><span>$2600</span> / Per Person</p>
                                <ul class="tour-one__meta list-unstyled">
                                    <li><a href="tour-details.html"><i class="far fa-clock"></i> 3 Days</a></li>
                                    <li><a href="tour-details.html"><i class="far fa-user-circle"></i> 12+</a></li>
                                    <li><a href="tour-details.html"><i class="far fa-map"></i> Los Angeles</a></li>
                                </ul><!-- /.tour-one__meta -->
                            </div><!-- /.tour-one__content -->
                        </div><!-- /.tour-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="tour-one__single">
                            <div class="tour-one__image">
                                <img src="assets/images/tour/tour-1-3.jpg" alt="">
                                <a href="tour-details.html"><i class="fa fa-heart"></i></a>
                            </div><!-- /.tour-one__image -->
                            <div class="tour-one__content">
                                <div class="tour-one__stars">
                                    <i class="fa fa-star"></i> 7.0 Superb
                                </div><!-- /.tour-one__stars -->
                                <h3><a href="tour-details.html">Discover Depth of Beach</a></h3>
                                <p><span>$1399</span> / Per Person</p>
                                <ul class="tour-one__meta list-unstyled">
                                    <li><a href="tour-details.html"><i class="far fa-clock"></i> 3 Days</a></li>
                                    <li><a href="tour-details.html"><i class="far fa-user-circle"></i> 12+</a></li>
                                    <li><a href="tour-details.html"><i class="far fa-map"></i> Los Angeles</a></li>
                                </ul><!-- /.tour-one__meta -->
                            </div><!-- /.tour-one__content -->
                        </div><!-- /.tour-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="tour-one__single">
                            <div class="tour-one__image">
                                <img src="assets/images/tour/tour-1-4.jpg" alt="">
                                <a href="tour-details.html"><i class="fa fa-heart"></i></a>
                            </div><!-- /.tour-one__image -->
                            <div class="tour-one__content">
                                <div class="tour-one__stars">
                                    <i class="fa fa-star"></i> 8.8 Superb
                                </div><!-- /.tour-one__stars -->
                                <h3><a href="tour-details.html">Moscow Red City Land</a></h3>
                                <p><span>$1870</span> / Per Person</p>
                                <ul class="tour-one__meta list-unstyled">
                                    <li><a href="tour-details.html"><i class="far fa-clock"></i> 3 Days</a></li>
                                    <li><a href="tour-details.html"><i class="far fa-user-circle"></i> 12+</a></li>
                                    <li><a href="tour-details.html"><i class="far fa-map"></i> Los Angeles</a></li>
                                </ul><!-- /.tour-one__meta -->
                            </div><!-- /.tour-one__content -->
                        </div><!-- /.tour-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="tour-one__single">
                            <div class="tour-one__image">
                                <img src="assets/images/tour/tour-1-5.jpg" alt="">
                                <a href="tour-details.html"><i class="fa fa-heart"></i></a>
                            </div><!-- /.tour-one__image -->
                            <div class="tour-one__content">
                                <div class="tour-one__stars">
                                    <i class="fa fa-star"></i> 8.0 Superb
                                </div><!-- /.tour-one__stars -->
                                <h3><a href="tour-details.html">Magic of Italy Tours</a></h3>
                                <p><span>$1478</span> / Per Person</p>
                                <ul class="tour-one__meta list-unstyled">
                                    <li><a href="tour-details.html"><i class="far fa-clock"></i> 3 Days</a></li>
                                    <li><a href="tour-details.html"><i class="far fa-user-circle"></i> 12+</a></li>
                                    <li><a href="tour-details.html"><i class="far fa-map"></i> Los Angeles</a></li>
                                </ul><!-- /.tour-one__meta -->
                            </div><!-- /.tour-one__content -->
                        </div><!-- /.tour-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="tour-one__single">
                            <div class="tour-one__image">
                                <img src="assets/images/tour/tour-1-6.jpg" alt="">
                                <a href="tour-details.html"><i class="fa fa-heart"></i></a>
                            </div><!-- /.tour-one__image -->
                            <div class="tour-one__content">
                                <div class="tour-one__stars">
                                    <i class="fa fa-star"></i> 8.0 Superb
                                </div><!-- /.tour-one__stars -->
                                <h3><a href="tour-details.html">Discover Depth of Beach</a></h3>
                                <p><span>$1399</span> / Per Person</p>
                                <ul class="tour-one__meta list-unstyled">
                                    <li><a href="tour-details.html"><i class="far fa-clock"></i> 3 Days</a></li>
                                    <li><a href="tour-details.html"><i class="far fa-user-circle"></i> 12+</a></li>
                                    <li><a href="tour-details.html"><i class="far fa-map"></i> Los Angeles</a></li>
                                </ul><!-- /.tour-one__meta -->
                            </div><!-- /.tour-one__content -->
                        </div><!-- /.tour-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="tour-one__single">
                            <div class="tour-one__image">
                                <img src="assets/images/tour/tour-1-7.jpg" alt="">
                                <a href="tour-details.html"><i class="fa fa-heart"></i></a>
                            </div><!-- /.tour-one__image -->
                            <div class="tour-one__content">
                                <div class="tour-one__stars">
                                    <i class="fa fa-star"></i> 8.0 Superb
                                </div><!-- /.tour-one__stars -->
                                <h3><a href="tour-details.html">Discover Depth of Beach</a></h3>
                                <p><span>$2000</span> / Per Person</p>
                                <ul class="tour-one__meta list-unstyled">
                                    <li><a href="tour-details.html"><i class="far fa-clock"></i> 3 Days</a></li>
                                    <li><a href="tour-details.html"><i class="far fa-user-circle"></i> 12+</a></li>
                                    <li><a href="tour-details.html"><i class="far fa-map"></i> Los Angeles</a></li>
                                </ul><!-- /.tour-one__meta -->
                            </div><!-- /.tour-one__content -->
                        </div><!-- /.tour-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="tour-one__single">
                            <div class="tour-one__image">
                                <img src="assets/images/tour/tour-1-8.jpg" alt="">
                                <a href="tour-details.html"><i class="fa fa-heart"></i></a>
                            </div><!-- /.tour-one__image -->
                            <div class="tour-one__content">
                                <div class="tour-one__stars">
                                    <i class="fa fa-star"></i> 8.0 Superb
                                </div><!-- /.tour-one__stars -->
                                <h3><a href="tour-details.html">Moscow Red City Land</a></h3>
                                <p><span>$1870</span> / Per Person</p>
                                <ul class="tour-one__meta list-unstyled">
                                    <li><a href="tour-details.html"><i class="far fa-clock"></i> 3 Days</a></li>
                                    <li><a href="tour-details.html"><i class="far fa-user-circle"></i> 12+</a></li>
                                    <li><a href="tour-details.html"><i class="far fa-map"></i> Los Angeles</a></li>
                                </ul><!-- /.tour-one__meta -->
                            </div><!-- /.tour-one__content -->
                        </div><!-- /.tour-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="tour-one__single">
                            <div class="tour-one__image">
                                <img src="assets/images/tour/tour-1-9.jpg" alt="">
                                <a href="tour-details.html"><i class="fa fa-heart"></i></a>
                            </div><!-- /.tour-one__image -->
                            <div class="tour-one__content">
                                <div class="tour-one__stars">
                                    <i class="fa fa-star"></i> 8.0 Superb
                                </div><!-- /.tour-one__stars -->
                                <h3><a href="tour-details.html">National Park 2 Days Tour</a></h3>
                                <p><span>$1870</span> / Per Person</p>
                                <ul class="tour-one__meta list-unstyled">
                                    <li><a href="tour-details.html"><i class="far fa-clock"></i> 3 Days</a></li>
                                    <li><a href="tour-details.html"><i class="far fa-user-circle"></i> 12+</a></li>
                                    <li><a href="tour-details.html"><i class="far fa-map"></i> Los Angeles</a></li>
                                </ul><!-- /.tour-one__meta -->
                            </div><!-- /.tour-one__content -->
                        </div><!-- /.tour-one__single -->
                    </div><!-- /.item -->
                </div><!-- /.tour-one__carousel -->
            </div><!-- /.container -->
        </section><!-- /.tour-one -->


        {{-- <section class="testimonials-one">
            <div class="container">
                <div class="block-title text-center">
                    <p>checkout our</p>
                    <h3>Top Tour Reviews</h3>
                </div><!-- /.block-title -->
                <div class="testimonials-one__carousel thm__owl-carousel light-dots owl-carousel owl-theme" data-options='{"nav": false, "autoplay": true, "autoplayTimeout": 5000, "smartSpeed": 700, "dots": true, "margin": 30, "loop": true, "responsive": { "0": { "items": 1, "nav": true, "navText": ["Prev", "Next"], "dots": false }, "767": { "items": 1, "nav": true, "navText": ["Prev", "Next"], "dots": false }, "991": { "items": 2 }, "1199": { "items": 2 }, "1200": { "items": 3 } }}'>
                    <div class="item">
                        <div class="testimonials-one__single">
                            <div class="testimonials-one__content">
                                <div class="testimonials-one__stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.testimonials-one__stars -->
                                <p>There are many variations of passages of lorem ipsum but the majority have alteration in some form, by randomised words look. Aene an commodo ligula eget dolorm sociis.</p>
                            </div><!-- /.testimonials-one__content -->
                            <div class="testimonials-one__info">
                                <img src="assets/images/testimonials/testimonials-1-1.jpg" alt="">
                                <h3>Kevin Smith</h3>
                            </div><!-- /.testimonials-one__info -->
                        </div><!-- /.testimonials-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-one__single">
                            <div class="testimonials-one__content">
                                <div class="testimonials-one__stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.testimonials-one__stars -->
                                <p>There are many variations of passages of lorem ipsum but the majority have alteration in some form, by randomised words look. Aene an commodo ligula eget dolorm sociis.</p>
                            </div><!-- /.testimonials-one__content -->
                            <div class="testimonials-one__info">
                                <img src="assets/images/testimonials/testimonials-1-2.jpg" alt="">
                                <h3>Christine Eve</h3>
                            </div><!-- /.testimonials-one__info -->
                        </div><!-- /.testimonials-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-one__single">
                            <div class="testimonials-one__content">
                                <div class="testimonials-one__stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.testimonials-one__stars -->
                                <p>There are many variations of passages of lorem ipsum but the majority have alteration in some form, by randomised words look. Aene an commodo ligula eget dolorm sociis.</p>
                            </div><!-- /.testimonials-one__content -->
                            <div class="testimonials-one__info">
                                <img src="assets/images/testimonials/testimonials-1-3.jpg" alt="">
                                <h3>Mike Hardson</h3>
                            </div><!-- /.testimonials-one__info -->
                        </div><!-- /.testimonials-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-one__single">
                            <div class="testimonials-one__content">
                                <div class="testimonials-one__stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.testimonials-one__stars -->
                                <p>There are many variations of passages of lorem ipsum but the majority have alteration in some form, by randomised words look. Aene an commodo ligula eget dolorm sociis.</p>
                            </div><!-- /.testimonials-one__content -->
                            <div class="testimonials-one__info">
                                <img src="assets/images/testimonials/testimonials-1-1.jpg" alt="">
                                <h3>Kevin Smith</h3>
                            </div><!-- /.testimonials-one__info -->
                        </div><!-- /.testimonials-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-one__single">
                            <div class="testimonials-one__content">
                                <div class="testimonials-one__stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.testimonials-one__stars -->
                                <p>There are many variations of passages of lorem ipsum but the majority have alteration in some form, by randomised words look. Aene an commodo ligula eget dolorm sociis.</p>
                            </div><!-- /.testimonials-one__content -->
                            <div class="testimonials-one__info">
                                <img src="assets/images/testimonials/testimonials-1-2.jpg" alt="">
                                <h3>Christine Eve</h3>
                            </div><!-- /.testimonials-one__info -->
                        </div><!-- /.testimonials-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-one__single">
                            <div class="testimonials-one__content">
                                <div class="testimonials-one__stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.testimonials-one__stars -->
                                <p>There are many variations of passages of lorem ipsum but the majority have alteration in some form, by randomised words look. Aene an commodo ligula eget dolorm sociis.</p>
                            </div><!-- /.testimonials-one__content -->
                            <div class="testimonials-one__info">
                                <img src="assets/images/testimonials/testimonials-1-3.jpg" alt="">
                                <h3>Mike Hardson</h3>
                            </div><!-- /.testimonials-one__info -->
                        </div><!-- /.testimonials-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-one__single">
                            <div class="testimonials-one__content">
                                <div class="testimonials-one__stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.testimonials-one__stars -->
                                <p>There are many variations of passages of lorem ipsum but the majority have alteration in some form, by randomised words look. Aene an commodo ligula eget dolorm sociis.</p>
                            </div><!-- /.testimonials-one__content -->
                            <div class="testimonials-one__info">
                                <img src="assets/images/testimonials/testimonials-1-1.jpg" alt="">
                                <h3>Kevin Smith</h3>
                            </div><!-- /.testimonials-one__info -->
                        </div><!-- /.testimonials-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-one__single">
                            <div class="testimonials-one__content">
                                <div class="testimonials-one__stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.testimonials-one__stars -->
                                <p>There are many variations of passages of lorem ipsum but the majority have alteration in some form, by randomised words look. Aene an commodo ligula eget dolorm sociis.</p>
                            </div><!-- /.testimonials-one__content -->
                            <div class="testimonials-one__info">
                                <img src="assets/images/testimonials/testimonials-1-2.jpg" alt="">
                                <h3>Christine Eve</h3>
                            </div><!-- /.testimonials-one__info -->
                        </div><!-- /.testimonials-one__single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="testimonials-one__single">
                            <div class="testimonials-one__content">
                                <div class="testimonials-one__stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div><!-- /.testimonials-one__stars -->
                                <p>There are many variations of passages of lorem ipsum but the majority have alteration in some form, by randomised words look. Aene an commodo ligula eget dolorm sociis.</p>
                            </div><!-- /.testimonials-one__content -->
                            <div class="testimonials-one__info">
                                <img src="assets/images/testimonials/testimonials-1-3.jpg" alt="">
                                <h3>Mike Hardson</h3>
                            </div><!-- /.testimonials-one__info -->
                        </div><!-- /.testimonials-one__single -->
                    </div><!-- /.item -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.testimonials-one --> --}}

        <section class="cta-four" style="background-image: url(assets/images/backgrounds/cta-4-bg.jpg);">
            <div class="container">
                <p>Find next place to visit</p>
                <h3>Explore the <span>world</span></h3>
                {{-- <a href="tour-details.html" class="thm-btn cta-four__btn">Start Booking now</a><!-- /.thm-btn --> --}}
            </div><!-- /.container -->
        </section><!-- /.cta-four -->


        {{-- <div class="brand-one brand-one__home-two">
            <div class="container">
                <div class="brand-one__carousel owl-theme owl-carousel thm__owl-carousel" data-options='{"nav": false, "autoplay": true, "autoplayTimeout": 5000, "smartSpeed": 700, "dots": false, "margin": 115, "responsive": { "0": { "items": 2, "margin": 20 }, "480": { "items": 2, "margin": 20 }, "767": { "items": 3, "margin": 20 }, "991": { "items": 4, "margin": 40 }, "1199": { "items": 5 } }}'>
                    <div class="item">
                        <img src="assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                    <div class="item">
                        <img src="assets/images/resources/brand-1-1.png" alt="">
                    </div><!-- /.item -->
                </div><!-- /.brand-one__carousel owl-theme owl-carousel thm__owl-carousel -->
            </div><!-- /.container -->
        </div><!-- /.brand-one --> --}}

        <section class="blog-one">
            <div class="container">
                <div class="block-title text-center">
                    <p>Check out Our</p>
                    <h3>Latest News & Articles</h3>
                </div><!-- /.block-title -->
                <div class="row">
                    <div class="col-lg-4 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="000ms">
                        <div class="blog-one__single">
                            <div class="blog-one__image">
                                <img src="assets/images/blog/blog-1-1.jpg" alt="">
                                <a href="news-details.html"><i class="fa fa-long-arrow-alt-right"></i></a>
                            </div><!-- /.blog-one__image -->
                            <div class="blog-one__content">
                                <ul class="list-unstyled blog-one__meta">
                                    <li><a href="news-details.html"><i class="far fa-user-circle"></i> Admin</a></li>
                                    <li><a href="news-details.html"><i class="far fa-comments"></i> 2 Comments</a></li>
                                </ul><!-- /.list-unstyled blog-one__meta -->
                                <h3><a href="news-details.html">14 Things to see and do when
                                        visiting japan</a></h3>
                            </div><!-- /.blog-one__content -->
                        </div><!-- /.blog-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="blog-one__single">
                            <div class="blog-one__image">
                                <img src="assets/images/blog/blog-1-2.jpg" alt="">
                                <a href="news-details.html"><i class="fa fa-long-arrow-alt-right"></i></a>
                            </div><!-- /.blog-one__image -->
                            <div class="blog-one__content">
                                <ul class="list-unstyled blog-one__meta">
                                    <li><a href="news-details.html"><i class="far fa-user-circle"></i> Admin</a></li>
                                    <li><a href="news-details.html"><i class="far fa-comments"></i> 2 Comments</a></li>
                                </ul><!-- /.list-unstyled blog-one__meta -->
                                <h3><a href="news-details.html">Journeys are best measured
                                        in new friends</a></h3>
                            </div><!-- /.blog-one__content -->
                        </div><!-- /.blog-one__single -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="blog-one__single">
                            <div class="blog-one__image">
                                <img src="assets/images/blog/blog-1-3.jpg" alt="">
                                <a href="news-details.html"><i class="fa fa-long-arrow-alt-right"></i></a>
                            </div><!-- /.blog-one__image -->
                            <div class="blog-one__content">
                                <ul class="list-unstyled blog-one__meta">
                                    <li><a href="news-details.html"><i class="far fa-user-circle"></i> Admin</a></li>
                                    <li><a href="news-details.html"><i class="far fa-comments"></i> 2 Comments</a></li>
                                </ul><!-- /.list-unstyled blog-one__meta -->
                                <h3><a href="news-details.html">Travel the most beautiful
                                        places in the world</a></h3>
                            </div><!-- /.blog-one__content -->
                        </div><!-- /.blog-one__single -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog-one -->

        <section class="mailchimp-one">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <h3>Get Latest Tour Updates <br>
                            by Signing Up</h3>
                    </div><!-- /.col-lg-5 -->
                    <div class="col-lg-5">
                        {{-- <form action="#" class="mailchimp-one__form mc-form" data-url="https://xyz.us18.list-manage.com/subscribe/post?u=20e91746ef818cd941998c598&amp;id=cc0ee8140e">
                            <input type="text" placeholder="Email Address"> --}}
                            <button class="thm-btn mailchimp-one__btn" type="submit">sginup Now</button>
                        {{-- </form><!-- /.mailchimp-one__form --> --}}
                        <div class="mc-form__response"></div><!-- /.mc-form__response -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.mailchimp-one -->

        @endsection
