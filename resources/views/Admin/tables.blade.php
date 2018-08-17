@extends('layouts.adminMaster')
@section('adminContent')

<div id="wrapper">

    <!-- Navigation -->
    @include('Admin.topNavbar')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tables</h1>
            </div>
        </div>
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item active">
                <a class="nav-link" data-toggle="tab" href="#home">Users</a>
            </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu1">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu2">SecondaryAdmin</a>
                        </li>

        </ul>
        <div class="tab-content">
            <div id="home" class="tab-pane active"><br>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Users
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <form action="{{ route('search.list') }}" class="form-group" method="post">
                            {{ csrf_field() }}
                            <input type="text" name="search" class="form-control" placeholder="Search live" id="search" autocomplete="off">
                        </form>
                        <div class="table-responsive" id="myDiv">
                            <table class="table table-bordered" id="myTable" style="font-size: 20px">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Full Name</th>
                                    <th>E-mail</th>
                                    <th>Roles</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody id="usersList">
                                <?php $i = 0; ?>
                                     @foreach($users as $user)
                                         @if(Auth::user()->id == $user->parent_id || Auth::user()->hasRole('Superadmin') || Auth::user()->hasRole('Admin'))
                                         <tr>
                                             <td>{{ ++$i }}</td>
                                             <td>{{ $user->name }}</td>
                                             <td>{{ $user->email }}</td>
                                             <td>
                                                     @foreach($user->roles as $role)
                                                         <label class="badge badge-success" style="background-color: forestgreen">{{ $role->name }}</label>
                                                     @endforeach
                                             </td>
                                             <td>

                                                 <form action="" class="d-block">
                                                     @if(Auth::user()->can('user-list'))
                                                         <a class="btn btn-info" href="{{ route('user.show', [$user]) }}">Show</a>
                                                     @endif
                                                     @can('user-edit')
                                                         <a class="btn btn-primary" href="{{ route('user.edit', [$user])}}">Edit</a>
                                                     @endcan
                                                     @if(Auth::user()->hasRole('Superadmin'))
                                                         @can('user-delete')
                                                            <button class="btn btn-danger">Delete</button>
                                                         @endcan
                                                     @endif
                                                 </form>
                                             </td>
                                         </tr>
                                         @endif
                                     @endforeach

                                </tbody>
                            </table>
                            <div id="">{{ $users->links() }}</div>
                        </div>
                    </div>
                </div>

            </div>
<div id="menu1" class="container tab-pane fade"><br>

    <div class="panel panel-default">
        <div class="panel-heading">
            Admins
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered"  style="font-size: 20px">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Admin Name</th>
                        <th>Admin Email</th>
                        <th>Admin roles</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 0; ?>
                    @foreach($users as $user)
                        @foreach($user->roles as $role)
                            <tr>
                            @if($user->hasRole('Admin'))
                                <td>{{ ++$i }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email}}</td>
                                <td><label class="badge badge-info" style="background-color: forestgreen">{{ $role->name}}</label></td>
                            @endif
                            </tr>
                        @endforeach
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
    </div>

</div>


                <div id="menu2" class="container tab-pane fade"><br>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        SecondaryAdmin
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered"  style="font-size: 20px">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>SecondaryAdmin Name</th>
                                    <th>SecondaryAdmin Email</th>
                                    <th>SecondaryAdmin roles</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $e = 0; ?>
                                @foreach($users as $user)
                                    @foreach($user->roles as $role)
                                        <tr>
                                            @if($user->hasRole('ChildOfAdmin'))
                                                <td>{{ ++$e }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email}}</td>
                                                <td><label class="badge badge-info" style="background-color: forestgreen">{{ $role->name}}</label></td>
                                            @endif
                                        </tr>
                                    @endforeach
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>

            </div>
        </div>
    </div>
</div>
@endsection