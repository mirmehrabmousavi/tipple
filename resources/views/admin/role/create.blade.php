@extends('admin.layout.app')

@section('pageName')
    Create
@endsection

@section('content')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Add New Role</h3>

                <div class="card-tools">
                    <a href="{{ route('roles.index') }}" class="btn btn-danger"><i class="fas fa-shield-alt"></i> See
                        All Data</a>
                </div>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('roles.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                               placeholder="Enter name" required autofocus>
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
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="{{$i}}Management" onclick="checkPermissionGroup('role-{{$i}}-management-checkbox',this)" value="{{$group->name}}">
                                    <label for="checkPermission" class="form-check-label">{{$group->name}}</label>
                                </div>
                            </div>
                            <div class="col-md-9 role-{{$i}}-management-checkbox">
                                @php
                                    $permissions=\App\Models\User::getPermissionByGroups($group->name);
                                    $j=1;
                                @endphp
                                @foreach($permissions as $val)
                                    <div class="form-check">
                                        <input type="checkbox" name="permission[]" class="form-check-input" value="{{$val->name}}" id="checkPermission{{$val->id}}">
                                        <label for="checkPermission{{$val->id}}" class="form-check-label">{{$val->name}}</label>
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
        $("#checkPermissionAll").click(function (){
           if ($(this).is(':checked')) {
                $('input[type=checkbox]').prop('checked',true);
           }else{
                $('input[type=checkbox]').prop('checked',false);
           }
        });

        function checkPermissionGroup(className,checkThis) {
            const groupIdName = $('#'+checkThis.id);
            const classCheckbox = $('.'+className+' input');

            if (groupIdName.is(':checked')) {
                classCheckbox.prop('checked',true);
            }else{
                classCheckbox.prop('checked',false);
            }
        }
    </script>
@endsection
