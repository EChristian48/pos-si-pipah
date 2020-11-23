@extends('transaksis.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Transaksi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('transaksis.create') }}"> Create New Transaksi</a>
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
            <th>Id Transaksi</th>
            <th>Id Barang</th>
            <th>Id User</th>
            <th>Jumlah Beli</th>
            <th>Total Harga</th>
            <th>Tanggal Beli</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($transaksis as $transaksi)
        <tr>
            <td>{{ $transaksi->id_transaksi }}</td>
            <td>{{ $transaksi->id_barang }}
            </td>
            <td>{{ $transaksi->id_user }}
            </td>
            <td>{{ $transaksi->jumlah_beli }}
            </td>
            <td>{{ $transaksi->total_harga }}
            </td>
            <td>{{ $transaksi->tanggal_beli }}
            </td>
            <td>
                <form action="{{ route('transaksis.destroy',$transaksi->id_transaksi) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('transaksis.show',$transaksi->id_transaksi) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('transaksis.edit',$transaksi->id_transaksi) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $transaksis->links() !!}
      
@endsection