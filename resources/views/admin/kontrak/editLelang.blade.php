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
    <div class="row">
        <div class="col-md-12">
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
            </div>
            <div class="card card-success">
                <div class="card-header">
                    <div class="card-title">
                        Edit Data Lelang
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <form action="{{ url('/kontrak/delLelang/'.$data->id) }}" method="post">
                            @method("delete")
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </div>
                    <form action="{{ url('/kontrak/updateLelang') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">KAK</label>
                            <input type="hidden" name="kontrak_id" value="{{ $data->id }}">
                           
                            <div class="form-group">
                                <a href="{{ url('upload/' . $data->f_kak) }}" target="_blank">
                                    <button class="btn btn-sm btn-primary" type="button"><i
                                            class="fas fa-file-alt"></i></button>
                                </a>
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="">Surat Penetapan PPK</label>
                                <li>{{ $data->no_surat }}</li>
                                <li>{{ $data->tanggal_surat }}</li>
                                <li>
                                    <a href="{{ url('upload/' . $data->f_surat_penetapan_ppk) }}" target="_blank">
                                        <button class="btn btn-sm btn-primary" type="button"><i
                                                class="fas fa-file-alt"></i></button>
                                    </a>
                                </li>
                        </div>
                        <div class="form-group">
                            <label for="">Dokumen Perencanaan</label>
                            <div class="form-group">
                                <a href="{{ url('upload/' . $data->f_dok_Perencanaan) }}" target="_blank">
                                    <button class="btn btn-sm btn-primary" type="button"><i
                                            class="fas fa-file-alt"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Dok. Persiapan Pengadaan</label>
                            <div class="form-group">
                                <a href="{{ url('upload/' . $data->f_dok_persiapan) }}" target="_blank">
                                    <button class="btn btn-sm btn-primary" type="button"><i
                                            class="fas fa-file-alt"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">RUP/SIPRUP</label>
                            <div class="form-group">
                                <a href="{{ url('upload/' . $data->f_rup_siprup) }}" target="_blank">
                                    <button class="btn btn-sm btn-primary" type="button"><i
                                            class="fas fa-file-alt"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">SK Pokja</label>
                            <div class="form-group">

                                    <li>{{ $data->no_pokja }}</li>
                                    <li>{{ $data->tanggal_pokja }}</li>
                                    <li><a href="{{ url('upload/' . $data->f_sk_pokja) }}" target="_blank">
                                        <button class="btn btn-sm btn-primary" type="button"><i
                                                class="fas fa-file-alt"></i></button>
                                    </a></li>

                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">HPS</label>
                            <div class="form-group">
                                <a href="{{ url('upload/' . $data->f_hps) }}" target="_blank">
                                    <button class="btn btn-sm btn-primary" type="button"><i
                                            class="fas fa-file-alt"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Dok Pemilihan</label>
                            <div class="form-group">
                                <a href="{{ url('upload/' . $data->f_dok_pemilihan) }}" target="_blank">
                                    <button class="btn btn-sm btn-primary" type="button"><i
                                            class="fas fa-file-alt"></i></button>
                                </a>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">BAPH</label>

                            <div class="form-group">
                                <a href="{{ url('upload/' . $data->f_baph) }}" target="_blank">
                                    <button class="btn btn-sm btn-primary" type="button"><i
                                            class="fas fa-file-alt"></i></button>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
