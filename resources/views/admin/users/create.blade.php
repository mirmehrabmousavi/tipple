@extends('admin.layout.app')

@section('pageName')
    Create
@endsection

@section('content')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Add New User</h3>

                <div class="card-tools">
                    <a href="{{ route('users.index') }}" class="btn btn-danger"><i class="fas fa-shield-alt"></i> See
                        All Data</a>
                </div>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                               placeholder="Enter name" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                               placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="text" name="password" class="form-control" id="exampleInputEmail1"
                               placeholder="Enter Password" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Confirm Password</label>
                        <input type="text" name="password_confirmation" class="form-control" id="exampleInputEmail1"
                               placeholder="Enter Confirm Password" required>
                    </div>
                    <div class="form-group" data-select2-id="46">
                        <label for="exampleInputEmail1">Assign Role</label>
                        <select class="form-control" name="roles" id="roles">
                            @foreach($roles as $role)
                            <option value="{{$role->name}}">{{$role->name}}</option>
                            @endforeach
                        </select>
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

    </script>
@endsection
