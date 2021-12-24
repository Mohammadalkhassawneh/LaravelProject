@extends("admin.layout.master")

@section('content')
        <div class="col-lg-12" style="margin-top: 120px">
            <!-- DATA TABLE -->
            <h3 class="title-5 m-b-35">data table</h3>
            <div class="table-data__tool">
                <div class="table-data__tool-left">
                    <div class="rs-select2--light rs-select2--md">
                        <select class="js-select2" name="property">
                            <option selected="selected">All Properties</option>
                            <option value="">Option 1</option>
                            <option value="">Option 2</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    <div class="rs-select2--light rs-select2--sm">
                        <select class="js-select2" name="time">
                            <option selected="selected">Today</option>
                            <option value="">3 Days</option>
                            <option value="">1 Week</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    <button class="au-btn-filter">
                        <i class="zmdi zmdi-filter-list"></i>filters</button>
                </div>
                <div class="table-data__tool-right">
                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                        <i class="zmdi zmdi-plus"></i>add item</button>
                    <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                        <select class="js-select2" name="type">
                            <option selected="selected">Export</option>
                            <option value="">Option 1</option>
                            <option value="">Option 2</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                </div>
            </div>
            <div class="table-responsive table-responsive-data2">
                <table class="table table-data2">
                    <thead>
                    <tr>
                        <th>
                            <label class="au-checkbox">
                                <input type="checkbox">
                                <span class="au-checkmark"></span>
                            </label>
                        </th>
                        <th>Reservation_id</th>
                        <th>user_id</th>
                        <th>trip_id</th>
                        <th>booking_date</th>
                        <th>status</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        @if((count($user->reservation)) > 0)
                        @foreach ($user->reservation as $value)
                        <tr class="tr-shadow">
                        <td>
                            <label class="au-checkbox">
                                <input type="checkbox">
                                <span class="au-checkmark"></span>
                            </label>
                        </td>
                            <td>{{$value->pivot->id}}</td>
                            <td>{{$value->pivot->user_id}}</td>
                            <td>{{$value->pivot->trip_id}}</td>
                            <td>{{$value->pivot->booking_date}}</td>
                            <td>{{$value->pivot->status}}</td>
                    </tr>
                        @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE -->
        </div>
@endsection
