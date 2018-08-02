@extends('layouts.adminMaster')
@section('adminContent')
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
                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
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
                            <h2 class="text-info">Add new Product</h2>
                            <form action="{{ route('create.product') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="category_id">Mahsulot kategoriyas <span class="text-danger">*</span></label>
                                            <select name="category_id" class="form-control {{ $errors->has('category_id') ? ' is-invalid' : '' }}">
                                                @if ($errors->has('category_id'))
                                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('category_id') }}</strong>
                                </span>
                                                @endif
                                                <option value="" disabled selected>--Select once--</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}"> {{ $category->categories }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="country_id">Kelib chiqishi <span class="text-danger">*</span></label>
                                            <select name="country_id" class="form-control {{ $errors->has('country_id') ? ' is-invalid' : '' }}">
                                                @if ($errors->has('country_id'))
                                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('country_id') }}</strong>
                        </span>
                                                @endif
                                                <option value="" disabled selected>--Select once--</option>
                                                @foreach($countries as $country)
                                                    <option value="{{ $country->id }}">{{ $country->countries }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="date_born">Ishlab chiqarilgan sanasi <span class="text-danger">*</span></label>
                                            <input id="date_born" name="date_born" type="date"  class="form-control {{ $errors->has('date_born') ? ' is-invalid' : '' }}" placeholder="01/01/2018">
                                            @if ($errors->has('date_born'))
                                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('date_born') }}</strong>
                        </span>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="found_date">Yaroqsizlik aniqlangan sana <span class="text-danger">*</span></label>
                                            <input id="found_date" name="found_date" type="date"  class="form-control {{ $errors->has('found_date') ? ' is-invalid' : '' }}" placeholder="01/01/2018">
                                            @if ($errors->has('found_date'))
                                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('found_date') }}</strong>
                        </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="date_death">Yaroqlilik muddati <span class="text-success">(optional)</span></label>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <input type="number" name="date_death" id="date_death" class="form-control {{ $errors->has('date_death') ? ' is-invalid' : '' }}" placeholder="1, 2, 3 ... ->">
                                                    @if ($errors->has('date_death'))
                                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('date_death') }}</strong>
                                </span>
                                                    @endif
                                                </div>
                                                <div class="col-lg-6">
                                                    <select name="date_death_name" id="" class="form-control">
                                                        <option selected disabled>--select once--</option>
                                                        <option value="yil">Yil</option>
                                                        <option value="oy">Oy</option>
                                                        <option value="kun">Kun</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="degree_of_hazard">Xavflilik darajasi <span class="text-danger">*</span></label>
                                            <select name="degree_of_hazard" id="" class="form-control {{ $errors->has('degree_of_hazard') ? ' is-invalid' : '' }}">
                                                @if ($errors->has('degree_of_hazard'))
                                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('degree_of_hazard') }}</strong>
                                </span>
                                                @endif
                                                <option value="" disabled selected>--Select once--</option>
                                                @foreach($degree_of_hazards as $degree_of_hazard)
                                                    <option value="{{$degree_of_hazard->id}}">{{ $degree_of_hazard->degree_of_hazards }}</option>
                                                @endforeach
                                                {{--
                                                                                <option value="Sog'liq uchun zararli bo'lishi mumkin">Sog'liq uchun zararli bo'lishi mumkin</option>
                                                                                <option value="Xavfli">Xavfli</option>
                                                                                <option value="Ehtiyot bo'ling">Ehtiyot bo'ling</option>
                                                                                <option value="Judayam xavfli">Judayam xavfli</option>
                                                                                <option value="Hayot uchun xavfli">Hayot uchun xavfli</option>
                                                --}}

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="title">Mahsulot nomi <span class="text-danger">*</span></label>
                                            <input id="title" type="text" name="title" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="Mahsulot nomi">
                                            @if ($errors->has('title'))
                                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="save_conditions">Saqlash sharoitlar<span class="text-danger">*</span></label>
                                            <input id="save_conditions" type="text" name="save_conditions" class="form-control {{ $errors->has('save_conditions') ? ' is-invalid' : '' }}" placeholder="+/-C, va hokazo">
                                            @if ($errors->has('save_conditions'))
                                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('save_conditions') }}</strong>
                        </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="buy_place">Xarid qilingan joy <span class="text-danger">*</span></label>
                                            <input id="buy_place" type="text" name="buy_place" class="form-control {{ $errors->has('buy_place') ? ' is-invalid' : '' }}" placeholder="Savdo majmuasi, manzili">
                                            @if ($errors->has('buy_place'))
                                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('buy_place') }}</strong>
                        </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="details">Mahsulot haqida <span class="text-danger">*</span></label>
                                            <textarea id="details" name="details" rows="4" class="form-control {{ $errors->has('details') ? ' is-invalid' : '' }}" placeholder="Umumiy ma'lumotlar"></textarea>
                                            @if ($errors->has('details'))
                                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('details') }}</strong>
                        </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="danger">Mahsulot xavfi haqida <span class="text-danger">*</span></label>
                                            <textarea id="danger" name="danger" rows="4" class="form-control {{ $errors->has('danger') ? ' is-invalid' : '' }}" placeholder="Ehtimoliy xavf xatarlar haqida"></textarea>
                                            @if ($errors->has('danger'))
                                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('danger') }}</strong>
                        </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="danger_type">Mahsulot aybi <span class="text-danger">*</span></label>
                                            <textarea id="danger_type" name="danger_type" rows="4" class="form-control {{ $errors->has('danger_type') ? ' is-invalid' : '' }}" placeholder="Mauhsulotning aybi"></textarea>
                                            @if ($errors->has('danger_type'))
                                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('danger_type') }}</strong>
                        </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="product_photo">Mahsulot rasmi <span class="text-danger">*</span></label>
                                            <span class="text-danger">5 ta rasm</span>
                                            <input id="product_photo" type="file" name="photos[]" class="form-control {{ $errors->has('photos') ? ' is-invalid' : '' }}" multiple>
                                            @if ($errors->has('photos'))
                                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('photos') }}</strong>
                        </span>
                                            @endif
                                        </div>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-outline-info">Add new Product</button>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection