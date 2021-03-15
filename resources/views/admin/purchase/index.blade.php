@extends('admin.layout.app')

@section('pageName')
    Purchase
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Purchase Table</h3>

                <div class="card-tools">
                    <a href="{{ route('purchases.create') }}" class="btn btn-info">Add New Purchase</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($purchases as $val)
                    <tr>
                        <td>{{$val->id}}</td>
                        <td>{{$val->title}}</td>
                        <td>{{$val->description}}</td>
                        <td class="row space-x-2">
                            <a href="{{ route('purchases.show',['purchase'=>$val->id]) }}" class="btn btn-success">Show</a>
                            <a href="{{ route('purchases.edit',['purchase'=>$val->id]) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('purchases.destroy' , ['purchase'=>$val->id]) }}" method="post">
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
