@extends('publicSite.layout.master')

@section('content')


<section class="page-header" style="background-image: url(assets/images/backgrounds/page-header-contact.jpg);">
    <div class="container">
        <h2>Guide Profile</h2>
        <ul class="thm-breadcrumb list-unstyled s">
            <li><a href="{{ route("home2")}}">Home</a></li>
            <li><span>Guide Profile</span></li>
        </ul>
    </div>
</section>
<!-- Sahar Start -->
<section class="user_profile">
    <div class="container">
        <div class="row">
            <!-- Guide Information -->
            <div class="col-4 guide-info">
                <img src="{{asset('user_images/'.'guide.jpg')}}" alt="guide_photo" class="user_img">
                <h2 class="username">Ahmad</h2>
                <div class="container">
                    <div class="row contact_info">
                        <div class="col-2 icons">
                            <h4><i class="fas fa-envelope"></i></h4>
                            <h4><i class="fas fa-mobile-alt"></i></h4>
                        </div>
                        <div class="col-10">
                            <h4>user@example.com</h4>
                            <h4>0777 777 777</h4>
                        </div>
                    </div>
                </div>
                <div class="buttons-list">
                    <div class="row">
                        <div class="col-4">
                        </div>
                        <div class="col-8">
                            <a href="{{route('userprofile.edit', Auth::user()->id)}}">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Guide Trips -->
            <div class="col-8 guide-trips">
                <h2 class="mb-5">My Trips</h2>
                <!-- Trips -->
                <div class="trip">
                    <div class="container">
                        <!-- Trip Information -->
                        <div class="row">
                            <div class="col-5">
                                <img src="{{asset('uploads/'.'salt.jpg')}}" alt="guide_photo" class="trip_img">
                            </div>
                            <div class="col-7">
                                <h4>Aqaba</h4>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus sapiente beatae temporibus sunt provident ab velit aliquam enim ullam reiciendis.</p>
                                <h6>500 Jd</h6>
                                <a href="" class="show-trip">Show Trip</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Sahar End -->
@endsection
