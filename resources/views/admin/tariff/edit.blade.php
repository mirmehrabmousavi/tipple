@extends('admin.layout.app')

@section('pageName')
    Edit
@endsection

@section('content')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Edit Tariff {{$tariff->title}}</h3>

                <div class="card-tools">
                    <a href="{{ route('tariffs.index') }}" class="btn btn-danger"><i class="fas fa-shield-alt"></i>  See All Data</a>
                </div>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('tariffs.update',['tariff'=>$tariff->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ $tariff->title }}" id="exampleInputEmail1" placeholder="Enter Title" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea type="text" name="description" class="form-control" id="exampleInputEmail1" placeholder="Enter Body" required>{{ $tariff->description }}</textarea>
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
