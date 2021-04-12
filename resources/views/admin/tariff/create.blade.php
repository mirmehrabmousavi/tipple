@extends('admin.layout.app')

@section('pageName')
    Create
@endsection

@section('content')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Add New Tariff</h3>

                <div class="card-tools">
                    <a href="{{ route('tariffs.index') }}" class="btn btn-danger"><i class="fas fa-shield-alt"></i> See All Data</a>
                </div>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('tariffs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                               placeholder="Enter Name" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="text" name="price" class="form-control" id="exampleInputEmail1"
                               placeholder="Enter Price" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Host</label>
                        <input type="text" name="host" class="form-control" id="exampleInputEmail1"
                               placeholder="Enter Host" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Domain</label>
                        <input type="text" name="domain" class="form-control" id="exampleInputEmail1"
                               placeholder="Enter Domain" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Support</label>
                        <input type="text" name="support" class="form-control" id="exampleInputEmail1"
                               placeholder="Enter Support" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">EXT 1</label>
                        <input type="text" name="extra1" class="form-control" id="exampleInputEmail1"
                               placeholder="Enter ...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">EXT 2</label>
                        <input type="text" name="extra2" class="form-control" id="exampleInputEmail1"
                               placeholder="Enter ...">
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
