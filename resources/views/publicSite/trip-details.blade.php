@extends('publicSite.layout.master')

@section('content')

        <section class="page-header" style="background-image:url(../assets/images/backgrounds/page-header-contact.jpg);margin-top: 145px">
            <div class="container">
                <h2>News Details</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{route('home2')}}">Home</a></li>
                    <li><span>News</span></li>
                </ul><!-- /.thm-breadcrumb -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

<section class="blog-list">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <div class="blog-details__image">

                    <img src="{{asset('trip_images/'.$tripDetails->image)}}" alt="" class="img-fluid">

                </div><!-- /.blog-details__image -->
                <div class="blog-details__content">
                    <ul class="list-unstyled blog-one__meta">
                        <li><a href="{{route('guide',$tripDetails->guide->id)}}"><i class="far fa-user-circle"></i> {{$tripDetails->guide->name}}</a></li>
                        <li><a><i class="far fa-calendar-alt"></i> {{$tripDetails->date}}</a></li>
                    </ul><!-- /.list-unstyled blog-one__meta -->
                    <h3>{{$tripDetails->name}}</h3>
                    <p>{{$tripDetails->description}}</p>

                    <br>
                                {{-- ======================= --}}

                        
                        <!-- Button trigger modal -->
                        <button type="button" class="edit-trip" data-toggle="modal" data-target="#exampleModalCenter">
                            Book Now!
                           </button>
                           
                           <!-- Modal -->
                           <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                             <div class="modal-dialog modal-dialog-centered" role="document">
                               <div class="modal-content">
                                 <div class="modal-header">
                                   <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                   </button>
                                 </div>
                                 <div class="modal-body">
                                   Your Request Will be sent to the guide, The guide Will contact you within 24 hours
                                 </div>
                                 <div class="modal-footer">
                                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          
                                   <form action="{{route('reservation.store')}}" method="Post">
                                    @csrf
     
                                    <input type="hidden" value="{{$tripDetails->id}}" name="trip_id">
                           <button class="edit-trip "  type="submit"  onclick="alert('Your Request successfully sent!')">Send requet </button>
                        </form>
                                 </div>
                               </div>
                             </div>
                           </div>
   
                           {{-- ==================================== --}}
                           {{-- <button   onclick="alert('Test me')">Send requet </button> --}}
                    

                    <div class="blog-details__bottom">
                        


                        <div class="sidebar__social-list">
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-dribbble"></i></a>
                        </div><!-- /.sidebar__social-list -->
                    </div><!-- /.blog-details__bottom -->
                </div><!-- /.blog-details__content -->
                
            

            </div><!-- /.col-lg-8 -->
            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="sidebar__single sidebar__search">
                        <form action="#" class="sidebar__search-form">
                            <input type="search" placeholder="Search">
                            <button type="submit"><i class="tripo-icon-magnifying-glass"></i></button>
                        </form><!-- /.sidebar__search-form -->
                    </div><!-- /.sidebar__single -->

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