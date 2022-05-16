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
                        Show Data Kontrak
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-end">
                        <form action="{{ url('/kontrak/delDataKontrak/' . $data->id) }}" method="post">
                            @method("delete")
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </div>
                    <div class="form-group">
                        <label for="">BA PERSIAPAN PENUNJUKAN</label>
                        <input type="hidden" name="kontrak_id" value="{{ $data->id }}">
                        <li>{{ $data->ba_no_persiapan }}</li>
                        <li>{{ $data->ba_tgl_persiapan }}</li>
                        <li>
                            <a href="{{ url('upload/' . $data->f_ba_penunjukan) }}" target="_blank">
                                <button class="btn btn-sm btn-primary" type="button"><i
                                        class="fas fa-file-alt"></i></button>
                            </a>
                        </li>
                    </div>


                    <div class="form-group">
                        <label for="">SPPBJ</label>
                        <li>{{ $data->no_sppbj }}</li>
                        <li>{{ $data->tgl_sppbj }}</li>
                        <li>
                            <a href="{{ url('upload/' . $data->f_SPPBJ) }}" target="_blank">
                                <button class="btn btn-sm btn-primary" type="button"><i
                                        class="fas fa-file-alt"></i></button>
                            </a>
                        </li>
                    </div>
                    <div class="form-group">
                        <label for="">BA Rapat Persiapan</label>
                        <li>{{ $data->ba_no_rapat_persiapan }}</li>
                        <li>{{ $data->ba_tgl_rapat_persiapan }}</li>
                        <li>
                            <a href="{{ url('upload/' . $data->f_ba_rapat_persiapan) }}" target="_blank">
                                <button class="btn btn-sm btn-primary" type="button"><i
                                        class="fas fa-file-alt"></i></button>
                            </a>
                        </li>
                    </div>
                    <div class="form-group">
                        <label for="">BA Rapat Persiapan penandatanganan kontrak</label>
                        <li>{{ $data->no_persiapan_kontrak }}</li>
                        <li>{{ $data->tgl_persiapan_kontrak }}</li>
                        <li>
                            <a href="{{ url('upload/' . $data->f_ba_rapat_persiapan_kontrak) }}" target="_blank">
                                <button class="btn btn-sm btn-primary" type="button"><i
                                        class="fas fa-file-alt"></i></button>
                            </a>
                        </li>
                    </div>
                    <div class="form-group">
                        <label for="">Daftar Personil</label>
                        <li>
                            @if($data->daftar_personil == 1)
                            ada
                            @else
                            -
                            @endif
                        </li>
                        <li>
                            @if($data->daftar_personil == 1)
                            <a href="{{ url('upload/' . $data->f_daftar_personil) }}" target="_blank">
                                <button class="btn btn-sm btn-primary" type="button"><i
                                        class="fas fa-file-alt"></i></button>
                            </a>
                            @else
                            -
                            @endif
                            
                        </li>
                    </div>
                    <div class="form-group">
                        <label for="">Jaminan Pelaksanaan</label>
                        <li>{{ $data->no_jaminan_pelaksanaan }}</li>
                        <li>{{ $data->tgl_jaminan_pelaksanaan }}</li>
                        <li>
                            <a href="{{ url('upload/' . $data->f_jaminan_pelaksanaan) }}" target="_blank">
                                <button class="btn btn-sm btn-primary" type="button"><i
                                        class="fas fa-file-alt"></i></button>
                            </a>
                        </li>
                    </div>
                    <div class="form-group">
                        <label for="">No Kontrak</label>
                        <li>{{ $data->no_kontrak1 }}</li>
                        <li>{{ $data->tgl_kontrak1 }}</li>
                        <li>
                            <a href="{{ url('upload/' . $data->f_no_kontrak) }}" target="_blank">
                                <button class="btn btn-sm btn-primary" type="button"><i
                                        class="fas fa-file-alt"></i></button>
                            </a>
                        </li>
                    </div>
                    <div class="form-group">
                        <label for="">BA penyerahan</label>
                        <li>{{ $data->no_penyerahan }}</li>
                        <li>{{ $data->tgl_penyerahan }}</li>
                        <li>
                            <a href="{{ url('upload/' . $data->f_ba_penyerahan) }}" target="_blank">
                                <button class="btn btn-sm btn-primary" type="button"><i
                                        class="fas fa-file-alt"></i></button>
                            </a>
                        </li>
                    </div>
                    <div class="form-group">
                        <label for="">BA PCM</label>
                        <li>{{ $data->no_pcm }}</li>
                        <li>{{ $data->tgl_pcm }}</li>
                        <li>
                            <a href="{{ url('upload/' . $data->f_bapcm) }}" target="_blank">
                                <button class="btn btn-sm btn-primary" type="button"><i
                                        class="fas fa-file-alt"></i></button>
                            </a>
                        </li>
                    </div>
                    <div class="form-group">
                        <label for="">Jadwal Pelaksanaan</label>
                        <li>
                            @if($data->jadwal_pelaksanaan == 1)
                            ada
                            @else
                            -
                            @endif
                        </li>
                        <li>
                            @if($data->daftar_personil == 1)
                            <a href="{{ url('upload/' . $data->f_jadwal_pelaksanaan) }}" target="_blank">
                                <button class="btn btn-sm btn-primary" type="button"><i
                                        class="fas fa-file-alt"></i></button>
                            </a>
                            @else
                            -
                            @endif
                            
                        </li>
                    </div>
                    <div class="form-group">
                        <label for="">SPMK</label>
                        <li>{{ $data->no_spmk }}</li>
                        <li>{{ $data->tgl_spmk }}</li>
                        <li>
                            <a href="{{ url('upload/' . $data->f_SPMK) }}" target="_blank">
                                <button class="btn btn-sm btn-primary" type="button"><i
                                        class="fas fa-file-alt"></i></button>
                            </a>
                        </li>
                    </div>
                    <div class="form-group">
                        <label for="">RMPK</label>
                        <li>{{ $data->no_rpmk }}</li>
                        <li>{{ $data->tgl_rmpk }}</li>
                        <li>
                            <a href="{{ url('upload/' . $data->f_RMPK) }}" target="_blank">
                                <button class="btn btn-sm btn-primary" type="button"><i
                                        class="fas fa-file-alt"></i></button>
                            </a>
                        </li>
                    </div>
                    <div class="form-group">
                        <label for="">RKK</label>
                        <li>{{ $data->no_rkk }}</li>
                        <li>{{ $data->tgl_rkk }}</li>
                        <li>
                            <a href="{{ url('upload/' . $data->f_rkk) }}" target="_blank">
                                <button class="btn btn-sm btn-primary" type="button"><i
                                        class="fas fa-file-alt"></i></button>
                            </a>
                        </li>
                    </div>
                    <div class="form-group">
                        <label for="">Addendum</label>
                        <li>{{ $data->no_addendum }}</li>
                        <li>{{ $data->tgl_addendum }}</li>
                        <li>
                            <a href="{{ url('upload/' . $data->f_addendum) }}" target="_blank">
                                <button class="btn btn-sm btn-primary" type="button"><i
                                        class="fas fa-file-alt"></i></button>
                            </a>
                        </li>
                    </div>
                    <div class="form-group">
                        <label for="">BAST I</label>
                        <li>{{ $data->no_bast1 }}</li>
                        <li>{{ $data->tgl_bast1 }}</li>
                        <li>
                            <a href="{{ url('upload/' . $data->f_BAST) }}" target="_blank">
                                <button class="btn btn-sm btn-primary" type="button"><i
                                        class="fas fa-file-alt"></i></button>
                            </a>
                        </li>
                    </div>
                    <div class="form-group">
                        <label for="">Laporan BMN</label>
                        <li>
                            @if($data->laporan_bmn == 1)
                            ada
                            @else
                            -
                            @endif
                        </li>
                        <li>
                            @if($data->laporan_bmn == 1)
                            <a href="{{ url('upload/' . $data->f_laporan_bmn) }}" target="_blank">
                                <button class="btn btn-sm btn-primary" type="button"><i
                                        class="fas fa-file-alt"></i></button>
                            </a>
                            @else
                            -
                            @endif
                            
                        </li>
                    </div>
                    <div class="form-group">
                        <label for="">BA PPHP</label>
                        <li>{{ $data->no_pphp }}</li>
                        <li>{{ $data->tgl_pphp }}</li>
                        <li>
                            <a href="{{ url('upload/' . $data->f_ba_pphp) }}" target="_blank">
                                <button class="btn btn-sm btn-primary" type="button"><i
                                        class="fas fa-file-alt"></i></button>
                            </a>
                        </li>
                    </div>
                    <div class="form-group">
                        <label for="">BAST II</label>
                        <li>{{ $data->no_bast2 }}</li>
                        <li>{{ $data->tgl_bast2 }}</li>
                        <li>
                            <a href="{{ url('upload/' . $data->f_BAST_II) }}" target="_blank">
                                <button class="btn btn-sm btn-primary" type="button"><i
                                        class="fas fa-file-alt"></i></button>
                            </a>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
