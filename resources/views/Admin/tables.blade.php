@extends('layouts.adminMaster')
@section('adminContent')
{{--
    @if(Auth::user()->can('lists', \App\User::class))
--}}
<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('admin.index') }}">Admin: {{ Auth::user()->name }}</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-messages">
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                <span class="pull-right text-muted">
                                    <em>Yesterday</em>
                                </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                <span class="pull-right text-muted">
                                    <em>Yesterday</em>
                                </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                <span class="pull-right text-muted">
                                    <em>Yesterday</em>
                                </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>Read All Messages</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-messages -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-tasks">
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 1</strong>
                                    <span class="pull-right text-muted">40% Complete</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 2</strong>
                                    <span class="pull-right text-muted">20% Complete</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        <span class="sr-only">20% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 3</strong>
                                    <span class="pull-right text-muted">60% Complete</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 4</strong>
                                    <span class="pull-right text-muted">80% Complete</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Tasks</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-tasks -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                <span class="pull-right text-muted small">12 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-envelope fa-fw"></i> Message Sent
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-tasks fa-fw"></i> New Task
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-alerts -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="{{ route('admin.index') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="flot.html">Flot Charts</a>
                            </li>
                            <li>
                                <a href="morris.html">Morris.js Charts</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="{{ route('admin.lists') }}"><i class="fa fa-table fa-fw"></i> Tables</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="panels-wells.html">Panels and Wells</a>
                            </li>
                            <li>
                                <a href="buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="notifications.html">Notifications</a>
                            </li>
                            <li>
                                <a href="typography.html">Typography</a>
                            </li>
                            <li>
                                <a href="icons.html"> Icons</a>
                            </li>
                            <li>
                                <a href="grid.html">Grid</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                </ul>
                                <!-- /.nav-third-level -->
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="blank.html">Blank Page</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.login') }}">Login Page</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
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
            @foreach(Auth::user()->user_permissions as $permission)
                    @if($permission->permissions === 'view-admin')
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu1">Admin</a>
                        </li>

                    @elseif($permission->permissions === 'view-admin-child')
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu2">Child of Admin</a>
                        </li>
                    @elseif($permission->permissions === 'view-superadmin')
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#menu3">Super admin</a>
                        </li>
                    @endif
            @endforeach
        </ul>
        <div class="tab-content">
            <div id="home" class="container tab-pane active"><br>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Users
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <form action="" class="form-group">
                            <input type="text" name="search" class="form-control" placeholder="Search live" id="search" autocomplete="off">
                        </form>
                        <div class="table-responsive" id="myDiv">
                            <table class="table table-bordered" id="myTable" style="font-size: 20px">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Full Name</th>
                                    <th>E-mail</th>
                                    <th colspan="3">Action</th>
                                </tr>
                                </thead>
                                <tbody id="usersList">

                                </tbody>
                            </table>
                            <div id="result"></div>
                            <script>
                                var url = '<?php echo route('users.list')?>';
                                var page = 1;
                                $(function () {
                                    function getDataInfo()

                                    {
                                        $.ajaxSetup({
                                            headers: {
                                                'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr('content')
                                            }
                                        });
                                        $.ajax({
                                            dataType: 'json',
                                            method: 'GET',
                                            url: url,
                                            data: {
                                                page: page,
                                            },
                                            success: function (data) {
                                                writeData(data);
                                            },
                                        });
                                    }
                                    getDataInfo();
                                    function writeData(data) {
                                        var id = 1;
                                        var user = '';
                                        var access = '';
                                        $.each(data, function (key, value) {
                                            user = user + "<tr>";
                                            user = user + "<td>" + id++ + "</td>";
                                            user = user + "<td>" + value.name + "</td>";
                                            user = user + "<td>" + value.email+ "</td>";
                                            user = user + "<td><p style='font-size: 15px;' class='badge'>" + value.roles + "</p></td>";
                                            user = user + "</tr>";
                                            $('#usersList').html(user);
                                        });
                                    }

                                    $('#search').on('keyup', function(){

                                        $value=$(this).val();
                                        $.ajaxSetup({
                                            headers: {
                                                'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr('content')
                                            }
                                        });
                                        $.ajax({

                                            type : 'get',

                                            url : '<?php echo route('search.list')?>',

                                            data:{'search':$value},

                                            success:function(data){
                                                var id = 1;
                                                var user = '';
                                                var access = '';
                                                $.each(data, function (key, value) {
                                                    user = user + "<tr>";
                                                    user = user + "<td>" + id++ + "</td>";
                                                    user = user + "<td>" + value.name + "</td>";
                                                    user = user + "<td>" + value.email+ "</td>";
                                                    user = user + '<td>';
                                                    user = user + '<a href="user/show/'+value.id+'" type="button" data-toggle="collapse" data-target="#demo_'+ value.id +'" class="btn btn-info">view</a>';
                                                    user = user + '<button type="button" data-toggle="collapse" data-target="#edit_'+ value.id +'" class="btn btn-success">edit</button>';
                                                    user = user + '<button class="btn btn-danger">delete</button>';
                                                    user = user + '</td>';
                                                    user = user + "</tr>";
                                                    access = access + '<div class="collapse" id="edit_'+ value.id +'" >';
                                                    access = access + '<form method="post" class="list-group" id="form_'+ value.id +'">';
                                                    access = access + '<input type="hidden" name="_token" value="{{ csrf_token() }}">';
                                                    access = access + '<input type="hidden" id="id_'+value.id+'" name="id" value="' + value.id + '">';
                                                    access = access + '<div class="form-group">';
                                                    access = access + '<input type="text" class="form-control" id="name_' + value.id +'" name="name" value="' + value.name + '">';
                                                    access = access + '</div>';
                                                    access = access + '<div class="form-group">';
                                                    access = access + '<input type="email" class="form-control" id="email_' + value.id + '" name="email" value="' + value.email + '">';
                                                    access = access + '</div>';
                                                    access = access + '<div class="form-group">';
                                                    access = access + '<input type="password" class="form-control" id="old_password_' + value.id +'" name="old_password" placeholder="Current password (optional)">';
                                                    access = access + '</div>';
                                                    access = access + '<div class="form-group">';
                                                    access = access + '<input type="password" class="form-control" id="new_password_' + value.id +'" name="new_password" placeholder="Update password (optional)">';
                                                    access = access + '</div>';
                                                    access = access + '<div class="form-group">';
                                                    access = access + '<input type="password" class="form-control" id="password_confirm_'+ value.id +'" name="password_confirmation" placeholder="Confirm password (optional)">';
                                                    access = access + '</div>';
                                                    access = access + '<button type="submit" id="button_'+ value.id +'" class="form-control btn btn-info">update</button>';
                                                    access = access + '</form>';
                                                    access = access + '<hr>';
                                                    access = access + '</div>';
                                                    $('#usersList').html(user);
                                                    $('#result').html(access);
                                                $('#button_'+ value.id).on('click', function (e) {
                                                    e.preventDefault();
                                                    var name = $('#name_'+value.id).val();
                                                    var email = $('#email_'+value.id).val();
                                                    var old_password = $('#old_password_'+value.id).val();
                                                    var new_password = $('#new_password_'+value.id).val();
                                                    var password_confirm = $('#password_confirm_'+value.id).val();
                                                    var id = $('#id_'+value.id).val();
                                                    $.ajaxSetup({
                                                        headers: {
                                                            'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr('content')
                                                        }
                                                    });
                                                    $.ajax({
                                                        cache: false,
                                                        url: '{{ route('users.update') }}',
                                                        type: 'post',
                                                        dataType:'json',
                                                        data: {
                                                            id: id,
                                                            name: name,
                                                            email: email,
                                                            old_password: old_password,
                                                            new_password: new_password,
                                                            password_confirm: password_confirm
                                                        },
                                                        success: {function(data){
                                                                $("#myTable").load('<?php echo route('users.list')?>');
/*
                                                                location.reload()
*/
                                                                console.log()
                                                            }
                                                        }
                                                    })

                                                })
                                                });
                                            },
                                            fail:function(jqXHR, ajaxOptions, thrownError)
                                            {
                                                alert('No response from server');
                                            },
                                        });
                                    });
                                });
                            </script>
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
                        <th>Full Name</th>
                        <th>Has roles</th>
                        <th>Nope roles</th>
                        <th>Has permisssion</th>
                        <th>Nope permisssion</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1;?>
                    @foreach($users as $user)
                            @foreach($user->user_roles as $role)
                            @foreach($user->user_permissions as $permission)

                            @if($role->roles === 'admin')
                                <tr>
                                    <td>{{ $i++ }}</td>

                                    <td class="text-success">{{ $user->name }}</td>
                                    <td>
                                        @foreach($user->user_roles as $role)
                                            @can('viewRole', Auth::user())
                                            <form action="{{ route('admin.detachRole', ['user'=>$user, 'role' => $role]) }}" class="d-block" method="post">
                                                {{csrf_field()}}
                                                <p class="text-info">{{ $role->roles }}
                                                    <button type="submit" style="border: none; background-color: white"><i class="fa fa-minus-circle text-danger"></i></button>
                                                </p>
                                            </form>
                                            @endcan
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach($roles->diff($user->user_roles) as $role )
                                            <form action="{{ route('admin.attachRole', ['user'=>$user, 'role' => $role]) }}" class="d-block" method="post">
                                                {{csrf_field()}}
                                                <p class="text-danger">{{ $role->roles}}
                                                    <button type="submit" style="border: none; background-color: white"><i class="fa fa-plus-circle text-success"></i></button>
                                                </p>
                                            </form>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach($user->user_permissions as $permission)
                                            <form action="{{ route('admin.detachPermission', ['user'=>$user, 'permission' => $permission]) }}" class="d-block" method="post">
                                                {{csrf_field()}}
                                                <p class="text-success">{{ $permission->permissions }}
                                                    <button type="submit" style="border: none; background-color: white"><i class="fa fa-minus-circle text-danger"></i></button>
                                                </p>
                                            </form>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach($permissions->diff($user->user_permissions) as $permission )
                                            <form action="{{ route('admin.attachPermission', ['user'=>$user, 'permission' => $permission]) }}" class="d-block" method="post">
                                                {{csrf_field()}}
                                                <p class="text-danger">{{ $permission->permissions }}
                                                    <button type="submit" style="border: none; background-color: white"><i class="fa fa-plus-circle text-success"></i></button>
                                                </p>
                                            </form>
                                        @endforeach
                                    </td>
                                </tr>
                            @endif
                        @endforeach
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
                        Child of Admin
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered"  style="font-size: 20px">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Full Name</th>
                                    <th>Has roles</th>
                                    <th>Nope roles</th>
                                    <th>Has permisssion</th>
                                    <th>Nope permisssion</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1;?>
                                @foreach($users as $user)
                                    @can('view', $user)
                                        @foreach($user->user_roles as $role)
                                    @foreach($user->user_permissions as $permission)
                                        @if($role->roles === 'admin-child')
                                            <tr>
                                                <td>{{ $i++ }}</td>

                                                <td class="text-success">{{ $user->name }}</td>
                                                <td>
                                                    @foreach($user->user_roles as $role)
                                                        <form action="{{ route('admin.detachRole', ['user'=>$user, 'role' => $role]) }}" class="d-block" method="post">
                                                            {{csrf_field()}}
                                                            <p class="text-info">{{ $role->roles }}
                                                                <button type="submit" style="border: none; background-color: white"><i class="fa fa-minus-circle text-danger"></i></button>
                                                            </p>
                                                        </form>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach($roles->diff($user->user_roles) as $role )
                                                        <form action="{{ route('admin.attachRole', ['user'=>$user, 'role' => $role]) }}" class="d-block" method="post">
                                                            {{csrf_field()}}
                                                            <p class="text-danger">{{ $role->roles}}
                                                                <button type="submit" style="border: none; background-color: white"><i class="fa fa-plus-circle text-success"></i></button>
                                                            </p>
                                                        </form>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach($user->user_permissions as $permission)
                                                        <form action="{{ route('admin.detachPermission', ['user'=>$user, 'permission' => $permission])}}" class="d-block" method="post">
                                                            {{csrf_field()}}
                                                            <p class="text-success">{{ $permission->permissions }}
                                                                <button type="submit" style="border: none; background-color: white"><i class="fa fa-minus-circle text-danger"></i></button>
                                                            </p>
                                                        </form>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach($permissions->diff($user->user_permissions) as $permission )
                                                        <form action="{{ route('admin.attachPermission', ['user'=>$user, 'permission' => $permission]) }}" class="d-block" method="post">
                                                            {{csrf_field()}}
                                                            <p class="text-danger">{{ $permission->permissions }}
                                                                <button type="submit" style="border: none; background-color: white"><i class="fa fa-plus-circle text-success"></i></button>
                                                            </p>
                                                        </form>
                                                    @endforeach
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    @endforeach
                                    @endcan
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>

            </div>

            <div id="menu3" class="container tab-pane fade"><br>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Super Admin
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" style="font-size: 20px">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Full Name</th>
                                    <th>Has roles</th>
                                    <th>Nope roles</th>
                                    <th>Has permisssion</th>
                                    <th>Nope permisssion</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1;?>
                                @foreach($users as $user)
                                    @foreach($user->user_permissions as $permission)
                                        @if($permission->permissions === 'view-superadmin')
                                            <tr>
                                                <td>{{ $i++ }}</td>

                                                <td class="text-success">{{ $user->name }}</td>
                                                <td>
                                                    @foreach($user->user_roles as $role)
                                                        <form action="{{ route('admin.detachRole', ['user'=>$user, 'role' => $role]) }}" class="d-block" method="post">
                                                            {{csrf_field()}}
                                                            <p class="text-info">{{ $role->roles }}
                                                                <button type="submit" style="border: none; background-color: white"><i class="fa fa-minus-circle text-danger"></i></button>
                                                            </p>
                                                        </form>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach($roles->diff($user->user_roles) as $role )
                                                        <form action="{{ route('admin.attachRole', ['user'=>$user, 'role' => $role]) }}" class="d-block" method="post">
                                                            {{csrf_field()}}
                                                            <p class="text-danger">{{ $role->roles}}
                                                                <button type="submit" style="border: none; background-color: white"><i class="fa fa-plus-circle text-success"></i></button>
                                                            </p>
                                                        </form>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach($user->user_permissions as $permission)
                                                        <form action="{{ route('admin.detachPermission', ['user'=>$user, 'permission' => $permission])}}" class="d-block" method="post">
                                                            {{csrf_field()}}
                                                            <p class="text-success">{{ $permission->permissions }}
                                                                <button type="submit" style="border: none; background-color: white"><i class="fa fa-minus-circle text-danger"></i></button>
                                                            </p>
                                                        </form>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    @foreach($permissions->diff($user->user_permissions) as $permission )
                                                        <form action="{{ route('admin.attachPermission', ['user'=>$user, 'permission' => $permission]) }}" class="d-block" method="post">
                                                            {{csrf_field()}}
                                                            <p class="text-danger">{{ $permission->permissions }}
                                                                <button type="submit" style="border: none; background-color: white"><i class="fa fa-plus-circle text-success"></i></button>
                                                            </p>
                                                        </form>
                                                    @endforeach
                                                </td>
                                            </tr>
                                        @endif
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
{{--
    @endif
--}}

@endsection