@extends('admin.layout.app')

@section('pageName')
    Edit
@endsection

@section('content')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Edit Role {{$role->name}}</h3>

                <div class="card-tools">
                    <a href="{{ route('permissions.index') }}" class="btn btn-danger"><i class="fas fa-shield-alt"></i>
                        See All Data</a>
                </div>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('roles.update',['role'=>$role->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $role->name }}"
                               id="exampleInputEmail1" placeholder="Enter Name" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="name">Permissions</label>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" value="1" id="checkPermissionAll">
                            <label for="checkPermissionAll" class="form-check-label">All</label>
                        </div>
                        <hr>
                        @php $i=1; @endphp
                        @foreach($group_permission as $group)
                            <div class="row">
                                @php
                                    $permissions=\App\Models\User::getPermissionByGroups($group->name);
                                    $j=1;
                                @endphp
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="{{$i}}Management"
                                               onclick="checkPermissionGroup('role-{{$i}}-management-checkbox',this)"
                                               value="{{$group->name}}" {{\App\Models\User::roleHasPermissions($role,$permissions)?'checked':''}}>
                                        <label for="checkPermission" class="form-check-label">{{$group->name}}</label>
                                    </div>
                                </div>
                                <div class="col-md-9 role-{{$i}}-management-checkbox">
                                    @foreach($permissions as $val)
                                        <div class="form-check">
                                            <input type="checkbox" name="permission[]" class="form-check-input" onclick="checkSinglePermission('role-{{$i}}-management-checkbox','{{$i}}Management',{{count($permissions)}})"
                                                   value="{{$val->name}}" {{$role->hasPermissionTo($val->name)?'checked':''}} id="checkPermission{{$val->id}}">
                                            <label for="checkPermission{{$val->id}}"
                                                   class="form-check-label">{{$val->name}}</label>
                                        </div>
                                        @php $j++; @endphp
                                    @endforeach
                                </div>
                            </div>
                            <br>
                            @php $i++; @endphp
                        @endforeach
                    </div>
                </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>
    <!-- /.card -->
    </div>
@endsection

@section('scripts')
    <script>
        $("#checkPermissionAll").click(function () {
            if ($(this).is(':checked')) {
                $('input[type=checkbox]').prop('checked', true);
            } else {
                $('input[type=checkbox]').prop('checked', false);
            }
        });

        function checkPermissionGroup(className, checkThis) {
            const groupIdName = $('#' + checkThis.id);
            const classCheckbox = $('.' + className + ' input');

            if (groupIdName.is(':checked')) {
                classCheckbox.prop('checked', true);
            } else {
                classCheckbox.prop('checked', false);
            }
        }

        function checkSinglePermission(groupClassName, groupID, countTotalPermission) {
            const classCheckbox=$('.'+groupClassName+' input');
            const groupIDCheckbox=$('#'+groupID);

            if($(classCheckbox+':checkred').length == countTotalPermission) {
                groupIDCheckbox.prop('checked',true);
            }else{
                groupIDCheckbox.prop('checked',false);
            }
            implementAllChecked();
        }

        function implementAllChecked() {
            const countPermissions={{count($permission)}};
            const countPermissionGroups={{count($group_permission)}};

            if ($('input[type="checkbox"]:checked').length >= (countPermissions + countPermissionGroups)) {
                $('#checkPermissionAll').prop('checked',true);
            }else{
                $('#checkPermissionAll').prop('checked',false);
            }
        }
    </script>
@endsection
