@extends('admin.layout.app')

@section('pageName')
    Tariff
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tariff Table</h3>

                <div class="card-tools">
                    <a href="{{ route('tariffs.create') }}" class="btn btn-info">Add New Tariff</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Host</th>
                        <th>Domain</th>
                        <th>Support</th>
                        <th>EXT 1</th>
                        <th>EXT 2</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tariffs as $val)
                    <tr>
                        <td>{{$val->id}}</td>
                        <td>{{$val->name}}</td>
                        <td>{{$val->price}}</td>
                        <td>{{$val->host}}</td>
                        <td>{{$val->domain}}</td>
                        <td>{{$val->support}}</td>
                        <td>{{$val->extra1}}</td>
                        <td>{{$val->extra2}}</td>
                        <td class="row space-x-2">
                            <a href="{{ route('tariffs.show',['tariff'=>$val->id]) }}" class="btn btn-success">Show</a>
                            <a href="{{ route('tariffs.edit',['tariff'=>$val->id]) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('tariffs.destroy' , ['tariff'=>$val->id]) }}" method="post">
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
