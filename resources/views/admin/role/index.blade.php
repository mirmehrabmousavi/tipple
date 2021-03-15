@extends('admin.layout.app')

@section('pageName')
    Role
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Role Table</h3>

                <div class="card-tools">
                    <a href="{{ route('roles.create') }}" class="btn btn-info">Add New Role</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th width="10%">ID</th>
                        <th width="15%">Name</th>
                        <th width="50%">Permissions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($roles as $val)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$val->name}}</td>
                        <td>
                            @foreach($val->permissions as $perm)
                                <div class="badge badge-info mr-1">
                                    {{$perm->name}}
                                </div>
                            @endforeach
                        </td>
                        <td class="row space-x-2">
                            <a href="{{ route('roles.show',['role'=>$val->id]) }}" class="btn btn-success">Show</a>
                            <a href="{{ route('roles.edit',['role'=>$val->id]) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('roles.destroy' , ['role'=>$val->id]) }}" method="post">
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
