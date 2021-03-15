@extends('admin.layout.app')

@section('pageName')
    Create
@endsection

@section('content')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Add New Blog</h3>

                <div class="card-tools">
                    <a href="{{ route('blogs.index') }}" class="btn btn-danger"><i class="fas fa-shield-alt"></i> See
                        All Data</a>
                </div>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                               placeholder="Enter Title" required>
                    </div>
                    <div class="form-group">
                        <label>Body</label>
                        <textarea name="body" id="editor1" cols="30" rows="10" required>text here...</textarea>
                    </div>
                    <script>
                        // Replace the <textarea id="editor1"> with a CKEditor 4
                        // instance, using default configuration.
                        CKEDITOR.replace( 'editor1' );
                    </script>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
@endsection
