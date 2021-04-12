@extends('admin.layout.app')

@section('pageName')
    Users
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Users Table</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Roles</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($users as $val)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$val->name}}</td>
                        <td>{{$val->email}}</td>
                        <td class="row space-x-2">
                            <form action="{{ route('users.destroy' , ['user'=>$val->id]) }}" method="post">
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
