@extends('layouts.app')
@section('content')
<div class="card">
  <div class="card-header">
    <div class="card-title">
      Sungai ALL
    </div>
  </div>
  <div class="card-body">
    <form action=" {{ url('/admin/update') }}" method="post">
    @method('put')
      @csrf
      <div class="form-group">
        <label for="">Nama Sungai</label>
        <input type="hidden" name="sungai_id" value="{{ $sungai->id }}">
        <input type="text" name="sungai" value="{{ $sungai->nama_sungai }}" class="form-control">
      </div>
      <button class="btn btn-success">Update</button>
    </form>
    <hr>
    
  </div>
</div>
@endsection