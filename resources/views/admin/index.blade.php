@extends('layouts.app')
@section('content')
<div class="card">
  <div class="card-header">
    <div class="card-title">
      Daerah Irigasi
    </div>
  </div>
  <div class="card-body">
    <form action=" {{ url('/sungai/add') }}" method="post">
      @csrf
      <div class="form-group">
        <label for="">Nama Daerah Irigasi</label>
        <input type="text" name="sungai" class="form-control">
      </div>
     
      <button class="btn btn-primary">Simpan</button>
    </form>
    <hr>
    
  </div>
</div>
@endsection