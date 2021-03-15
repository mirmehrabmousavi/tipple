@extends('admin.layout.app')

@section('pageName')
    Create
@endsection

@section('content')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Add New Permission</h3>

                <div class="card-tools">
                    <a href="{{ route('permissions.index') }}" class="btn btn-danger"><i class="fas fa-shield-alt"></i> See
                        All Data</a>
                </div>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('permissions.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Group Name</label>
                        <input type="text" name="group_name" class="form-control" id="exampleInputEmail1"
                               placeholder="Enter name" required autofocus>
                    </div>
                    <div class="form-group">
                        <input type="button" class="form-control btn btn-danger" value="Add Name" onclick="addName()">
                    </div>
                    <div class="form-group" id="name-holder">

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
        function addName() {
            var count = document.getElementsByClassName('name-div').length+1;
            var txt = '<div class="name-div">'+
                            '<label>Name</label>'+
                            '<input  name="name['+count+']" type="text" class="form-control" placeholder="Enter Name" required>'+
                      '</div>';

            $("#name-holder").append(txt);
        }
    </script>
@endsection
