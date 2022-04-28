@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Kontrak
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <th>No</th>
                    <th>Nama Paket</th>
                    <th>Sumber Dana</th>
                    <th>Jenis Kontrak</th>
                    <th>Nilai kontrak</th>
                    <th>Tahun Anggaran</th>
                    <th>Sungai</th>
                    <th>#</th>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($kontraks as $kontrak)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $kontrak->nama_paket }} </td>
                            <td>{{ $kontrak->sumber_dana }}</td>
                            <td>{{ $kontrak->jenis_kontrak }}</td>
                            <td>{{ $kontrak->nilai_kontrak }}</td>
                            <td>{{ $kontrak->tahun_anggaran }}</td>
                            <td>{{ $kontrak->sungais->nama_sungai }}</td>
                            <td>
                                <a href="{{ url('kontrak/add/utils/'. $kontrak->id) }}">
                                    <button class="btn btn-sm btn-success"><i class="fas fa-plus-circle"></i></button>
                                </a>
                                <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
