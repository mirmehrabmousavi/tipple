@extends('admin.layout.app')

@section('pageName')
    Permission
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Permission Table</h3>

                <div class="card-tools">
                    <a href="{{ route('permissions.create') }}" class="btn btn-info">Add New Permission</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Group Name</th>
                        <th>Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($permissions as $val)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$val->group_name}}</td>
                        <td>{{$val->name}}</td>
                        <td class="row space-x-2">
                            <a href="{{ route('permissions.show',['permission'=>$val->id]) }}" class="btn btn-success">Show</a>
                            <a href="{{ route('permissions.edit',['permission'=>$val->id]) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('permissions.destroy' , ['permission'=>$val->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    @empty
                        <td>No result found!!</td>
                    </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
@endsection
