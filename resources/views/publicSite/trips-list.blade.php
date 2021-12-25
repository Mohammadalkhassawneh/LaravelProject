@extends('publicSite.layout.master')

@section('content')


    
        <section class="blog-list" style="margin-top: 150px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        
                        @foreach ($trips as $trip)
                        <div class="blog-two__single blog-one__single">
                            <div class="row">
                               
                                <div class="col-md-6">
                                    <div class="blog-one__image">
                                        {{-- <img src="{{asset(images/$trip->image)}}" alt=""> --}}
                                        <a href="news-details.html"><i class="fa fa-long-arrow-alt-right"></i></a>
                                    </div><!-- /.blog-one__image -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-md-6 d-flex">
                                    <div class="blog-two__content my-auto">
                                        <ul class="list-unstyled blog-one__meta">
                                            <li><a href="news-details.html"><i class="far fa-user-circle"></i>{{$trip->guide->name}}</a></li>
                                            <li><a href="news-details.html"><i class="far fa-comments"></i>{{ $trip->date }}</a></li>
                                        </ul><!-- /.list-unstyled blog-one__meta -->
                                        <h3><a href="news-details.html">{{ $trip->name }}</a></h3>
                                        <p>{{ $trip->description}}</p>
                                        <a href="news-details.html" class="blog-two__link">Read More</a>
                                    </div><!-- /.blog-two__content -->
                                </div><!-- /.col-md-6 -->
                                
                                
                            </div><!-- /.row -->
                        </div><!-- /.blog-two__single -->
                        @endforeach
                        
                        <div class="post-pagination">
                            <a href="#"><i class="fa fa-angle-left"></i></a>
                            <a class="active" href="#">01</a>
                            <a href="#">02</a>
                            <a href="#">03</a>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div><!-- /.post-pagination -->
                    </div><!-- /.col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="sidebar__single sidebar__search">
                                <form action="#" class="sidebar__search-form">
                                    <input type="search" placeholder="Search">
                                    <button type="submit"><i class="tripo-icon-magnifying-glass"></i></button>
                                </form><!-- /.sidebar__search-form -->
                            </div><!-- /.sidebar__single -->
                            
                            <div class="sidebar__single sidebar__category">
                                <h3 class="sidebar__title">All Categories</h3><!-- /.sidebar__title -->
                                <ul class="sidebar__category-list list-unstyled">
                                    @foreach ($collection as $item)
                                    <li><a href="#">Trip & Tours</a></li>
                                    @endforeach
                                    
                                    
                                </ul><!-- /.sidebar__category-list list-unstyled -->
                            </div><!-- /.sidebar__single sidebar__category -->
                            <div class="sidebar__single sidebar__tags">
                                <h3 class="sidebar__title">Popular Tags</h3><!-- /.sidebar__title -->
                                <div class="sidebar__tags-list">
                                    <a href="#">Tour</a>
                                    <a href="#">Travel</a>
                                    <a href="#">beach</a>
                                    <a href="#">Mountain</a>
                                    <a href="#">Adventures</a>
                                    <a href="#">parks</a>
                                    <a href="#">Museums</a>
                                </div><!-- /.sidebar__tags-list -->
                            </div><!-- /.sidebar__single sidebar__tags -->
                            <div class="sidebar__single sidebar__twitter">
                                <h3 class="sidebar__title">Tweets</h3><!-- /.sidebar__title -->
                                <div class="thm__owl-carousel sidebar__twitter-carousel owl-carousel owl-theme" data-options='{"dots": true, "nav": false, "items": 1, "smartSpeed": 700, "loop": true, "autoplay": true, "autoplayTimeout": 5000}'>
                                    <div class="item">
                                        <div class="sidebar__twitter-single">
                                            <p><a href="#" class="sidebar__twitter-user">@Layerdrops</a> Let’s Now You Personalized
                                                Service for Your Most Valuable Assets. <a href="http://yhdj58.tp8/JK">http://yhdj58.tp8/JK</a></p>
                                            <h4><i class="fab fa-twitter"></i> <a href="#">Tripo</a> <span>-</span> 16 Jan, 2019</h4>
                                        </div><!-- /.sidebar__twitter-single -->
                                    </div><!-- /.item -->
                                    <div class="item">
                                        <div class="sidebar__twitter-single">
                                            <p><a href="#" class="sidebar__twitter-user">@Layerdrops</a> Let’s Now You Personalized
                                                Service for Your Most Valuable Assets. <a href="http://yhdj58.tp8/JK">http://yhdj58.tp8/JK</a></p>
                                            <h4><i class="fab fa-twitter"></i> <a href="#">Tripo</a> <span>-</span> 16 Jan, 2019</h4>
                                        </div><!-- /.sidebar__twitter-single -->
                                    </div><!-- /.item -->
                                    <div class="item">
                                        <div class="sidebar__twitter-single">
                                            <p><a href="#" class="sidebar__twitter-user">@Layerdrops</a> Let’s Now You Personalized
                                                Service for Your Most Valuable Assets. <a href="http://yhdj58.tp8/JK">http://yhdj58.tp8/JK</a></p>
                                            <h4><i class="fab fa-twitter"></i> <a href="#">Tripo</a> <span>-</span> 16 Jan, 2019</h4>
                                        </div><!-- /.sidebar__twitter-single -->
                                    </div><!-- /.item -->
                                </div><!-- /.sidebar__twitter-carousel owl-carousel owl-theme -->

                            </div><!-- /.sidebar__single sidebar__twitter -->
                            <div class="sidebar__single sidebar__social">
                                <h3 class="sidebar__title">Follow Us</h3><!-- /.sidebar__title -->
                                <div class="sidebar__social-list">
                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div><!-- /.sidebar__social-list -->
                            </div><!-- /.sidebar__single sidebar__twitter -->
                        </div><!-- /.sidebar -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog-list -->


        @endsection