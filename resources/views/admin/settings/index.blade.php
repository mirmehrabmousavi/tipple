@extends('admin.layout.app')

@section('pageName')
    Emails
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Motivation Table</h3>

                <div class="card-tools">
                    <a href="{{ route('settings.createEmails') }}" class="btn btn-info">Add New Email</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($emails as $val)
                    <tr>
                        <td>{{$val->id}}</td>
                        <td>{{$val->name}}</td>
                        <td>{{$val->email}}</td>
                        <td class="row space-x-2">
                            <a href="{{ route('email.show',['email'=>$val->id]) }}" class="btn btn-success">Show</a>
                            <a href="{{ route('email.edit',['email'=>$val->id]) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('email.destroy' , ['email'=>$val->id]) }}" method="post">
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
