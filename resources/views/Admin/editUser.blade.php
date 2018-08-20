@extends('layouts.adminMaster')
@section('adminContent')
    {{--
        @if(Auth::user()->can('lists', \App\User::class))
    --}}
    <div id="wrapper">

        <!-- Navigation -->
        @include('Admin.topNavbar')
        <div id="page-wrapper">
            <div class="tab-content">
                <div class="container-fluid">
                    <div class="row" style="margin-top: 80px; padding-top: 50px">
                        <div class="col-lg-6">
                            <input class="form-control" value="{{ $user->name }}" disabled="">
                            <input class="form-control" value="{{ $user->email }}" disabled="">
                            <div class="row">
                            <div class="col-lg-6">
                                <table class="table table-borderless">
                                    <thead>
                                    <tr>
                                        <th>Has Permission</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($user->permissions as $permission)
                                        <tr>
                                            <td>
                                                <form action="{{ route('admin.detachPermission', ['user' => $user, 'permission' => $permission]) }}" method="post">
                                                    {{ csrf_field() }}
                                                    <label class="badge badge-success">{{ $permission->name }}</label>
                                                    <button class="btn btn-light" type="submit" style="background-color: white">
                                                        <i class="fa fa-minus-circle text-danger"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-6">
                                <table class="table table-borderless">
                                    <thead>
                                    <tr>
                                        <th>Nope Permission</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($permissions->diff($user->permissions) as $permission)
                                        <tr>
                                        <td>
                                                <form action="{{ route('admin.attachPermission', ['user' => $user, 'permission' => $permission]) }}" method="post">
                                                    {{ csrf_field() }}
                                                    <label class="badge badge-success">{{ $permission->name }}</label>
                                                    <button class="btn btn-light" type="submit" style="background-color: white">
                                                        <i class="fa fa-plus-circle text-success"></i>
                                                    </button>
                                                </form>
                                        </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                        @if(Auth::user()->hasRole('Superadmin'))
                        <div class="col-lg-3">
                            <table class="table table-borderless">
                                <thead>
                                <tr>
                                    <th>Has Roles</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($user->roles as $role)
                                    <tr>
                                        <td>
                                            <form action="{{ route('admin.detachRole', ['user' => $user, 'role' => $role]) }}" method="post">
                                                {{ csrf_field() }}
                                                <label class="badge badge-success">{{ $role->name }}</label>
                                                <button class="btn btn-light" type="submit" style="background-color: white">
                                                    <i class="fa fa-minus-circle text-danger"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-3">
                            <table class="table table-borderless">
                                <thead>
                                <tr>
                                    <th>Nope roles</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($roles->diff($user->roles) as $role)
                                    <tr>
                                        <td>
                                                <form action="{{ route('admin.attachRole', ['user' => $user, 'role' => $role]) }}" method="post">
                                                    {{ csrf_field() }}
                                                    <label class="badge badge-success">{{ $role->name }}</label>
                                                    <button class="btn btn-light" type="submit" style="background-color: white">
                                                        <i class="fa fa-plus-circle text-success"></i>
                                                    </button>
                                                </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--
        @endif
    --}}

@endsection