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
            <div class="tab-content">
                <div id="home" class="tab-pane active"><br>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Products
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <form action="{{ route('search.list') }}" class="form-group" method="post">
                                {{ csrf_field() }}
                                <input type="text" name="search" class="form-control" placeholder="Search live" id="search" autocomplete="off">
                            </form>
                            <div class="table-responsive" id="myDiv">
                                <table class="table table-bordered text-dark" id="myTable" style="font-size: 13px">
                                    <thead>
                                    <tr>
                                        <th>№</th>
                                        <th>Kiritgan shaxs</th>
                                        <th>Mahsulot nomi</th>
                                        <th>Mahsulot aybi</th>
                                        <th>Xavf darajasi</th>
                                        <th>Mahsulot kategoriyasi</th>
                                        <th>Kelib chiqishi</th>
                                        <th>Tekshiruv</th>
                                        <th colspan="3" class="text-center">Qo'shimcha</th>
                                    </tr>
                                    </thead>
                                    <tbody id="usersList">
                                        <?php $f = 0; ?>
                                        @foreach($products as $product)
                                            @if(Auth::id() == $product->user_id || Auth::user()->hasRole('Superadmin') || Auth::user()->hasRole('Admin'))
                                                <tr>
                                                <td>{{ ++$f }}</td>
                                                <td style="background-color: darkgrey">{{ $product->user->name }}</td>
                                                <td>{{ $product->title }}</td>
                                                <td>{{ $product->danger_type}}</td>
                                                <td class="text-danger">{{ $product->d_of_h->degree_id}}</td>
                                                <td>{{ $product->category->categories}}</td>
                                                <td>{{ $product->country->countries}}</td>
                                                <td>
                                                    <form action="" id="publish">
                                                        @if($product->status == 0)
                                                            <input id="id_{{$product->id}}" data-id="{{$product->id}}" class="form-control" type="checkbox" data-toggle="toggle" data-style="ios" data-on="Pulbished" data-off="Unpublished" data-size="mini" data-onstyle="success" data-offstyle="danger">
                                                        @else
                                                            <input id="id_{{$product->id}}" data-id="{{$product->id}}"  class="form-control" type="checkbox" data-toggle="toggle" data-style="ios" data-on="Pulbished" data-off="Unpublished" data-size="mini" data-onstyle="success" data-offstyle="danger" checked>
                                                        @endif
                                                    </form>
                                                    <script>
                                                        $(function () {
                                                            $('#id_{{$product->id}}').change(function (e) {
                                                                e.preventDefault();
                                                                var productId = $(this).data('id');
                                                                var status = $(this).prop('checked');
                                                                var url = '{{ route('product.status') }}';
                                                                if(status == true){
                                                                    status = 1
                                                                }else{
                                                                    status = 0;
                                                                }
                                                                $.ajaxSetup({
                                                                    headers: {
                                                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                                                    }
                                                                });
                                                                $.ajax({
                                                                    type: 'GET',
                                                                    url: url,
                                                                    data: {
                                                                        productId: productId,
                                                                        status: status,
                                                                    },
                                                                    success: function (success) {
                                                                        console.log(success);
                                                                    }
                                                                })
                                                            })
                                                        })
                                                    </script>
                                                </td>

                                                    <td style="font-size: 18px" class="text-center">
                                                    <form action="">
                                                        <a href="">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                        <a href="" style="margin-left: 10px">
                                                            <i class="fa fa-edit text-success"></i>
                                                        </a>
                                                        <button type="submit" class="btn btn-light" style="background-color: white">
                                                            <i class="fa fa-trash-o text-danger"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                                </tr>
                                                @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection