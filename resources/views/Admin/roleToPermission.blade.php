@extends('layouts.adminMaster')
@section('adminContent')
    <div id="wrapper">

        <!-- Navigation -->
     @include('Admin.topNavbar')
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Forms</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="container w-75">
                                <h2 class="text-info">{{ $role->name }}</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>Has Roles</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            @foreach($role->permissions as $permission)
                                                                <form action="{{ route('admin.detachPermissionFromRole', ['role'=>$role, 'permission'=>$permission]) }}" method="post">
                                                                    {{ csrf_field() }}
                                                                    <label class="badge badge-success">{{ $permission->name }}</label>
                                                                    <button class="btn btn-light" type="submit" style="background-color: white">
                                                                        <i class="fa fa-minus-circle text-danger"></i>
                                                                    </button>
                                                                </form>
                                                            @endforeach
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>Nope Roles</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            @foreach($permissions->diff($role->permissions) as $permission)
                                                                <form action="{{ route('admin.attachPermissionToRole', ['role'=>$role, 'permission'=>$permission]) }}" method="post">
                                                                    {{ csrf_field() }}
                                                                    <label class="badge badge-success">{{ $permission->name }}</label>
                                                                    <button class="btn btn-light" type="submit" style="background-color: white">
                                                                        <i class="fa fa-plus-circle text-success"></i>
                                                                    </button>
                                                                </form>
                                                            @endforeach
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection