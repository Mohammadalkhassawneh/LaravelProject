@extends('admin.layout.master')
@section('content')

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- DATA TABLE -->
                    <h3 class="title-5 m-b-35">Manage Users</h3>
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                        </div>
                        <div class="table-data__tool-right">
                            <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                <i class="zmdi zmdi-plus"></i><a href="{{'create'}}">Add Admin</a></button>
                        </div>
                    </div>
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                                <tr>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>password</th>
                                    <!-- <th>image</th> -->
                                    <th>phone</th>
                                    <th>date-created</th>
                                    <th>date-login</th>
                                    <th>role-type</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr class="tr-shadow">
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}
                                    </td>
                                    <td>{{$user->password}}</td>
                                    <!-- <td><img src="{{asset('user_images/'.$user->image)}}" alt="admin_photo"></td> -->
                                    <td>{{$user->phone}}</td>
                                    <td>{{$user->created_at}}</td>
                                    <td>{{$user->updated_at}}</td>
                                    <td>{{$user->role_type}}</td>
                                    <td>
                                        <div class="table-data-feature">
                                            <button type="submit" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <a href="/delete.{{$user->id}}"><i class="zmdi zmdi-delete"></i></a>

                                            </button>
                                            <button type="submit" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <a href="/edit_user{{$user->id}}"><i class="zmdi zmdi-edit"></i></a>

                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="spacer"></tr>
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