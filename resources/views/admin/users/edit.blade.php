@extends('admin.layout.app')

@section('pageName')
    Edit
@endsection

@section('content')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Edit Role {{$user->name}}</h3>

                <div class="card-tools">
                    <a href="{{ route('users.index') }}" class="btn btn-danger"><i class="fas fa-shield-alt"></i>
                        See All Data</a>
                </div>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('users.update',['user'=>$user->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $user->name }}"
                               id="exampleInputEmail1" placeholder="Enter Name" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" name="email" class="form-control" value="{{ $user->email }}"
                               id="exampleInputEmail1" placeholder="Enter Name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" name="password" class="form-control"
                               id="exampleInputEmail1" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control"
                               id="exampleInputEmail1" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Confirm Password</label>
                        <select name="roles" id="roles" class="form-control">
                            @foreach($roles as $role)
                                <option value="{{$role->name}}" {{$user->hasRole($role->name)?'selected':''}}>{{$role->name}}</option>
                            @endforeach
                        </select>
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

    </script>
@endsection
