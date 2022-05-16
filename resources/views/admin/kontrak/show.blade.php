@extends('layouts.app')
@section('content')
    <style>
        .btn-circle {
            width: 30px;
            height: 30px;
            text-align: center;
            padding: 6px 0;
            font-size: 12px;
            line-height: 1.428571429;
            border-radius: 15px;
        }

    </style>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Kontrak
            </div>
        </div>
        <div class="card-body">
            <table class="table" id="myTable">
                <thead>
                    <th>No</th>
                    <th>Nama Paket</th>
                    <th>Sumber Dana</th>
                    <th>Jenis Kontrak</th>
                    <th>Nilai kontrak</th>
                    <th>Tahun Anggaran</th>
                    <th>Daerah Irigasi</th>
                    <th>Tindakan</th>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($kontraks as $kontrak)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $kontrak->nama_paket }}</td>
                            <td>{{ $kontrak->sumber_dana }}</td>
                            <td>
                                @if ($kontrak->jenis_kontrak == 1)
                                    Single Years
                                @else
                                    Multi Years
                                @endif
                            </td>
                            <td>{{ $kontrak->nilai_kontrak }}</td>
                            <td>{{ $kontrak->tahun_anggaran }}</td>
                            <td>{{ $kontrak->sungais->nama_sungai }}</td>
                            <td>
                                <a href="/kontrak/{{ $kontrak->id }}/addPenyedia/">
                                    <button class="btn btn-sm btn-secondary"><i class="fab fa-airbnb"></i></button>
                                </a>
                                <a href="/kontrak/{{ $kontrak->id }}/addLelang/">
                                    <button class="btn btn-sm btn-info"><i class="fas fa-book-medical"></i></button>
                                </a>
                                <a href="{{ url('/kontrak/'.$kontrak->id.'/addDataKontrak')}}">
                                    <button class="btn btn-sm btn-dark"><i class="fas fa-book-medical"></i></button>
                                </a>
                                <button class="btn btn-sm btn-default"><i class="fas fa-book-medical"></i></button>
                                <button class="btn btn-sm btn-success"><i class="fas fa-book-medical"></i></button>
                                <button class="btn btn-sm btn-secondary"><i class="fas fa-book-medical"></i></button>
                                <a href="/kontrak/{{ $kontrak->id }}/showUtils/">
                                    <button type="button" class="btn btn-warning btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </a>
                                @if ($kontrak->lelangs)
                                @else
                                    <a href="{{ url('kontrak/add/utils/' . $kontrak->id) }}">
                                        <button class="btn btn-sm btn-success"><i class="fas fa-plus-circle"></i></button>
                                    </a>
                                @endif
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
@section("script")
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
});
</script>
@endsection