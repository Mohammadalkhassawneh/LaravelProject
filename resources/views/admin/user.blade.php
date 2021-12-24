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
                                <i class="zmdi zmdi-plus"></i>Add Admin</button>
                        </div>
                    </div>
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>password</th>
                                    <th>image</th>
                                    <th>phone</th>
                                    <th>date-created</th>
                                    <th>date-login</th>
                                    <th>role-type</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="tr-shadow">
                                    <td>1</td>
                                    <td>Lori Lynch</td>
                                    <td>
                                        <span class="block-email">lori@example.com</span>
                                    </td>
                                    <td class="desc">Samsung S8 Black</td>
                                    <td>2018-09-27 02:12</td>
                                    <td>
                                        <span class="status--process">Processed</span>
                                    </td>
                                    <td>$679.00</td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="table-data-feature">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i class="zmdi zmdi-edit"></i>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <i class="zmdi zmdi-delete"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="spacer"></tr>
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