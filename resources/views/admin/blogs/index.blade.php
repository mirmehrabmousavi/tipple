@extends('admin.layout.app')

@section('pageName')
    Blog
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Blog Table</h3>

                <div class="card-tools">
                    <a href="{{ route('blogs.create') }}" class="btn btn-info">Add New Blog</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Body</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($blogs as $val)
                    <tr>
                        <td>{{$val->id}}</td>
                        <td>{{$val->title}}</td>
                        <td width="200">{{$val->body}}</td>
                        <td class="row space-x-2">
                            <a href="{{ route('blogs.show',['blog'=>$val->id]) }}" class="btn btn-success">Show</a>
                            <a href="{{ route('blogs.edit',['blog'=>$val->id]) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('blogs.destroy' , ['blog'=>$val->id]) }}" method="post">
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
