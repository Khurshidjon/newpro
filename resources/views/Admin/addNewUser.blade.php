@extends('layouts.adminMaster')
@section('adminContent')

    <div id="wrapper">
        @include('Admin.topNavbar')

        <div id="page-wrapper">
            <div class="tab-content" style="position:relative; margin-left: 20%">
                <div class="container align-items-center">
                    <form action="{{route('admin.registerUser')}}" method="post" class="text-center" style="position: fixed; margin-top: 8em">
                        {{ csrf_field() }}
                        <i class="fa fa-user" style="font-size: 10em; color: gray()"></i>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="full_name"></label>
                                    <input id="full_name" type="text" name="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" required placeholder="Fullname" value="{{old('name')}}">
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="email"></label>
                                    <input id="email" name="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" required placeholder="Email" value="{{old('email')}}">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                             <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="password"></label>
                                    <input id="password" type="password" name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="Password">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="password-confirm"></label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm password">
                                </div>
                            </div>
                        </div>
                        @if(Auth::user()->hasRole('Superadmin'))
                        <div class="form-group">
                            <label for="userByUser"></label>
                            <select id="userByUser" name="userByUser" class="form-control {{ $errors->has('userByUser') ? ' is-invalid' : '' }}">
                                <option value="" selected disabled>--select once--</option>
                                @foreach($roles as $role)
                                    <option value="{{$role->name}}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('userByUser'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('userByUser') }}</strong>
                                </span>
                            @endif
                        </div>
                        @endif
                        <button type="submit" class="btn btn-block btn-outline-dark">Register</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection