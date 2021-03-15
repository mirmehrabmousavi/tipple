@extends('admin.layout.app')

@section('pageName')
    Create
@endsection

@section('content')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Add New Purchase</h3>

                <div class="card-tools">
                    <a href="{{ route('purchases.index') }}" class="btn btn-danger"><i class="fas fa-shield-alt"></i> See
                        All Data</a>
                </div>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('purchases.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                               placeholder="Enter Title" required>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description" id="body" cols="30" rows="10" required>text here...</textarea>
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
