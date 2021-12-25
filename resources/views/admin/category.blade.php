@extends("admin.layout.master")

@section('content')

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">


                    <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Category Table</h3>
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
                                    <a href="{{ route('categories.create') }}"  style="float: right;"class="au-btn au-btn-icon au-btn--green au-btn--small">Add Category</a>
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
                                                <th> Image</th>
                                                <th>Name </th>
                                                <th> Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($category as $item)
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>



                                                <td> <img src="{{ asset('uploads/'. $item->category_img) }}" width="100px" height="70px" alt="Image"></td>


                                                <td>
                                                 <span>{{ $item->category_name}}</span>
                                                </td>


                                                <td class="desc">{{ $item->category_desc}}</td>



                                                <td>
                                                <div style="display: flex;">
                                                 <a style="width: 60px;height: 30px;margin-right:10px" class="btn btn-info" href="{{ route ('categories.edit',$item->id)}}" > Edit</a>

                                                <form action="{{ route ('categories.destroy',$item->id)}}" method="post"> {{-- Delete --}}
                                                @csrf
                                                @method('delete')
                                                <input style="width:60px;height: 30px;margin-right:10px" type="submit" class="btn btn-danger" value="delete">
                                                 </form>
                                                 </div>


                                                </td>
                                            </tr>

                                            @endforeach 

                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
</div>
</div>
</div>




@endsection