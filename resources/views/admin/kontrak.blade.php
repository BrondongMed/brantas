@extends('layouts.app')
@section('content')
<div class="card">
  <div class="card-header">
    <div class="card-title">
      Kontrak
    </div>
  </div>
  <div class="card-body">
    <form action=" {{ url('/kontrak/add') }}" method="post">
      @csrf
      <div class="form-group">
        <label for="">Nama Sungai</label>
        <select name="sungai_id" id="" class="form-control" required>
            @foreach ($sungais as $sungai)     
            <option value="{{ $sungai->id }}">{{ $sungai->nama_sungai }}</option>
            @endforeach
        </select>
      </div>
      <button class="btn btn-primary">Pilih</button>
    </form>
    <hr>
    
  </div>
</div>
@endsection