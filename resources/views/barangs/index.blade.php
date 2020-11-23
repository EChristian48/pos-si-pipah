@extends('barangs.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>barang</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('barangs.create') }}"> Create New barang</a>
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
            <th>Id barang</th>
            <th>Nama barang</th>
            <th>Id Merek</th>
            <th>Id Distributor</th>
            <th>Tanggal Masuk</th>
            <th>Harga Barang</th>
            <th>Stok Barang</th>
            <th>Keterangan</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($barangs as $barang)
        <tr>
            <td>{{ $barang->id_barang }}</td>
            <td>{{ $barang->nama_barang}}</td>
            <td>{{ $barang->id_merek }}</td>
            <td>{{ $barang->id_distributor }}</td>
            <td>{{ $barang->tanggal_masuk }}</td>
            <td>{{ $barang->harga_barang}}</td>
            <td>{{ $barang->stok_barang }}</td>
            <td>{{ $barang->keterangan }}</td>
            <td>
                <form action="{{ route('barangs.destroy',$barang->id_barang) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('barangs.show',$barang->id_barang) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('barangs.edit',$barang->id_barang) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $barangs->links() !!}
      
@endsection