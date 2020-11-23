@extends('distributors.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Distributor</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('distributors.create') }}"> Create New Distributor</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Id Distributor</th>
            <th>Nama Distributor</th>
            <th>Alamat</th>
            <th>No Telp</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($distributors as $distributor)
        <tr>
            <td>{{ $distributor->id_distributor }}</td>
            <td>{{ $distributor->nama_distributor}}
            </td>
            <td>{{ $distributor->alamat }}
            </td>
            <td>{{ $distributor->no_telp }}
            </td>
            <td>
                <form action="{{ route('distributors.destroy',$distributor->id_distributor) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('distributors.show',$distributor->id_distributor) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('distributors.edit',$distributor->id_distributor) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $distributors->links() !!}
      
@endsection