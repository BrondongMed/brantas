@extends('layouts.app')
@section('content')
    <div class="card">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card-header">
            <div class="card-title">
                Dokumen Lingkungan Hidup
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('lh/add') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Nama Sungai</label>
                    <select name="sungai_id" id="" class="form-control">
                        @foreach ($sungais as $sungai)
                            <option value="{{ $sungai->id }}">{{ $sungai->nama_sungai }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Nomor Kontrak</label>
                    <input type="text" name="nomor" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Tahun</label>
                    <input type="text" name="tahun" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="file" id="exampleInputFile" required>
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                        </div>
                    </div>
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
                    <th>#</th>
                </thead>
                <tbody>
                    @foreach ($linkungans as $data)
                        <tr>
                            <td>1</td>
                            <td>{{ $data->sungais->nama_sungai }}</td>
                            <td>{{ $data->nomor_kontrak }}</td>
                            <td>{{ $data->tahun }}</td>
                            <td>
                                <a href="{{ url('/file/' . $data->file) }}" target="_blank">
                                    {{ $data->file }}
                                </a>
                            </td>
                            <td>
                                <a href="{{ url('/admin/delLh/' . $data->id) }}">
                                    <button class="btn btn-sm btn-danger" onclick="return confirm(' Anda Yakin Menghapus?');">Delete</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
