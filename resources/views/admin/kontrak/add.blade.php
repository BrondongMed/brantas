@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Kontrak
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('/kontrak/save') }}" method="post">
                @csrf
                <u>
                    <h1 class="disabled">{{ strtoupper($sungai->nama_sungai) }}</h1>
                </u>
                <br>
                <div class="form-group">
                    <label for="">Nama Paket</label>
                    <input type="hidden" name="sungai_id" id="" value="{{ $sungai->id }}">
                    <input type="text" class="form-control" name="nama_paket" required>
                </div>
                <div class="form-group">
                    <label for="">Sumber Dana</label>
                    <input type="text" class="form-control" name="sd" required>
                </div>
                <div class="form-group">
                    <label for="">Jenis Kontrak</label>
                    <select name="jenis_kontak" id="" class="form-control">
                        <option value="1">Single years Contrak</option>
                        <option value="2">Multi years Contrak</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Nilai Kontrak</label>
                    <input type="text" class="form-control" name="nk" required>
                </div>
                <div class="form-group">
                    <label for="">Tahun Anggaran</label>
                    <input type="text" class="form-control" name="ta" required>
                </div>
                <button class="btn btn-info" type="submit">Simpan</button>
            </form>
            <hr>
        </div>
    </div>
@endsection
