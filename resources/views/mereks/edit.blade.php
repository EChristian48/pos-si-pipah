@extends('mereks.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Merek</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('mereks.index') }}"> Back</a>
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
  
    <form action="{{ route('mereks.update',$merek->id_merek) }}" method="POST">
        @csrf
        @method('PUT')
   
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Merek:</strong>
                    <input type="text" name="id_merek" value="{{ $merek->id_merek }}" class="form-control" placeholder="Id Merek">
                </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Merek:</strong>
                    <input type="text" name="merek" value="{{ $merek->merek}}" class="form-control" placeholder="Merek">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection