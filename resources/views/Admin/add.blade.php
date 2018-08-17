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
                            <div class="">
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
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
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