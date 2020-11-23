@extends('barangs.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Barang</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('barangs.index') }}"> Back</a>
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
   
<form action="{{ route('barangs.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id Barang:</strong>
                <input type="integer" name="id_barang" class="form-control" placeholder="Id barang">
            </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama barang:</strong>
                <input type="string" name="nama_barang" class="form-control" placeholder="Nama barang">
            </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id Merek:</strong>
                <input type="integer" name="id_merek" class="form-control" placeholder="Id Merek">
            </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id Distributor:</strong>
                <input type="integer" name="id_distributor" class="form-control" placeholder="Id Distributor">
            </div>
            
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal Masuk:</strong>
                <input type="date" name="tanggal_masuk" class="form-control" placeholder="Tanggal Masuk">
            </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga Barang :</strong>
                <input type="float" name="harga_barang" class="form-control" placeholder="Harga Barang">
            </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Stok Barang:</strong>
                <input type="integer" name="stok_barang" class="form-control" placeholder="Stok Barang">
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>keterangan:</strong>
                <input type="text" name="keterangan" class="form-control" placeholder="Keterangan">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection