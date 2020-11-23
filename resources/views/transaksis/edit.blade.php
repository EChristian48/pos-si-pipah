@extends('transaksis.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Transaksi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('transaksis.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('transaksis.update',$transaksi->id_transaksi) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Transaksi:</strong>
                    <input type="integer" name="id_transaksi" value="{{ $transaksi->id_transaksi }}" class="form-control" placeholder="Id Transaksi">
                </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Barang:</strong>
                    <input type="integer" name="id_barang" value="{{ $transaksi->id_barang}}" class="form-control" placeholder="Id Barang">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id User:</strong>
                    <input type="integer" name="id_user" value="{{ $transaksi->id_user }}" class="form-control" placeholder="Id User">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah Beli:</strong>
                    <input type="integer" name="jumlah_beli" value="{{ $transaksi->jumlah_beli }}" class="form-control" placeholder="Jumlah Beli">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Total Harga:</strong>
                    <input type="float" name="total_harga" value="{{ $transaksi->total_harga }}" class="form-control" placeholder="Total Harga">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Beli:</strong>
                    <input type="date" name="tanggal_beli" value="{{ $transaksi->tanggal_beli }}" class="form-control" placeholder="Tanggal Beli">
                </div>
            </div>
    
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection