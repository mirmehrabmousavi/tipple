@extends('admin.layout.app')

@section('pageName')
    Background
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Background Table</h3>

                <div class="card-tools">
                    <a href="{{ route('backgrounds.create') }}" class="btn btn-info">Add New Background</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Image</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($backgrounds as $val)
                    <tr>
                        <td>{{$val->id}}</td>
                        <td>{{$val->title}}</td>
                        <td><img src="/{{$val->image}}" alt="avatar" width="40"></td>
                        <td class="row space-x-2">
                            <a href="{{ route('backgrounds.show',['background'=>$val->id]) }}" class="btn btn-success">Show</a>
                            <a href="{{ route('backgrounds.edit',['background'=>$val->id]) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('backgrounds.destroy' , ['background'=>$val->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
@endsection
