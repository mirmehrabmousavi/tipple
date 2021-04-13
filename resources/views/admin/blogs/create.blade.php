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
                    <a href="{{ route('blogs.index') }}" class="btn btn-danger"><i class="fas fa-shield-alt"></i> See All Data</a>
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
                        <textarea id="summary-ckeditor" name="body" cols="30" rows="10" required>text here...</textarea>
                        <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
                        <script>
                            CKEDITOR.replace( 'summary-ckeditor' );
                        </script>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Choose Pic</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="exampleInputFile" required>
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                        </div>
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
