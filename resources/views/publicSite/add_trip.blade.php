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
                                <form action="{{route('storetrip'), Auth::user()->id}}" method="POST" enctype="multipart/form-data" class="create-trip-form">
                                    @csrf
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" id="username2" name="name" placeholder="Trip Name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" placeholder="Add Trip Description"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="number" id="max_visitors" name="max_visitors" placeholder="Max Visitors" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="number" id="price" name="price" placeholder="Price" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="date" id="date" name="date" placeholder="Trip Date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="file" id="image" name="image" placeholder="Image" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-actions form-group">
                                        <button type="submit" class="btn btn-secondary btn-sm">Add Trip</button>
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