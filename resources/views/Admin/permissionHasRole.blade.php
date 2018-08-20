@extends('layouts.adminMaster')
@section('adminContent')

    <div id="wrapper">
        @include('Admin.topNavbar')

        <div id="page-wrapper">
            <div class="tab-content" style="position:relative;">
                <div class="container align-items-center">
                    <div style="position: fixed; margin-top: 5em">
                        <div class="table-responsive text-center">
                            <table class="table" style="font-size: 190%">
                                <thead>
                                    <tr>
                                        <th>№</th>
                                        <th>Permissions</th>
                                        <th>Superadmin</th>
                                        <th>Admins</th>
                                        <th>SecondaryAdmins</th>
                                        <th>Users</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 0;?>
                                    @foreach($permissions as $permission)
                                            <tr>
                                                <td>{{++$i}}</td>
                                                <td>{{$permission->name}}</td>
                                                <td>
                                                        @if($permission->superadmin == 1)
                                                            <input id="id_{{$permission->id}}" data-id="{{$permission->id}}"  class="form-control" type="checkbox" data-toggle="toggle" data-style="ios" data-on="Allowed" data-off="Denied" data-size="mini" data-onstyle="success" data-offstyle="danger" checked>
                                                        @else
                                                            <input id="id_{{$permission->id}}" data-id="{{$permission->id}}" class="form-control" type="checkbox" data-toggle="toggle" data-style="ios" data-on="Allowed" data-off="Denied" data-size="mini" data-onstyle="success" data-offstyle="danger">
                                                        @endif
                                                </td>
                                                <td>

                                                        @if($permission->admin == 1)
                                                            <input id="idd_{{$permission->id}}" data-id="{{$permission->id}}"  class="form-control" type="checkbox" data-toggle="toggle" data-style="ios" data-on="Allowed" data-off="Denied" data-size="mini" data-onstyle="success" data-offstyle="danger" checked>
                                                        @else
                                                            <input id="idd_{{$permission->id}}" data-id="{{$permission->id}}" class="form-control" type="checkbox" data-toggle="toggle" data-style="ios" data-on="Allowed" data-off="Denied" data-size="mini" data-onstyle="success" data-offstyle="danger">
                                                        @endif
                                                </td>
                                                <td class="text-center">
                                                        @if($permission->childOfAdmin == 1)
                                                            <input id="iddd_{{$permission->id}}" data-id="{{$permission->id}}"  class="form-control" type="checkbox" data-toggle="toggle" data-style="ios" data-on="Allowed" data-off="Denied" data-size="mini" data-onstyle="success" data-offstyle="danger" checked>
                                                        @else
                                                            <input id="iddd_{{$permission->id}}" data-id="{{$permission->id}}" class="form-control" type="checkbox" data-toggle="toggle" data-style="ios" data-on="Allowed" data-off="Denied" data-size="mini" data-onstyle="success" data-offstyle="danger">
                                                        @endif
                                                </td>
                                                <td>
                                                        @if($permission->user == 1)
                                                            <input id="idddd_{{$permission->id}}" data-id="{{$permission->id}}"  class="form-control" type="checkbox" data-toggle="toggle" data-style="ios" data-on="Allowed" data-off="Denied" data-size="mini" data-onstyle="success" data-offstyle="danger" checked>
                                                        @else
                                                            <input id="idddd_{{$permission->id}}" data-id="{{$permission->id}}" class="form-control" type="checkbox" data-toggle="toggle" data-style="ios" data-on="Allowed" data-off="Denied" data-size="mini" data-onstyle="success" data-offstyle="danger">
                                                        @endif
                                                </td>
                                                <script>
                                                    $(function () {
                                                        $('#id_{{$permission->id}}').change(function (e) {
                                                            e.preventDefault();
                                                            var permissionId = $(this).data('id');
                                                            var status1 = $(this).prop('checked');
                                                            var url = '{{ route('permission.status') }}';
                                                            if(status1 == true){
                                                                status1 = 1
                                                            }else{
                                                                status1 = 0;
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
                                                                    permissionId: permissionId,
                                                                    status1: status1,
                                                                },
                                                                success: function (success) {
                                                                    console.log(success);
                                                                }
                                                            })
                                                        });
                                                        $('#idd_{{$permission->id}}').change(function (e) {
                                                            e.preventDefault();
                                                            var permissionId = $(this).data('id');
                                                            var status2 = $(this).prop('checked');
                                                            var url = '{{ route('permission.status') }}';
                                                            if(status2 == true){
                                                                status2 = 1
                                                            }else{
                                                                status2 = 0;
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
                                                                    permissionId: permissionId,
                                                                    status2: status2,
                                                                },
                                                                success: function (success) {
                                                                    console.log(success);
                                                                }
                                                            })
                                                        });
                                                        $('#iddd_{{$permission->id}}').change(function (e) {
                                                            e.preventDefault();
                                                            var permissionId = $(this).data('id');
                                                            var status3 = $(this).prop('checked');
                                                            var url = '{{ route('permission.status') }}';
                                                            if(status3 == true){
                                                                status3 = 1
                                                            }else{
                                                                status3 = 0;
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
                                                                    permissionId: permissionId,
                                                                    status3: status3,
                                                                },
                                                                success: function (success) {
                                                                    console.log(success);
                                                                }
                                                            })
                                                        });
                                                        $('#idddd_{{$permission->id}}').change(function (e) {
                                                            e.preventDefault();
                                                            var permissionId = $(this).data('id');
                                                            var status4 = $(this).prop('checked');
                                                            var url = '{{ route('permission.status') }}';
                                                            if(status4 == true){
                                                                status4 = 1
                                                            }else{
                                                                status4 = 0;
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
                                                                    permissionId: permissionId,
                                                                    status4: status4,
                                                                },
                                                                success: function (success) {
                                                                    console.log(success);
                                                                }
                                                            })
                                                        });
                                                    })
                                                </script>
                                            </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection