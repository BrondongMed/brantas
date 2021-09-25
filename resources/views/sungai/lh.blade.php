@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-title">
            Dokumen Lingkungan Hidup
        </div>
    </div>
    <div class="card-body">
        <form action="{{ url('lh/add') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Nama Sungai</label>
                <select name="sungai_id" id="" class="form-control">
                    @foreach($sungais as $sungai)
                    <option value="{{ $sungai->id }}">{{ $sungai->nama_sungai }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Nomor Kontrak</label>
                <input type="text"name="nomor" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Tahun</label>
                <input type="text" name="tahun" class="form-control">
            </div>
            <div class="form-group">
                <label for="">File`</label>
                <input type="text" name="file" class="form-control">
            </div>
            <button type="submit" class="btn btn-warning">Simpan</button>
        </form>
    </div>
    <hr>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <th>No</th>
                <th>Nama Sungai</th>
                <th>Nomor Kontrak</th>
                <th>Tahun</th>
                <th>File</th>
            </thead>
            <tbody>
                @foreach($linkungans as $data)
                <tr>
                    <td>1</td>
                    <td>{{ $data->sungais->nama_sungai }}</td>
                    <td>{{ $data->nomor_kontrak }}</td>
                    <td>{{ $data->tahun }}</td>
                    <td>{{ $data->file }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection