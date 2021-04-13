@extends('admin.layout.app')

@section('pageName')
    Edit
@endsection

@section('content')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Edit Blog {{$blog->title}}</h3>

                <div class="card-tools">
                    <a href="{{ route('blogs.index') }}" class="btn btn-danger"><i class="fas fa-shield-alt"></i>  See All Data</a>
                </div>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('blogs.update',['blog'=>$blog->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $blog->title }}" id="exampleInputEmail1" placeholder="Enter Title" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Body</label>
                        <textarea type="text" name="body" class="form-control" id="summary-ckeditor" placeholder="Enter Body" required>{{ $blog->body }}</textarea>
                        <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
                        <script>
                            CKEDITOR.replace( 'summary-ckeditor' );
                        </script>
                    </div>
                    <div class="form-group">
                        <img src="/{{$blog->image}}" alt="avatar" width="100">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Choose Pic</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                        </div>
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
