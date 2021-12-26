@extends('publicSite.layout.master')

@section('content')
<div class="main-content add-trip-form">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-lg-12">
                        <div class="card trip-form">
                            <div class="card-header">Add Trip</div>
                            <div class="card-body card-block">
                                <form action="{{route('trips-details.update', $edited_trip->id)}}" method="POST" enctype="multipart/form-data" class="create-trip-form">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" id="username2" name="name" value="{{$edited_trip->name}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" value="{{$edited_trip->description}}"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="number" id="max_visitors" name="max_visitors" value="{{$edited_trip->max_visitors}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="number" id="price" name="price" value="{{$edited_trip->price}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="number" id="days" name="days" value="{{$edited_trip->days}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="number" id="minimum_age" name="minimum_age" value="{{$edited_trip->minimum_age}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="date" id="date" name="date" value="{{$edited_trip->date}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <select class="form-select" aria-label="Default select example" name='category'>
                                                <option selected>{{$current_category->category_name}}</option>
                                                @foreach($categories as $category)
                                                <option>{{$category->category_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <img src="{{asset('trip_images/'.$edited_trip->image)}}" alt="current trip image" class="img-fluid">
                                            <input type="file" id="image" name="image" value="{{$edited_trip->image}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-actions form-group">
                                        <button type="submit" class="btn btn-secondary btn-sm">Update Trip</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection